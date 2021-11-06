
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Expense View
                        </h6>
                        <div class="element-box">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>From Date : </label>
                                            <input id="from_date" name="to_date" placeholder="To Date" class="form-control" value="To Date">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>To Date : </label>
                                            <input id="to_date" name="to_date" placeholder="To Date" class="form-control" value="To Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-2">
                                        <button type="submit" id="save" name="save" value="Save" class="btn btn-primary btn-block btn-flat">Search
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
                                            <th>S.No.</th>
                                            <th>Expense Date</th>
                                            <th>Expense Type</th>
                                            <th>Amount</th>
                                            <th>Notes</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>03/4/2020</td>
                                            <td>Petrol Allowance</td>
                                            <td>100</td>
                                            <td>For Order Delivery</td>
                                            <td>
                                                <a href="expense_entry.php" class="edit_item btn btn-success">
                                                    <i class="fa fa-edit" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                                <button class="remove_item btn btn-danger">
                                                    <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total Expenses</th>
                                            <th colspan="2"></th>
                                            <th>100</th>
                                            <th colspan="2"></th>
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