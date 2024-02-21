
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
    <div class="card">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                   SSL Commerz Gateway Settings
                                                            </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('dashboard')}}" class="btn btn-danger">
                                
                                <i class="fas fa-long-arrow-alt-left"></i>
                                Back to List
                            </a>
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
                          <label for="test_mode" class="col-sm-2  form-label">TEST MODE</label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input test_mode" type="radio" id="test_mode-no" name="test_mode" value="no" checked>
                                    <label class="form-check-label" for="test_mode-no">No</label>
                                </div>

                            
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input test_mode" type="radio" id="test_mode-yes" name="test_mode" value="yes">
                                    <label class="form-check-label" for="test_mode-yes">Yes</label>
                                </div>
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

@endsection