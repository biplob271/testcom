@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
<div class="card-header">
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="card-title">
                                 
                                  Order Update 
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
    
<form method="post" class="p-3" enctype="multipart/form-data" action="{{route('orderUpdate')}}">
            @csrf

            <input type="hidden" name="id" value="{{$getData->id}}">
            <input type="hidden" name="name" value="{{$getData->name}}">
            <input type="hidden" name="mobile" value="{{$getData->phone}}">
            <div class="modal-body">
                <div class="row">
                
                        
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Order Number</label>
                        <input type="text" class="form-control form-control-sm" name="order_number" value="{{$getData->order_number}}" required /> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Order Total Amount</label>
                        <input type="text" class="form-control form-control-sm" name="total_amount" value="{{$getData->total_amount}}" required /> 
                    </div>
                </div>
        
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Payment Status</label>
                     <select name="payment_status" id="" class="form-control">
                              @if(!empty($getData)) 
                              <option value="{{ (!empty($getData)) ? $getData->payment_status : '' }}" selected>{{ (!empty($getData)) ? $getData->payment_status : '' }}</option>
                              @endif 
                              <option value="unpaid">Un-Paid</option>
                              <option value="Paid">Paid</option>
                              
                             
                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Order Status</label>
                     <select name="order_status" id="" class="form-control">
                              @if(!empty($getData)) 
                              <option value="{{ (!empty($getData)) ? $getData->order_status : '' }}" selected>{{ (!empty($getData)) ? $getData->order_status : '' }}</option>
                              @endif 
                              <option value="Pending">Pending</option>
                              <option value="Processing">Processing</option>
                              <option value="Delivered">Delivered</option>
                              <option value="Canceled">Canceled</option>
                             
                      </select>
                    </div>
                </div>
            
               
            </div>
            </div>
            
            <div class="modal-footer">
                <div class="form-group">
                     <button type="submit" class="btn btn-primary">Order Update</button> 
                 </div>
             </div>
         </form>
        
    
</div>

@php
        $Setting=App\Models\Setting::get()->first();
    @endphp  
<style>
    @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
   
    font-family: 'Calibri', sans-serif !important;
}


.mt-100{
  margin-top: 50px;
}

.mb-100{
  margin-bottom: 50px;
}

.card{
    border-radius:1px !important;
}

.card-header{
    
    background-color:#fff;
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.btn-sm, .btn-group-sm>.btn {
    padding: .25rem .5rem;
    font-size: .765625rem;
    line-height: 1.5;
    border-radius: .2rem;
}
</style>

<script>

    function myFunction() {
    window.print();
    }
</script>
<div class="container mt-100 mb-100">
<div id="ui-view"><div><div class="card">
<div class="card-header">

  Ordewr Status<strong><a class="btn btn-sm btn-success">{{$order->order_status}}</a></strong>


</div>
<div class="card-body">
<div class="row">
<div class="col-sm-4">
<h6 class="mb-4">From:</h6>
<div><strong> {{$Setting->site_name}}</strong></div>
<div>{{$Setting->address}}</div>
<div>Email: {{$Setting->email}}</div>
<div>Phone:{{$Setting->phone}}</div>
</div>

<div class="col-sm-4"></div>

<div class="col-sm-4">
<h6 class="mb-4">Customer Details:</h6>
<div>Invoice<strong> #{{$id}}</strong></div>
<div>Order Date: <strong>{{$order->created_at}}</strong></div>
<div>Name:<strong> {{$order->name}}</strong></div>
<div>Mobile:<strong> {{$order->phone}}</strong></div>
<div>Address: <strong>{{$order->address1}}</strong></div>

</div>

</div>

<div class="table-responsive-sm">
<table class="table table-striped">
<thead>
<tr>
<th class="center">#</th>
<th>Description</th>
<th class="center">UNIT</th>
<th class="right">COST</th>
<th class="right">Total</th>
</tr>
</thead>
<tbody>
    @foreach($items as $key => $item)
    @php
      $sub_total = $item->product_qty * $item->product_price ;
    @endphp
<tr>
<td class="center">{{++$key}}</td>
<td class="left">{{$item->product_name}}</td>
<td class="center">{{$item->product_qty}}</td>
<td class="right">BDT {{$item->product_price}}</td>
<td class="right">BDT {{$sub_total}}</td>
</tr>
  @endforeach
  
</tbody>
</table>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5"></div>
<div class="col-lg-4 col-sm-5"></div>
<div class="col-lg-4 col-sm-5 ml-auto">
<table class="table table-clear">
<tbody>
<tr>
<td class="left"><strong>Subtotal</strong></td>
<td class="right">BDT {{$order->sub_total}}</td>
</tr>
<tr>
<td class="left"><strong>Delivery Charge</strong></td>
<td class="right">BDT {{$order->delivery_crg}}</td>
</tr>
<tr>
<td class="left"><strong>Total</strong></td>
<td class="right">BDT <strong>{{$order->total_amount}}</strong></td>
</tr>
</tbody>
 <tr>
 <td class="left"><strong>Payment Status</strong></td>
<td class="right"><strong>{{$order->payment_status}}</strong></td>
</tr>
</table>

</div>
</div>
</div>
</div></div></div>
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