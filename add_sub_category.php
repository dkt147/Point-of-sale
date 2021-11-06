
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->


            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    Add Product Category
                                </h6>
                                <div class="element-box">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Product Category Code</label>
                                                    <input disabled id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ReportType">Product Master </label>
                                                    <select class="form-control">
                                                        <option>--Select--</option>
                                                        <option>Cake</option>
                                                        <option>Choice 2</option>
                                                        <option>Choice 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Product Category Name</label>
                                                    <input id="Category" name="Category" placeholder="Sub Category" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Purchase Rate</label>
                                                    <input id="Category" name="Category" placeholder="Purchase Rate" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Sales Rate</label>
                                                    <input id="Category" name="Category" placeholder="Sales Rate" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>GST Tax</label>
                                                    <input id="Category" name="Category" placeholder="Tax" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="image">Upload Category Image</label>
                                                    <input type="file" id="image" name=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4">
                                                 <div class="form-group">
                                                     <label>
                                                         <input type="hidden" name="DisplayOnPos" value="0">
                                                         <input checked class="flat-red" type="checkbox" id="DisplayOnPos" name="DisplayOnPos" value="1" />
                                                         Display On Pos
                                                     </label>
                                                 </div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="form-group">
                                                     <label>
                                                         <input type="hidden" name="DisplayOnPos" value="0">
                                                         <input class="flat-red" type="checkbox" id="DisplayOnPos" name="IsManufacture" value="1" />
                                                         Is Manufacture
                                                     </label>
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
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <select class="form-control" style="height: auto !important;">
                                                                <option>Flour</option>
                                                                <option>Sugar</option>
                                                                <option>Chicken</option>
                                                                <option>Beef</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input id="Counter" name="Counter" placeholder="Quantity" value="" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="edit_item btn btn-success add-row2">
                                                            <i class="fa fa-plus" style="font-size: 16px; color: #fff;"></i>
                                                        </button>
                                                        <!-- <button class="remove_item btn btn-danger">
                                                            <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                                        </button> -->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-md-2">
                                            <button type="submit" id="save" name="save" value="Save" class="btn btn-primary btn-block btn-flat">Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->

