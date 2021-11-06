
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Sales Return History
                        </h6>
                        
                        <div class="element-box">
                            <div class="table table-hover table-responsive table-striped">
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Bill Number</th>
                                            <th>Returned By</th>
                                            <th>Customer</th>
                                            <th>Return Total</th>
                                            <th>Discount</th>
                                            <th>Net Amount</th>
                                            <th>Action</th>
                                            <th>Payment Mode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2020-03-15 15:43:15</td>
                                            <td>00002/1Ha</td>
                                            <td>Haris</td>
                                            <td>-</td>
                                            <td>PKRs 1329.00</td>
                                            <td>PKRs 0.00</td>
                                            <td>PKRs 1329.00</td>
                                            <td>
                                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-btn fa-file-text"></i>&nbsp;Detail</button>
                                            </td>
                                            <td>Cash</td>
                                        </tr>
                                        <tr>
                                            <td>2020-03-15 15:43:15</td>
                                            <td>00002/1Ha</td>
                                            <td>Haris</td>
                                            <td>-</td>
                                            <td>PKRs 1329.00</td>
                                            <td>PKRs 0.00</td>
                                            <td>PKRs 1329.00</td>
                                            <td>
                                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-btn fa-file-text"></i>&nbsp;Detail</button>
                                            </td>
                                            <td>Cash</td>
                                        </tr>
                                        <tr>
                                            <td>2020-03-15 15:43:15</td>
                                            <td>00002/1Ha</td>
                                            <td>Haris</td>
                                            <td>-</td>
                                            <td>PKRs 1329.00</td>
                                            <td>PKRs 0.00</td>
                                            <td>PKRs 1329.00</td>
                                            <td>
                                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-btn fa-file-text"></i>&nbsp;Detail</button>
                                            </td>
                                            <td>Cash</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
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
                    <div class="invoice-table">
                        <div class="invoice-logo-w">
                            <div class="make-border text-center">
                                <h6>Sale Receipt</h6>
                            </div>
                            <div class="make-border ordertt text-center" style="display: none;">
                              <strong>undefined</strong>
                            </div>
                        </div>
                        <div class="desc-value">
                            <span class="pull-left"> <strong>Bill No   &nbsp;:&nbsp;</strong>  00002/1Ha</span>
                        </div><br>
                        <div class="desc-value">
                            <span class="pull-left"><strong>Date &amp; Time  &nbsp;:&nbsp;</strong>  15-3-2020  3:43 pm</span>
                        </div><br>
                        <div class="desc-value">
                            <span class="pull-left"><strong>Payment Type  &nbsp;:&nbsp;</strong>  Cash</span>
                        </div><br>                            <div class="desc-value">
                            <span class="pull-left"><strong>User &nbsp;:&nbsp;</strong> Haris</span><br><span class="pull-left"><strong>Counter &nbsp;:&nbsp;</strong>0001</span>
                        </div><br>
                        <div class="desc-value ordertt order_no_receipt" style="display: none;">
                            <span class="pull-left"><strong>Order No  &nbsp;:&nbsp;</strong>  0</span>
                        </div><br class="ordertt" style="display: none;">
                        <div class="desc-value ordertt" style="display: none;">
                            <span class="pull-left"><strong>Waiter  &nbsp;:&nbsp;</strong>  undefined</span>
                        </div><br class="ordertt" style="display: none;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="big-font">Description</th>
                                    <th class="big-font">Qty</th>
                                    <th class="big-font">Rate</th>
                                    <th class="big-font">Disc</th>
                                    <th class="big-font">Amount (PKRs)</th>
                                </tr>
                            </thead>
                            <tbody class="mainbodyclass" id="mainbody">
                                <tr>
                                    <td>Chicken Boti</td>
                                    <td>1.00 Default</td>
                                    <td>499.00</td>
                                    <td>0.00</td>
                                    <td>499.00</td>
                                </tr>
                                <tr>
                                    <td>Chicken malai Boti</td>
                                    <td>1.00 Default</td>
                                    <td>650.00</td>
                                    <td>0.00</td>
                                    <td>650.00</td>
                                </tr>
                                <tr>
                                    <td>Chicken Tikka</td>
                                    <td>1.00 Default</td>
                                    <td>180.00</td>
                                    <td>0.00</td>
                                    <td>180.00</td>
                                </tr>
                            </tbody>
                            <tfoot style="border:0">
                                <tr>
                                    <td colspan="2" class="text-left">
                                        <small>No Of Items:   3.000</small>
                                    </td>
                                    <td colspan="1" class="text-left">
                                        <small>Total Qty:   3</small>
                                    </td>

                                    <td colspan="3" class="text-center">
                                        <small>1329.00</small>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="row">                               
                            <table class="total-table" style="left:100px;position:relative;" align="right">
                                <tbody>
                                    <tr class="TotalTax" style="display: none; ">
                                        <td class="text-right strong-font">No Tax &nbsp;&nbsp;:&nbsp;  </td>
                                        <td>  0.00</td>
                                    </tr>
                                    <tr class="TBDis" style="display: none; ">
                                        <td class="text-right strong-font">Total Bill Discount  &nbsp;&nbsp;:&nbsp;  </td><td>  0.00</td>
                                    </tr>
                                    <tr class="TIDis" style="display: none; ">
                                        <td class="text-right strong-font">Total Item Discount  &nbsp;&nbsp;:&nbsp;  </td><td>  0.00</td>
                                    </tr>
                                    <tr class="DELch" style="display: none; ">
                                        <td class="text-right strong-font">Delivery Charges  &nbsp;&nbsp;:&nbsp;  </td>
                                        <td>  0.00</td>
                                    </tr>
                                    <tr class="SERch" style="display: none; ">
                                        <td class="text-right strong-font">Service Charges  &nbsp;&nbsp;:&nbsp;  </td>
                                        <td>  0.00</td>
                                    </tr>
                                    <tr class="strong_border">
                                        <td class="text-right strong-font">Total  &nbsp;&nbsp;:&nbsp;  </td>
                                        <td>  1329.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right strong-font">Cash Paid  &nbsp;:&nbsp;  </td>
                                        <td>  1329.00</td>
                                    </tr>                            
                                    <tr>

                                        <td class="text-right strong-font">Cash Balance  :  </td>
                                        <td>    0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row remarks_row" style="margin-left: 1px;position: relative; */ display: none; ">
                            <div class="terms-header remarks-header">
                                <strong>Remarks:</strong>
                            </div>
                            <div class="terms-content bill_remarks str-font">

                            </div>
                        </div>
                        <div class="text-center">
                            <svg style="width: 70%; font-size: 1px; transform: translate(0px, 0px);" id="barcode_svg" width="372px" height="142px" x="0px" y="0px" viewBox="0 0 372 142" xmlns="http://www.w3.org/2000/svg" version="1.1"><rect x="0" y="0" width="372" height="142" style="fill:#ffffff;"></rect><g transform="translate(10, 10)" style="fill:#000000;"><rect x="0" y="0" width="2" height="100"></rect><rect x="8" y="0" width="2" height="100"></rect><rect x="12" y="0" width="6" height="100"></rect><rect x="20" y="0" width="6" height="100"></rect><rect x="28" y="0" width="2" height="100"></rect><rect x="32" y="0" width="2" height="100"></rect><rect x="36" y="0" width="2" height="100"></rect><rect x="44" y="0" width="6" height="100"></rect><rect x="52" y="0" width="6" height="100"></rect><rect x="60" y="0" width="2" height="100"></rect><rect x="64" y="0" width="2" height="100"></rect><rect x="68" y="0" width="2" height="100"></rect><rect x="76" y="0" width="6" height="100"></rect><rect x="84" y="0" width="6" height="100"></rect><rect x="92" y="0" width="2" height="100"></rect><rect x="96" y="0" width="2" height="100"></rect><rect x="100" y="0" width="2" height="100"></rect><rect x="108" y="0" width="6" height="100"></rect><rect x="116" y="0" width="6" height="100"></rect><rect x="124" y="0" width="2" height="100"></rect><rect x="128" y="0" width="2" height="100"></rect><rect x="132" y="0" width="2" height="100"></rect><rect x="140" y="0" width="6" height="100"></rect><rect x="148" y="0" width="6" height="100"></rect><rect x="156" y="0" width="2" height="100"></rect><rect x="160" y="0" width="2" height="100"></rect><rect x="164" y="0" width="6" height="100"></rect><rect x="176" y="0" width="2" height="100"></rect><rect x="180" y="0" width="2" height="100"></rect><rect x="184" y="0" width="6" height="100"></rect><rect x="192" y="0" width="2" height="100"></rect><rect x="200" y="0" width="2" height="100"></rect><rect x="208" y="0" width="2" height="100"></rect><rect x="212" y="0" width="2" height="100"></rect><rect x="220" y="0" width="2" height="100"></rect><rect x="224" y="0" width="6" height="100"></rect><rect x="232" y="0" width="2" height="100"></rect><rect x="240" y="0" width="2" height="100"></rect><rect x="244" y="0" width="2" height="100"></rect><rect x="248" y="0" width="6" height="100"></rect><rect x="256" y="0" width="6" height="100"></rect><rect x="264" y="0" width="2" height="100"></rect><rect x="268" y="0" width="2" height="100"></rect><rect x="276" y="0" width="6" height="100"></rect><rect x="284" y="0" width="2" height="100"></rect><rect x="288" y="0" width="6" height="100"></rect><rect x="296" y="0" width="2" height="100"></rect><rect x="300" y="0" width="2" height="100"></rect><rect x="308" y="0" width="2" height="100"></rect><rect x="312" y="0" width="6" height="100"></rect><rect x="320" y="0" width="2" height="100"></rect><rect x="328" y="0" width="2" height="100"></rect><rect x="332" y="0" width="6" height="100"></rect><rect x="340" y="0" width="6" height="100"></rect><rect x="348" y="0" width="2" height="100"></rect><text style="font: 20px monospace" text-anchor="middle" x="176" y="122">00002/1HA</text></g></svg>
                        </div>
                        <div class="text-center"><div id="qrcode"></div></div>
                        <div class="text-center"><div id="FBRqrcode"></div></div>
                        <div class="text-center"><div id="FBRprint"></div></div>
                        <div class="terms">
                            <div class="terms-header">
                                <strong>NOTE:</strong>
                            </div>
                            <div class="terms-content str-font">

                            </div>
                        </div>
                        <div class="make-border text-center">
                          <span class="text-center">  <small>Print Date:   18-3-2020</small></span>
                          <span class="text-center"> <small>Print Time:   10:15 am</small></span>
                        </div>
                        
                    </div>
                </div>
                  <div class="modal-footer ifsync">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="submit_payment(true,true,true)" id="sub_payment">
                        <i class="fa fa-close"></i> Close
                    </button>

                    <button type="button" class="btn btn-primary" onclick="submit_payment(false,true,true)" id="sub_direct_payment">
                        <i class="fa fa-print"></i> Print
                    </button>
                  </div>
                </div>
              </div>
            </div>
        

<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->