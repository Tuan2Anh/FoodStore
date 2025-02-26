
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Danh Sách Sản Phẩm</h1>
        <a href="/login" class="btn btn-primary">Đăng nhập</a>
    </div>
    <!-- Tìm kiếm -->
    <form action="{{ route('products.search') }}" method="GET">
        <div class="row">
            <div class="col-sm-3">
                <input type="text" name="productName" class="form-control" placeholder="Tên sản phẩm" value="{{ request('productName') }}">
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
            </div>
        </div>
    </form>

    <hr>

    <!-- Danh sách sản phẩm -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Mô tả</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->productName }}</td>
                    <td>{{ $products->price }}</td>
                    <td>{{ $products->quantity }}</td>
                    <td>{{ $products->description }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <form action="{{ route('products.buy', $products->id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="1" min="1" max="{{ $products->quantity }}">
                                <button type="submit" class="btn btn-success btn-sm mr-1 mb-1">Mua</button>
                            </form>
                            <a href="{{ route('products.show', $products->id) }}" class="btn btn-info btn-sm mb-1">Chi tiết</a> <!-- Nút chi tiết -->
                        </div>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
