
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Purchase View
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ReportType">Supplier : </label>
                                            <select class="form-control">
                                                <option>--Select--</option>
                                                <option>Unilever Products</option>
                                                <option>Choice 2</option>
                                                <option>Choice 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row text-center">
                                    <div class="col-md-3">
                                        <button type="submit" id="save" name="save" value="Save" class="btn btn-primary btn-block btn-flat">Generate Report
                                        </button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
    
                        <div class="element-box">
                            <div class="table table-hover table-responsive table-striped">
                                <table id="myTable" class="display">
                                    <thead>
                                        <tr>
                                            <th>Purchase No.</th>
                                            <th>Purchase Date</th>
                                            <th>Supplier Name</th>
                                            <th>Supplier Invoice</th>
                                            <th>Total Amount</th>
                                            <th>Purchase Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>03/4/2020</td>
                                            <td>Unilever</td>
                                            <td>-</td>
                                            <td>1200</td>
                                            <td>Return</td>
                                            <td>
                                                <a href="purchase_return.php" class="edit_item btn btn-success">
                                                    <i class="fa fa-edit" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                                <button class="remove_item btn btn-danger">
                                                    <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>01/4/2020</td>
                                            <td>Unilever</td>
                                            <td>Inv5563</td>
                                            <td>1800</td>
                                            <td>New</td>
                                            <td>
                                                <a href="purchase_entry.php" class="edit_item btn btn-success">
                                                    <i class="fa fa-edit" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                                <button class="remove_item btn btn-danger">
                                                    <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->