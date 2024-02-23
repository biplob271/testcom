@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
<div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                  Slider Edit 
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
    
<form method="post" class="p-3" enctype="multipart/form-data" action="{{route('sliderUpdate')}}">
            @csrf

            <input type="hidden" name="id" value="{{$getData->id}}">
            <div class="modal-body">
                <div class="row">
                
                        
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider Title</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{$getData->name}}" required /> 
                    </div>
                </div>
                       
                
                <div class="col-md-12">
                <input type="hidden" name="oldimage" class="form-control" id="" value="{{$getData->image}}">
                         <div class="form-group">
                                    <label for="Name">Product Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                    @if(!empty($getData))
                                        <input type="hidden" name="image" class="form-control" id=""  value="">
                                        <img src="{{url('/')}}/uploads/{{$getData->image}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                        </div>           
                </div> 
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider Image Link</label>
                        <input type="text" class="form-control form-control-sm" name="img_url" value="{{$getData->img_url}}" required /> 
                    </div>
                </div>
     
            </div>
            </div>
            
            <div class="modal-footer">
                <div class="form-group">
                     <button type="submit" class="btn btn-primary">Slider Update</button> 
                 </div>
             </div>
         </form>
        
    
</div>






@endsection

@section('cusjs')

<!-- DataTables -->
  <!-- DataTables -->
<link rel="stylesheet" href="{{asset('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
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