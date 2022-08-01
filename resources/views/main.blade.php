<x-header />

<body>
    <div class="row">
        <div class="col-lg-12 p-2">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-lg-12 text-center">
                            <h2>pad header</h2>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section>
                <div class="card">
                    <div class="card-body">
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
                                                    <td>3122-01</td>
                                                    <td colspan="2">
                                                        <div class="input-group date" id="reservationdate"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
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
                                                        <div class="input-group date" id="reservationdate"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                data-target="#reservationdate"
                                                                placeholder="Check-in Date" />
                                                            <div class="input-group-append"
                                                                data-target="#reservationdate"
                                                                data-toggle="datetimepicker">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td colspan="2">
                                                        <div class="input-group date" id="reservationdate"
                                                            data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input"
                                                                data-target="#reservationdate"
                                                                placeholder="Check-out Date" />
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
                                                <!--total date count-->
                                                <tr>
                                                    <td>Days</td>
                                                    <td>4</td>
                                                    <td>Rooms</td>
                                                    <td>Total</td>
                                                </tr>
                                                <!--Room types-->
                                                <tr>
                                                    <td>Room Type</td>
                                                    <td colspan="3">
                                                        <select class="form-control">
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <!--Source -->
                                                <tr>
                                                    <td>Source</td>
                                                    <td colspan="2">
                                                        <select class="form-control">
                                                            <option>select booking source</option>
                                                            <option>GoMMT</option>
                                                            <option>Booking.com</option>
                                                            <option>Agoda</option>
                                                            <option>Xperia</option>
                                                        </select>
                                                    </td>                                                   
                                                </tr>
                                                 <!--Income-->
                                                 <tr>
                                                    <td>Advance</td>
                                                    <td>
                                                    <select class="form-control">
                                                            <option>Bank Deposit</option>
                                                            <option>Cash</option>
                                                            <option>Phone Pay</option>
                                                            <option>OTA Deposit</option>
                                                        </select>
                                                    </td>
                                                    <td>Payment</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option>Bank Deposit</option>
                                                            <option>Cash</option>
                                                            <option>Phone Pay</option>
                                                            <option>OTA Deposit</option>
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
                            <table style="background-color:rgb(144,146,225, 0.2);" class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>Room Type</th>
                                        <th>Total Rooms</th>
                                        <th>Days</th>
                                        <th>Rate</th>
                                        <th>Amount</th>
                                        <th>GST</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <select class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                        </td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                        <td>Total Rooms</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--Room details and bill section end-->
                    </div>
                    <!-- /.card-body -->
                </div>
            </section>
        </div>
    </div>

    <x-footer />