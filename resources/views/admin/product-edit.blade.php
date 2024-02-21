@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
<div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                  Product Edit 
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
    
<form method="post" class="p-3" enctype="multipart/form-data" action="{{route('productUpdate')}}">
            @csrf

            <input type="hidden" name="id" value="{{$getData->id}}">
            <div class="modal-body">
                <div class="row">
                
                        
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="{{$getData->name}}" required /> 
                    </div>
                </div>
                       
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Product Description</label>
                      <textarea name="description"  cols="80" id="editor" row="10">{{$getData->description}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Regular Price</label>
                        <input type="number" class="form-control form-control-sm" name="rp" value="{{$getData->rp}}" required /> 
                    </div>
                </div>
                
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Discounted Price</label>
                        <input type="number" class="form-control form-control-sm" name="dp" value="{{$getData->dp}}"  /> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Partial Payment</label>
                        <input type="number" class="form-control form-control-sm" name="pp" value="{{$getData->pp}}"  /> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Category</label>
                     <select name="category_id" id="" class="form-control">
                              @if(!empty($data)) 
                              <option value="{{ (!empty($data)) ? $data->id : '' }}" selected>{{ (!empty($data)) ? $data->name : '' }}</option>
                              @endif 
                              @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                             
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" class="form-control form-control-sm" name="stock" value="{{$getData->stock}}" required /> 
                    </div>
                </div>
                <div class="col-md-6">
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
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Status</label>
                     <select name="status" id="" class="form-control">

                                <option value="Active">Active</option>
                                <option value="In-active"> In Active</option>

                      </select>
                    </div>
                </div>
                
                
               
            </div>
            </div>
            
            <div class="modal-footer">
                <div class="form-group">
                     <button type="submit" class="btn btn-primary">Product Update</button> 
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