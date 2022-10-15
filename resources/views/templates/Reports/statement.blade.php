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
                            <h1 class="m-0">আয় ব্যায় স্টেটমেন্ট</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">ড্যাশর্বোড</a></li>
                                <li class="breadcrumb-item active"> আয় ব্যায় স্টেটমেন্ট</li>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">আয়-সমূহ</th>
                                                    </tr>
                                                    <tr>
                                                        <th>তারিখ</th>
                                                        <th>বিবরন</th>
                                                        <th>টাকা</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($collections as $key => $collection)
                                                    <tr>
                                                        <td>{{Carbon\Carbon::parse($collection->date)->toFormattedDateString()}}
                                                        </td>
                                                        <td>{{$collection->source}}</td>
                                                        <td>{{$collection->amount}}</td>
                                                    </tr>
                                                    @endforeach
                                                    @foreach($miscIncomes as $key => $miscIncome)
                                                    <tr>
                                                        <td>{{Carbon\Carbon::parse($miscIncome->date)->toFormattedDateString()}}
                                                        </td>
                                                        <td>{{$miscIncome->source}}</td>
                                                        <td>{{$miscIncome->amount}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">ব্যয়-সমুহ</th>
                                                    </tr>
                                                    <tr>
                                                        <th>তারিখ</th>
                                                        <th>বিবরন</th>
                                                        <th>টাকা</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($paidSalary as $key => $item)
                                                    <tr>
                                                        <td>{{Carbon\Carbon::parse($item->date)->toFormattedDateString()}}
                                                        </td>
                                                        <td>{{$item->source}}</td>
                                                        <td>{{$item->amount}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


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