
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->


            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    Add Tax
                                </h6>
                                <div class="element-box">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tax Name</label>
                                                    <input id="Tax" name="Tax" placeholder="Tax Name" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tax Percentage</label>
                                                    <input id="TaxPercentage" name="TaxPercentage" placeholder="Tax Percentage" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button type="submit" id="save" name="save" value="Save" onclick="return validate();" class="btn btn-primary btn-block btn-flat">   Add
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

