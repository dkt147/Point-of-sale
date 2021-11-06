
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



    <div id="temp_msg" style="display: none" class="alert alert-success">
    </div>
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Inventory Report
                </h6>
                <div class="element-box">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ReportType">Select : </label>
                                    <select class="form-control">
                                        <option>All</option>
                                        <option selected="">Category</option>
                                        <option>Sub Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Value</label>
                                    <input id="User" name="User" placeholder="Cake" value="" class="form-control">
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
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Purchase Quantity</th>
                                    <th>Purchase Return</th>
                                    <th>Sale Quantity</th>
                                    <th>Damage Quantity</th>
                                    <th>Available Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cake</td>
                                    <td>Chocolate Cake</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>3.00</td>
                                    <td>197.00</td>
                                </tr>
                                <tr>
                                    <td>Cake</td>
                                    <td>Vanila Cake</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>3.00</td>
                                    <td>197.00</td>
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