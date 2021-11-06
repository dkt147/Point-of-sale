
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->

            <!-- Modal -->
            <div id="loader" class="modal fade">

                <!-- Modal content-->
                <div class="loader">
                </div>


            </div>
            <style>
                .loader {
                    border: 16px solid #3498db; /* Light grey */
                    border-top: 16px solid #f3f3f3; /* Blue */
                    border-radius: 50%;
                    width: 120px;
                    height: 120px;
                    animation: spin 2s linear infinite;
                    position:absolute;
                    margin: 25% 50%;


                }
                .reportloader {
                    border: 16px solid #3498db; /* Light grey */
                    border-top: 16px solid #f3f3f3; /* Blue */
                    border-radius: 50%;
                    width: 120px;
                    height: 120px;
                    animation: spin 2s linear infinite;

                }

                .smallloader {
                    border: 16px solid #3498db; /* Light grey */
                    border-top: 16px solid #f3f3f3; /* Blue */
                    border-radius: 50%;
                    width: 20px;
                    height: 20px;
                    animation: spin 2s linear infinite;
                }


                @keyframes  spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            </style>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
            <style>
                .daterangepicker.dropdown-menu {
                    position:absolute;
                    top:35% !important;
                    left:0;
                    z-index:9999;
                    display:none;
                    float:left;
                    min-width:10rem;
                    padding:.5rem 0;
                    margin:.125rem 0 0;
                    font-size:1rem;
                    text-align:left;
                    list-style:none;
                    background-clip:padding-box;
                }
            </style>
            <div class="content-i wrapper">
                <div id="temp_msg" style="display: none" class="alert alert-success">
                </div>

                <div class="container-fluid ifsyncmessenger parentNav" style="margin:0px !important; " >
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 col-sm-12 padallzero">
                            <div class="element-wrapper top_head_selec">
                                <div class="element-box" style="padding:2%">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size: 1rem;">
                                                    <strong>Branch</strong> : Main Branch
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4" style="font-size: 1rem;">
                                                    <strong>Order No : </strong><span id="bill_no">00001/1mo</span>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2" style="font-size: 0.7rem;">
                                                    <strong>Waiter  : </strong><span id="waiter"></span>
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-2" style="font-size: 0.7rem;">
                                                    <strong>Table : </strong><span id="table"></span>
                                                </div>
                                            </div>

                                            <div class="row" >
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><br><br> 
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="font-size: 1rem;margin-bottom: 5px;">
                                                            <small>Date : <span id="date_sale">(Current)</span></small>
                                                        </div>
                                                        <div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12" style="font-size: 1rem;">
                                                            <!-- <small>Channel : <select class="col-md-12 col-sm-12 col-xs-12" placeholder="channel" id="channel_select"></select></small> -->
                                                        </div>
                                                    </div>

                                                    <div class="row" style="margin-top: 5px !important;">
                                                        <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 5px !important;">
                                                            <input class="form-control mousetrap" id="sale_customer_select" name="sale_customer_select" placeholder="search customers" >
                                                            <input hidden id="sale_customer" data-CustomerAddress="" data-CustomerPhone="" data-Customer="" name="sale_customer" placeholder="customer" >
                                                        </div>

                                                        <div class="col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 5px !important;">
                                                            <button class="add_new_customer btn btn-primary col-md-12 col-sm-12 col-xs-12" style="font-size: 11px !important;" data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-btn fa-plus"></i> New Customer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <div id="order_type_list" class="mt-3">
                                                        <div class="row" id="ordertype">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <a onclick="select_order_type(this)" data-id="1" class="order-type-button selectthisot order-button button-1">
                                                                    <img src="assets/img/Blue.ico" alt="">
                                                                    <h6>Dine Inn</h6>
                                                                </a>
                                                                <a onclick="select_order_type(this)" data-id="2" class="order-type-button order-button button-2">
                                                                    <img src="assets/img/Green.ico" alt="">
                                                                    <h6 style="" id="orderHeading">Take Away</h6>
                                                                </a>
                                                                <a onclick="select_order_type(this)" data-id="3" class="order-type-button order-button button-3">
                                                                    <img src="assets/img/Orange.ico" alt="">
                                                                    <h6 style="" id="orderHeading">Delivery</h6>
                                                                </a>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="element-wrapper catHide" style="padding-bottom: 0;margin-bottom:0;">
                                <div class="element-box paddten">
                                <h6 class="more-small">Categories</h6>
                                    <div id="outer_body_categories">
                                        <div id="body_categories" class="element-box-tp style-4">
                                            <div class="row fit-me">
                                                <div class="class1-profile profile_class paddallzero col-lg-2 col-md-4 col-sm-6 col-xs-12" data-item="1" style="cursor:pointer">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pric-0" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="undefined" src="assets/img/category/barBQ.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                               Barbecue
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div> <!-- category -->
                                               <div class="class1-profile profile_class paddallzero col-lg-2 col-md-4 col-sm-6 col-xs-12" data-item="2" style="cursor:pointer">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pric-1" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="undefined" src="assets/img/category/cake.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                               Cake
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="class1-profile profile_class paddallzero col-lg-2 col-md-4 col-sm-6 col-xs-12" data-item="3" style="cursor:pointer">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pric-2" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="undefined" src="assets/img/category/chinese.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                               Chinese
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="class1-profile profile_class paddallzero col-lg-2 col-md-4 col-sm-6 col-xs-12" data-item="4" style="cursor:pointer">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pric-3" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="undefined" src="assets/img/category/coffee.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                               Coffee
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="class1-profile profile_class paddallzero col-lg-2 col-md-4 col-sm-6 col-xs-12" data-item="4" style="cursor:pointer">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pric-3" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="undefined" src="assets/img/category/juice.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                               Juice
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="class1-profile profile_class paddallzero col-lg-2 col-md-4 col-sm-6 col-xs-12" data-item="4" style="cursor:pointer">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pric-3" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="undefined" src="assets/img/category/pizza.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                               Pizza
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="element-wrapper" style="padding-bottom: 0;margin-bottom:0;">
                                <div class="element-box paddten" style="margin-bottom:5px;">
                                    <div class="row"  style="margin:0;">
                                        <div class="col-md-12" style="margin:5px;">
                                            <button class="btn btn-md btn-primary pull-right" name="listView" style="margin:3px;"><i class="fa fa-list"></i></button>
                                            <!-- <button class="btn btn-md btn-primary pull-right" name="gridView" onclick="gridView()" style="margin:3px;"><i class="fa fa-th"></i></button> -->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="">
                                                <h6 class="more-small">Items</h6>
                                            </div>
                                            <div class="">
                                                <input class="form-control mousetrap" id="search_item" placeholder="search">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6 catHide">
                                            <div class="row">
                                                <h6 class="more-small">BarCode Scan</h6>
                                            </div>
                                            <div class="row">
                                                <input class="form-control" id="serch_item" placeholder="place cursor here for barcode scan">
                                            </div>
                                        </div> -->
                                    </div>

                                    <div id="outer_body_items">
                                        <div id="body_items" data-list="" class="element-box-tp style-4">
                                            <div class="row fit-me">
                                                <div class="class1-profile paddallzero col-sm-2" data-item="1" style="cursor:pointer" onclick="add_to_sale(1,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-0" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                            <img alt="Chicken Boti" onerror="call_img_not_found(&quot;0&quot;);" src="assets/img/items/1.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Chicken Boti
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="2" style="cursor:pointer" onclick="add_to_sale(2,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-1" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                            <img alt="Chicken malai Boti" onerror="call_img_not_found(&quot;1&quot;);" src="assets/img/items/2.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Chicken malai Boti
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="3" style="cursor:pointer" onclick="add_to_sale(3,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-2" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                            <img alt="Chicken Tikka" onerror="call_img_not_found(&quot;2&quot;);" src="assets/img/items/3.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Chicken Tikka
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="4" style="cursor:pointer" onclick="add_to_sale(4,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-3" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                            <img alt="Chicken Behari Tikka" onerror="call_img_not_found(&quot;3&quot;);" src="assets/img/items/4.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Chicken Behari Tikka
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="5" style="cursor:pointer" onclick="add_to_sale(5,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-4" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Chicken Bihari Boti" onerror="call_img_not_found(&quot;4&quot;);" src="assets/img/items/5.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Chicken Bihari Boti
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="6" style="cursor:pointer" onclick="add_to_sale(6,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-5" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                            <img alt="Chicken Chatkhara Tikka" onerror="call_img_not_found(&quot;5&quot;);" src="assets/img/items/6.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Chicken Chatkhara Tikka
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row fit-me">
                                                <div class="class1-profile paddallzero col-sm-2" data-item="7" style="cursor:pointer" onclick="add_to_sale(7,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-6" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Beef Boti" onerror="call_img_not_found(&quot;6&quot;);" src="assets/img/items/7.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Beef Boti
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="8" style="cursor:pointer" onclick="add_to_sale(8,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-7" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Beef Malai Boti" onerror="call_img_not_found(&quot;7&quot;);" src="assets/img/items/8.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Beef Malai Boti
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="9" style="cursor:pointer" onclick="add_to_sale(9,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-8" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Chicken Biryani" onerror="call_img_not_found(&quot;8&quot;);" src="assets/img/items/9.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Chicken Biryani
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="10" style="cursor:pointer" onclick="add_to_sale(10,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-9" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Beef Biryani" onerror="call_img_not_found(&quot;9&quot;);" src="assets/img/items/10.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Beef Biryani
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="11" style="cursor:pointer" onclick="add_to_sale(11,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-10" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Beef Nihari" onerror="call_img_not_found(&quot;10&quot;);" src="assets/img/items/11.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Beef Nihari
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="12" style="cursor:pointer" onclick="add_to_sale(12,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-11" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Naan" onerror="call_img_not_found(&quot;11&quot;);" src="assets/img/items/12.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Naan
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row fit-me">
                                                <div class="class1-profile paddallzero col-sm-2" data-item="13" style="cursor:pointer" onclick="add_to_sale(13,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-12" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Alo Paratha" onerror="call_img_not_found(&quot;12&quot;);" src="assets/img/items/13.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Alo Paratha
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="14" style="cursor:pointer" onclick="add_to_sale(14,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-13" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Omlet" onerror="call_img_not_found(&quot;13&quot;);" src="assets/img/items/14.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Omlet
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="15" style="cursor:pointer" onclick="add_to_sale(15,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-14" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Tea" onerror="call_img_not_found(&quot;14&quot;);" src="assets/img/items/15.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Tea
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="16" style="cursor:pointer" onclick="add_to_sale(16,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-15" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Green Tea" onerror="call_img_not_found(&quot;15&quot;);" src="assets/img/items/16.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Green Tea
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="17" style="cursor:pointer" onclick="add_to_sale(17,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-16" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="Plain Paratha" onerror="call_img_not_found(&quot;16&quot;);" src="assets/img/items/17.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                Plain Paratha
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="class1-profile paddallzero col-sm-2" data-item="18" style="cursor:pointer" onclick="add_to_sale(18,0)">
                                                    <div class="profile-tile  givemezerobottom">
                                                        <div id="pri-17" class="profile-tile-box">
                                                            <div class="pt-avatar-w">
                                                                <img alt="White 500Ml" onerror="call_img_not_found(&quot;17&quot;);" src="assets/img/items/18.jpg">
                                                            </div>
                                                            <div class="pt-user-name">
                                                                White 500Ml
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 col-sm-12 padallzero">
            <!--START - Projects Statistics-->
                            <div class="row cartHeight">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cartHeight paddten">
                                    <div class="element-wrapper cartHeight" style="padding-bottom: 0;margin-bottom:0;">
                                        <div class="element-box cartHeight" style="padding:1%">
                                            <div id="item_adder" class="table-responsive style-4 cartHeight">
                                                <table class="table table-striped cartHeight">
                                                    <thead class="table-head-fixed">
                                                        <tr class="fixed_header">
                                                            <th style="padding: 10px 9px; font-size: 11px;">
                                                                Name-Barcode
                                                            </th>
                                                            <th style="padding: 10px 9px; font-size: 11px;">
                                                                Quantity
                                                            </th>
                                                            <th style="padding: 10px 9px; font-size: 11px;">
                                                                Total Price (PKR)
                                                            </th>
                                                            <th style="padding: 10px 9px; font-size: 11px;">
                                                                Edit/Delete
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Biryani-0023</td>
                                                            <td><input type="number" name="" placeholder="2" style="width: 40px;"></td>
                                                            <td>300.00</td>
                                                            <td>
                                                                <a href="#" class="remove_order btn-default">
                                                                    <i class="fa fa-trash" style="font-size: 16px;">
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
                            </div>
                            <div class="row border-row" style="margin-top: 20px !important;">
                                <div class="col-sm-3 font-weight-bold">Total Items:</div>
                                <div class="col-sm-3" id="totalItem_div">2</div>
                                <div class="col-sm-3 font-weight-bold">Sub Total:</div>
                                <div class="col-sm-3" id="sub_total_div">300.00</div>
                            </div>
                            <div class="row border-row">
                                <div class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6">Total Tax:</div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="total_tax">0.00</div>
                                <div hidden="" id="total_taxes">0.00</div>
                                <div class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6">Amount<small> (Inc Tax):</small></div>
                                <div class="col-sm-6" id="total_div">300.00</div>
                            </div>
                            <div class="row border-row">
                                <div hidden="" id="total_item_discount">0.00</div>
                                <div class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6">Total Items Discount:</div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="item_discount">0.00</div>
                                <div hidden="" id="total_bill_discount">0</div>
                                <div class="font-weight-bold col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <span class=" my-1">Bill Discount:</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <input name="bill_dis" class="mousetrap my-1" placeholder=" % " type="number" min="1" id="bill_dis" style="width: 100%">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="bill_discount_number">
                                    <input name="bill_dis_number" class="mousetrap my-1" placeholder="PKR" value="" type="number" min="1" data-billpromocode="-" id="bill_dis_number" style="width: 100%">
                                </div>
                            </div>
                            <div style="display:none" class="card_prom row border-row">
                                <div style="padding: 0px; margin-left: 15px; display: none;" class="card_prom font-weight-bold col-lg-3 col-md-3 col-sm-3 col-xs-3">Card Number:</div><div class="card_prom col-sm-3" style="display: none;"><input style="width:100%;" name="card_num" id="card_num" value=""></div>
                                <button onclick="clear_bill_disc()" class="card_prom_clear btn btn-primary font-weight-bold col-lg-3 col-md-3 col-sm-3 col-xs-3">Clear</button>
                            </div>
                            <div class="row border-row">
                                <div style="display:none" class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6 my-1">Delivery Charges:
                                </div>
                                <div style="display:none" class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6 my-1">
                                    <input style="width:100%" name="del_charges" class="mousetrap" type="number" min="0" value="0" id="del_charges">
                                </div>

                                <div style="display:none" class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6 my-1">Service Charges:
                                </div>
                                <div style="display:none" class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6 my-1">
                                    <input style="width:100%" name="ser_charges" class="mousetrap" type="number" min="0" value="0" id="ser_charges">
                                </div>
                            </div>

                            <div class="row border-row" id="showDisc" style="max-height: 20px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right" id="showDiscText" style="max-height: 20px;"></div>
                            </div>
                            <div class="row border-row">
                                <div style="font-size: 22px;" class="font-weight-bold col-lg-6 col-md-6 col-sm-6 col-xs-6">Total Payment:</div><div style="font-size: 22px;" class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="total_paym">PKRs 300.00</div>
                            </div>

                        </div>
                        <div class="container-fluid my-3" style="width: 90% !important;">
                            <div class="row">
                                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="padding-right: 0px !important;padding-left: 0px !important; background-color: #EEF2F7 !importasecondprimary" onclick="clear_confirmed(true)"><i class="fa fa-btn fa-remove"style=""></i> Cancel </button></div>
                                    </div>
                                </div> -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #EEF2F7 !important;">
                                    <div class="row">
                                        <div id="void_ord_butt" class="col-sm-3 my-2" style="display:none;" >
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-secondary" onclick="ask_confirm_void()" id="voider"><i class='fa fa-remove'>
                                                </i> Void Order 
                                            </div>
                                        </div>
                                        <div id="disc_butt" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 my-2">
                                            <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clear_sale btn btn-primary" onclick="clear_this_sale(true)">
                                                <i class="fa fa-btn fa-trash"></i> Discard Sale 
                                            </button>
                                        </div>
                                        <div id="bill_butt" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 my-2" style="display:none;">
                                            <button class="col-lg-12 col-md-12 col-sm-12 col-xs-12 get_bill btn btn-primary" onclick="get_bill()">
                                                <i class="fa fa-btn fa-barcode"></i> Customer Bill 
                                            </button>
                                        </div>
                                        <div id="tab_wait" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 my-2">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-success" onclick="ask_table_waiter()" id="submit_order" data-toggle="modal" data-target=".bd-example-modal-lg1">
                                                <i class='fa fa-ticket'></i> Reservation 
                                            </div>
                                        </div>
                                        <div id="rec_ord" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 my-2" style=" display: block;">
                                            <div style="display: none;" id="recallloader" class="text-left">
                                                <!-- Modal content-->
                                                <div class="recallloader col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-success">
                                                    <i class="fa fa-spinner"></i> Loading ...
                                                </div>
                                            </div>
                                            <div style="display: block;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-success" onclick="ask_recall_order()" id="recall_order"  data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-check-square"></i> Recall </div>
                                        </div>
                                        <div id="payment_butt" class="col-lg-3 col-md-3 col-sm-6 col-xs-12 my-2">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-success" onclick="ask_payment_mode(true,0,0)" id="submit_payment" data-toggle="modal" data-target="#exampleModalLong">
                                                <i class='fa fa-money'></i> Pay (F7)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 my-2">
                                            <div style="display: none" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <label for="localstorageuse">Use Local Storage</label>
                                                        <input id="localstorageuse" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-i wrapper -->

            <div class="container ifnotsyncmessenger" style="display:none;">
                <div class="content-i">
                    <div class="content-box">
                        <div class="big-error-w">
                            <h5>
                                Please check your internet connection.
                            </h5>
                            <h4>
                                For Restaurant POS, Internet connection is mandatory.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                function listView(){
                    localStorage.setItem("data-list","0");
                    make_item_list("");
                }
                function gridView(){
                    localStorage.setItem("data-list","1");
                    make_item_list("");
                }
            </script>    
            <!-- </div> -->

            <!-- Modal Pay -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Select Payment Mode</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="printing_body">
                    <div class="container">
                        <div class="row" style="background: #dc313f;padding: 10px;text-align: center;color: white;">
                            <div class="col-sm-6">Total Payment</div>
                            <div class="col-sm-6">PKRs 0.00</div>
                        </div>
                        <div class="row" id="ordertype">
                            <div class="col-sm-4">
                                <a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="1" class="pm-type-button pm-button button-1">
                                    <span style="font-size:1rem;"> Cash <br> <i style="font-size:2rem;" class="fa fa-money"></i></span>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="2" class="pm-type-button pm-button button-2">
                                    <span style="font-size:1rem;"> Card <br> <i style="font-size:2rem;" class="fa fa-credit-card-alt"></i></span>
                                </a>
                            </div>
                            <div class="col-sm-4" style="display:none">
                                <a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="4" class="pm-type-button pm-button button-4">
                                    <span style="font-size:1rem;"> Party <br> <i style="font-size:2rem;" class="fa fa-user"></i></span>
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="3" class="pm-type-button pm-button button-3 selectthispm">
                                    <span style="font-size:1rem;"> Split <br><br><i style="font-size:1rem;" class="fa fa-money"></i> | <i style="font-size:1rem;" class="fa fa-credit-card-alt"></i> | <i style="font-size:1rem;" class="fa fa-user"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-12"><div class="form-group"><select style="display:none;font-family: FontAwesome, sans-serif;" class="form-control col-sm-6" id="pmode"><option value="cash"> Cash</option><option value="card"> Card</option><option value="party"> Party</option><option value="both">Both  Cash and  Card</option></select></div></div></div><div id="party" style="display:none"><div class="row"><strong>Party</strong></div><div class="row" id="party_div"></div><div class="row"><div class="col-sm-6"><button class="btn btn-default">ENTER</button></div></div></div><div id="card_details" style="display: none;"> 
                            <div class="row" id="card_div"><div class="col-sm-6"><div class="form-group"><label>Select Bank</label><select style="font-family: FontAwesome, sans-serif;" class="form-control select_bank select2-hidden-accessible" id="card_type" tabindex="-1" aria-hidden="true"><option value="" disabled="disabled">Choose Bank</option><option value="0"></option><option value="01-002-003-0001">NATIONAL BANK (01-002-003-0001)</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 209px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-card_type-container"><span class="select2-selection__rendered" id="select2-card_type-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div><div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label><input style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number"></div></div></div></div><div id="cash_details" style="display: none;"><div class="row"><div class="col-sm-6"><div class="form-group"><label>Cash Tendered</label><p style="color:red;display:none">A valid value is required</p><input id="cash_tendered" value="0" name="cash_tendered" placeholder="Cash Tendered" class="form-control"><br><button class="col-sm-6 btn btn-default">ENTER</button></div></div></div></div><div id="cash_details_both" style="display: block;"><div class="row"><strong>Cash</strong></div><div class="row"><div class="col-sm-6"><div class="form-group"><label>Cash Tendered</label><p style="color:red;display:none">A valid value is required</p><input id="cash_tendered_both" value="0" name="cash_tendered_both" placeholder="Cash Tendered" class="form-control"></div></div></div><div class="row"><strong>Card</strong></div><div class="row" id="card_div_both"><div class="col-sm-6"><div class="form-group"><label>Select Bank</label><select style="font-family: FontAwesome, sans-serif;" class="form-control select_bank select2-hidden-accessible" id="card_type_both" tabindex="-1" aria-hidden="true"><option value="" disabled="disabled">Choose Bank</option><option value="0"></option><option value="01-002-003-0001">NATIONAL BANK (01-002-003-0001)</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 209px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-card_type_both-container"><span class="select2-selection__rendered" id="select2-card_type_both-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div><div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label><input style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number_both"></div></div><div class="col-sm-6"><div class="form-group"><label>Card Amount</label><p style="color:red;display:none">A valid value is required</p><input style="font-family: FontAwesome, sans-serif;" class="form-control" value="0" id="card_amount"></div></div></div><div style="display:none"><div class="row"><strong>Party</strong></div><div class="row" id="party_div_both"><div class="col-sm-8"><div class="form-group"><label>Select Party</label><select style="font-family: FontAwesome, sans-serif;" class="form-control party_code_both select2-hidden-accessible" id="party_code_both" tabindex="-1" aria-hidden="true"><option value="" disabled="disabled">Choose Party</option><option value="0"></option><option balance="0" value="01-002-004-0001">DEFAULT CUSTOMER (01-002-004-0001)</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-party_code_both-container"><span class="select2-selection__rendered" id="select2-party_code_both-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div><div class="col-sm-4"><div class="form-group"><label>Party Balance </label><div class="partyBalance" id="partyBalance"> 0 </div></div></div></div><div class="row"><div class="col-sm-6"><div class="form-group"><label>Party Amount</label><p style="color:red;display:none">A valid value is required</p><input style="font-family: FontAwesome, sans-serif;" class="form-control" id="party_amount"></div></div></div></div><div class="row"><div class="col-sm-6"><button class="btn btn-default">ENTER</button></div></div></div><div class="row"><div class="col-sm-12 text-center"><div class="form-group"><label><strong>Return Cash </strong>(PKRs)</label><input style="font-size:3em;text-align:center" readonly="" value="0" id="cash_balance" name="cash_balance" class="form-control"></div></div></div><div class="row"><div class="col-sm-12 text-center"><div class="form-group"><label><strong>Remarks </strong></label><textarea style="text-align:center;min-height:80px" id="bill_remarks" name="bill_remarks" class="form-control"></textarea></div></div></div></div>
                        


                  </div>
                  <div class="modal-footer ifsync">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="submit_payment(true,true,true)" id="sub_payment">
                        <i class="fa fa-money"></i> Pay
                    </button>

                    <button type="button" class="btn btn-primary" onclick="submit_payment(false,true,true)" id="sub_direct_payment">
                        <i class="fa fa-money"></i> Pay &amp; Print
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <script>
                function open_error_modal(msg){
                    var error_modal=$("#errormodal");
                    var modal_content=error_modal.children(".modal-dialog").children(".modal-content");
                    var modal_title=modal_content.children(".modal-header").children(".modal-title");
                    var modal_body=modal_content.children(".modal-body");
                    var modal_footer=modal_content.children(".modal-footer");
                    modal_body.empty();
                    modal_body.append('<p>'+msg+'</p>');
                    error_modal.modal('show');
                }
            </script>
            <!-- Modal Reservation -->
            <div class="modal fade bd-example-modal-lg1" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Select Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="printing_body"><div class="container"><div class="row"><div class="col-sm-12"><strong>Select Waiter:</strong></div></div><div class="row" id="waiter"><div class="col-sm-12"><a onclick="select_waiter(this)" data-id="1" class="order-type-button waiter-button button-1"><img src="assets/img/waiter.ico" alt=""><h6>Waiter 1</h6></a><a onclick="select_waiter(this)" data-id="2" class="order-type-button waiter-button button-2 selectthisot"><img src="assets/img/waiter.ico" alt=""><h6>Miqdad</h6></a><a onclick="select_waiter(this)" data-id="3" class="order-type-button waiter-button button-3"><img src="assets/img/waiter.ico" alt=""><h6>Bilal Turabi</h6></a></div></div><div class="row"><div class="col-sm-12"><strong>Select Table:</strong></div></div><div class="row" id="table"><div class="col-sm-12"><a onclick="#" data-id="1" class="order-type-button-occupied table-button button-1"><img src="assets/img/occupied.ico" alt=""><h6>Table 1<br>Occupied</h6></a><a onclick="select_table(this)" data-id="2" class="order-type-button table-button button-2 selectthisot"><img src="assets/img/available.ico" alt=""><h6>Couples Corner<br>Available</h6></a></div></div></div></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Submit Order</button>
                        </div>
                    </div> <!-- modal-content -->
                </div>
            </div>

            
            <!-- Modal Add New Customer -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dine Inn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="DivIdToPrint">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name </label>
                                        <input id="Name" name="Name" placeholder="Name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address </label>
                                        <input id="Name" name="Name" placeholder="Address" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile </label>
                                        <input id="Name" name="Name" placeholder="Mobile" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input id="Name" name="Name" placeholder="Phone" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input id="Name" name="Name" placeholder="Email" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Customer Code </label>
                                        <input id="Name" name="Name" placeholder="Customer Code" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="DineInn()">Add</button>
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
                  <div class="modal-body" id="DivIdToPrint">
                    <div class="invoice-table">
                         <div class="make-border text-center"><h6>Order Receipt</h6></div><br>
                            <div class="make-border text-center">
                              <strong>Dine Inn</strong>
                            </div>
                            <div class="desc-value">
                                <span class="pull-left"> <strong>Order No   &nbsp;:&nbsp;</strong>  00003/1Ha</span>
                            </div><br>
                            <div class="desc-value">
                                <span class="pull-left"><strong>Date &amp; Time  &nbsp;:&nbsp;</strong>  24-3-2020  3:49 pm</span>
                            </div><br>
                            <div class="desc-value">
                                <span class="pull-left"><strong>Waiter  &nbsp;:&nbsp;</strong>  Miqdad</span>
                            </div><br>
                            <div class="desc-value">
                                <span class="pull-left"><strong>User &nbsp;:&nbsp;</strong> Haris</span>
                            </div><br>
                            <div class="desc-value table_name_receipt">
                                <span class="pull-left"><strong>Table  &nbsp;:&nbsp;</strong>  Couples Corner</span>
                            </div><br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="big-font">Description</th>
                                        <th colspan="2" class="big-font"></th>
                                        <th class="big-font">Qty</th>
                                    </tr>
                                </thead>
                                <tbody class="mainbodyclass" id="mainbody">
                                    <tr>
                                        <td colspan="3"><strong>Chicken Biryani</strong></td>
                                        <td colspan="2">2 Default</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="make-border text-center">
                              <span class="col-md-6 text-center">  
                                <small>Print Date:   24-3-2020</small>
                              </span>
                              <span class="col-md-6 text-center"> 
                                <small>Print Time:   3:49 pm</small>
                              </span>
                            </div>
                        </div>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                    <button type="button" class="btn btn-primary" onclick="DineInn()">Print</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Recall -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Select Order</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- <strong>Orders: <br><br><br><br></strong> --> 
                            <div class="table-responsive">
                                <table id="category-table" class="table table-striped table-lightfont table_data">
                                    <thead>
                                        <tr>
                                            <th>Order No</th>
                                            <th>Order Time</th>
                                            <th>Waiter</th>
                                            <th>Table</th>
                                            <th>Order Type</th>
                                            <th>Recall</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Demo</td>
                                            <td>Demo</td>
                                            <td>Demo</td>
                                            <td>Demo</td>
                                            <td>Demo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div> <!-- modal-content -->
                </div>
            </div>



            <style>
                @media  screen {
                    #printSection {
                        display: none;
                    }
                }

                #printing_body{
                    margin: 0;
                    padding: 0 10px 0 10px !important;
                }

                @media  print {
                    body * {
                        visibility:hidden;
                        font-family: Tahoma,Arial, serif;
                        font-size: 4mm;
                        color: #000000;
                        line-height: 1.3;

                    }

                    #bigbashfont{
                        font-size: 4mm;
                        font-weight: bold;
                    }


                    #printSection, #printSection * {
                        visibility:visible;
                        font-family: Tahoma,Arial, serif;
                        margin-right: 6px;
                        margin-left: 3px;
                    }
                    #printSection {
                        position:absolute;
                        left:0;
                        top:0;
                        margin-top:0;
                        padding-top:0;
                    }
                    .make-border-background-bl{
                        border:1px solid black;
                        background:#000;
                        color:#fff;
                    }
                    .make-border{
                        border:1px solid black;
                    }
                    @page  {
                        size:3in 11in;
                        size:auto;
                        orphans:0;
                        widows:0;

                    /*margin-left:0.1in;
                    margin-right:0.1in;
                    margin-top:0;
                    margin-bottom:0;
                    padding-left:30px;
                    padding-right:100px;
                    padding-top:0;
                    padding-bottom:0;*/
                    margin: 0.2mm  /* All margins set to 2cm */


                }
            }
            #bigbashfont{
                font-size: 1.2em;
            }

            </style>

            <!-- <script>
                function printElement(elem, append, delimiter) {
                    var domClone = elem.cloneNode(true);
                    var $printSection = document.getElementById("printSection");
                    if (!$printSection) {
                        $printSection = document.createElement("div");
                        $printSection.id = "printSection";
                        document.body.appendChild($printSection);
                    }
                    if (append !== true) {
                        $printSection.innerHTML = "";
                    }
                    else if (append === true) {
                        if (typeof (delimiter) === "string") {
                            $printSection.innerHTML += delimiter;
                        }
                        else if (typeof (delimiter) === "object") {
                            $printSection.appendChlid(delimiter);
                        }
                    }
                    $printSection.appendChild(domClone);
                }
                function printElement_exe(id){
                    var print_body=document.getElementById(id);
                    printElement(print_body);
                    window.print();
                }
            </script>  -->

            <script>
                function DineInn() 
                {
                    var divToPrint=document.getElementById('DivIdToPrint');
                    var newWin=window.open('','Print-Window');
                    newWin.document.open();
                    newWin.document.write('<html><style>'
                    + ''
                    + '.invoice-table {width: 60%; margin: 0 auto; border: 1px solid; padding: 20px;}'
                    + ''

                    + '</style><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
                    newWin.document.close();
                    setTimeout(function(){newWin.close();},10);
                }
            </script>
            <!-- <script src="assets/js/sales/salesjs.js"></script>     -->




<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->




