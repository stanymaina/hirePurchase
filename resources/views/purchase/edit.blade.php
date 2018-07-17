{!! Form::open(['action' => ['HiresController@update',$hirepurchase->id], 'method'=>'PUT', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                            
<div class="modal-header">
        <h3 class="modal-title">Add Hire Purchase Criteria</h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"> &times; </span>
    </button>
</div>

<div class="modal-body">
    <div class="form-group">
        <label for="name" class=" control-label">Hire Purchase Name</label>
        <div class="">
            <input type="text" id="name" name="hire_purchase_name" class="form-control" value="{{$hirepurchase->hire_purchase_name}}" autofocus required>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Hire Purchase (%) on Amount</label>
        <div class="c">
            <input type="text" id="name" name="hire_purchase_percentage" class="form-control" value="{{$hirepurchase->hire_purchase_percentage}}" autofocus required>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Hire Purchase Duration</label>
        <div class="">
            <input type="text" id="name" name="hire_purchase_payment_duration" class="form-control" value="{{$hirepurchase->hire_purchase_payment_duration}}" autofocus required>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Hire Purchase (%) on Principle</label>
        <div class="">
            <input type="text" id="name" name="hire_purchase_percentage_principle" class="form-control" value="{{$hirepurchase->hire_purchase_percentage_principle}}" autofocus required>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Hire Purchase Minimum Price</label>
        <div class="">
            <input type="text" id="name" name="hire_purchase_min_price" class="form-control" value="{{$hirepurchase->hire_purchase_min_price}}" autofocus required>
            <span class="help-block with-errors"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label">Hire Purchase Maximum Price</label>
        <div class="">
            <input type="text" id="name" name="hire_purchase_max_price" class="form-control" value="{{$hirepurchase->hire_purchase_max_price}}" autofocus required>
            <span class="help-block with-errors"></span>
        </div>
    </div>           
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-primary btn-save">Submit</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>

{!! Form::close() !!}