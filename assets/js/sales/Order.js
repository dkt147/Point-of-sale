
function recall_order_to_sale(BillN){
    var BillNo=BillN;
    var response=localStorage.getItem('order_waiters_response');
    var res=[];
    response=JSON.parse(response);
    response['orders'].forEach(function(resp){
        if(resp['OrderNo']===BillNo){
            /*res=resp;*/
            /*console.log(resp.detail)*/
            res['master']=resp;
            res['detail']=resp.detail;
        }
    });
    $("#bill_no").text(BillNo);
    $("#waiter").text(res['master']['WaiterName']);
    $("#table").text(res['master']['TableName']);
    localStorage.setItem('send_order_type',res['master']['OrderType']);
    localStorage.setItem('send_table',res['master']['TableCode']);
    localStorage.setItem('send_waiter',res['master']['WaiterCode']);
    get_order_waiter_table_details("");
    $("#payment_butt").show();
    $("#void_ord_butt").show();
    $("#bill_butt").show();
    $("#cancel_butt").show();
    $("#rec_ord").hide();
    $("#disc_butt").hide();
    localStorage.setItem('recallmode','ON');
    var diver=$('#item_adder');
    var div_id=diver.find('tbody');
    div_id.empty();
    add_order_to_sale(res,BillNo);
    hide_loader();


}

function open_bill_info_modal(master,detail,reload){
    /*console.log(detail);*/
    if(detail.length>0) {
        var info_modal = $("#infomodal");
        var modal_content = info_modal.children(".modal-dialog").children(".modal-content");
        var modal_title = modal_content.children(".modal-header").children(".modal-title");
        var modal_body = modal_content.children(".modal-body");
        var modal_footer = modal_content.children(".modal-footer");
        modal_title.empty();
        modal_body.empty();
        modal_footer.empty();
        modal_title.append("Customer Bill");

        var d= new Date();
        var OrderType = master.OrderTypeName;
        var receiptname = 'Customer Bill';
        var invoice =  '<div class="invoice-table" >\n' +
            '\n' +
            '<div class="invoice-logo-w">\n' +
            '                                <img class="logo-big-rec" alt="" src="'+gli("client_logo")+'" >\n' +
            '                                <br><div id="bigbashfont" class="text-center">' + gli("store_name") + '</div>\n' +
            '                                </div>\n' +
            '<div class="invoice-logo-w">\n' +
            '                                <div id="bigbashfont" class="text-center">'+gli("store_address")+'</div>\n' +
            '                                <div id="bigbashfont" class="text-center">Contact&nbsp;:&nbsp; '+gli("store_contact")+'</div>\n' +
            '                                <div class="make-border text-center"><h6>'+receiptname+'</h6></div><br>\n' +
            '                            <div class="make-border text-center">\n' +
            '                              <strong>'+OrderType+'</strong>\n' +
            '                            </div>\n' +
            '                            </div>\n' +
            '                            <div class="desc-value">\n' +
            '                                <span class="pull-left"> <strong>Order No   &nbsp;:&nbsp;</strong>  '+master.OrderNo+'</span>\n' +
            '                            </div><br>\n' +
            '                            <div class="desc-value">\n' +
            '                                <span class="pull-left"><strong>Date & Time  &nbsp;:&nbsp;</strong>  '+formatDate(new Date(master.OrderDate))+'  '+formatAMPM(new Date(master.OrderDate))+'</span>\n' +
            '                            </div><br>\n' +
            '                            <div class="desc-value">\n' +
            '                                <span class="pull-left"><strong>Waiter  &nbsp;:&nbsp;</strong>  '+master.WaiterName+'</span>\n' +
            '                            </div><br>\n' +
            '                            <div class="desc-value">\n' +
            '                                <span class="pull-left"><strong>User &nbsp;:&nbsp;</strong> '+master.UserName+'</span>\n' +
            '                            </div><br>';
        if(master.NameCustomer!=="") {
            invoice += '                            <div class="desc-value address_receipt">\n' +
                '                                <span class="pull-left"><strong>Customer Address  &nbsp;:&nbsp;</strong>  ' + master.AddressCustomer + '</span>\n' +
                '                            </div><br class="address_receipt">\n' +
                '                            <div class="desc-value address_receipt">\n' +
                '                                <span class="pull-left"><strong>Customer Name  &nbsp;:&nbsp;</strong>  ' + master.NameCustomer + '</span>\n' +
                '                            </div><br class="address_receipt">\n' +

                '                            <div class="desc-value name_receipt">\n' +
                '                                <span class="pull-left"><strong>Customer Number  &nbsp;:&nbsp;</strong>  ' + master.NumberCustomer + '</span>\n' +
                '                            </div><br class="address_receipt">';
        }
        invoice +='                            <div class="desc-value table_name_receipt">\n' +
            '                                <span class="pull-left"><strong>Table  &nbsp;:&nbsp;</strong>  '+master.TableName+'</span>\n' +
            '                            </div><br>\n' +
            '                            <table class="table">\n' +
            '                                <thead>\n' +
            '                                <tr>\n' +
            '                                    <th class="big-font">Description</th><th class="big-font">Qty</th><th class="big-font">Rate</th><th class="big-font">Disc</th><th class="big-font">Amount'+get_currency()+' (s)</th>\n' +
            '                                </tr>\n' +
            '                                </thead>\n' +
            '                                <tbody class="mainbodyclass" id="mainbody">\n' +
            '                                </tbody>\n' +
             '                                <tfoot style="border:0">\n' +
            '                                <tr>\n' +
            '                                    <td colspan="2" class="text-left">\n' +
            '                                        <small>No Of Items:   ' + parseFloat(master.TotalQuantity).toFixed(2) + '</small>\n' +
            '                                    </td>\n' +
            '                                    <td colspan="1" class="text-left">\n' +
            '                                        <small>Total Qty:   ' + master.tot_qty + '</small>\n' +
            '                                    </td>\n' +
            '\n' +
            '                                    <td colspan="3" class="text-center">\n' +
            '                                        <small>' + (parseFloat(master.NetAmount) - parseFloat(master.TotalTaxAmount) + parseFloat(master.TotalDiscount)).toFixed(2) + '</small>\n' +
            '                                    </td>\n' +
            '                                </tr>\n' +
            '                                </tfoot>\n' +
            '                            </table>\n' +
            '                            <table class="total-table" align="right">\n' +
            '                                <tr>\n' +
            '                                    <td class="text-right strong-font">'+get_tax_name()+' &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.TotalTaxAmount).toFixed(2) + '</td>\n' +
            '                                </tr>\n' +
            '                                <tr>\n' +
            '                                    <td class="text-right strong-font">Total Bill Discount  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.OrderDiscount).toFixed(2) + '</td>\n' +
            '                                </tr>\n' +
            '                                <tr>\n' +
            '                                    <td class="text-right strong-font">Total Item Discount  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.TotalDiscount - master.OrderDiscount).toFixed(2) + '</td>\n' +
            '                                </tr>\n' +
            '                            <tr class="strong_border">\n' +
            '                                <td class="text-right strong-font">Total  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.NetAmount).toFixed(2) + '</td>\n' +
            '                            </tr>\n' +
            '                            <tr>\n' +
            '                            </table><br><br><br><br><br><br><br>\n'+
            '                            <div class="make-border text-center">\n' +
            '                                      <span class="col-md-6 text-center">  <small>Print Date:   '+formatDate(d)+'</small></span>\n' +
            '                                       <span class="col-md-6 text-center"> <small>Print Time:   '+formatAMPM(d)+'</small></span>\n' +
            '                            </div>\n' +
            '                    <div class="invoice-footer">\n' +
            '                        <div class="invoice-logo">\n' +
            '                            <img alt="" src="'+gli("rec_logo_url")+'"><br><span>Powered by CIS website:www.cisepos.com</span>\n' +
        '                        </div>\n' +
        '                        <div class="invoice-info">\n' +
        '                            <span>info@cisepos.com</span>\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '                        </div>';


        modal_body.append(invoice);
        if(master.TableName==="Nil"){
            $(".table_name_receipt").hide();
        }
        if(master.OrderTypeName==="Delivery"){
            $(".address_receipt").show();
            $(".name_receipt").show();
        }else{
            $(".address_receipt").hide();
            $(".name_receipt").hide();
        }

        var table_body = $("#mainbody");
        las_info=JSON.parse(localStorage.getItem('last_info'));

        if(isequalvaluecheck(las_info['barcode_receipt'],1)) {
            JsBarcode("#barcode_svg", master.BillNo);
        }else{
            $("#barcode_svg").css('width','0px');
        }

        detail.forEach(function (det) {
            table_body.append('<tr><td>' + det.ItemName + '</td><td>' + det.Quantity +' '+ det.UnitName +'</td><td>' + det.Rate + '</td><td>' + det.ItemDiscountAmount + '</td><td>' + det.NetAmount + '</td></tr><br>');
        });
        var ok_button = '<button id="ok_it" type="button" class="btn btn-success" data-dismiss="modal">OK</button>';
        var print_button = '<button id="osk_it" type="button" class="btn btn-success" onclick=printElement_exe("printing_body")>Print</button>';
        modal_footer.append(ok_button);
        modal_footer.append(print_button);
        info_modal.modal('show');

        if (reload === true) {
            info_modal.on('hidden.bs.modal', function () {
                location.reload();
            });
        }
    }
    else{
        open_error_modal("Total Quantity Should be Atleast 1");
    }
}




