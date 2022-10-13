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
                        <div class="col-md-6">
                            <h4> <strong> সদস্য নাম্বার : {{$data->member_id}}</strong> </h4>
                        </div>

                        <div class="col-md-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('members')}}">সদস্য তালিকা</a></li>
                                <li class="breadcrumb-item active">সদস্যের তথ্যাবলি</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-md-4">
                            <table id="memberInfo" class="table table-bordered table-success">
                                <thead>
                                    <tr>
                                        <th colspan="2">একাউন্ট বিবরনী</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>লোন স্কিম :</td>
                                        <td>{{ '10,000'}}</td>
                                    </tr>
                                    <tr>
                                        <td>প্রফিট হার (40%) :</td>
                                        <td>
                                            {{4000}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>পরিশোধ সময়কাল :</td>
                                        <td>
                                            {{100}} দিন
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>কিস্তি প্রতি হার :</td>
                                        <td>
                                            {{40}} টাকা/দিন
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>মোট পরিশোধ যোগ্য :</td>
                                        <td>
                                            {{'14,000'}}
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>সঞ্চয় হার :</td>
                                        <td>{{ '40'}}</td>
                                    </tr>

                                    <tr>
                                        <td>মোট সঞ্চয় স্থিতি :</td>
                                        <td>
                                            {{'4,000'}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5">
                            <table id="memberInfo" class="table table-bordered table-success">
                                <thead>
                                    <tr>
                                        <th class="text-center" colspan="2">সদস্যের তথ্য</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>সদস্যের নাম :</td>
                                        <td>
                                            {{$data->member_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ফোন নাম্বার :</td>
                                        <td>
                                            {{$data->phone}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>পিতার নাম :</td>
                                        <td>
                                            {{$data->father_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>মাতার নাম :</td>
                                        <td>
                                            {{$data->mother_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>স্বামী/স্ত্রী নাম :</td>
                                        <td>
                                            {{$data->spouse_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ভোটার আইডি নং : </td>
                                        <td>
                                            {{$data->nid_number}}
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3 text-center">
                            <img style="height:180px; width:180px;" class="img-circle img-fluid"
                                src="{{asset('')}}{{$data->photo}}" alt="member photo">
                            <img style="height:220px; width:180px;" class="img-thumbnail img-fluid"
                                src="{{asset('')}}{{$data->nid_photo}}" alt="member photo">
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <table id="memberInfo" class="table table-primary">
                                <tbody>
                                    <tr>
                                        <td>গ্রামের নাম :</td>
                                        <td>
                                            {{$data->member_name}}
                                        </td>
                                        <td>পোস্ট :</td>
                                        <td>
                                            {{$data->member_name}}
                                        </td>
                                        <td>ইউনিয়ন : </td>
                                        <td>
                                            {{$data->member_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>থানা : </td>
                                        <td>
                                            {{$data->member_name}}
                                        </td>
                                        <td class="text-left">জেলা : </td>
                                        <td class="text-left">
                                            {{$data->member_name}}
                                        </td>
                                        <td colspan="3" class="text-left"></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
    <x-footer />