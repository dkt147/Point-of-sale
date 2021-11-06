
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Expense Master
                        </h6>
                        <div class="element-box">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Expense Name </label>
                                            <input name="to_date" placeholder="Expense Name" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <button type="submit" id="save" name="save" value="Save" onclick="return validate();" class="btn btn-primary btn-block btn-flat"> Save
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
                                            <th>Expense Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001</td>
                                            <td>Petrol Allowance</td>
                                            <td>
                                                <button class="edit_item btn btn-success"  data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fa fa-edit" style="font-size: 16px; color: #fff;"></i>
                                                </button>
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
            

            <!-- Modal Reserved Order -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Dine Inn</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>S.No. </label>
                                                <input disabled="" name="to_date" placeholder="Expense Name" class="form-control" value="0001">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Expense Name </label>
                                                <input name="to_date" placeholder="Expense Name" class="form-control" value="Petrol Allowance">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" onclick="DineInn()">Save</button>
                        </div>
                    </div>
                </div>
            </div>

<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->