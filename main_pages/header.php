<!DOCTYPE html>
<html>
<head>
    <title>HnHPOS</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/favicon.png" rel="shortcut icon">
    <!-- <link href="assets/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="assets/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="assets/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="assets/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="assets/css/main1073.css" rel="stylesheet">
    <link href="assets/icon_fonts_assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href=assets/css/style.css>
    <!-- DATATABLE -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<!--     <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.jqueryui.min.css"> -->

    <!-- Custom_Style -->
    <link rel="stylesheet" href="assets/css/CustomStyle.css">

</head>

<body style="width:100% !important;">
    <div class="menu-side full-width" style="width:100% !important;min-height:auto;box-shadow: -3px 1px 15px 1px #9d9d9d;" >
        
        <!-------------------- START - Mobile Menu -------------------->
        
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w">
                <a class="mm-logo" href="index_2.php"><img src="assets/img/logo-big-white.png"></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user" style="display: block;">
                <div class="logged-user-w">
                    <div class="avatar-w">
                        <img alt="" src="assets/img/avatar1.png">
                    </div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">
                            Haris
                        </div>
                        <div class="logged-user-role">

                        </div>
                    </div>
                </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
                <ul class="main-menu">
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-dashboard dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Dashboard
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index_2.php">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-bar-chart dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Sales
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="sales.php">Sales</a></li>
                                    <li><a href="sale_history.php">Sales history</a></li>
                                    <li><a href="orders.php">Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-exchange dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Transactions
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="sale_returns.php">Sale Return</a></li>
                                    <li><a href="salereturn_history.php">Sale Return history</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-folder dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Product Master
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_category.php">List Product Master</a></li>
                                    <li><a href="add_category.php">Add Product Master</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-folder-open dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Product Categories
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_sub_category.php">List Product Category</a></li>
                                    <li><a href="add_sub_category.php">Add Product Category</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-file-excel-o dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Product Damage
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="product_damage.php">Product Damage</a></li>
                                    <li><a href="product_damage_view.php">View Product Damage</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-users dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Customers
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_customers.php">List Customers</a></li>
                                    <li><a href="add_customer.php">Add Customer</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-users dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Suppliers
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_suppliers.php">List Suppliers</a></li>
                                    <li><a href="add_supplier.php">Add Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-users dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Purchase
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="purchase_entry.php">Purchase Entry</a></li>
                                    <li><a href="purchase_return.php">Purchase Return</a></li>
                                    <li><a href="purchase_view.php">Purchase View</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-list-alt dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Reports
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="sale_report.php">Sale Reports</a></li>
                                    <li><a href="sale_report_itemWise.php">Item Wise Sale</a></li>
                                    <li><a href="sale_return_itemWise.php">Item Wise Sale Return</a></li>
                                    <li><a href="salesman_summary_report.php">Salesman Summary Report</a></li>
                                    <li><a href="sale_report_shiftWise.php">Shift Wise Sale Report</a></li>
                                    <li><a href="sale_report_counterWise.php">Counter Wise Sale Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-list-alt dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Inventory
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="inventory_report.php">Inventory Reports</a></li>
                                    <li><a href="inventory_manufacture.php">View Manufactured Inventory</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-cutlery dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Restaurant Setup
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_waiter.php">List Waiters</a></li>
                                    <li><a href="add_waiter.php">Add Waiters</a></li>
                                    <li><a href="list_table.php">list Table</a></li>
                                    <li><a href="add_table.php">Add Table</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-cutlery dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Expense
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="expense_master.php">Expense Master</a></li>
                                    <li><a href="expense_entry.php">Expense Entry</a></li>
                                    <li><a href="expense_view.php">Expense View</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-gear dash_icons"></i>
                            </div>
                        </a>
                        <div class="sub-menu-w p-3">
                            <div class="sub-menu-title">
                                Settings
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_users.php">Users</a></li>
                                    <li><a href="list_counters.php">Counters</a></li>
                                    <li><a href="list_shifts.php">Shifts</a></li>
                                    <li><a href="list_taxes.php">Taxes</a></li>
                                    <li><a href="ip_setup.php">IP Restrictions</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--------------------
                END - Mobile Menu List
                -------------------->
            </div>
        </div>

        <!-------------------- END - Mobile Menu -------------------->

        <!-------------------- START - Menu side compact -------------------->
        
        <div class="desktop-menu menu-side-compact-w menu-activated-on-hover color-scheme-dark">
            <div class="logo-w" style="box-shadow: 4px 6px 11px 0px #563838a8; background: #563838; border: 1px solid #563838;">
                <a class="logo" href="index_2.php"><img src="assets/img/logo-big-white.png"></a>
            </div>
            <div class="menu-and-user">
                <ul class="main-menu text-left">
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Dashboard
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index_2.php">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Sales
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="sales.php">Sales</a></li>
                                    <li><a href="sale_history.php">Sales history</a></li>
                                    <li><a href="orders.php">Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Transactions
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="sale_returns.php">Sale Return</a></li>
                                    <li><a href="salereturn_history.php">Sale Return history</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Product Master
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_category.php">List Product Master</a></li>
                                    <li><a href="add_category.php">Add Product Master</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Product Categories
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_sub_category.php">List Product Category</a></li>
                                    <li><a href="add_sub_category.php">Add Product Category</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Product Damage
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="product_damage.php">Product Damage</a></li>
                                    <li><a href="product_damage_view.php">View Product Damage</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Items
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_items.php">List Items</a></li>
                                    <li><a href="add_items.php">Add Item</a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </li> -->
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Customers
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_customers.php">List Customers</a></li>
                                    <li><a href="add_customer.php">Add Customer</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Suppliers
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_suppliers.php">List Suppliers</a></li>
                                    <li><a href="add_supplier.php">Add Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Purchase
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="purchase_entry.php">Purchase Entry</a></li>
                                    <li><a href="purchase_return.php">Purchase Return</a></li>
                                    <li><a href="purchase_view.php">Purchase View</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Sale Reports
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="sale_report.php">Sale Report</a></li>
                                    <li><a href="sale_report_itemWise.php">Item Wise Sale</a></li>
                                    <li><a href="sale_return_itemWise.php">Item Wise Sale Return</a></li>
                                    <li><a href="salesman_summary_report.php">Salesman Summary Report</a></li>
                                    <li><a href="sale_report_shiftWise.php">Shift Wise Sale Report</a></li>
                                    <li><a href="sale_report_counterWise.php">Counter Wise Sale Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Inventory
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="inventory_report.php">Inventory Reports</a></li>
                                    <li><a href="inventory_manufacture.php">View Manufactured Inventory</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Restaurant
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_waiter.php">List Waiters</a></li>
                                    <li><a href="add_waiter.php">Add Waiters</a></li>
                                    <li><a href="list_table.php">list Table</a></li>
                                    <li><a href="add_table.php">Add Table</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Expense
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="expense_master.php">Expense Master</a></li>
                                    <li><a href="expense_entry.php">Expense Entry</a></li>
                                    <li><a href="expense_view.php">Expense View</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-sub-menu dis_on_off">
                        <a href="#">
                            <div class="icon-w">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                Settings
                            </div>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="list_users.php">Users</a></li>
                                    <li><a href="list_counters.php">Counters</a></li>
                                    <li><a href="list_shifts.php">Shifts</a></li>
                                    <li><a href="list_taxes.php">Taxes</a></li>
                                    <li><a href="ip_setup.php">IP Restrictions</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    
        <!--------------------  END - Menu side compact -------------------->

        <!--------------------  Profile Header  --------------------------->

        <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px !important"> -->
            <div class="content-w"> <!-- Content Main Div -->
                <div class="top-menu-secondary">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <!-- Authentication Links -->
                    <ul>
                        <li><a href="#">HnHPOS - Haris Jamil</a></li>
                        <!-- <li><span href="#"><label for="user-branch">Branch</label></span>
                            <select id="user-branch" class="form-group">
                                <option selected data-url="branch/active/0001" value="0001">Main Branch</option>
                            </select>
                        </li> -->
                    </ul>

                    <div class="top-menu-controls">
                        <!-- <div class="new_updates">
                           <a href="update/viewer"><sup class="badge badge-danger">What's New</sup></a>
                        </div> -->
                        <div class="messages-notifications os-dropdown-trigger os-dropdown-center" id="stalert">
                        </div>
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w">
                                    <img alt="" src="assets/img/avatar1.png">
                                    <strong>Haris Jamil</strong>
                                </div>
                                <div class="logged-user-menu">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w">
                                            <img alt="" src="assets/img/avatar1.png">
                                        </div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">
                                                Haris Jamil
                                            </div>
                                            <div class="logged-user-role">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-icon">
                                        <i class="os-icon os-icon-wallet-loaded"></i>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="login.php"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <link href="assets/css/main1073.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"/
            >
            <script src=assets/bower_components/chart.js/dist/Chart.min.js></script>