
@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
    <div class="card">

                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                   Category Edit
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
                <form method="post" class="p-3"  enctype="multipart/form-data" action="{{route('categoryUpdate')}}">
            @csrf
            <input type="hidden" name="id" value="{{$cat->id}}">
            <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Category Name :</label>
                          <input type="text" class="form-control form-control-sm" name="category_name" value="{{$cat->name}}" required /> 
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Category Slug :</label>
                          <input type="text" class="form-control form-control-sm" name="category_slug" value="{{$cat->slug}}" required /> 
                      </div>
                  </div>   
                  <div class="col-md-12">
                  <input type="hidden" name="oldimage" class="form-control" id="" value="{{$cat->image}}">
                      <div class="form-group">
                                    <label for="Name">Category Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                    @if(!empty($cat))
                                       
                                        <img src="{{url('/')}}/uploads/{{$cat->image}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                      </div>           
                  </div>                      

               
               </div>
            </div>
            
            <div class="modal-footer">
                <div class="form-group">
                     <button type="submit" class="btn btn-primary">Update Category</button> 
                 </div>
             </div>
         </form>
    </div>

@endsection