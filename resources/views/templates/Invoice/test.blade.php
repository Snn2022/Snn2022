<x-header />

<body>
    <div class="row">
        <div class="col-lg-12 p-2">


            <section>
                <div class="card">
                    <div class="card-body">
                        <!-- form start -->
                        <form action="{{route('invoice-submit')}}" method="post">
                            @csrf

                            <!--Room details and bill section start-->
                            <div class="row">
                                <table style="background-color:rgb(183,155,225, 0.1);" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <tr>
                                                        <th>Room Type</th>
                                                        <th>Total Rooms</th>
                                                        <th>Days</th>
                                                        <th>Rate</th>
                                                        <th>Amount</th>
                                                        <th>GST</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    <tbody>
                                                       
                                                        <tr>
                                                            <td style="width:20%;">
                                                                <select name="room_name" class="form-control">
                                                                    <option value="{{'ac room'}}">
                                                                        {{'ac room'}}</option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control"
                                                                    id="number_of_room" name="number_of_room"
                                                                    placeholder="Number of rooms">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control"
                                                                    id="number_of_days" name="number_of_days"
                                                                    placeholder="Number of days">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate" value="{{'ac room'}}">
                                                                {{'ac room'}}
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate"
                                                                    value="1000">
                                                                <span id="total_room_amount"></span>

                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
                                                                <span id="gst"></span>

                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_amount" name="total_room_amount">

                                                            </td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                            </th>
                                        </tr>
                                        <!--Payment calculation start-->
                                        <tr>
                                            <th>
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <tr>
                                                        <th style="width:80%;">
                                                            <input type="hidden" id="amount_in_words"
                                                                name="amount_in_words">
                                                            Amount in words:
                                                        </th>

                                                        <th>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    Room amount
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="room_amount"
                                                                        name="room_amount">
                                                                    14000
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    CGST
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="cgst" name="cgst">
                                                                    864
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    SGST
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="sgst" name="sgst">
                                                                    864
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div style="border-right:0.5px solid lightgray; border-bottom:0.5px solid lightgray; text-align:left;"
                                                                    class="col-6">
                                                                    Total
                                                                </div>
                                                                <div style="border-bottom:0.5px solid lightgray; text-align:right;"
                                                                    class="col-6">
                                                                    <input type="hidden" id="total" name="total">
                                                                    16128
                                                                </div>
                                                            </div>


                                                        </th>
                                                    </tr>

                                                </table>
                                            </th>
                                        </tr>
                                        <!--Payment calculation end-->
                                    </tbody>
                                </table>

                            </div>
                            <!--Room details and bill section end-->
                            <div class="row">
                                <button class="col-md-4 btn btn-success toastrDefaultSuccess">Save</button>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                    <!-- /.card-body -->
                </div>
            </section>
        </div>
    </div>

    <x-footer />