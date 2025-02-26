<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Product Creating</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Create Product</h1>
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label for="productName">Tên sản phẩm</label>
                <input type="text" name="productName" class="form-control" id="productName" placeholder="Tên sản phẩm" required>
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Giá" required>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Số lượng" required min="0">
            </div>
            <div class="form-group">
                <label for="description">Mô tả sản phẩm</label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Mô tả sản phẩm" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
            <a href="{{ route('products.index') }}" class="btn btn-warning">Hủy</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
