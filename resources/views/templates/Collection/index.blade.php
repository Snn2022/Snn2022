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
                            <h1 class="m-0">দৈনিক কালেকশন</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">ড্যাশর্বোড</a></li>
                                <li class="breadcrumb-item active">দৈনিক কালেকশন</li>
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
                                    <div class="col-md-4 mb-3">
                                        <form method="POST" action="{{ route('collectionSearch') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="book_no" name="book_no"
                                                    placeholder="বহি : নং লিখুন।" aria-describedby="book_noPrepend"
                                                    required>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-success input-group-text"
                                                        id="book_noPrepend">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- /.card-header -->
                                @if(empty($data))
                                <div class="card-body">
                                    <table  class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-left">তারিখ</th>
                                                <th class="text-left">নাম</th>
                                                <th class="text-right">সঞ্চয়</th>
                                                <th class="text-right">কিস্তি</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($transaction as $key => $installment)
                                            <tr>
                                                <td class="text-left">{{Carbon\Carbon::parse($installment->date)->toFormattedDateString()}}
                                                </td>
                                                <td class="text-left">{{$installment->members->member_name}}</td>
                                                <td class="text-right">{{$installment->saving}} টাকা</td>
                                                <td class="text-right">{{$installment->amount}} টাকা</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2" class="text-right" >মোট = </td>
                                                <td class="text-right"><span class="doubleUnderline"><span style="font-size:20px;">{{$transaction->sum('saving')}}</span> টাকা  </span></td>
                                                <td class="text-right"><span class="doubleUnderline"> <span style="font-size:20px;">{{$transaction->sum('amount')}}</span> টাকা </span></td>                                               
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th colspan="3" class="text-right">সর্মোট = &nbsp; <strong class="doubleUnderline"><span style="font-size:20px;"> {{$transaction->sum('saving')+$transaction->sum('amount')}}</span> টাকা</strong></th>                                              
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                @else
                                <form method="POST" action="{{ route('submitTransaction') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="member_account_status card card-body mt-0">
                                        <div class="row">
                                            <div class="col-md-2 p-2">
                                                <img style="width:50%;" class="img-fluid"
                                                    src="{{asset('')}}{{$data->members->photo}}" alt="member photo">
                                            </div>
                                            <div class="col-md-10 text-left">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <th>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <strong> নাম : <span>
                                                                            {{$data->member_name}}
                                                                        </span></strong>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <strong> সঞ্চয় : <span>
                                                                            {{$data->savings_skim}} </span> টাকা।
                                                                    </strong>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <strong> কিস্তি : <span>
                                                                            {{$data->per_installment}} </span> টাকা।
                                                                    </strong>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <strong> সঞ্চয় স্থিতি : <span>
                                                                            {{$data->saving_status}} </span> টাকা।
                                                                    </strong>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <strong> লোন স্থিতি : <span>
                                                                            {{$data->loan_status}}
                                                                        </span> টাকা। </strong>
                                                                </div>

                                                            </div>
                                                        </th>
                                                    </thead>
                                                </table>
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