<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Chi Tiết Sản Phẩm</h1>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $product->productName }}</h4>
            <p class="card-text"><strong>Giá:</strong> {{ $product->price }} VND</p>
            <p class="card-text"><strong>Số Lượng:</strong> {{ $product->quantity }}</p>
            <p class="card-text"><strong>Mô Tả:</strong> {{ $product->description }}</p>
            <a href="{{ route('products.home') }}" class="btn btn-primary">Quay lại danh sách</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
