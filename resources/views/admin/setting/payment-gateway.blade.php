
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
<div class="row">

<div class="card col-md-6">

<div class="card-header">
    
    <div class="row">
        <div class="col-sm-6">
            <h3 class="card-title">
                 
                  Bkash Settings
                                            </h3>
        </div>
        
    </div>
</div>
<form action="{{route('paymentGtyUpdate')}}" method="POST" enctype="multipart/form-data">
    @csrf                                  
    <input type="hidden" name="id" value="{{$PaymentGateway->id}}">
    <input type="hidden" name="bkash" value="bkash">
    <div class="card-body">
        
            
        <div class="form-group">
            <label for="name">App Key:</label>
            <input type="text" name="bkash_app_key" id="store_id" placeholder="Write Your Store Id" class="form-control " value="{{$PaymentGateway->bkash_app_key}}" required="" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="name">App Secret:</label>
            <input type="text" name="bkash_app_secret" id="store_password" placeholder="Write Your Store Password" class="form-control " value="{{$PaymentGateway->bkash_app_secret}}" required="" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="name">User Name:</label>
            <input type="text" name="bkash_user_name" id="store_password" placeholder="Write Your Store Password" class="form-control " value="{{$PaymentGateway->bkash_user_name}}" required="" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="name">Password:</label>
            <input type="text" name="bkash_user_password" id="store_password" placeholder="Write Your Store Password" class="form-control " value="{{$PaymentGateway->bkash_user_password}}" required="" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="name">Call Back URL</label>
            <input type="text" name="bkash_curl" id="store_password" placeholder="Write Your Store Password" class="form-control " value="{{$PaymentGateway->bkash_curl}}" required="" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="bkash_test_mode" class="  form-label">LIVE =0 | TEST =1</label>
          <select name="bkash_test_mode" id="" class="form-control" >
                                @if(!empty($PaymentGateway))
                                <option value="{{ (!empty($PaymentGateway)) ? $PaymentGateway->bkash_test_mode : '' }}" selected>{{ (!empty($PaymentGateway)) ? $PaymentGateway->bkash_test_mode : '' }}</option>
                                @endif
                                        <option value="1">Test Mode</option>
                                        <option value="0">Live Mode</option>
                                    
          </select>
        </div>
                                
    </div>
   
    <div class="card-footer">
        <div class="form-group">
            <button class="mt-1 btn btn-primary">
                                                    <i class="fas fa-plus-circle"></i>
                    Submit
                                            </button>
        </div>
    </div>
</form>
</div>

<div class="card col-md-6">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                   SSL Commerz Settings
                                                            </h3>
                        </div>
                       
                    </div>
                </div>
                <form action="{{route('paymentGtyUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                  
                    <input type="hidden" name="id" value="{{$PaymentGateway->id}}">
                    <div class="card-body">
                        
                            
                        <div class="form-group">
                            <label for="name">Store ID:</label>
                            <input type="text" name="store_id" id="store_id" placeholder="Write Your Store Id" class="form-control " value="{{$PaymentGateway->store_id}}" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="name">Store Password:</label>
                            <input type="text" name="store_password" id="store_password" placeholder="Write Your Store Password" class="form-control " value="{{$PaymentGateway->store_password}}" required="" autocomplete="off">
                        </div>
                        
                        
                        <div class="form-group">
                          <label for="test_mode" class="  form-label">LIVE =0 | TEST =1</label>
                          <select name="test_mode" id="" class="form-control" >
                                @if(!empty($PaymentGateway))
                                <option value="{{ (!empty($PaymentGateway)) ? $PaymentGateway->test_mode : '' }}" selected>{{ (!empty($PaymentGateway)) ? $PaymentGateway->test_mode : '' }}</option>
                                @endif
                                          <option value="1">Test Mode</option>
                                        <option value="0">Live Mode</option>
                                    
                                </select>
                        </div>
                                                
                    </div>
                   
                    <div class="card-footer">
                        <div class="form-group">
                            <button class="mt-1 btn btn-primary">
                                                                    <i class="fas fa-plus-circle"></i>
                                    Submit
                                                            </button>
                        </div>
                    </div>
                </form>
    </div>
</div>
@endsection