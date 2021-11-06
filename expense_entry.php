
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->


            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    Expense Entry
                                </h6>
                                <div class="element-box">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Expense Date : </label>
                                                    <input id="from_date" name="from_date" placeholder="From Date" class="form-control" value="From Date">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ReportType">Expense Type : </label>
                                                    <select class="form-control">
                                                        <option>--Select--</option>
                                                        <option selected="">Petrol Allowance</option>
                                                        <option>Choice 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input id="Expense" name="Expense" placeholder="100" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Note: </label>
                                                    <textarea rows="1" class="form-control" placeholder="For Order Delivery"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <button type="submit" id="save" name="save" value="Save" onclick="return validate();" class="btn btn-primary btn-block btn-flat">   Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->

