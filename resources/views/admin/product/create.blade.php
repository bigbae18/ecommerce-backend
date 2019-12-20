@extends('admin')

<!-- Begin Page Content -->
<!-- <div class="container-fluid"> -->
@section('content')
<form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
                <!--  -->
                <label for="sku">sku</label>
                <input type="text" class="form-control" name="sku" placeholder="sku">
                <!--  -->
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="price">
                <!--  -->
                <label for="image">image</label>
                <input type="text" class="form-control" name="image" placeholder="image">
                <!--  -->
                <label for="stock">stock</label>
                <input type="text" class="form-control" name="stock" placeholder="stock">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        @endsection