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
                            <h1 class="m-0">বেতন প্রদান</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">ড্যাশর্বোড</a></li>
                                <li class="breadcrumb-item active">বেতন প্রদান</li>
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
                                <div class="card-header p-4">
                                    <div class="mb-3">
                                        <form method="POST" action="{{ route('submitSalary') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="particular"
                                                        name="particular" placeholder="কর্মচারীর নাম" required>
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
                                <!-- /.card-header -->
                                @if(empty($data))
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
                                            @foreach($salary as $key => $item)
                                            <tr>
                                                <td>{{Carbon\Carbon::parse($item->date)->toFormattedDateString()}}</td>
                                                <td>{{$item->source}}</td>
                                                <td>{{$item->amount}} টাকা</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <form method="POST" action="{{ route('submitTransaction') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="member_account_status card card-body mt-0">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <strong> নাম : <span>
                                                                {{$data->member_name}}
                                                            </span></strong>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <strong class="mr-3"> সঞ্চয় : <span>
                                                                {{$data->savings_skim}} </span> টাকা। </strong>
                                                        <strong> কিস্তি : <span>
                                                                {{$data->per_installment}} </span> টাকা। </strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <strong> সঞ্চয় স্থিতি : <span>
                                                                {{$data->saving_status}} </span> টাকা। </strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <strong> লোন স্থিতি : <span>
                                                                {{$data->loan_status}}
                                                            </span> টাকা। </strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-body mt-0">
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <input type="hidden" name="member_id" value="{{$data->member_id}}">
                                                <input class="form-control" type="text" name="daily_saving"
                                                    placeholder="দৈনিক সঞ্চয়ের পরিমান">
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <input class="form-control" type="text" name="installment_day"
                                                    placeholder="কিস্তার সংখ্যা" required>
                                                <input type="hidden" name="installment_rate"
                                                    value="{{$data->per_installment}}">
                                                <input type="hidden" name="collector_name"
                                                    value="{{Auth::user()->name}}">
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <button type="submit" class="btn btn-primary btn-block">সাবমিট</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif

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