function get_bill(){
    var BillNo=$("#bill_no").text();
    var response=localStorage.getItem('order_waiters_response');
    var res=[];
    response=JSON.parse(response);
    response['orders'].forEach(function(resp) {
        if (resp['OrderNo'] === BillNo) {
            res['master'] = resp;
            res['detail'] = resp.detail;
            open_bill_info_modal(res.master, res.detail, false);
        }
    });
}

function add_order_to_sale(response,BillNo){
    var diver=$('#item_adder');
    var div_id=diver.find('tbody');
    var tempScrollTop = $(diver).scrollTop()+$(diver).height();

    if(BillNo==='') {
        var data = response;
        /*$(".add_new_sale").prop('disabled', true);
        $("input#sale_select").prop('disabled',true);*/
        var div_idr = 'item_' + Date.now()+data["BarCode"];

        var div_item = '<tr id="' + div_idr + '" class="item_list col-md-12"><td class="billno_item" data-billno_item="' + BillNo + '">' + BillNo + '</td><td class="barcode_item" data-batch_no="'+ data['BatchNo'] +'" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="0" data-isnewitem="0" data-itemName="' + data["Item"] + '">' + data["Item"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="'+data['StockQuantity']+'" data-itemUnitCode="'+data['UnitCode']+'" data-unitstockquantity="'+data['StockQuantity']+'" data-itemquantity="1">1<span class="unitname">'+data['unitname']+'</span></td><td class="rate_item" data-itemremarks="' + data["Description"] + '"  data-itemTaxPercentage="' + data["TaxPercentage"] + '" data-itemTaxAmount="' + data["TaxAmount"] + '" data-disc="0" data-itemRate="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td class="q_tot_price" data-itemDiscountAmount="' + data["ItemDiscountAmount"] + '" data-itemPromoCode="' + data["ItemPromoCode"] + '" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemtotalprice="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td><button class="remove_item btn btn-danger" onclick=ask_confirm_void_item("' + data["BarCode"] + '") >void</button></td></tr>';

        div_id.append(div_item);


    } else {
        var datas = response.detail;
        var tot_bill_disc=response.master['OrderDiscountPercentage'];
        var tot_bill_disc_number=response.master['OrderDiscount'];
        var bill_dis=$("#bill_dis");
        var oto_llib=$("#total_bill_discount");
        var bill_disc_number=$("#bill_dis_number");
        bill_disc_number.val(tot_bill_disc_number);
        var chan_sel=$("#channel_select");
        var sa_cus=$("#sale_customer");
        $("#sale_customer_select").val(response.master['NameCustomer']);
        sa_cus.val(response.master['PartyCode']);
        sa_cus.attr("data-Customer",response.master['NameCustomer']);
        sa_cus.attr("data-CustomerAddress",response.master['AddressCustomer']);
        sa_cus.attr("data-CustomerPhone",response.master['NumberCustomer']);

        if(response.master['channel_id']==0){
            chan_sel.val("");
        }else{
            chan_sel.val(response.master['channel_id']);
        }
if (response.master['OrderDiscount'] != "" || response.master['OrderDiscount'] != 0) {
     $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");
            
    var node = document.createElement("span");
    node.setAttribute("id","bill_prom_code");
    node.setAttribute("class","pull-left");
    
    
    node.style.color="#3F7114";
    $("input#bill_dis_number").val(response.master['OrderDiscount']);
    var text1 = "Promotion discount applied";
    var txt = document.createTextNode(text1);
    node.append(txt);
    
    $("#showDiscText").append(node);
}else{

}



        oto_llib.empty();
        oto_llib.append(tot_bill_disc);
        bill_dis.val(tot_bill_disc);
        datas.forEach(function (data) {

            var unit_disc=parseFloat(data['ItemDiscountAmount'])/parseFloat(data['Quantity']);
            var div_idr = data["SerialNo"]+'item_' + Date.now() + data["BarCode"];
            /*var div_item='<li id="'+div_idr+'" class="item_list col-md-12"><div class="barcode_item col-md-2" data-itemBarcode="'+data["BarCode"]+'">'+data["BarCode"]+'</div><div class="col-md-2 name_item" data-itemName="'+data["Item"]+'">'+data["Item"]+'</div><div class="rate_item col-md-2" data-itemRate="'+data["SalesRate"]+'" >'+data["CurrencySalesRate"]+'</div><div class="col-md-3 q_tot_price" data-itemtotalprice="'+data["SalesRate"]+'" >'+data["CurrencySalesRate"]+'</div><div class="col-md-1 q_item" data-itemquantity="1">1</div><button class="edit_item col-md btn btn-default" data-edit='+div_idr+'><i class="fa fa-edit"></i></button><button class="remove_item pull-right col-md btn btn-danger" data-remover='+div_idr+'>x</button></li>';*/
            if(data['IsModifier']===1){
                var div_item = '<tr id="' + div_idr + '" class="item_list col-md-12"><td hidden class="barcode_item" data-batch_no="'+ data['BatchNo'] +'" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="1" data-isnewitem="0" data-itemName="' + data["ItemName"] + '">' + data["ItemName"] + '-<br>' + data["BarCode"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="'+data['StockQuantity']+'" data-itemUnitCode="'+data['UnitCode']+'" data-unitstockquantity="'+data['StockQuantity']+'" data-itemquantity="1">1<span class="unitname">'+get_unitname(data['UnitCode'],true)+'</span></td><td hidden class="rate_item" data-itemremarks="' + data["Description"] + '" data-disc="' + data["ItemDiscountPercentage"] + '" data-itemTaxPercentage="' + data["ItemTaxPercentage"] + '" data-itemTaxAmount="' + data["ItemTaxAmount"] + '" data-itemRate="' + data["Rate"] + '" >' + data["NRate"] + '</td><td class="q_tot_price" data-itemDiscountAmount="' + unit_disc + '" data-itemPromoCode="' + data["ItemPromoCode"] + '" data-itemTaxAmount="' + data["ItemTaxAmount"] + '" data-itemtotalprice="' + data["NetAmount"] + '" >' + data["NAmount"] + '</td><td></td></tr>';
            }else {
                console.log(data);
                div_item = '<tr id="' + div_idr + '" class="item_list col-md-12"><td hidden class="barcode_item" data-batch_no="'+ data['BatchNo'] +'" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="0" data-isnewitem="0" data-itemName="' + data["ItemName"] + '">' + data["ItemName"] + '-<br>' + data["BarCode"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="'+data['StockQuantity']+'" data-itemUnitCode="'+data['UnitCode']+'" data-unitstockquantity="'+data['StockQuantity']+'" data-itemquantity="' + data["Quantity"] + '">' + data["Quantity"] + '<span class="unitname">'+get_unitname(data['UnitCode'],true)+'</span>-<br>' + data["BarCode"] + '</td><td hidden class="rate_item" data-itemremarks="' + data["Description"] + '" data-disc="' + data["ItemDiscountPercentage"] + '" data-itemTaxPercentage="' + data["ItemTaxPercentage"] + '" data-itemTaxAmount="' + data["ItemTaxAmount"] + '" data-itemRate="' + data["Rate"] + '" >' + data["NRate"] + '</td><td class="q_tot_price" data-itemDiscountAmount="' + unit_disc + '" data-itemPromoCode="' + data["ItemPromoCode"] + '" data-itemTaxAmount="' + data["ItemTaxAmount"] + '" data-itemtotalprice="' + data["NetAmount"] + '" >' + data["NAmount"] + '</td><td><button class="remove_i btn btn-danger" onclick=ask_confirm_void_item("' + data["BarCode"] + '")>void</button></td></tr>';
            }

            div_id.append(div_item);
            if(data['ItemPromoCode'] != "-"){
                 $("tr#" + div_idr + " > td.name_item > .rem").append("*<small>Promotion discount applied.</small>");
            }
           
            var quantity = $("tr#" + div_idr + " > td.q_item");

            var item_totprice = $("tr#" + div_idr + " > td.q_tot_price");
            var item_rate = $("tr#" + div_idr + " > td.rate_item");
            var new_stockquan=1;
            quantity.attr('data-unitstockquantity',new_stockquan);

            var disc_amt = data["ItemDiscountAmount"];
            var new_quantity = data["Quantity"];
            var new_tot_price = new_quantity * parseFloat(item_rate.attr('data-itemrate'));
            var new_tax_price = new_quantity * parseFloat(item_rate.attr('data-itemTaxAmount'));
            var price_for_calc_disc=new_tot_price-new_tax_price;
            if(!isequalvaluecheck(price_for_calc_disc,0)){
                var new_disc = (disc_amt/price_for_calc_disc) * 100;
            }else{
                new_disc=0;
            }

            var price_af_disc = new_tot_price - disc_amt;




            item_totprice.attr('data-itemTaxAmount', new_tax_price);
            quantity.attr('data-itemquantity', new_quantity);
            quantity.attr('data-itemStockQuantity', new_quantity*quantity.attr('data-unitstockquantity'));
            quantity.html(new_quantity+' '+'<span class="unitname">'+get_unitname(data['UnitCode'],true)+'</span>');
            item_totprice.attr('data-itemtotalprice', new_tot_price);

            item_rate.attr('data-disc', new_disc);

            item_totprice.html(get_currency() + "s " + price_af_disc.toFixed(2));
            if (disc_amt > 0) {
                item_totprice.append("<div><small>" + get_currency() + "s " + new_tot_price.toFixed(2) + "-" + disc_amt + "<small><div>");
            }
        });
    }



    var vaction=localStorage.getItem('vaction');
    if(vaction==0){
        $(".remove_item").each(function(){
            $(this).prop( "onclick", null );
            $(this).addClass("disabled");
        });
        $(".remove_i").each(function(){
            $(this).prop( "onclick", null );
            $(this).addClass("disabled");
        });

    }

    $(diver).scrollTop(tempScrollTop);
    add_bill_discount_number();
}




function ask_recall_order() {
     $("#recall_order").hide();
     $("#recallloader").show();
    order_waiter_table_list(function () {
        // What to do if we succeed
            var response=localStorage.getItem('order_waiters_response');
            var order_data= JSON.parse(response).orders;
            var orders = "<div class='container'><strong>Orders:</strong><div class='table-responsive'><table class='table table-striped table-lightfont table_data'><thead><tr><th>Order No</th><th>Order Time</th><th>Waiter</th><th>Table</th><th>Order Type</th><th>Recall</th></tr></thead><tbody>";
            order_data.forEach(function (order){
                if(order['RefPosBillNo']==="") {
                    orders += "<tr><td>" + order['OrderNo'] + "</td><td>" + formatDate(new Date(order['OrderDate'])) + " " + formatAMPM(new Date(order['OrderDate'])) + "</td><td>" + order['WaiterName'] + "</td><td>" + order['TableName'] + "</td><td>" + order['OrderTypeName'] + "</td><td><div class='btn btn-success' data-dismiss='modal' onclick=recall_order_to_sale('" + order['OrderNo'] + "')><i class='fa fa-money'></i> Recall</div></td></tr>";
                }
            });
            orders +="</tbody></div></div>";

            var ask_modal = $("#tablemodal");
            var modal_content = ask_modal.children(".modal-dialog").children(".modal-content");
            var modal_title = modal_content.children(".modal-header").children(".modal-title");
            var modal_body = modal_content.children(".modal-body");
            var modal_footer = modal_content.children(".modal-footer");
            modal_title.empty();
            modal_body.empty();
            modal_footer.empty();
            modal_title.append("Select Order");
            modal_body.append(orders);
            /* modal_footer.append(pay_button);*/
            $("#recall_order").show();
            $("#recallloader").hide();
            ask_modal.modal('show');
        });
}


function void_order_item(order_no,item_serial,cb){

}



function order_waiter_table_list(callback){
    var ajax_url = 'get/ordertype/waiter/table';
    $.ajax({
        method: 'GET', // Type of response and matches what we said in the route
        url: ajax_url,
        processData: false,
        success: function (response) { // What to do if we succeed
            localStorage.setItem('order_waiters_response',response);
            callback();
        },
        error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
            /*open_error_modal('some error occured');*/
            if(jqXHR.status===500){
                order_waiter_table_list(callback);
            }

        }
    });
}


/* sale functions for restaurant  */

$("a.order-type-button.order-button").on('click',function(){

});
$(".waiter-button").click(function(){

});
$(".table-button").click(function(){

});


//Order Functions

function select_order_type(thiselem){
    localStorage.setItem('send_order_type',$(thiselem).attr('data-id'));
    disselect_all_ot("order-button");
    $(thiselem).addClass('selectthisot');
}

function select_waiter(thiselem){
    localStorage.setItem('send_waiter',$(thiselem).attr('data-id'));
    disselect_all_ot("waiter-button");
    $(thiselem).addClass('selectthisot');
}

function select_table(thiselem){
    localStorage.setItem('send_table',$(thiselem).attr('data-id'));
    disselect_all_ot("table-button");
    $(thiselem).addClass('selectthisot');
}
function disselect_all_ot(classname){
    var elements = document.getElementsByClassName(classname);
    for(var i = 0; i < elements.length; i++){
        $(elements[i]).removeClass('selectthisot'); // Hide all elements.
    }
}


function ask_table_waiter() {


    if(localStorage.getItem('recallmode')==="OFF") {
        get_order_waiter_table_details("");

        localStorage.setItem('send_table', "");
        localStorage.setItem('send_waiter', "");
        var waiters_data = JSON.parse(localStorage.getItem('order_waiters_response')).waiters;
        var tables_data = JSON.parse(localStorage.getItem('order_waiters_response')).tables;


        var w = 0;
        var waiters = "<div class='container'><div class='row'><div class='col-sm-12'><strong>Select Waiter:</strong></div></div><div class='row' id='waiter'><div class='col-sm-12'>";
        waiters_data.forEach(function (waiter) {
            if (w === 0) {
                waiters += "<a onclick='select_waiter(this)' data-id='" + waiter['id'] + "' class='order-type-button selectthisot waiter-button button-" + (++w) + "'><img src='assets/img/waiter.ico' alt=''/><h6>" + waiter['WaiterName'] + "</h6></a>";
                localStorage.setItem('send_waiter', waiter['id']);
            } else {
                waiters += "<a onclick='select_waiter(this)' data-id='" + waiter['id'] + "' class='order-type-button waiter-button button-" + (++w) + "'><img src='assets/img/waiter.ico' alt=''/><h6>" + waiter['WaiterName'] + "</h6></a>";
            }
        });
        waiters += "</div></div>";

        var t = 0;
        var tc = 0;
        var tables = "<div class='row'><div class='col-sm-12'><strong>Select Table:</strong></div></div><div class='row' id='table'><div class='col-sm-12'>";
        tables_data.forEach(function (table) {
            if (tc === 0) {
                if (table['occupied'] === 1) {
                    tables += "<a onclick='#' data-id='" + table['id'] + "' class='order-type-button-occupied table-button button-" + (++t) + "'><img src='assets/img/occupied.ico' alt=''/><h6>" + table['TableName'] + "<br>Occupied</h6></a>";

                }
                else {
                    tables += "<a onclick='select_table(this)' data-id='" + table['id'] + "' class='order-type-button selectthisot table-button button-" + (++t) + "'><img src='assets/img/available.ico' alt=''/><h6>" + table['TableName'] + "<br>Available</h6></h6></a>";
                    localStorage.setItem('send_table', table['id']);
                    tc++;
                }
            }
            else {
                if (table['occupied'] === 1) {
                    tables += "<a onclick='#' data-id='" + table['id'] + "' class='order-type-button-occupied table-button button-" + (++t) + "'><img src='assets/img/occupied.ico' alt=''/><h6>" + table['TableName'] + "<br>Occupied</h6></a>";
                }
                else {
                    tables += "<a onclick='select_table(this)' data-id='" + table['id'] + "' class='order-type-button table-button button-" + (++t) + "'><img src='assets/img/available.ico' alt=''/><h6>" + table['TableName'] + "<br>Available</h6></a>";
                }
            }
        });
        tables += "</div></div>";

        /*var buttons ="<a href='http://google.com' target='_blank' class='order-type-button button-1'><img src='assets/img/icon.png' alt=''/><h6>Take Away</h6></a><a href='http://google.com' target='_blank' class='order-type-button button-2'><img src='assets/img/icon.png' alt=''/><h6>Take Away</h6></a><a href='http://google.com' target='_blank' class='order-type-button button-3'><img src='assets/img/icon.png' alt=''/><h6>Take Away</h6></a><a href='http://google.com' target='_blank' class='order-type-button button-4'><img src='assets/img/icon.png' alt=''/><h6>Take Away</h6></a> ";*/
        var pay_button = "<div class='btn btn-success' data-dismiss='modal' onclick='take_order()' id='sub_order'><i class='fa fa-money'></i> Submit Order</div>";
        var ask_modal = $("#askmodal");
        var modal_content = ask_modal.children(".modal-dialog").children(".modal-content");
        var modal_title = modal_content.children(".modal-header").children(".modal-title");
        var modal_body = modal_content.children(".modal-body");
        var modal_footer = modal_content.children(".modal-footer");
        modal_title.empty();
        modal_body.empty();
        modal_footer.empty();
        modal_title.append("Select Order Details");
        if (localStorage.getItem('send_order_type') === "1") {
            modal_body.append(waiters + tables);
        } else {
            modal_body.append(waiters);
            localStorage.setItem('send_table', '');
        }
        ///modal_body.append(buttons);
        modal_footer.append(pay_button);
        ask_modal.modal('show');
    }
    else{
        take_order();
    }
}

function take_order(){

    var BillDate=Date.now();
    var BillTime=Date.now();
    var BillNo=$("#bill_no").text();
    var bill_disc=$("#bill_dis");
    var bill_dis_number=$("#bill_dis_number");
    if(bill_disc.val()===""){
        bill_disc.val(0);
        bill_dis_number.val(0);
    }
    var BillDiscountPercentage=bill_disc.val();
    var BillDiscount=bill_dis_number.val();
    console.log(BillDiscount);
    var TotalQuantity=Number($("#totalItem_div").text());
    var TotalStockQuantity=TotalQuantity;
    var TotalAmount=$("#total_div").text();
    var billPromoCode=bill_dis_number.attr("data-billPromoCode");
    var sa_cus=$("#sale_customer");
    var PartyCode=sa_cus.val();
    var PartyName=sa_cus.attr("data-Customer");
    var PartyAddress=sa_cus.attr("data-CustomerAddress");
    var PartyPhone=sa_cus.attr("data-CustomerPhone");
    var OrderType=localStorage.getItem('send_order_type');
    var waiter=localStorage.getItem('send_waiter');
    var table=localStorage.getItem('send_table');
    var channel_id=$("#channel_select").find("option:selected").val();

    /*console.log(waiter);*/
    /*var OrderType=$("#ordertype").find("option:selected").val();
    var waiter=$("#waiter").find("option:selected").val();
    var table=$("#table").find("option:selected").val();
    */
    var bill_remarks=$("#bill_remarks").val();
    var TaxAmount=$("#total_taxes").text();


    var ask_modal=$("#askmodal");
    ask_modal.modal('hide');


    if(PartyCode===""){
        PartyCode="NULL";
    }
    var PartyAmount=0.00;
    var diver=$('#item_adder');
    var div_id=diver.find('tbody tr');
    var i=1;
    var j=0;
    var newcount=0;
    var sendData=new FormData();

    sendData.append('BillDate',BillDate);
    sendData.append('BillTime',BillTime);
    sendData.append('BillNo',BillNo);
    sendData.append('BillDiscountPercentage',BillDiscountPercentage);
    sendData.append('BillDiscount',BillDiscount);
    sendData.append('TotalQuantity',TotalQuantity);
    sendData.append('TotalStockQuantity',TotalStockQuantity);
    sendData.append('TotalAmount',TotalAmount);
    sendData.append('billPromoCode',billPromoCode);
    sendData.append('PartyCode',PartyCode);
    sendData.append('PartyName',PartyName);
    sendData.append('PartyAddress',PartyAddress);
    sendData.append('PartyPhone',PartyPhone);
    sendData.append('PartyAmount',PartyAmount);
    sendData.append('OrderType',OrderType);
    sendData.append('Waiter',waiter);
    sendData.append('Table',table);
    sendData.append('BillRemarks',bill_remarks);
    sendData.append('TotalTaxAmount',TaxAmount);
    sendData.append('channel_id',channel_id);

    var send_order={};
    send_order['BillDate']=BillDate;
    send_order['BillTime']=BillTime;
    send_order['BillNo']=BillNo;
    send_order['BillDiscountPercentage']=BillDiscountPercentage;
    send_order['BillDiscount']=BillDiscount;
    send_order['TotalQuantity']=TotalQuantity;
    send_order['TotalStockQuantity']=TotalStockQuantity;
    send_order['TotalAmount']=TotalAmount;
    send_order['billPromoCode']=billPromoCode;
    send_order['PartyCode']=PartyCode;
    send_order['PartyAmount']=PartyAmount;
    send_order['OrderType']=OrderType;
    send_order['Waiter']=waiter;
    send_order['Table']=table;
    send_order['BillRemarks']=bill_remarks;
    send_order['TotalTaxAmount']=TaxAmount;
    send_order['channel_id']=channel_id;

    var itemss=[];
    var quan=0;
    div_id.each(function(){

        if($(this).find('td.name_item').attr('data-isnewitem')==="1"){
            newcount++;
        }
        var items=[{'SerialNo':i
            ,'BarCode':$(this).find("td.barcode_item").attr('data-itemBarcode')
            ,'BatchNo':$(this).find("td.barcode_item").attr('data-batch_no')
            ,'Quantity':$(this).find("td.q_item").attr('data-itemquantity')
            ,'StockQuantity':$(this).find("td.q_item").attr('data-itemStockQuantity')
            ,'ItemDiscountPercentage':$(this).find('td.rate_item').attr('data-disc')
            ,'ItemDiscountAmount':$(this).find('td.q_tot_price').attr('data-itemDiscountAmount')
            ,'ItemTaxPercentage':$(this).find('td.rate_item').attr('data-itemTaxPercentage')
            ,'ItemTaxAmount':$(this).find('td.q_tot_price').attr('data-itemTaxAmount')
            ,'ItemRemarks':$(this).find('td.rate_item').attr('data-itemremarks')
            ,'IsNewItem':$(this).find('td.name_item').attr('data-isnewitem')
            ,'IsModifier':$(this).find('td.name_item').attr('data-IsModifier')
            ,'UnitCode':$(this).find('td.q_item').attr('data-itemunitcode')
            ,'UnitName':get_unitname($(this).find('td.q_item').attr('data-itemunitcode'),true)
            ,'ItemPromoCode':$(this).find('td.q_tot_price').attr('data-itemPromoCode')
        }];
        sendData.append('items[]',JSON.stringify(items));
        itemss[j]=JSON.stringify(items);
        quan += parseFloat($(this).find("td.q_item").attr('data-itemquantity'));
        i++;
        j++;
    });
    sendData.append('NewItem',newcount);
    send_order['NewItem']=newcount;
    send_order['items']=itemss;

    if(i>1) {
        if(OrderType==="1" && table==="") {
            open_error_modal("No Table Selected");
        }
        else{
            insert_order(send_order,function(ordermaster,saledetitem){
                open_order_info_modal(ordermaster,saledetitem,false,"Order Receipt");
                after_order_sync();
                Lockr.rm('Idraft');
                clear_confirmed(true);
            });
        }
    }else{
        open_error_modal("There should be atleast single new item");
    }



}


function after_order_sync(){
    show_sync_loader();  //show loader
    if($("#localstorageuse").val()==="0") {
        get_items();
    }
    get_last_info(); //important info from server
        order_waiter_table_list(function(){
            $("#recallloader").css('display', 'block');
            $("#recall_order").css('display', 'none');
            get_order_waiter_table_details("refresh");
            localStorage.setItem('recallmode', "OFF");
        }); // waiters ,tables ,orders list
    hide_sync_loader(); //hide loader
}



function open_order_info_modal(master,detail,reload,receiptname){

    var info_modal=$("#infomodal");
    var modal_content=info_modal.children(".modal-dialog").children(".modal-content");
    var modal_title=modal_content.children(".modal-header").children(".modal-title");
    var modal_body=modal_content.children(".modal-body");
    var modal_footer=modal_content.children(".modal-footer");
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Order Taken");


    var d = new Date();
    var OrderType=master.OrderTypeName;
    var invoice ='<div class="invoice-table" style="width:388px" >\n' +
        '                                <div class="make-border text-center"><h6>'+receiptname+'</h6></div><br>\n' +
        '                            <div class="make-border text-center">\n' +
        '                              <strong>'+OrderType+'</strong>\n' +
        '                            </div>\n' +
        '                            <div class="desc-value">\n' +
        '                                <span class="pull-left"> <strong>Order No   &nbsp;:&nbsp;</strong>  '+master.OrderNo+'</span>\n' +
        '                            </div><br>\n' +
        '                            <div class="desc-value">\n' +
        '                                <span class="pull-left"><strong>Date & Time  &nbsp;:&nbsp;</strong>  '+formatDate(new Date(master.OrderDate))+'  '+formatAMPM(new Date(master.OrderDate))+'</span>\n' +
        '                            </div><br>\n' +
        '                            <div class="desc-value">\n' +
        '                                <span class="pull-left"><strong>Waiter  &nbsp;:&nbsp;</strong>  '+master.WaiterName+'</span>\n' +
        '                            </div><br>\n' +
        '                            <div class="desc-value">\n' +
        '                                <span class="pull-left"><strong>User &nbsp;:&nbsp;</strong> '+master.UserName+'</span>\n' +
        '                            </div><br>\n' +
        '                            <div class="desc-value table_name_receipt">\n' +
        '                                <span class="pull-left"><strong>Table  &nbsp;:&nbsp;</strong>  '+master.TableName+'</span>\n' +
        '                            </div><br>\n' +
        '                            <table class="table">\n' +
        '                                <thead>\n' +
        '                                <tr>\n' +
        '                                    <th colspan="2" class="big-font">Description</th><th colspan="2" class="big-font"></th><th class="big-font">Qty</th>\n' +
        '                                </tr>\n' +
        '                                </thead>\n' +
        '                                <tbody class="mainbodyclass" id="mainbody">\n' +
        '                                </tbody>\n' +
        '                            </table>\n'+
        '                            <div class="make-border text-center">\n' +
        '                                      <span class="col-md-6 text-center">  <small>Print Date:   '+formatDate(d)+'</small></span>\n' +
        '                                       <span class="col-md-6 text-center"> <small>Print Time:   '+formatAMPM(d)+'</small></span>\n' +
        '                            </div>\n' +
        '                        </div>';




    modal_body.append(invoice);

    if(master.TableName==="Nil"){
        $(".table_name_receipt").hide();
    }
    var table_body=$("#mainbody");


    var detcount=0;
    detail.forEach(function(det){


        if(receiptname==="Void Item Receipt"){
            det.Description=det.VoidReason;
        }
        if(det.Description !=='' && receiptname!=="Void Order Receipt"){
            if(isequalvaluecheck(det.Amount,0.00)) {
                table_body.append('<tr><td colspan="5">' + det.ItemName + '<br>*' + det.Description + '</td></tr><br>');
            }else{
                table_body.append('<tr><td colspan="3"><strong>' + det.ItemName + '<br>*' + det.Description + '</strong></td><td colspan="2">' + det.Quantity +' '+ det.UnitName +'</td></tr><br>');
            }
        }else{
            if(isequalvaluecheck(det.Amount,0.00)) {
                table_body.append('<tr><td colspan="5">' + det.ItemName + '</td></tr><br>');
            }else{
                table_body.append('<tr><td colspan="3"><strong>' + det.ItemName + '</strong></td><td colspan="2">' + det.Quantity +' '+ det.UnitName +'</td></tr><br>');
            }
        }
        detcount++;
    });


    /*mainbody.append('<div class="col pull-left">Total Items :</div>');
    mainbody.append('<div class="col pull-right">'+master.TotalQuantity+'</div>');
    mainbody.append('<div class="col pull-right">Total Amount : </div>');*/

    var ok_button='<button id="ok_it" type="button" class="btn btn-success" data-dismiss="modal">OK</button>';
    var print_button='<button id="osk_it" type="button" class="btn btn-success" onclick=printElement_exe("printing_body")>Print</button>';
    modal_footer.append(ok_button);
    modal_footer.append(print_button);
    /*JsBarcode("#barcode_svg", master.BillNo);*/
    if(detcount>0) {
        info_modal.modal('show');
    }

    if(reload===true){
        info_modal.on('hidden.bs.modal', function (){
            location.reload();
        });
    }
}


function get_order_waiter_table_details(val){
    order_waiter_table_list(function(){
        localStorage.getItem('order_waiters_response');
        var types = JSON.parse(localStorage.getItem('order_waiters_response')).ordertypes;
        var ot=0;
        var OrderType="<!--<div class='row'><div class='col-sm-12'><strong>Select Order Type:</strong></div></div>--><div class='row' id='ordertype'><div class='col-md-12 col-sm-12 col-xs-12'>";
        types.forEach(function (ordertype){
            if(ot===0 && val==='refresh'){

                OrderType += "<a onclick='select_order_type(this)' data-id='"+ordertype['id']+"' class='order-type-button selectthisot order-button button-"+(++ot)+"'><img src='assets/img/"+ordertype['Color']+".ico' alt=''/><h6>"+ordertype['OrderType']+"</h6></a>";
                localStorage.setItem('send_order_type',ordertype['id']);
                $("#rec_ord").css('display','block');
                $("#recallloader").css('display', 'none');
                $("#recall_order").css('display', 'block');
            }else{
                if(isequalvaluecheck(localStorage.getItem('send_order_type'),ordertype['id'])){
                    OrderType += "<a onclick='select_order_type(this)' data-id='"+ordertype['id']+"' class='order-type-button selectthisot order-button button-"+(++ot)+"'><img src='assets/img/"+ordertype['Color']+".ico' alt=''/><h6>"+ordertype['OrderType']+"</h6></a>";
                }else{
                    OrderType += "<a onclick='select_order_type(this)' data-id='"+ordertype['id']+"' class='order-type-button order-button button-"+(++ot)+"'><img src='assets/img/"+ordertype['Color']+".ico' alt=''/><h6 style='' id='orderHeading'>"+ordertype['OrderType']+"</h6></a>";
                }

            }

        });
        OrderType +="</div></div>";

        var ordertypelist=$("#order_type_list");
        ordertypelist.empty();
        ordertypelist.append(OrderType);
    });


}

function getordertypename(ordertype){
    var fromstorage=JSON.parse(localStorage.getItem('order_waiters_response'));
    var ordertypename="";
    fromstorage['ordertypes'].forEach(function(itm){
        if(isequalvaluecheck(itm.id,ordertype)){
            ordertypename=itm.OrderType;
        }
    });
    return ordertypename;
}
function get_customer_det(PartyCode){
    var fromstorage=JSON.parse(localStorage.getItem('customer_list'));
    var customer_det=[];
    fromstorage.forEach(function(customer){
        if(isequalvaluecheck(customer['value'],PartyCode)){
            customer_det['label']=customer['label'];
            customer_det['AddressCustomer']=customer['CustomerAddress'];
            customer_det['CustomerPhone']=customer['CustomerPhone'];
        }
    });
    return customer_det;
}
function getWaiterName(waiter){
    var fromstorage=JSON.parse(localStorage.getItem('order_waiters_response'));
    var waitername="";
    fromstorage['waiters'].forEach(function(itm){
        if(isequalvaluecheck(waiter,itm.id)){
            waitername= itm.WaiterName;
        }
    });
    return waitername;
}
function getTableName(table){
    var fromstorage=JSON.parse(localStorage.getItem('order_waiters_response'));
    var tablename="";
    fromstorage['tables'].forEach(function(itm){
        if(isequalvaluecheck(table,itm.id)){
            tablename=itm.TableName;
        }
    });
    return tablename;
}

function setorderref(order,BillNo){


    var fromstorage=JSON.parse(localStorage.getItem('order_waiters_response'));
    /*console.log(order);
    console.log(BillNo);*/
    fromstorage['orders'].forEach(function(itm){

        /*console.log(itm.OrderNo);*/
        if(isequalvaluecheck(itm.OrderNo,order)){
            itm['RefPosBillNo']=BillNo;

        }
    });
    var l=localStorage.getItem('ordersoffline');
    if(l===null || l<0){
        localStorage.setItem('ordersoffline',0);
    }
    else{
        var lasto = parseFloat(l) + 1;
        for(var kil=0;kil<lasto;kil++){
            if(localStorage.getItem('order'+kil)!==null){
                /*console.log(j+">"+localStorage.getItem('sale'+j)+">"+last);*/
                var orders = JSON.parse(localStorage.getItem('order'+kil));
                /*console.log(orders);*/
                if(orders.BillNo===order){
                    orders.RefPosBillNo=BillNo;
                    localStorage.setItem('order'+kil,JSON.stringify(orders));
                }
            }
        }
    }
    localStorage.setItem('order_waiters_response',JSON.stringify(fromstorage));

}

function make_table_waiter_occupied(){
    localStorage.setItem('recallmode',"OFF");
    var new_orders=JSON.parse(localStorage.getItem('order_waiters_response'));

    var oc=[];
    var a=0;
    new_orders['orders'].forEach(function(itm){


        new_orders['tables'].forEach(function (tab) {
            if(itm['RefPosBillNo']==="") {
                if (isequalvaluecheck(itm['TableCode'],tab['id'])) {
                    oc[a] = tab['id'];
                    a++;
                }else {
                    tab['occupied'] = 0;
                }
            }else{
                tab['occupied'] = 0;
            }
        });

    });

    /*console.log(oc);*/
    new_orders['tables'].forEach(function(tab){
        oc.forEach(function(y){
            if(isequalvaluecheck(y,tab['id'])) {
                tab['occupied'] = 1;
            }
        });
    });


    localStorage.setItem('order_waiters_response',JSON.stringify(new_orders));
}











/* Void Order start */


function void_this_order(){
    var BillNo=$("#bill_no").text();
    var reason=$("#reason").val();
    /*var BillNo=$("#order_salect").find("option:selected").val();*/
    var sendData=new FormData();
    sendData.append('BillNo',BillNo);
    sendData.append('Reason',reason);

    var send_order={};
    send_order['BillNo']=BillNo;
    send_order['Reason']=reason;


    if(reason!=="") {
        /*save_void_local(sendData, send_order);*/
        voidorder(send_order,function(res){
            open_order_info_modal(res.master,res.detail,false,"Void Order Receipt");
            Lockr.rm('Idraft');
            clear_confirmed(true);
            make_table_waiter_occupied();
            /*show_error_message("some error");*/
        });
    }else{
        open_error_modal("Please provide a reason for void");
    }

}

function ask_confirm_void(){

    var confirm_reason="<div class='container'><div class='row'><div class='col-md-12'><div class='form-group'><label for='reason'>Reason</label><br><textarea name='reason' id='reason' placeholder='Reason'></textarea></div></div></div></div>";
    var confirm_button="<div class='btn btn-danger' data-dismiss='modal' onclick='void_this_order()' id='sub_void'>Void</div>";
    var cancel_button="<div class='btn btn-default' data-dismiss='modal' id='cancel_void'>Cancel</div>";
    var ask_modal=$("#askmodal");
    var modal_content=ask_modal.children(".modal-dialog").children(".modal-content");
    var modal_title=modal_content.children(".modal-header").children(".modal-title");
    var modal_body=modal_content.children(".modal-body");
    var modal_footer=modal_content.children(".modal-footer");
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Void Reason");
    modal_body.append(confirm_reason);
    modal_footer.append(confirm_button+cancel_button);
    ask_modal.modal('show');
}



/* Void Order end */



/* void item start */


function ask_confirm_void_item(BarCode){

    //Offline.check();

    //if(Offline.state==='up') {
    var confirm_reason = "<div class='container'><div class='row'><div class='col-md-12'><div class='form-group'><label for='reason'>Reason</label><br><textarea name='reason' id='reason' placeholder='Reason'></textarea></div></div></div></div>";
    var confirm_button = "<div class='btn btn-danger' data-dismiss='modal' id='sub_void' onclick=void_this_item('" + BarCode + "') >Void</div>";
    var cancel_button = "<div class='btn btn-default' data-dismiss='modal' id='cancel_void'>Cancel</div>";
    /*}else{
        confirm_reason = "<div class='container'><div class='row'><div class='col-md-12'>Can not void item in Offline Mode</div></div></div></div>";
        confirm_button = "<div class='btn btn-danger' data-dismiss='modal' id='sub_void' >OK</div>";
        cancel_button = "<div class='btn btn-default' data-dismiss='modal' id='cancel_void'>Cancel</div>";
    }*/
    var ask_modal=$("#askmodal");
    var modal_content=ask_modal.children(".modal-dialog").children(".modal-content");
    var modal_title=modal_content.children(".modal-header").children(".modal-title");
    var modal_body=modal_content.children(".modal-body");
    var modal_footer=modal_content.children(".modal-footer");
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Void Reason");
    modal_body.append(confirm_reason);
    modal_footer.append(confirm_button+cancel_button);
    ask_modal.modal('show');
}




function void_this_item(BarCode){
    var BillNo=$("#bill_no").text();
    var reason=$("#reason").val();
    var barCode=BarCode;
    /*var BillNo=$("#order_salect").find("option:selected").val();*/
    var sendData=new FormData();
    sendData.append('BillNo',BillNo);
    sendData.append('Reason',reason);
    sendData.append('BarCode',barCode);

    var send_order={};
    send_order['BillNo']=BillNo;
    send_order['Reason']=reason;
    send_order['BarCode']=barCode;

    if(reason!=="") {
    voiditem_sync(send_order,function(res){
        open_order_info_modal(res.master,res.detail,false,"Void Item Receipt");
        Lockr.rm('Idraft');
        clear_confirmed(true);
    });
    }else{
        open_error_modal("Please provide a reason for void");
    }


}


/* void item end */




















