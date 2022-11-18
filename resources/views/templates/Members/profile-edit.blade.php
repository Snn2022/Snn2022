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
                        <div class="col-md-4">
                            <h4> <strong> সদস্য নং : {{$data->member_id}}</strong> </h4>
                        </div>
                        <div class="col-md-4">
                            <h4> <strong> বহি নং : {{$data->account->book_no}}</strong> </h4>
                        </div>

                        <div class="col-md-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('membersDetails',['id'=>$data->id])}}">সদস্যের তথ্যাবলি</a></li>
                                <li class="breadcrumb-item active">তথ্যা আপডেট</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section>
                <div class="card-body pt-0">
                    <form method="POST" action="{{ route('memberProfileEditSubmit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div>
                                        <table id="memberInfo" class="table table-bordered table-success">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" colspan="2">
                                                        সদস্যের তথ্য
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>সদস্যের নাম :</td>
                                                    <td>
                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                        <input type="text" name="member_name"
                                                            value="{{$data->member_name}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ফোন নাম্বার :</td>
                                                    <td>
                                                        <input type="text" name="phone" value="{{$data->phone}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>পিতার নাম :</td>
                                                    <td>
                                                        <input type="text" name="father_name"
                                                            value="{{$data->father_name}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>মাতার নাম :</td>
                                                    <td>
                                                        <input type="text" name="mother_name"
                                                            value="{{$data->mother_name}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>স্বামী/স্ত্রী নাম :</td>
                                                    <td>
                                                        <input type="text" name="spouse_name"
                                                            value="{{$data->spouse_name}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ভোটার আইডি নং : </td>
                                                    <td>
                                                        <input type="text" name="nid_number"
                                                            value="{{$data->nid_number}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>জন্ম তারিখ : </td>
                                                    <td>
                                                        <input type="date" name="dob" value="{{$data->dob}}">
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