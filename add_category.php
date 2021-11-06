
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->


            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    Add Product Master
                                </h6>
                                <div class="element-box">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Code</label>
                                                    <input disabled id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                    <input hidden id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input id="Category" name="Category" placeholder="Category" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="image">Upload Product Image</label>
                                                    <input type="file" id="image" name=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label>
                                                         <input type="hidden" name="DisplayOnPos" value="0">
                                                         <input checked class="flat-red" type="checkbox" id="DisplayOnPos" name="DisplayOnPos" value="1" />
                                                         Display On Pos
                                                     </label>
                                                 </div>
                                             </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
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

