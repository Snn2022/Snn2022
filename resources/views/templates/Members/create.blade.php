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
                            <h1 class="m-0">সতুন সদস্য নিবন্ধন</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('members')}}">সদস্য তালিকা</a></li>
                                <li class="breadcrumb-item active">সতুন সদস্য নিবন্ধন</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card col-md-8 offset-md-2">
                            <div class="card-body register-card-body">
                                <h4 class="login-box-msg">সদস্য নিবন্ধন ফরম</h4>
                                <div class="text-cener text-danger">
                                    <x-jet-validation-errors />
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-2">
                                        <input class="form-control" type="text" id="member_name" name="member_name"
                                            :value="old('member_name')" required autofocus autocomplete="member_name"
                                            placeholder="সদস্যের নাম ইংরেজীতে">
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" type="text" id="father_name" name="father_name"
                                            :value="old('father_name')" required autofocus autocomplete="father_name"
                                            placeholder="পিতার নাম ইংরেজীতে">
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" type="text" id="mother_name" name="mother_name"
                                            :value="old('mother_name')" required autofocus autocomplete="mother_name"
                                            placeholder="মাতার নাম ইংরেজীতে">
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" type="text" id="spouse_name" name="spouse_name"
                                            :value="old('spouse_name')" required autofocus autocomplete="spouse_name"
                                            placeholder="স্বামী/স্ত্রী নাম ইংরেজীতে">
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control" type="number" id="nid_number" name="nid_number"
                                            :value="old('nid_number')" required autofocus autocomplete="nid_number"
                                            placeholder="ভোটার আইডি নং ইংরেজীতে">
                                    </div>
                                    <!--address section start-->
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <input class="form-control" type="text" id="vill_name" name="village"
                                                :value="old('village')" required autofocus autocomplete="village"
                                                placeholder="গ্রামের নাম ইংরেজীতে">
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <input class="form-control" type="text" id="post" name="post"
                                                :value="old('post')" required autofocus autocomplete="post"
                                                placeholder="পোস্ট ইংরেজীতে">
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <input class="form-control" type="text" id="member_name" name="union"
                                                :value="old('union')" required autofocus autocomplete="union"
                                                placeholder="ইউনিয়ন ইংরেজীতে">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control" type="text" id="thana" name="thana"
                                                :value="old('thana')" required autofocus autocomplete="thana"
                                                placeholder="থানা ইংরেজীতে">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control" type="text" id="district" name="district"
                                                :value="old('district')" required autofocus autocomplete="district"
                                                placeholder="জেলা ইংরেজীতে">
                                        </div>

                                    </div>
                                    <!--address section end-->
                                    <div class="mb-3">
                                        <input class="form-control" type="number" id="phone" name="phone"
                                            placeholder="ফোন নাম্বার">
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">ছবি সংযুক্ত করুন :</label>
                                        <div class="col-md-3 mb-3">
                                            <input type="file" id="photo" name="photo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3">ভোটার আইডি কপি :</label>
                                        <div class="col-md-3 mb-3">
                                            <input type="file" id="nid_photo" name="nid_photo">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">সাবমিট</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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