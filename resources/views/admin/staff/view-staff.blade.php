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
              <th>SIF</th>
              <th>DOB</th>
              <th>Blood</th>
              <th>Gender</th>
              <th> Mobile</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getData as $key => $data)
            <tr>
              <td>{{++$key}}</td>
              <td><img src="/uploads/{{$data->image}}" alt="Student Photos" width="60px"></td>
              <td>{{$data->name}}</td>
              <td>{{$data->birthday}}</td>
              <td> {{$data->blood_group}}(Ve)</td>
              <td> {{$data->gender}}</td>
              <td> {{$data->phone}}</td>
              <td> {{$data->status}}</td>
              <td>
                 
                  <a href="{{route('userDestroy', $data->id)}}" class="btn text-white btn-danger btn-sm">Delete</a>

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