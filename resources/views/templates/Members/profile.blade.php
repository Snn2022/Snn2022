<x-header />
@include('templates/nav')
@include('templates/menu')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-md-3">
                            <table id="example1" class="table table-bordered table-success">
                                <thead>
                                    <tr>
                                        <th colspan="2">একাউন্ট বিবরনী</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>সদস্যের নাম - </td>
                                        <td>{{$data->member_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>সদস্যের নাম - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2">সদস্যের তথ্য</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>সদস্যের নাম - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ফোন নাম্বার - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>পিতার নাম - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>মাতার নাম - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>স্বামী/স্ত্রী নাম - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ভোটার আইডি নং - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3 text-center">
                            <img class="img-circle img-fluid" src="{{asset('')}}{{$data->photo}}" alt="member photo">
                            <img class="img-thumbnail img-fluid" src="{{asset('')}}{{$data->photo}}" alt="member photo">
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <table id="example1" class="table table-primary">
                                <tbody>
                                    <tr>
                                        <td>গ্রামের নাম - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                        <td>পোস্ট - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                        <td>ইউনিয়ন - </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>থানা </td>
                                        <td>
                                            <h5> {{$data->member_name}}</h5>
                                        </td>                                       
                                        <td class="text-left">জেলা </td>
                                        <td class="text-left">
                                            <h5> {{$data->member_name}}</h5>
                                        </td>
                                        <td colspan="3" class="text-left"></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </section>

            {{$data}}
            <div>

                <img alt="">
            </div>

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
    <x-footer />