
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Sale Report
                        </h6>
                        <div class="element-box">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Start Date : </label>
                                            <input id="from_date" name="from_date" placeholder="From Date" class="form-control" value="From Date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>End Date : </label>
                                            <input id="to_date" name="to_date" placeholder="To Date" class="form-control" value="To Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-3">
                                        <button type="submit" id="save" name="save" value="Save" class="btn btn-primary btn-block btn-flat">Generate Report
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="element-box">
                            <div class="table table-hover table-responsive table-striped">
                                <table id="myTable" class="display">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Bile Number</th>
                                            <th>Order Number</th>
                                            <th>Sold By</th>
                                            <th>Customer</th>
                                            <th>Total Sale</th>
                                            <th>Total Discount</th>
                                            <th>Tax Amount</th>
                                            <th>Net Amount</th>
                                            <th>Payment Mode</th>
                                            <th>Card Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2020-03-19 14:51:50</td>
                                            <td>00004/1Ha</td>
                                            <td>0</td>
                                            <td>Haris</td>
                                            <td>-</td>
                                            <td>2500.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>2500.00</td>
                                            <td>Cash</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="background: #f7f9fa; font-weight: 500; font-size: 16px;">
                                        <tr>
                                            <td>Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>2500.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>2500.00</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->