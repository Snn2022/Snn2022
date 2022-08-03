<x-header />

<body>
    <div class="row">
        <div class="col-lg-12 p-2">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-lg-12 text-center p-2 bg-info">
                            <h2>Hotel Somnath Atithigruh</h2>
                        </div>
                        @if(session()->has('success'))
                        <div class="col-md-4 offset-md-4 text-center alert-success p-2 mt-1">
                            <h5> {{session('success')}}</h5>
                        </div>
                        @endif
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section>
                <div class="card">
                    <div class="card-body">
                        <!-- form start -->
                        <form action="{{route('invoice-submit')}}" method="post">
                            @csrf
                            <!--Customer data section start-->
                            <div class="row">
                                <table style="background-color:rgb(183,155,225, 0.1);" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <!--Left side data-->
                                            <th style="width:50%;">
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <!--Invoice no and date-->
                                                    <tr>
                                                        <td>Invoice No :</td>
                                                        <td>
                                                            <input type="hidden" id="invoice_no" name="invoice_no"> 
                                                            3122-01
                                                        </td>
                                                        <td colspan="2">
                                                            <div class="input-group date" id="reservationdate"
                                                                data-target-input="nearest">
                                                                <input type="text" name="reservationdate"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#reservationdate"
                                                                    placeholder="Select Date" />
                                                                <div class="input-group-append"
                                                                    data-target="#reservationdate"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--Check-in and Check-out date-->
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="input-group date" id="check_in_date"
                                                                data-target-input="nearest">
                                                                <input type="text" name="check_in_date"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#check_in_date"
                                                                    placeholder="Check-in Date" />
                                                                <div class="input-group-append"
                                                                    data-target="#check_in_date"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td colspan="2">
                                                            <div class="input-group date" id="check_out_date"
                                                                data-target-input="nearest">
                                                                <input type="text" name="check_out_date"
                                                                    class="form-control datetimepicker-input"
                                                                    data-target="#check_out_date"
                                                                    placeholder="Check-out Date" />
                                                                <div class="input-group-append"
                                                                    data-target="#check_out_date"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!--total date count-->
                                                    <tr>
                                                        <td>Days</td>
                                                        <td>
                                                            <input type="hidden" id="no_of_days" name="no_of_days" value="{{'4'}}">
                                                        4
                                                        </td>                                                       
                                                        <td colspan="2">
                                                        <input type="hidden" id="income_total" name="income_total" value="{{'10000'}}">
                                                            Total of income
                                                        </td>
                                                    </tr>
                                                    <!--Room types-->
                                                    <tr>
                                                        <td>Room Type</td>
                                                        <td colspan="3">
                                                            <select class="form-control">
                                                                <option value="">Select Room Type</option>
                                                                <option>Double Bed Non AC</option>
                                                                <option>Double Bed AC</option>
                                                                <option>Triple Bed AC</option>
                                                                <option>Triple Bed Non AC</option>
                                                                <option>Four Bed AC</option>
                                                                <option value="">Four Bed Non AC</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!--Source -->
                                                    <tr>
                                                        <td>Source</td>
                                                        <td colspan="2">
                                                            <select class="form-control">
                                                                <option>Select booking source</option>
                                                                <option>Yatra</option>
                                                                <option>Cash</option>
                                                                <option>Bank Deposit</option>
                                                                <option>PhonePay</option>
                                                                <option value="Expedia">Expedia</option>
                                                                <option value="Agoda">Agoda</option>
                                                                <option value="Booking.com">Booking.com</option>
                                                                <option value="GoMMT">GoMMT</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <!--Income-->
                                                    <tr>
                                                        <td>Advance</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option value="">Select Option</option>
                                                                <option value="OTA DEPOSIT">OTA DEPOSIT</option>
                                                                <option value="Phone Pay">Phone Pay</option>
                                                                <option value="Cash">Cash</option>
                                                                <option value="Bank Deposit">Bank Deposit</option>
                                                            </select>
                                                        </td>
                                                        <td>Payment</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option value="">Select Option</option>
                                                                <option value="OTA DEPOSIT">OTA DEPOSIT</option>
                                                                <option value="Phone Pay">Phone Pay</option>
                                                                <option value="Cash">Cash</option>
                                                                <option value="Bank Deposit">Bank Deposit</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </th>

                                            <th></th>
                                            <!--Right side data-->
                                            <th style="width:50%;">
                                                <table id="example2" class="table table-bordered table-hover">
                                                    <!--GSTN data-->
                                                    <tr>
                                                        <td style="width:35%;">Hotel GSTN Number :</td>
                                                        <td>GSTN Number</td>
                                                    </tr>
                                                    <!--Customer Name -->
                                                    <tr>
                                                        <td>Customer Name</td>
                                                        <td>Mr. Mohit Soni</td>
                                                    </tr>
                                                    <!--Customer GSTN data -->
                                                    <tr>
                                                        <td>Customer GSTN Number</td>
                                                        <td>GSTN Number</td>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!--Customer data section end-->
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
                                                                <select class="form-control">
                                                                    <option value="">Select Room Type</option>
                                                                    <option value="Extra Matress">Extra Matress</option>
                                                                    <option value="Four Bed Non AC">Four Bed Non AC
                                                                    </option>
                                                                    <option value="Four Bed AC">Four Bed AC</option>
                                                                    <option value="Triple Bed Non AC">Triple Bed Non AC
                                                                    </option>
                                                                    <option value="Triple Bed AC">Triple Bed AC</option>
                                                                    <option value="Double Bed AC">Double Bed AC</option>
                                                                    <option value="Double Bed Non AC">Double Bed Non AC
                                                                    </option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_room"
                                                                    name="total_room" placeholder="Number of rooms" value="2">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_days"
                                                                    name="total_days" placeholder="Number of days" value="1">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate" value="12000">
                                                                    1200
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate" value="12000">
                                                                    2400
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
                                                                    288
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_amount" name="total_room_amount" >
                                                                    2688
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%;">
                                                                <select class="form-control">
                                                                    <option value="">Select Room Type</option>
                                                                    <option value="Extra Matress">Extra Matress</option>
                                                                    <option value="Four Bed Non AC">Four Bed Non AC
                                                                    </option>
                                                                    <option value="Four Bed AC">Four Bed AC</option>
                                                                    <option value="Triple Bed Non AC">Triple Bed Non AC
                                                                    </option>
                                                                    <option value="Triple Bed AC">Triple Bed AC</option>
                                                                    <option value="Double Bed AC">Double Bed AC</option>
                                                                    <option value="Double Bed Non AC">Double Bed Non AC
                                                                    </option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_room"
                                                                    name="total_room" placeholder="Number of rooms">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_days"
                                                                    name="total_days" placeholder="Number of days">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_amount" name="total_room_amount">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%;">
                                                                <select class="form-control">
                                                                    <option value="">Select Room Type</option>
                                                                    <option value="Extra Matress">Extra Matress</option>
                                                                    <option value="Four Bed Non AC">Four Bed Non AC
                                                                    </option>
                                                                    <option value="Four Bed AC">Four Bed AC</option>
                                                                    <option value="Triple Bed Non AC">Triple Bed Non AC
                                                                    </option>
                                                                    <option value="Triple Bed AC">Triple Bed AC</option>
                                                                    <option value="Double Bed AC">Double Bed AC</option>
                                                                    <option value="Double Bed Non AC">Double Bed Non AC
                                                                    </option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_room"
                                                                    name="total_room" placeholder="Number of rooms">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_days"
                                                                    name="total_days" placeholder="Number of days">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_amount" name="total_room_amount">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%;">
                                                                <select class="form-control">
                                                                    <option value="">Select Room Type</option>
                                                                    <option value="Extra Matress">Extra Matress</option>
                                                                    <option value="Four Bed Non AC">Four Bed Non AC
                                                                    </option>
                                                                    <option value="Four Bed AC">Four Bed AC</option>
                                                                    <option value="Triple Bed Non AC">Triple Bed Non AC
                                                                    </option>
                                                                    <option value="Triple Bed AC">Triple Bed AC</option>
                                                                    <option value="Double Bed AC">Double Bed AC</option>
                                                                    <option value="Double Bed Non AC">Double Bed Non AC
                                                                    </option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_room"
                                                                    name="total_room" placeholder="Number of rooms">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_days"
                                                                    name="total_days" placeholder="Number of days">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_amount" name="total_room_amount">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%;">
                                                                <select class="form-control">
                                                                    <option value="">Select Room Type</option>
                                                                    <option value="Extra Matress">Extra Matress</option>
                                                                    <option value="Four Bed Non AC">Four Bed Non AC
                                                                    </option>
                                                                    <option value="Four Bed AC">Four Bed AC</option>
                                                                    <option value="Triple Bed Non AC">Triple Bed Non AC
                                                                    </option>
                                                                    <option value="Triple Bed AC">Triple Bed AC</option>
                                                                    <option value="Double Bed AC">Double Bed AC</option>
                                                                    <option value="Double Bed Non AC">Double Bed Non AC
                                                                    </option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_room"
                                                                    name="total_room" placeholder="Number of rooms">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_days"
                                                                    name="total_days" placeholder="Number of days">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_amount" name="total_room_amount">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:20%;">
                                                                <select class="form-control">
                                                                    <option value="">Select Room Type</option>
                                                                    <option value="Extra Matress">Extra Matress</option>
                                                                    <option value="Four Bed Non AC">Four Bed Non AC
                                                                    </option>
                                                                    <option value="Four Bed AC">Four Bed AC</option>
                                                                    <option value="Triple Bed Non AC">Triple Bed Non AC
                                                                    </option>
                                                                    <option value="Triple Bed AC">Triple Bed AC</option>
                                                                    <option value="Double Bed AC">Double Bed AC</option>
                                                                    <option value="Double Bed Non AC">Double Bed Non AC
                                                                    </option>
                                                                </select>
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_room"
                                                                    name="total_room" placeholder="Number of rooms">
                                                            </td>
                                                            <td style="width:15%;">
                                                                <input type="text" class="form-control" id="total_days"
                                                                    name="total_days" placeholder="Number of days">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="room_rate"
                                                                    name="room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control"
                                                                    id="total_room_rate" name="total_room_rate">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" class="form-control" id="gst"
                                                                    name="gst">
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