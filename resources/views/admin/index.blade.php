;@extends('admin.layouts.master')

@section('page-content')
@php
    
@endphp

  <div class="container">
    <div class="row">  
        <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-primary">
              <div class="inner">
                @php
                    $TotalProduct = \App\Models\Product::count();
                @endphp
                <h3> {{$TotalProduct}}</h3>

                <h5>Total Products</h5>
              </div>
              <a href="{{route('product')}}"> <div class="icon">
                <i class="ion ion-bag"></i>
              </div></a>
            </div>
        </div>
        
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-warning">
              <div class="inner text-dark">
                @php
                    $pQty = \App\Models\Product::sum('stock');
                @endphp
                <h3>{{round($pQty)}}</h3>

                <h5> Total Product Oty</h5>
              </div>
              <a href="{{route('product')}}"> <div class="icon">
                <i class="ion ion-calculator"></i>
              </div></a>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-info">
              <div class="inner">
                @php
                $TotalOrders = \App\Models\Order::count();
                @endphp
                <h3>{{round($TotalOrders)}}</h3>

                <h5>Total Orders</h5>
              </div>
              <a href="{{route('order', 'all')}}"> <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div></a>
            </div>
        </div>

        <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-danger">
              <div class="inner">
                @php
                $pendingOrders = \App\Models\Order::where('order_status' ,'pending')->count();
                @endphp
                <h3>{{round($pendingOrders)}}</h3>

                <h5>Pending Orders</h5>
              </div>
              <a href="{{route('order', 'pending')}}"> <div class="icon">
                <i class="ion ion-load-a"></i>
              </div></a>
            </div>
        </div>
    </div>
    <div class="row">  
        <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-primary">
              <div class="inner">
                @php
                $processingOrders = \App\Models\Order::where('order_status' ,'processing')->count();
                @endphp
                <h3> {{$processingOrders}}</h3>

                <h5>Processing Orders</h5>
              </div>
              <a href="{{route('order', 'processing')}}"> <div class="icon">
                <i class="ion ion-nuclear"></i>
              </div></a>
            </div>
        </div>
        
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-success">
              <div class="inner text-dark">
                @php
                $deliveredOrders = \App\Models\Order::where('order_status' ,'delivered')->count();
                @endphp
                <h3>{{round($deliveredOrders)}}</h3>

                <h5> Delivered Orders</h5>
              </div>
              <a href="{{route('order', 'delivered')}}"> <div class="icon">
                <i class="ion ion-paper-airplane"></i>
              </div></a>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-primary">
              <div class="inner">
                @php
                $cancelOrders = \App\Models\Order::where('order_status' ,'canceled')->count();
                @endphp
                <h3>{{round($cancelOrders)}}</h3>

                <h5>Cancel Orders</h5>
              </div>
              <a href="{{route('order', 'canceled')}}"> <div class="icon">
                <i class="ion ion-trash-a"></i>
              </div></a>
            </div>
        </div>

        <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box alert alert-danger">
              <div class="inner">
                @php
                $OrderAmount = \App\Models\Order::sum('total_amount');
                @endphp
                <h3>{{round($OrderAmount)}}</h3>

                <h5>Orders Amount</h5>
              </div>
              <a href="{{route('order', 'all')}}"> <div class="icon">
                <i class="ion ion-cash"></i>
              </div></a>
            </div>
        </div>
    </div>


  </div>  
@endsection