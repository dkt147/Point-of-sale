
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->


            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="element-wrapper">
                                <h6 class="element-header">
                                    Add Items
                                </h6>

                                <div class="element-box">
                                    <form action="#" method="post">
                                        <input type="hidden" name="_token" value="">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Bar Code</label>
                                                    <input disabled id="CategoryCode" name="CategoryCode" placeholder="Bar Code" value="0005" class="form-control">
                                                    <input hidden id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Item</label>
                                                    <input id="Category" name="Category" placeholder="Item" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Unit</label>
                                                    <select id="UnitCode" name="UnitCode" class="form-control">
                                                        <option value="">--Select--</option>
                                                        <option value="">Default</option>
                                                        <option value="">KG</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><br></label>
                                                    <a href="add_unit.php" id="save" name="save" value="" class="btn btn-primary btn-block btn-flat">   Add New Unit
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Purchase Rate</label>
                                                    <input id="Category" name="Category" placeholder="Purchase Rate" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sales Rate<small>(Exc Discount)</small></label>
                                                    <input id="CategoryCode" name="Sales Rate" placeholder="Sales Rate" value="" class="form-control">
                                                    <input hidden id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Discount Amount</label>
                                                    <input id="Category" name="Category" placeholder="Discount Amount" value="" class="form-control">
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tax</label>
                                                    <select id="UnitCode" name="UnitCode" class="form-control">
                                                        <option value="">--Select--</option>
                                                        <option value="">Default</option>
                                                        <option value="">No Tax -- 0%</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sales Rate<small>(Inc Discount)</small></label>
                                                    <input disabled="" id="CategoryCode" name="Sales Rate" placeholder="Sales Rate" value="" class="form-control">
                                                    <input hidden id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <input id="CategoryCode" name="CategoryCode" placeholder="Category" value="" class="form-control">
                                                    <input hidden id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><br></label>
                                                    <a href="add_category.php" id="save" name="save" value="" class="btn btn-primary btn-block btn-flat" style="color: #fff;">   Add New Category
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sub Category</label>
                                                    <input id="CategoryCode" name="CategoryCode" placeholder="Sub Category" value="" class="form-control">
                                                    <input hidden id="CategoryCode" name="CategoryCode" placeholder="Category Code" value="0005" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><br></label>
                                                    <a href="add_sub_category.php" id="save" name="save" value="" class="btn btn-primary btn-block btn-flat">   Add New Sub Category
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="image">Upload Category Image</label>
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
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label>
                                                         <input class="checkBox" type="checkbox" value="1" onchange="valueChanged()" />
                                                         Add Deal
                                                     </label>
                                                 </div>
                                             </div>
                                             <div class="col-md-12 deals" style="display: none;">
                                                 <div class="element-box">
                                                    <input type="text" id="Category" name="BillSearch" placeholder="Search Item" value="" class="myInp">

                                                    <button class="btn btn-primary itemBtn">
                                                        <i class="fa fa-plus"> Add Item</i>
                                                    </button>
                                                </div>
                                                <div class="element-box">
                                                    <div class="table table-hover table-responsive table-striped">
                                                        <table id="myTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name-Barcode</th>
                                                                    <th>Quantity</th>
                                                                    <th>Total Price</th>
                                                                    <th>Delete</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Chicken Boti-0001</td>
                                                                    <td>1</td>
                                                                    <td>300.00</td>
                                                                    <td>
                                                                        <a href="#" class="remove_item btn btn-danger">
                                                                            <i class="fa fa-trash" style="font-size: 16px; color: #fff;">
                                                                            </i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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
            <script>
                function valueChanged()
                {
                    if($('.checkBox').is(":checked"))   
                        $(".deals").show(300);
                    else
                        $(".deals").hide(300);
                }
            </script>
            

<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->

