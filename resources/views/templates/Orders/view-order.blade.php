<x-header />

@include('templates/nav')
@include('templates/menu')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">View Order : &nbsp; #{{$data->order_id}}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('orders')}}">Orders</a></li>
                                <li class="breadcrumb-item active">View Order</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                                            
                                <div class="card-body">                                   
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Rate</th>
                                                    <th>Qty</th>
                                                    <th style="width:15%;">Amount</th>
                                                    <th style="width:5%;">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $key=> $order)
                                                <tr>
                                                    <td class="text-left">{{$order->product_code}}</td>
                                                    <td class="text-left">{{$order->product_name}}</td>
                                                    <td class="text-right">{{$order->product_rate}}</td>
                                                    <td class="text-right">{{$order->product_qty}}</td>
                                                    <td class="text-right">{{$order->total}}</td>
                                                    <td><a href="{{route('ordersDelete', ['id' => $order->id])}}"
                                                            class="btn btn-danger">X</a> </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3">

                                                    </td>
                                                    <td class="text-right text-bold">Total Items :
                                                        {{$orders->sum('product_qty')}}</td>
                                                    <td class="text-right text-bold">Total :
                                                        {{$orders->sum('total')}}</td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                       
                                            <table class="col-md-4 offset-md-8 table table-bordered table-striped mt-2">
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td class="text-right text-bold">Commision 5%</td>
                                                        <td class="text-right text-bold">{{$orders->sum('total')*5/100}}
                                                        </td>
                                                        <th style="width:18%;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-bold">with Commision</td>
                                                        <td class="text-right text-bold">
                                                            {{$orders->sum('total')+$orders->sum('total')*5/100}}
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="text-right text-bold"><strong style="font-size:18px;">Total Payable : {{$orders->sum('total')+$orders->sum('total')*5/100}}</strong></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                       
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <x-footer />