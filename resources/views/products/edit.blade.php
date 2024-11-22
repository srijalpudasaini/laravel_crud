<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark py-2 mb-4">
        <h2 class="text-white text-center">Laravel CRUD</h2>
    </header>

    <div class="container">
        <div class="text-end mb-2">
            <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-10">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-dark">
                        <h4 class="text-white">Edit Product</h4>
                    </div>
                    <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="@error('name') is-invalid @enderror form-control" placeholder="Name" name="name" value="{{ old('name',$product->name) }}">
                                @error('name')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Sku</label>
                                <input type="text" class="@error('sku') is-invalid @enderror form-control" placeholder="Sku" name="sku" value="{{ old('sku',$product->sku) }}">
                                @error('sku')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="text" class="@error('price') is-invalid @enderror form-control" placeholder="Price" name="price" value="{{ old('price',$product->price) }}">
                                @error('price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea rows="5" class="form-control">{{ old('description',$product->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="@error('image') is-invalid @enderror form-control" placeholder="image" name="image">
                                @error('image')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>