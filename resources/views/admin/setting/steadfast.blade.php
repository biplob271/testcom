
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
    <div class="card">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                   SteadFast Api Settings
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
                <form action="{{route('steadFastUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                  
                    <input type="hidden" name="id" value="{{ (!empty($getData)) ? $getData->id : '' }}">
                    <div class="card-body">
                        

                        <div class="form-group">
                            <label for="name">Api Key</label>
                            <input type="text" name="api_key"  placeholder="Put Your Api Key" class="form-control " value="{{ (!empty($getData)) ? $getData->api_key : '' }}" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name">Api Screet:</label>
                            <input type="text" name="api_secret" placeholder="Put Your Api Secret" class="form-control " value="{{ (!empty($getData)) ? $getData->api_secret : '' }}" required="" autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="" class="form-control" required>
                         @if(!empty($getData))
                        <option value="{{ (!empty($getData)) ? $getData->status : '' }}" selected>{{ (!empty($getData)) ? $getData->status : '' }}</option>
                         @endif
                                <option value="Active">Active</option>
                                <option value="InActive">In Active</option>
                            
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

@endsection