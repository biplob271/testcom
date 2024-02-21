@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
    <div class="card-header">
          <button  class="btn btn-success btn-sm" data-toggle="modal" data-target="#newBankAccount">Add Product</button>
    </div>
    <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL</th>
              <th>Image</th>
              <th>Title</th>
              <th>RP</th>
              <th>DP</th>
              <th>PP</th>
              <th>Stock</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getData as $key => $data)
            <tr>
              <td>{{++$key}}</td>
              <td><img src="/uploads/{{$data->image}}" alt="Product Image" width="60px"></td>
              <td>{{$data->name}}</td>
              <td>{{$data->rp}}</td>
              <td> {{$data->dp}}</td>
              <td> {{$data->pp}}</td>
              <td> {{$data->stock - $data->sell}}</td>
              <td> {{$data->status}}</td>
              <td>
                  <a href="{{route('productDetail', $data->id)}}" target="_blank"  class="btn text-white btn-info btn-sm">View</a>
                  <a href="{{route('productEdit', $data->id)}}" class="btn text-white btn-success btn-sm">Edit</a>
                  <a href="{{route('productDestroy', $data->id)}}" class="btn text-white btn-danger btn-sm">Delete</a>
                 
              </td>
            </tr>
            @endforeach
            </tfoot>
      </table>
    </div>
</div>












<!-- Modal for new bank account entry -->
<div class="modal fade" id="newBankAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog xmodal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        
        
        <form method="post" class="p-3" enctype="multipart/form-data" action="{{route('productAdd')}}">
            @csrf
            <div class="modal-body">
                <div class="row">
                
                        
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control form-control-sm" name="name" value="" required /> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Product Category</label>
                     <select name="category_id" id="" class="form-control">
                              @if(!empty($categories)) 
                              
                              @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                              @endif 
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                         <div class="form-group">
                                    <label for="Name">Product Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                    @if(!empty($Setting))
                                        <input type="hidden" name="image" class="form-control" id=""  value="{{ (!empty($Setting)) ? $Setting->image : old('image') }}">
                                        <img src="{{url('/')}}/uploads/{{$Setting->image}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                        </div>           
                </div>                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Regular Price</label>
                        <input type="number" class="form-control form-control-sm" name="rp" value="" required /> 
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="form-group">
                        <label>Discounted Price</label>
                        <input type="number" class="form-control form-control-sm" name="dp" value="" required /> 
                    </div>
        </div>
        <div class="col-md-4">
                    <div class="form-group">
                        <label>Partial Amount</label>
                        <input type="number" class="form-control form-control-sm" name="pp" value="" required /> 
                    </div>
        </div>
				 <div class="col-md-12">
                    <div class="form-group">
                        <label>Product Description</label>
                      <textarea name="description"  cols="80" id="editor" row="10">Add Your Description here</textarea>
                    </div>
                </div>
              
                
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" class="form-control form-control-sm" name="stock" value="" required /> 
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
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Create Product</button> 
                 </div>
             </div>
         </form>
        
        
        
        
     </div>
  </div>
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