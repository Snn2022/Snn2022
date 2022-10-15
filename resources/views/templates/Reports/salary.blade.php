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
                            <h1 class="m-0"> বেতন রিপোর্ট</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">ড্যাশর্বোড</a></li>
                                <li class="breadcrumb-item active">  বেতন রিপোর্ট</li>
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

                                <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>তারিখ</th>
                                                <th>বিবরন</th>
                                                <th>টাকা</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key => $item)
                                            <tr>
                                                <td>{{Carbon\Carbon::parse($item->date)->toFormattedDateString()}}</td>
                                                <td>{{$item->source}}</td>
                                                <td>{{$item->amount}} টাকা</td>
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
                <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    </div>
    <x-footer />