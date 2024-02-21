@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
    <div class="card-header">
    <h5 class="">
                                 
              Add Landing Page: 
                                                          </h5>
    </div>
    <div class="card-body">

    
   @php
     $data=session('data');
   
  // dd($data['name']);
            
    @endphp   

    <form method="post" class="p-3" enctype="multipart/form-data" action="{{route('productSearch')}}">
            @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-md-3">
                    <div class="form-group">
                        <label>Product ID.</label>
                        <input type="text" class="form-control" name="id" value="{{ (!empty($data)) ? $data->id : '' }}"  /> 
                    </div>
            </div>
            <div class="col-md-2">
              <label>.</label>
                <div class="form-group">
                     <button type="submit" class="form-control btn btn-success">Search</button> 
                 </div>
            </div>   
        </div>      
    </div> 
            
    </form>

    <form method="post" class="p-3" enctype="multipart/form-data" action="{{route('submitLanding')}}">
            @csrf
            <input type="hidden" class="form-control" name="product_id" value="{{ (!empty($data)) ? $data->id : '' }}" Required /> 
            <div class="modal-body">
                <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Landing Page Title *</label>
                        <input type="text" class="form-control" name="title" value="" Required /> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Youtube Video ID *</label>
                        <input type="text" class="form-control" name="video_url" value="" Required /> 
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Landing Page Subtitle</label>
                        <input type="text" class="form-control" name="sub_title" value="" Required /> 
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Landing Feature*</label>
                        <textarea class="form-control" name="feature" value="" Required> Test </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Landing Page Description</label>
                      <textarea name="descrip"  cols="80" id="editor" row="10">Add Your Description here</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Image Head Line</label>
                        <input type="text" class="form-control" name="img_head" value="" Required /> 
                    </div>
                </div>
                <div class="col-md-4">
                         <div class="form-group">
                                    <label for="Name">Landing Image 1</label>
                                    <input type="file" name="image1" class="form-control" id="">
                                    @if(!empty($Setting))
                                        <input type="hidden" name="image1" class="form-control" id=""  value="{{ (!empty($Setting)) ? $Setting->image1 : old('image1') }}">
                                        <img src="{{url('/')}}/uploads/{{$Setting->image1}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                        </div>           
                </div> 
                <div class="col-md-4">
                         <div class="form-group">
                                    <label for="Name">Landing Image 2</label>
                                    <input type="file" name="image2" class="form-control" id="">
                                    @if(!empty($Setting))
                                        <input type="hidden" name="image2" class="form-control" id=""  value="{{ (!empty($Setting)) ? $Setting->image2 : old('image2') }}">
                                        <img src="{{url('/')}}/uploads/{{$Setting->image2}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                        </div>           
                </div> 
                <div class="col-md-4">
                         <div class="form-group">
                                    <label for="Name">Landing Image 3</label>
                                    <input type="file" name="image3" class="form-control" id="">
                                    @if(!empty($Setting))
                                        <input type="hidden" name="image3" class="form-control" id=""  value="{{ (!empty($Setting)) ? $Setting->image3 : old('image3') }}">
                                        <img src="{{url('/')}}/uploads/{{$Setting->image3}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                        </div>           
                </div> 




                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="name" value="{{ (!empty($data)) ? $data->name : '' }}" readonly /> 
                    </div>
                </div>
          
          
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Product Regular Price</label>
                        <input type="text" class="form-control" name="father_name" value="{{ (!empty($data)) ? $data->rp : '' }}" readonly /> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Product Discounted Price</label>
                        <input type="text" class="form-control" name="mother_name" value="{{ (!empty($data)) ? $data->dp : '' }}" readonly /> 
                    </div>
                </div>
          
                <div class="col-md-6">
                         <div class="form-group">
                                    <label for="Name">Product Image</label>
                                    <input type="hidden" class="form-control" name="image" value="{{ (!empty($data)) ? $data->image : '' }}" readonly /> 
                                    @if(!empty($data))
                                        <img src="{{url('/')}}/uploads/{{$data->image}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                        </div>           
                </div>

                
                
               
            </div>
            </div>
            
            <div class="modal-footer">
                <div class="form-group">
                     <button type="submit" class="btn btn-success">Save</button> 
                 </div>
             </div>
         </form>

@endsection

@section('cusjs')

<!-- DataTables -->
  <!-- DataTables -->
<link rel="stylesheet" href="{{asset('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
<script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection