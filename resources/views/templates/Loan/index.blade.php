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
                            <h1 class="m-0">লোন প্রদানের তালিকা।</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">ড্যাশর্বোড</a></li>
                                <li class="breadcrumb-item active">লোন প্রদানের তালিকা।</li>
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
                                <div class="card-header">
                                    <h3 class="card-title"> <a href="{{route('createLoan')}}" class="btn btn-blue"> লোন
                                            প্রদান করুন</a> </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>নাম</th>
                                                <th>ফোন</th>
                                                <th>পরিমান</th>
                                                <th>তারিখ</th>
                                                <th>স্থিতি</th>
                                                <th style="text-align: center">#</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                       
                                            @foreach($data as $key => $loan)
                                            <tr>
                                                <td>{{$loan->members->member_name}}</td>
                                                <td>{{$loan->members->phone}}</td>
                                                <td>{{$loan->loan_skim}}</td>
                                                <td>{{$loan->start_date}}</td>
                                                <td>{{$loan->loan_status}}</td>
                                                <td><a href="#"
                                                        class="btn btn-info form-control"> view</a></td>
                                            </tr>
                                            @endforeach
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
        <x-footer />