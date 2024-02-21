
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
    <div class="card">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                   Delivery Cost Setup
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
                <form action="{{route('deliveryCrgUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                  
                    <input type="hidden" name="id" value="{{$getData->id}}">
                    <div class="card-body">
                        
                            
                        <div class="form-group">
                            <label for="name">Inside Dhaka:</label>
                            <input type="number" name="inside_dhaka" id="url" placeholder="" class="form-control " value="{{$getData->inside_dhaka}}" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="name">All Over Bangladesh:</label>
                            <input type="number" name="all_bangladesh" id="senderid" placeholder="" class="form-control " value="{{$getData->all_bangladesh}}" required="" autocomplete="off">
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