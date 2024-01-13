<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="col-6">
            <label for="exampleInputEmail1">Name </label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name ">
           
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
        </div>

        <div>
            <button type="submit">Add Product</button>
        </div>
    </form>
</body>
</html>