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
                            <h1 class="m-0"> কালেকশন</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">ড্যাশর্বোড</a></li>
                                <li class="breadcrumb-item active"> কালেকশন</li>
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
                                    <div class="col-md-4 mb-3">
                                        <form method="POST" action="{{ route('searchCollectionReport') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group">
                                                <input type="date" class="form-control" id="collection_report_date"
                                                    name="collection_report_date" required>
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
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>তারিখ</th>
                                                <th>সদস্য নং</th>
                                                <th>কিস্তির সংখ্যা</th>
                                                <th>কিস্তি</th>
                                                <th>সঞ্চয়</th>
                                                <th>মোট</th>
                                                <th>জমাকারী</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key => $collection)
                                            <tr>
                                                <td>{{Carbon\Carbon::parse($collection->date)->toFormattedDateString()}}
                                                </td>
                                                <td>{{$collection->source}}</td>
                                                <td>{{$collection->transaction->installment}}</td>
                                                <td>{{$collection->transaction->amount}} টাকা </td>
                                                <td>{{$collection->transaction->saving}} টাকা</td>
                                                <td>{{$collection->amount}} টাকা</td>
                                                <td>{{$collection->transaction->collector_id}}</td>
                                            </tr>                                           
                                            @endforeach
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-right">মোট = </td>
                                                <td class="text-right"><span class="doubleUnderline"><span
                                                            style="font-size:20px;">{{$collection->transaction->sum('amount')}}</span>
                                                        টাকা </span></td>
                                                <td class="text-right"><span class="doubleUnderline"> <span
                                                            style="font-size:20px;">{{$collection->transaction->sum('saving')}}</span>
                                                        টাকা </span></td>
                                                <td class="text-right"><span class="doubleUnderline"> <span
                                                            style="font-size:20px;">{{$data->sum('amount')}}</span>
                                                        টাকা </span></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <th colspan="5" class="text-right">সর্মোট = &nbsp; <strong
                                                        class="doubleUnderline"><span style="font-size:20px;">
                                                          {{$collection->transaction->sum('amount')+$collection->transaction->sum('saving')+$data->sum('amount')}} </span>
                                                        টাকা</strong></th>
                                            </tr>
                                        </tfoot>
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