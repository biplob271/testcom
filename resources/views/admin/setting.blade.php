
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
    <div class="card">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                  Website Configuration
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
                <form action="{{route('settingUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                  
                    <input type="hidden" name="id" value="{{$Setting->id}}">
                    <div class="card-body">
                        
                            
                        <div class="form-group">
                            <label for="name">Website Name:</label>
                            <input type="text" name="site_name" id="site_name" placeholder="Write Gateway Url" class="form-control " value="{{$Setting->site_name}}" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name">Facebook Pixel Id :</label>
                            <input type="text" name="fb_pixel" id="fb_pixel" placeholder="Enter Your Facebook Pixel ID" class="form-control " value="{{$Setting->fb_pixel}}" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="Name">Logo Image</label>
                            <input type="file" name="image" class="form-control" id="" required>
                            @if(!empty($Setting))
                                 <input type="hidden" name="image" class="form-control" id=""  value="{{ (!empty($Setting)) ? $Setting->image : old('image') }}">
                                <img src="{{url('/')}}/uploads/{{$Setting->image}}" style="width: 100px; margin-top: 5px;" alt=""/>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name">Address :</label>
                            <input type="text" name="address" id="address" placeholder="Write Your Sender Id" class="form-control " value="{{$Setting->address}}" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name">Phone :</label>
                            <input type="text" name="phone" id="phone" placeholder="Write Your Sender Id" class="form-control " value="{{$Setting->phone}}" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name">Email :</label>
                            <input type="text" name="email" id="email" placeholder="Write Your Sender Id" class="form-control " value="{{$Setting->email}}" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name">Web :</label>
                            <input type="text" name="web" id="web" placeholder="Write Your Sender Id" class="form-control " value="{{$Setting->web}}" required="" autocomplete="off">
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