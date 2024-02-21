@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL</th>
              <th>Image</th>
              <th>Title</th>
              <th>Product ID</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getData as $key => $data)
            <tr>
              <td>{{++$key}}</td>
              <td><img src="/uploads/{{$data->image1}}" alt="Product Image" width="60px"></td>
              <td>{{$data->title}}</td>
              <td>{{$data->product_id}}</td>
              <td>
                  <a href="{{route('landingPage', $data->id)}}" target="_blank"  class="btn text-white btn-info btn-sm">View</a>
                  <a href="{{route('landingDestroy', $data->id)}}" class="btn text-white btn-danger btn-sm">Delete</a>
                 
              </td>
            </tr>
            @endforeach
            </tfoot>
      </table>
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