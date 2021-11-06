
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Inventory Manufacture
                        </h6>
                        <div class="element-box">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input name="to_date" placeholder="Product Name" class="form-control" value="">
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
                                <table id="" class="display">
                                    <thead>
                                        <tr>
                                            <th>Manufacture Product</th>
                                            <th>Sub Product</th>
                                            <th>Required Quantity</th>
                                            <th>Purchase Quantity</th>
                                            <th>Purchase Return</th>
                                            <th>Sales Quantity</th>
                                            <th>Available Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Vanila Cake</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>0.00</td>
                                            <td>50</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Butter Cream</td>
                                            <td>10.00</td>
                                            <td>500.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>1000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Flour</td>
                                            <td>8.00</td>
                                            <td>100.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>2000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Eggs</td>
                                            <td>15.00</td>
                                            <td>1000.00</td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td>200</td>
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