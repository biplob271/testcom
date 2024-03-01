@extends('admin.layouts.master')
@section('page-content')

<div class="card">
    <div class="card-header">
          <button  class="btn btn-success btn-sm" data-toggle="modal" data-target="#newBankAccount">Add Brand</button>
    </div>
    <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL</th>
              <th>Brand Name</th>
              <th>Url</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getData as $key => $data)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$data->name}}</td>
              <td> {{$data->url}}</td>
              <td>  
                  <a href="{{route('brandEdit', $data->id)}}" class="btn text-white btn-success btn-sm">Edit</a>
                    <a href="{{route('brandDestroy', $data->id)}}" class="btn text-white btn-danger btn-sm">Delete</a>
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
            <h5 class="modal-title" id="exampleModalLongTitle">Add Brand</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        
        
        <form method="post" class="p-3"  enctype="multipart/form-data" action="{{route('brandAdd')}}">
            @csrf
            <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Brand Name :</label>
                          <input type="text" class="form-control form-control-sm" name="brand_name" value="" required /> 
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Brand Url :</label>
                          <input type="text" class="form-control form-control-sm" name="brand_url" value="" required /> 
                      </div>
                  </div>   
                  <div class="col-md-12">
                      <div class="form-group">
                                    <label for="Name">Brand Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                    @if(!empty($Setting))
                                        <input type="hidden" name="image" class="form-control" id=""  value="{{ (!empty($Setting)) ? $Setting->image : old('image') }}">
                                        <img src="{{url('/')}}/uploads/{{$Setting->image}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                      </div>           
                  </div>                      

               
               </div>
            </div>
            
            <div class="modal-footer">
                <div class="form-group">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Create Brand</button> 
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