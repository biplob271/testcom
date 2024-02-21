
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
    <div class="card">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                   SMS Gateway Settings
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
                <form action="{{route('smsGtyUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf                                  
                    <input type="hidden" name="id" value="{{$SMS->id}}">
                    <div class="card-body">
                        
                            
                        <div class="form-group">
                            <label for="name">Gateway Url:</label>
                            <input type="text" name="url" id="url" placeholder="Write Gateway Url" class="form-control " value="{{$SMS->gateway_url}}" required="" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="name">Sender Id:</label>
                            <input type="text" name="sender_id" id="senderid" placeholder="Write Your Sender Id" class="form-control " value="{{$SMS->sender_id}}" required="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="name">Api Key:</label>
                            <input type="text" name="apiKey" id="senderid" placeholder="Write Your Sender Id" class="form-control " value="{{$SMS->api_key}}" required="" autocomplete="off">
                        </div>
                        
                        
                        <div class="form-group">
                          <label for="sms_type">SMS Type</label>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input sms_type" type="radio" id="sms_type-NonMasking" name="sms_type" value="NonMasking" checked>
                                    <label class="form-check-label" for="sms_type-NonMasking">NonMasking</label>
                                </div>

                            
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input sms_type" type="radio" id="sms_type-Masking" name="sms_type" value="Masking">
                                    <label class="form-check-label" for="sms_type-Masking">Masking</label>
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