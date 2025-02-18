<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
        'productName' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'required|string',
    ]);

    Product::create($validated);

    return redirect()->route('products.index') -> with('success', 'Sản phẩm đã được thêm!');
}
public function create()
{
    return view('products.create');
}

public function edit($id)
{
    // Tìm tòa nhà theo id, nếu không tìm thấy sẽ báo lỗi 404
    $Product = Product::findOrFail($id);
        
    // Trả về view 'buildings.edit' với dữ liệu của tòa nhà
    return view('products.edit', compact('Product'));
}

public function update(Request $request, $id)
    {
        // Tìm tòa nhà theo id
        $Product = Product::findOrFail($id);

        // Xác thực dữ liệu
        $validated = $request->validate([
            'productName' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);

        // Cập nhật thông tin
        $Product->update($validated);

        // Chuyển hướng về danh sách các tòa nhà
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật!');
    }

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa!');
}


}
