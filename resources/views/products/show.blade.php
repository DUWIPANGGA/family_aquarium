<!-- resources/views/products/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Product Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $product->description }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>${{ number_format($product->price, 2) }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $product->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $product->updated_at }}</td>
        </tr>
    </table>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Product List</a>
</div>
</body>
</html>