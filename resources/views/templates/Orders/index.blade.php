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
                            <h1 class="m-0">Orders</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            @if(session()->has('success'))
                                <div id="successMessage" class="col-md-6 offset-3 text-center alert-success p-1">
                                    {{session('success')}}
                                </div>
                                @endif
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{route('createOrders')}}" class="btn btn-info">Add New Order</a>
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <form method="POST" action="#" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group">
                                                    <input class="form-control" type="text" name="search_file"
                                                        placeholder="Search order no.">
                                                    <div class=" input-group-prepend">
                                                        <button class="btn btn-success input-group-text"
                                                            id="search_filePrepend">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 offset-md-4 text-center mt-2">
                                    <h5 class="bg-info p-2"> List of orders </h5>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-primary table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Orders No.</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th style="width:5%;">#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key => $item)
                                            <tr>
                                                <td>{{Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}</td>
                                                <td>{{$item->order_id}}</td>
                                                <td>{{$item->orders->status}}</td>
                                                <td>{{$item->orders->sum('product_qty')}}</td>                                               
                                                <td><a href="{{route('viewOrders',['id' => $item->id])}}" class="btn btn-primary">view</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </section>
        </div>

        <x-footer />