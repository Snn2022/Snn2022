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
                            <h1 class="m-0">বিবিধ আয়</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">ড্যাশর্বোড</a></li>
                                <li class="breadcrumb-item active">বিবিধ আয়</li>
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
                                <div class="row">
                                    @if(session()->has('success'))
                                    <h5 id="successMessage" class="text-center alert-success p-2 mt-1">
                                        {{session('success')}}</h5>
                                    @endif
                                </div>
                                <div class="row">
                                    @if(session()->has('error'))
                                    <h5 id="errorMessage" class="text-center alert-danger p-2 mt-1">
                                        {{session('error')}}</h5>
                                    @endif
                                </div>
                                <div class="card-header">
                                    <div class="mb-3">
                                        <form method="POST" action="{{ route('submitMscIncome') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="particular" name="particular"
                                                        placeholder="হিসাবের বিবরন" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" class="form-control" id="amount" name="amount"
                                                        placeholder="টাকার পরিমান" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary">সাবমিট</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>                          
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>তারিখ</th>
                                                <th>বিবরন</th>
                                                <th>টাকা</th>
                                            </tr>
                                        </thead>
                                        <tbody>
{{$mscIncomes}}

                                        </tbody>
                                    </table>
                                </div>                               
                            </div>

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