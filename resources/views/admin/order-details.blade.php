@extends('admin.layouts.master')

@section('page-content')
@include('admin.layouts.message')
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

  Invoice<strong>#{{$id}}</strong>
<div class="align-items-end">
    <a class="btn btn-sm btn-info" href="#" onclick="myFunction()" data-abc="true"><i class="fa fa-print mr-1"></i> Print</a>
</div>



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
<th>Item</th>
<th>Description</th>
<th class="center">UNIT</th>
<th class="right">COST</th>
<th class="right">Total</th>
</tr>
</thead>
<tbody>
    @foreach($items as $item)
    @php
      $sub_total = $item->product_qty * $item->product_price ;
    @endphp
<tr>
<td class="center">1</td>
<td class="left">Paper Book</td>
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
<td class="left"><strong>Discount (20%)</strong></td>
<td class="right">BDT 0</td>
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

<div class="text-center">
    @if($order->payment_status == "unpaid")
    
     <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
         <input type="hidden" value="{{ csrf_token() }}" name="_token" />
         <input type="hidden" value="{{$order->total_amount}}" name="amount" />
         <input type="hidden" value="{{$order->name}}" name="cus_name" />
         <input type="hidden" value="{{$order->address1}}" name="address" />
         <input type="hidden" value="{{$order->phone}}" name="phone" />
         <input type="hidden" value="{{$Setting->email}}" name="email" />
        <input type="hidden" value="{{$id}}" name="tran_id" />

         <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-paper-plane mr-1"></i>Continue to checkout </button>
      
        </form>
   @endif

</div>

</div>
</div>
</div>
</div></div></div>
</div>

@endsection