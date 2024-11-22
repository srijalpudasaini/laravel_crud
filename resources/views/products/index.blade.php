<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @if(Session::has('success'))
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    <header class="bg-dark py-2 mb-4">
        <h2 class="text-white text-center">Laravel CRUD</h2>
    </header>

    <div class="container">
        <div class="text-end mb-2">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Add new product</a>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-10">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-dark">
                        <h4 class="text-white">Product List</h4>

                        <table class="table table-striped">
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Sku</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            @if($products->isNotEmpty())
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td><img src="{{ asset('images/'.$product->image) }}" alt="" width="50"></td>
                                        <td>{{$product->sku}}</td>
                                        <td>{{$product->price}}</td>
                                        <td class="d-flex gap-1">
                                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-info">Edit</a>
                                            <form action="{{ route('products.delete',$product->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>