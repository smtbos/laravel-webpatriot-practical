@extends('layouts.main')

@section('main')
    <div class="container">
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <div class="row pt-5">
                <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <select name="category_id" id="category_id" class="form-select">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Product Name">
                        </div>
                        <div class="col-12 mb-4">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-12 pt-5">
                <h4>Products</h4>
                <table id="product-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#product-table').DataTable();
        });
    </script>
@endpush
