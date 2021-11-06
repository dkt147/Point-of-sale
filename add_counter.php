
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->


            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    Add Counter
                                </h6>
                                <div class="element-box">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Counter Code</label>
                                                    <input disabled id="CounterCode" name="CounterCode" placeholder="Counter Code" value="0005" class="form-control">
                                                    <input hidden id="CounterCode" name="CounterCode" placeholder="Counter Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Counter Name</label>
                                                    <input id="Counter" name="Counter" placeholder="Counter" value="" class="form-control">
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

