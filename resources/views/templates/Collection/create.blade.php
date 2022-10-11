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
                            <h1 class="m-0">লোন প্রদান ফরম।</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('loanList')}}">লোন প্রদানের তালিকা।</a>
                                </li>
                                <li class="breadcrumb-item active">লোন প্রদান ফরম।</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card col-md-6 offset-md-3">
                            <div class="row">
                                @if(session()->has('success'))
                                <h5 id="successMessage" class="text-center alert-success p-2 mt-1">
                                    {{session('success')}}</h5>
                                @endif
                            </div>
                            <div class="card-body register-card-body">
                                <div class="card-header bg-info mb-2 text-center">
                                    <h4>লোন সংক্রান্ত তথ্য দিন</h4>
                                </div>

                                <div class="text-cener text-danger">
                                    <x-jet-validation-errors />
                                </div>
                                <form method="POST" action="{{ route('submitLoan') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        <select name="loan_receiver" id="loan_receiver" class="form-control p-2 mb-2">
                                            <option value="" class="form-control">সদস্য নির্বাচন করুন</option>
                                            @foreach($members as $key => $member)
                                            <option value="{{$member->member_id}}" class="form-control">
                                                {{$member->member_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <select name="saving_skim" id="saving_skim" class="form-control p-2 mb-2">
                                            <option value="">সঞ্চয় স্কিম নির্বাচন করুন</option>
                                            <option value="40">40 টাকা দৈনিক</option>
                                            <option value="60">60 টাকা দৈনিক</option>
                                            <option value="80">80 টাকা দৈনিক</option>
                                            <option value="100">100 টাকা দৈনিক</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <select name="loan_skim" id="loan_skim" class="form-control p-2 mb-2">
                                            <option value="">লোন স্কিম নির্বাচন করুন</option>
                                            <option value="10000">10,000 টাকা </option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <select name="duration" id="duration" class="form-control p-2 mb-2">
                                            <option value="">মেয়াদকাল নির্বাচন করুন।</option>
                                            <option value="100">100 দিন</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <input class="form-control p-2 mb-2" type="text" id="book_no" name="book_no"
                                            placeholder="বহি-নং লিখুন।" required>
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
    </div>
    <!-- ./wrapper -->
    <x-footer />