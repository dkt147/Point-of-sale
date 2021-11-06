
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



    <div id="temp_msg" style="display: none" class="alert alert-success">
    </div>
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">
                <h6 class="element-header">
                    Product Lost/Damage
                </h6>
                <div class="element-box">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date : </label>
                                    <input id="to_date" name="to_date" placeholder="Date" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="element-box">
                    <div class="table table-hover table-responsive table-striped">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Rate</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Reason</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control widthAuto" style="height: auto !important;">
                                                <option>Flour</option>
                                                <option>Sugar</option>
                                                <option>Chicken</option>
                                                <option>Beef</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input id="Counter" name="Counter" placeholder="Rate" value="" class="form-control widthAuto">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input id="Counter" name="Counter" placeholder="Quantity" value="" class="form-control widthAuto">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input id="Counter" name="Counter" placeholder="Amount" value="" class="form-control widthAuto">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <!-- <input id="Counter" name="Counter" placeholder="Reason" value="" class="form-control widthAuto"> -->
                                            <textarea rows="1" class="form-control"></textarea>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="edit_item btn btn-success add-row3">
                                            <i class="fa fa-plus" style="font-size: 16px; color: #fff;"></i>
                                        </button>
                                        <!-- <a href="#" class="remove_item btn btn-danger">
                                            <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                        </a> -->
                                    </td>
                                </tr>

                            </tbody>
                            <tfoot style="background: #f7f9fa; font-weight: 500; font-size: 16px;">
                                <tr>
                                    <td class="p-3">Total Sale</td>
                                    <td class="p-3" colspan="5">0.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-3">
                            <button type="submit" id="save" name="save" value="Save" class="btn btn-primary btn-block btn-flat">Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            

<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->