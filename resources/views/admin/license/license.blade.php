
@extends('frontend.layouts.master')
@section('page-content')
@include('admin.layouts.message')
 


<div class="card">

           
                <form action="{{route('AddLicense')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                  
                    <input type="hidden" name="id" value="">
                    <div class="card-body">
                        
                            
                        <div class="form-group">
                            <label for="name">License Key:</label>
                            <input type="text" name="apiKey" id="apiKey" placeholder="Write License Key" class="form-control " value="" required="" autocomplete="off">
                        </div>

                                                
                    </div>
                   
                    <div class="h-100 d-flex align-items-center justify-content-center">
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