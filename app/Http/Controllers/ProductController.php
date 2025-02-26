<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        // Lấy tất cả các bản ghi từ bảng buildings
        $products = Product::all();  // Bạn có thể thay thế `all()` bằng các truy vấn khác nếu cần

        // Trả về view với dữ liệu các tòa nhà
        return view('products.home', compact('products'));
    }
    public function index()
    {
        // Lấy tất cả các bản ghi từ bảng buildings
        $products = Product::all();  // Bạn có thể thay thế `all()` bằng các truy vấn khác nếu cần

        // Trả về view với dữ liệu các tòa nhà
        return view('products.index', compact('products'));
    }

    public function search(Request $request)
    {
        $query = Product::query();

        // Tìm kiếm theo tên sản phẩm (nếu có)
        if ($request->filled('productName')) {
            $query->where('productName', 'like', '%' . $request->productName . '%');
        }

        // Lấy kết quả tìm kiếm
        $products = $query->get();

        return view('products.index', compact('products'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'productName' => 'required|string|max:255|unique:products,productName',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'quantity' => 'required|integer|min:0', // Thêm trường quantity vào xác thực
        ]);
    
        Product::create($validated);
    
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm!');
    }
    
public function create()
{
    return view('products.create');
}

public function edit($id)
{
    // Tìm tòa nhà theo id, nếu không tìm thấy sẽ báo lỗi 404
    $product = Product::findOrFail($id);
        
    // Trả về view 'buildings.edit' với dữ liệu của tòa nhà
    return view('products.edit', compact('product'));
}

public function update(Request $request, $id)
{
    // Tìm sản phẩm theo id
    $product = Product::findOrFail($id);

    // Xác thực dữ liệu
    $validated = $request->validate([
        'productName' => 'required|string|max:255|unique:products,productName',
        'price' => 'required|numeric|min:0',
        'description' => 'required|string',
        'quantity' => 'required|integer|min:0', // Thêm trường quantity vào xác thực
    ]);

    // Cập nhật thông tin
    $product->update($validated);

    // Chuyển hướng về danh sách sản phẩm
    return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật!');
}


public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa!');
}
public function buy($id, Request $request)
{
    // Tìm sản phẩm theo ID
    $product = Product::findOrFail($id);

    // Kiểm tra số lượng còn lại
    if ($product->quantity <= 0) {
        return redirect()->route('products.index')->with('error', 'Sản phẩm đã hết hàng');
    }

    // Kiểm tra số lượng mua (từ form)
    $quantityToBuy = $request->input('quantity', 1); // Mặc định là 1 nếu không có giá trị

    // Kiểm tra nếu số lượng mua lớn hơn số lượng còn lại
    if ($quantityToBuy > $product->quantity) {
        return redirect()->route('products.index')->with('error', 'Số lượng sản phẩm mua vượt quá số lượng còn lại');
    }

    // Giảm số lượng sản phẩm
    $product->quantity -= $quantityToBuy;

    // Lưu lại thông tin thay đổi
    $product->save();

    return redirect()->route('products.home')->with('success', 'Mua hàng thành công!');
}

public function show($id)
{
    // Tìm sản phẩm theo ID, trả về lỗi 404 nếu không tìm thấy
    $product = Product::findOrFail($id);

    // Trả về view 'products.show' và truyền biến 'product' vào view
    return view('products.show', compact('product'));
}


}
