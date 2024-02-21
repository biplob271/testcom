@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')
<div class="card">
    <div class="card-header">
              <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                  Order Management 
                                                            </h3>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="{{route('dashboard')}}" class="btn btn-danger">
                                
                                <i class="fas fa-long-arrow-alt-left"></i>
                                Back to Dashboard
                            </a>
                        </div>
             </div>
    </div>
    <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL</th>
              <th>Date</th>
              <th>Order ID</th>
              <th>Customer Name</th>
              <th>Total</th>
              <th>Delivery Crg</th>
              <th> Total</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getData as $key => $data)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$data->created_at}}</td>
              <td>{{$data->order_number}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->sub_total}}</td>
              <td> {{$data->delivery_crg}}</td>
              <td> {{$data->total_amount}}</td>
              <td>

                 @if($data->order_status == 'Processing')
                    <a href="{{route('sendSteadfast', $data->order_number)}}" class="btn text-white btn-warning btn-sm">Send Steadfast</a>
                  @endif
                  <a href="{{route('orderDetails', $data->order_number)}}" class="btn text-white btn-info btn-sm">View</a>
                  <a href="{{route('orderEdit', $data->order_number)}}" class="btn text-white btn-success btn-sm">Edit</a>
                  @if($data->payment_status == 'unpaid')
                    <a href="{{route('orderDestroy', $data->id)}}" class="btn text-white btn-danger btn-sm">Delete</a>
                  @endif
                 
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