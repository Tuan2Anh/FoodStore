
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Danh Sách Sản Phẩm</h1>

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
                    <td>{{ $products->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $products->id) }}" class="btn btn-info btn-sm">Sửa</a>
                        <form action="{{ route('products.destroy', $products->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Thêm tòa nhà -->
    <a href="{{ route('products.create') }}" class="btn btn-success">Thêm Sản Phẩm</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
