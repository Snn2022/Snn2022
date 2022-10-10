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
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6">
                  <table id="memberInfo" class="table table-bordered table-success">
                    <thead class="text-center">
                      <tr>
                        <th colspan="2">একাউন্ট বিবরনী</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>লোন স্কিম :</td>
                        <td>{{ $data->account->loan_skim}}</td>
                      </tr>
                      <tr>
                        <td>প্রফিট হার (30%) :</td>
                        <td>{{ $data->account->profit_loan}}</td>
                      </tr>
                      <tr>
                        <td>পরিশোধ সময়কাল :</td>
                        <td>{{ $data->account->duration}} দিন</td>
                      </tr>
                      <tr>
                        <td>কিস্তি প্রতি হার :</td>
                        <td>{{ $data->account->per_installment}} টাকা/দিন</td>
                      </tr>
                      <tr>
                        <td>মোট পরিশোধ যোগ্য :</td>
                        <td>{{ $data->account->loan_skim + $data->account->profit_loan}} টাকা</td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>সঞ্চয় হার :</td>
                        <td>{{ $data->account->savings_skim}} টাকা/দিন</td>
                      </tr>

                      <tr>
                        <td>মোট সঞ্চয় স্থিতি :</td>
                        <td>{{ $data->account->saving_status}} টাকা</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-6">
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
                      <tr>
                        <td>জন্ম তারিখ : </td>
                        <td>
                          {{$data->dob}}
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <div>
                  <table id="memberInfo" class="table table-bordered table-primary">
                    <thead class="text-center">
                      <tr>
                        <th colspan="2">ঠিকানা</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width:30%;">গ্রামের নাম</td>
                        <td>{{$data->village}}</td>
                      </tr>
                      <tr>
                        <td>পোস্ট :</td>
                        <td>{{$data->post}}</td>
                      </tr>
                      <tr>
                        <td>ইউনিয়ন :</td>
                        <td>{{$data->union}}</td>
                      </tr>
                      <tr>
                        <td>থানা :</td>
                        <td>{{$data->thana}}</td>
                      </tr>
                      <tr>
                        <td>জেলা :</td>
                        <td>{{$data->district}}</td>
                      </tr>
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-3 text-center">
              <img style="height:180px; width:180px;" class="img-circle img-fluid" src="{{asset('')}}{{$data->photo}}"
                alt="member photo">
              <img style="height:200px; width:180px;" class="img-thumbnail img-fluid mt-2"
                src="{{asset('')}}{{$data->nid_photo}}" alt="nid photo">
            </div>
          </div>
        </div>
      </section>

    </div>

  </div>
  <x-footer />