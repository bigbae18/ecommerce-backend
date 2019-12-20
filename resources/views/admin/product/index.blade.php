@extends('admin')

<!-- Begin Page Content -->
<!-- <div class="container-fluid"> -->
@section('content')

<table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Sku</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->created_at }}</td>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

@endsection