@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$product->product_name}}
          {{-- <small>Subheading</small> --}}
        </h1>
  
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active">{{$product->product_name}}</li>
        </ol>
        
        @include('inc.message')
  
        <!-- Portfolio Item Row -->
        <div class="row">
  
          <div class="col-md-8">
            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
          </div>
  
          <div class="col-md-4">
            <h3 class="my-3">Product Description</h3>
            
                <p>{{$product->product_description}}.</p>
            <h3 class="my-3">Project Details</h3>
            <ul>
              <li>Lorem Ipsum</li>
              <li>Dolor Sit Amet</li>
              <li>Consectetur</li>
              <li>Adipiscing Elit</li>
            </ul>
            <div class="row">
                <div class="col-12 mb-4">
                    <button class="btn btn-primary" data-target="#hire-modal" data-toggle="modal">
                            Add Hire Purchase
                    </button>
                    <div class="modal" id="hire-modal" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Content Row -->
                                    <div class="row">
                                        @foreach($hire_purchase_choises as $hire_purchase_choise)
                                        {{-- @foreach($hire_purchase_choise['hire_purchase_plan'] as $hire_purchase) --}}
                        
                                        <div class="col-lg-4 mb-4">
                                            <div class="card h-100">
                                            @if($hire_purchase_choise['plan_class'] > 0)
                                                @if($hire_purchase_choise['plan_class'] == 1)
                                                    <h3 class="card-header bg-warning text-white">{{$hire_purchase_choise['hire_purchase_name']}}</h3>
                                                @elseif($hire_purchase_choise['plan_class'] == 2)
                                                    <h3 class="card-header bg-success text-white">{{$hire_purchase_choise['hire_purchase_name']}}</h3>
                                                @else
                                                    <h3 class="card-header bg-primary text-white">{{$hire_purchase_choise['hire_purchase_name']}}</h3>
                                                @endif
                                            @endif
                                            <div class="card-body">
                                                <div class="display-4">Ksh {{$hire_purchase_choise['product_installments']}}</div>
                                                <div class="font-italic">per month</div>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Duration: {{$hire_purchase_choise['hire_purchase_duration']}} Months</li>
                                                <li class="list-group-item">Principle: Ksh {{$hire_purchase_choise['product_principle']}}</li>
                                                <li class="list-group-item">Totals:    Ksh {{$hire_purchase_choise['product_hire_purchase_price']}}</li>
                                                <li class="list-group-item">
                                                <a href="{{route('makeOrder',['product'=>$product->id, 'plan'=>$hire_purchase_choise['hire_purchase_id'], 'price'=>$hire_purchase_choise['product_hire_purchase_price']])}}" class="btn btn-primary">Pick Plan</a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                                        @endforeach
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
  
        </div>
        <!-- /.row -->
  
        <!-- Related Projects Row -->
        <h3 class="my-4">Related Projects</h3>
  
        <div class="row">
  
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
  
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
  
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
  
          <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
          </div>
  
        </div>
        <!-- /.row -->
  
    </div>
    <!-- /.container -->
@endsection
