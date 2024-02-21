
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
    <div class="card">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                   Payment Method Settings
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
                <form action="{{route('paymentMethodUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                  
                    <input type="hidden" name="id" value="{{ (!empty($getData)) ? $getData->id : '' }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>BKASH AUTOMATIC CHECKOUT</label>
                                <select name="bkash_status" id="" class="form-control" >
                                @if(!empty($getData))
                                <option value="{{ (!empty($getData)) ? $getData->bkash_status : '' }}" selected>{{ (!empty($getData)) ? $getData->bkash_status : '' }}</option>
                                @endif
                                        <option value="Active">Active</option>
                                        <option value="InActive">In Active</option>
                                    
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>SSL COMMERZ</label>
                                <select name="sslc_status" id="" class="form-control" >
                                @if(!empty($getData))
                                <option value="{{ (!empty($getData)) ? $getData->sslc_status : '' }}" selected>{{ (!empty($getData)) ? $getData->sslc_status : '' }}</option>
                                @endif
                                        <option value="Active">Active</option>
                                        <option value="InActive">In Active</option>
                                    
                                </select>
                                </div>
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