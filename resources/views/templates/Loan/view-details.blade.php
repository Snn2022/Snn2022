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

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section>
                <div class="card-body pt-0">
                    <div class="row">
                        @foreach($data as $key => $member)
                        <div class="col-md-4">
                            <h4>নাম : {{$member->member_name}}</h4>
                        </div>
                        <div class="col-md-4">
                            <h4>সদস্য নং: {{$member->member_id}}</h4>
                        </div>
                        <div class="col-md-4">
                            <h4>বহি নং : {{$member->book_no}}</h4>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach($data as $key => $member)
                        <table id="memberInfo" class="table table-bordered table-success">
                            <tr>
                                <th>
                                    <table id="memberInfo" class="table table-bordered table-success">                                     
                                    <thead class="text-center">
                                            <tr>
                                                <th colspan="2">লেনদেনের বিবরনী</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>মোট প্রদত্ত কিস্তি  :</td>
                                                <td>{{ $transaction->sum('installment')}} টি </td>
                                            </tr>

                                            <tr>
                                                <td>অবশিষ্ট কিস্তি :</td>
                                                <td>{{  100 - $transaction->sum('installment')}} টি</td>
                                            </tr>
                                            <tr>
                                                <td> মোট আদায় :</td>
                                                <td>{{$transaction->sum('amount')}} টাকা </td>
                                            </tr>
                                            <tr>
                                                <td>অবশিষ্ট :</td>
                                                <td>{{ $member->loan_status}} টাকা </td>
                                            </tr>
                                            <tr>
                                                <td> সঞ্চয় স্থিতি :</td>
                                                <td>{{ $transaction->sum('saving')}} টাকা </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </th>
                                <th>
                                    <table id="memberInfo" class="table table-bordered table-success">
                                        <thead class="text-center">
                                            <tr>
                                                <th colspan="2">একাউন্ট বিবরনী</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>লোন স্কিম :</td>
                                                <td>{{ $member->loan_skim}}</td>
                                            </tr>

                                            <tr>
                                                <td>কিস্তি প্রতি হার :</td>
                                                <td>{{ $member->per_installment}} টাকা/দিন</td>
                                            </tr>
                                            <tr>
                                                <td>সঞ্চয় হার :</td>
                                                <td>{{ $member->savings_skim}} টাকা/দিন</td>
                                            </tr>

                                            <tr>
                                                <td>সঞ্চয় স্থিতি :</td>
                                                <td>{{ $member->saving_status}} টাকা</td>
                                            </tr>
                                            <tr>
                                                <td>লোন স্থিতি :</td>
                                                <td>{{ $member->loan_status}} টাকা</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </th>
                            </tr>
                        </table>
                        @endforeach

                        <table id="memberInfo" class="table table-bordered table-primary">
                            <thead>
                                <th colspan="6">
                                    <h4> লোন রেকর্ড </h4>
                                </th>
                            </thead>
                            <thead>
                                <th> তারিখ </th>
                                <th> মেয়াদ </th>
                                <th class="text-right"> লোনের পরিমান </th>
                                <th class="text-right"> লভ্যাংশ </th>
                                <th class="text-right"># </th>
                            </thead>
                            <tbody>
                                @foreach($loanHistory as $key => $history)
                                <tr>
                                    <td>{{Carbon\Carbon::parse($history->start_date)->toFormattedDateString()}}</td>
                                    <td>{{Carbon\Carbon::parse($history->expire_date)->toFormattedDateString()}}</td>
                                    <td class="text-right">{{$history->loan_skim}}</td>
                                    <td class="text-right">{{$history->profit_loan}}</td>
                                    <td class="text-success text-center text-bold">
                                        {{' পরিশোধ '}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right"> মোট = <strong class="doubleUnderline">   {{$history->sum('profit_loan')}} </strong></td>
                                <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </section>

        </div>

    </div>
    <x-footer />