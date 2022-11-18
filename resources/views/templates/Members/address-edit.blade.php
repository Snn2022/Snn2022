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
                    <div class="row">
                        @if(session()->has('success'))
                        <h5 id="successMessage" class="text-center alert-success p-2 mt-1">
                            {{session('success')}}</h5>
                        @endif
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <h4> <strong> সদস্য নং : {{$data->member_id}}</strong> </h4>
                        </div>
                        <div class="col-md-4">
                            <h4> <strong> বহি নং : {{$data->account->book_no}}</strong> </h4>
                        </div>

                        <div class="col-md-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a
                                        href="{{route('membersDetails',['id'=>$data->id])}}">সদস্যের তথ্যাবলি</a></li>
                                <li class="breadcrumb-item active">ঠিকানা আপডেট</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section>
                <div class="card-body pt-0">
                    <form method="POST" action="{{ route('membersAddressEditSubmit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div>
                                        <table id="memberInfo" class="table table-bordered table-primary">
                                            <thead class="text-center">
                                                <tr>
                                                    <th colspan="2">
                                                        ঠিকানা
                                                        <span class="float-end">
                                                            <a href="{{route('membersEditProfile',['id'=>$data->id])}}">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:30%;">গ্রামের নাম</td>
                                                    <td>
                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                        <input type="text" name="village"
                                                            value="{{$data->village}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>পোস্ট :</td>
                                                    <td>
                                                        <input type="text" name="post" value="{{$data->post}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ইউনিয়ন :</td>
                                                    <td>
                                                        <input type="text" name="union" value="{{$data->union}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>থানা :</td>
                                                    <td>
                                                        <input type="text" name="thana" value="{{$data->thana}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>জেলা :</td>
                                                    <td>
                                                        <input type="text" name="district"
                                                            value="{{$data->district}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="form-controlfloat-end">
                                                        <button class="form-control btn btn-success"> আপডেট করুন
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <img style="height:180px; width:180px;" class="img-circle img-fluid"
                                    src="{{asset('')}}{{$data->photo}}" alt="member photo">
                                <img style="height:200px; width:180px;" class="img-thumbnail img-fluid mt-2"
                                    src="{{asset('')}}{{$data->nid_photo}}" alt="nid photo">
                            </div>
                        </div>
                    </form>
                </div>
            </section>

        </div>

    </div>
    <x-footer />