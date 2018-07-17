{!! Form::open(['action' => ['ProductsController@update', $product->id], 'method'=>'PUT', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                        
<div class="modal-header">
        <h3 class="modal-title">Add Product</h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"> &times; </span>
    </button>
</div>

<div class="modal-body">
    <div class="form-group">
        <label for="name" class=" control-label">Product Name</label>
        <div class="">
            {{Form::text('ProductName', $product->product_name, ['class'=>'form-control', 'autofocus', 'required','files' => true])}}
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Product Category</label>
        <div class="">
            <select id="category" class="form-control" name="ProductCategory">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select> 
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Product Price</label>
        <div class="c">
                {{Form::text('ProductPrice', $product->product_price, ['class'=>'form-control', 'autofocus', 'required'])}}
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class=" control-label">Product Description</label>
        <div class="">
            {{Form::text('ProductDesc', '',['class'=>'form-control', 'autofocus', 'required'])}}
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class=" control-label">Product Image</label>
        <div class="">
            {{Form::file('image',['class'=>'form-control', 'autofocus'])}}
            <span class="help-block with-errors"></span>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-primary btn-save"> Save </button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>

{!! Form::close() !!}