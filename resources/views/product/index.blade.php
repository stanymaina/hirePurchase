@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Products
            {{-- <small>Subheading</small> --}}
        </h1>
        
        @include('inc.message')

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Product's Stock</li>
        </ol>

        <div class="row">
            <div class="col-12 mb-4">
                <button onclick="load_add_product()" class="btn btn-primary" data-target="#hire-modal" data-toggle="modal">
                        Add Product
                </button>
            </div>
            <div class="modal" id="hire-modal" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div id="product-alter">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Card Title</h4>
                    <div class="card-body">
                        <table id="contact-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="30">No</th>
                                    <th>Product Name</th>
                                    <th>Hire Purchase Plan</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_hire_pruchase_type}} </td>
                                    {{-- <td>{{$product->category->category_name}} </td> --}}
                                    <td>
                                        <img class="card-img-top" src="/images/{{$product->product_picture}}" alt=""></td>
                                    <td>
                                        <a class="btn btn-primary" onclick="load_edit_product({{$product->id}})" data-target="#hire-modal" data-toggle="modal"><i class="fa fa-trash"></i>Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                    <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- /.container -->
@endsection
