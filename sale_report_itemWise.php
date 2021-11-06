
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Item Wise Sale Report
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
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ReportType">ReportType : </label>
                                            <select class="form-control">
                                                <option>--Select--</option>
                                                <option>Choice 1</option>
                                                <option>Choice 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="ReportType">Category : </label>
                                            <select class="form-control">
                                                <option>--Select--</option>
                                                <option>Choice 1</option>
                                                <option>Choice 2</option>
                                            </select>
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
                                            <th>BarCode</th>
                                            <th>Shift</th>
                                            <th>Counter</th>
                                            <th>Item</th>
                                            <th>Unit</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Net Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>Default</td>
                                            <td>Default</td>
                                            <td>Chicken Boti</td>
                                            <td>Default</td>
                                            <td>1.00</td>
                                            <td>150.00</td>
                                            <td>150.00</td>
                                        </tr>
                                        <tr>
                                            <td>0001</td>
                                            <td>Default</td>
                                            <td>Default</td>
                                            <td>Chicken Boti</td>
                                            <td>Default</td>
                                            <td>1.00</td>
                                            <td>150.00</td>
                                            <td>150.00</td>
                                        </tr>
                                        <tr>
                                            <td>0001</td>
                                            <td>Default</td>
                                            <td>Default</td>
                                            <td>Chicken Boti</td>
                                            <td>Default</td>
                                            <td>1.00</td>
                                            <td>150.00</td>
                                            <td>150.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot style="background: #f7f9fa; font-weight: 500; font-size: 16px;">
                                        <tr>
                                            <td>Sale</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1.00</td>
                                            <td>150.00</td>
                                            <td>150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sale Return</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1.00</td>
                                            <td>150.00</td>
                                            <td>150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total Sale</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>1.00</td>
                                            <td>150.00</td>
                                            <td>150.00</td>
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