
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            View Product Lost/Damage
                        </h6>
                        <div class="element-box">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date : </label>
                                            <input id="from_date" name="to_date" placeholder="Date" class="form-control" value="To Date">
                                        </div>
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
                                            <th>Date</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Amount</th>
                                            <th>Reason</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>03/4/2020</td>
                                            <td>Chocolate Cake</td>
                                            <td>3</td>
                                            <td>1000</td>
                                            <td>3000</td>
                                            <td>Damage by rats</td>
                                            <td>
                                                <a href="product_damage.php" class="edit_item btn btn-success">
                                                    <i class="fa fa-edit" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                                <button class="remove_item btn btn-danger">
                                                    <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>03/4/2020</td>
                                            <td>Vanila Cake</td>
                                            <td>2</td>
                                            <td>1200</td>
                                            <td>2400</td>
                                            <td>Theft</td>
                                            <td>
                                                <a href="product_damage.php" class="edit_item btn btn-success">
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