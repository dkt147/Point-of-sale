xhrPool = [];
function download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}
function hide_loader(){
    $("#loader").css("display", "none");
    $(".content-i").css("display", "block");
}

function show_sync_loader(){
    $("#smallloader").css("display", "block");
    $(".ifsync").css("display", "none");
    $(".ifnotsync").css("display", "none");
    if(localStorage.getItem('businesstyperestaurant')==="true" || $("#localstorageuse").val()==="0") {
        $(".ifnotsyncmessenger").css("display", "none");
        $(".ifsyncmessenger").css("display", "none");
    }

}
function hide_sync_loader(){
    $("#smallloader").css("display", "none");
    $(".ifnotsync").css("display", "none");
    $(".ifsync").css("display", "block");
    if(localStorage.getItem('businesstyperestaurant')==="true" || $("#localstorageuse").val()==="0") {
        $(".ifnotsyncmessenger").css("display", "none");
        $(".ifsyncmessenger").css("display", "block");
    }
}
function show_error_message(message){
    /*console.log(message);*/

        $("#smallloader").css("display", "none");
        $(".ifsync").css("display", "none");
        $(".ifnotsync").css("display", "block");
    if(localStorage.getItem('businesstyperestaurant')==="true" || $("#localstorageuse").val()==="0") {
        $(".ifnotsyncmessenger").css("display", "block");
        $(".ifsyncmessenger").css("display", "none");
    }

}


function shortcut_keys(restaurant){
    Mousetrap.bind('f4', function(e){
        e.preventDefault();
        var row = $("#body_items").find("div.class1-profile").attr('data-item');
        add_to_sale(row,0);
    });
    Mousetrap.bind('f2', function(e){
        e.preventDefault();
        var row = $(".item_list").find(".quan_input").focus();
    });

    Mousetrap.bind('/', function(e){
        e.preventDefault();
        /*$("input#search_item").focus();*/
    });
    Mousetrap.bind('f7', function(e){
        e.preventDefault();
        if($('#askmodal').is(':visible')){
            submit_payment(true,restaurant,true);
        }else{
            ask_payment_mode(restaurant,0,0);
        }
    });
    Mousetrap.bind('f9', function(e){
        e.preventDefault();
        if($('#askmodal').is(':visible')){
            submit_payment(false,restaurant,true);
        }else{
            $("input#search_item").focus();
        }
    });
    Mousetrap.bind('f6', function(e){
        e.preventDefault();
        $("input#search_item").focus();
    });


    Mousetrap.bind('f8', function(e){
        e.preventDefault();
        if($('#infomodal').is(':visible')){
            printElement_exe("printing_body");
        }
    });
    Mousetrap.bind('f10', function(e){
        e.preventDefault();
        submit_payment(false,restaurant);
    });
    Mousetrap.bind('f3', function(e){
        e.preventDefault();
        var row = $("#sale_customer_select").focus();
    });


    Mousetrap.bind('esc', function(e){
        e.preventDefault();
        var modal=$('#infomodal');
        if(modal.is(':visible')){
            modal.modal('hide');
        }
    });
}



function call_img_not_found(thisitem){
    $("#pri-"+thisitem).hide();
    $("#ab-"+thisitem).show();
    /*console.clear();*/
}
function call_img_not_foundc(thisitem){
    $("#pric-"+thisitem).hide();
    $("#abc-"+thisitem).show();
    /*console.clear();*/
}






function show_my_detail(id){
    $('.detail_div').hide();
    $("#"+id).show();
}
function add_for_response(id,name,mod_head_id){
    var items_toadd=$("#items_toadd");

    /*var tot_items=parseFloat(items_toadd.attr('data-count'));
    var allowed_items=parseFloat(items_toadd.attr('data-allowed'));*/
    /*if(tot_items < allowed_items) {*/
    var item = '<div class="items_to_add class5-profile col-sm-4" data-head-mod="'+mod_head_id+'" data-id="' + id + '" style="cursor:pointer" ><div class="profile-tile  givemezerobottom">\n';
    item += '                        <div ><div class="moder2 profile-tile-box">\n' +
        '                        <div class="itemname-box">\n' +
        '                        <span class="mid-itemname">' + decodeURIComponent(name) + '</span>\n' +
        '                        </div>\n' +
        '                    </div></div>\n';
    item += '</div></div>';
    items_toadd.append(item);
    /*tot_items += 1;
    items_toadd.attr('data-count',tot_items);*/
    /*}*/
}
function add_selected_items_to_sale(){

    $(".items_to_add").each(function(){
        add_to_sale($(this).attr('data-id'),$(this).attr('data-head-mod'));
    });
    var items_toadd=$("#items_toadd");
    /*items_toadd.attr('data-count',"0");*/
    /*items_toadd.attr('data-allowed',"0");*/
}
function openmodifierscreen(grp_items,mod_head_id){

    /*console.log(grp_items);*/
    var mod_head=$("#mod_head");
    var mod_det=$("#mod_det");
    var items_toadd=$("#items_toadd");

    mod_head.empty();
    mod_det.empty();
    items_toadd.empty();
    var datahead='';
    /* var item_allowed=0;*/

    grp_items.forEach(function(grp){

        /*if(grp['header']['isCount']==1 && item_allowed < grp['header']['ItemCount']){
            item_allowed=grp['header']['ItemCount'];
        }*/
        datahead += '<div class="class5-profile paddallzero col-sm-2" style="cursor:pointer" ><div class="profile-tile  givemezerobottom">\n';

        datahead +=    '                        <div class="moder" onclick=show_my_detail("det-'+grp['header']["id"]+'") ><div id="ab-'+grp['header']["id"]+'" class="moder profile-tile-box">\n' +
            '                        <div class="itemname-box">\n' +
            '                        <span class="mid-itemname">' + grp['header']["ModifierGroupHeader"] + '</span>\n' +
            '                        </div>\n' +
            '                    </div></div>\n' ;
        datahead += '</div></div>';

        var datadet='<div style="display:none" class="detail_div" id="det-' + grp['header']["id"] + '">';
        var r=0;
        grp['detail'].forEach(function(grpdet) {
            if(r===0) {
                datadet += '<div class="row">';
            }
            datadet += '<div class="class5-profile col-sm-3" style="cursor:pointer" ><div class="profile-tile  givemezerobottom">\n';
            datadet += '                        <div class="moder1" onclick=add_for_response("' + grpdet["id"] + '","' +  encodeURIComponent(grpdet["Item"]) + '","' + mod_head_id + '")><div id="res-' + grpdet["id"] + '" class="moder1 profile-tile-box">\n' +
                '                        <div class="itemname-box">\n' +
                '                        <span class="mid-itemname">' + grpdet["Item"] + '</span>\n' +
                '                        </div>\n' +
                '                    </div></div>\n';
            datadet += '</div></div>';
            r++;
            if(r===3) {
                datadet += '</div>';
                r=0;
            }

        });
        datadet+="</div>";

        mod_det.append(datadet);
    });
    var masteritemname=$("#forItemName");
    masteritemname.empty();
    masteritemname.append(get_item_name_by_id(mod_head_id));
    mod_head.append(datahead);
    /*items_toadd.attr('data-allowed',item_allowed);*/

    var modifiermodal=$("#modifiermodal");
    modifiermodal.modal('show');
}

function add_to_sale(id,mod_head_id){
    var res=JSON.parse(localStorage.getItem('items'));
    res.forEach(function(resp){
        //if normal item
        if(isequalvaluecheck(mod_head_id,0)){
            if(isequalvaluecheck(resp['id'],id)){

                add_this_to_sale(resp);

            }
        }else{
            // if item with modifier group
            if(isequalvaluecheck(resp['id'],mod_head_id)){
                resp['group_items'].forEach(function(grp){
                    grp['detail'].forEach(function(det){
                        if(isequalvaluecheck(det['id'],id)){
                            add_this_to_sale(det);
                        }
                    });
                });

            }
        }

    });
}

function add_this_to_sale(resp){
    var response=[];
    response['data']=resp;
    if(isequalvaluecheck(response['data']['IsModifier'],1)){
        add_response_to_sale(response['data'],response['data']['mod_items'].length);
        response['data']['mod_items'].forEach(function(mod){
            add_response_to_sale(mod,'child');
        });
    }else{
        add_response_to_sale(response['data'],'');
    }
    if(response['data']['IsModifierGroup']){
        openmodifierscreen(response['data']['group_items'],resp['id']);
    }
}
function add_this_batch(div_idr){
    var it=$("tr#"+div_idr.id+" > td.barcode_item");
    var batch=$("#batch");
    it.attr('data-batch_no',batch.find("option:selected").val());
    var stock=parseFloat(batch.find("option:selected").attr('data-stck'));
    it.attr('data-batch_stock',stock);
}
function select_batch(bns,divs,barcode){
    var confirm = "<div class='container'><div class='row'><div class='form-group'><label class='lbl lbl-primary'>Batch</label><select class='form-control' id='batch'>";
    var tot=0;
         bns.forEach(function(bn){
             var ss=parseFloat(bn[1]['StockQty']).toFixed(2) - parseFloat(get_curr_quantity_in_sale(barcode,bn[1]['BatchNo']));
             if(ss>0){
                 var d=new Date(bn[2]['ExpiryDate']);
                 confirm+="<option data-stck="+parseFloat(bn[1]['StockQty']).toFixed(2)+" value='"+bn[1]['BatchNo']+"'>Batch No : "+bn[1]['BatchNo']+ " | Stock : "+ss+" | Expiry : "+formatDate(d)+"   </option>";
                 tot++;
             }
         });

    confirm += "</select></div></div></div>";
    if(tot>0){
    var confirm_button = "<div class='btn btn-primary' data-dismiss='modal' onclick='add_this_batch("+divs+")'>Add</div>";
    var cancel_button = "<div class='btn btn-danger' data-dismiss='modal' onclick='remove_this_classitem("+divs+")'>Cancel</div>";
    var ask_modal = $("#taskmodal");
    var modal_content = ask_modal.children(".modal-dialog").children(".modal-content");
    var modal_title = modal_content.children(".modal-header").children(".modal-title");
    var modal_body = modal_content.children(".modal-body");
    var modal_footer = modal_content.children(".modal-footer");
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Select Batch");
    modal_body.append(confirm);
    modal_footer.append(confirm_button+cancel_button);

        ask_modal.modal('show');
    }else{
        $("#"+divs).closest('tr.item_list').remove();
        open_error_modal("stock for this batch item not available");
    }

}
function get_curr_quantity_in_sale(barcode,batchno){
    var tot_qty=0;
    $("tbody tr.item_list").each(function() {
        if($(this).find(".barcode_item").attr('data-itembarcode')===barcode && $(this).find(".barcode_item").attr('data-batch_no')===batchno){
            if(!isNaN($(this).find('td.q_item').attr('data-itemquantity'))) {
                if($(this).find('td.q_item').attr('data-itemquantity')==="" || $(this).find('td.q_item').attr('data-itemquantity')=="undefined"){
                   var qty=0;
                }else{
                    qty=$(this).find('td.q_item').attr('data-itemquantity');
                }
                tot_qty = parseFloat(tot_qty) + parseFloat(qty);
              }
            }
       });

    return tot_qty;
}
function check_batch_stock_offset(barcode,batch,nq,oq){
    var items=localStorage.getItem('items');
    var item = JSON.parse(items);
    var res=false;
    item.forEach(function(it){
        if(it.BarCode===barcode && it.IsBatch === 1 && (it.BatchNumbers).length > 0) {
            it.BatchNumbers.forEach(function (bn) {
                if (bn[0]['BatchNo'] === batch) {

                    res=parseFloat(bn[1]['StockQty']).toFixed(2) - (get_curr_quantity_in_sale(barcode, batch) - parseFloat(oq)) - parseFloat(nq) >= 0;
                }
            });
        }
    });
    return res;
}
function check_batch_stock(barcode,batch){
    var items=localStorage.getItem('items');
    var item = JSON.parse(items);
    var res=false;
    item.forEach(function(it){
        if(it.BarCode===barcode && it.IsBatch === 1 && (it.BatchNumbers).length > 0) {
                      it.BatchNumbers.forEach(function (bn) {
                        if (bn[0]['BatchNo'] === batch) {
                            console.log(get_curr_quantity_in_sale(barcode, batch));
                            console.log(parseFloat(bn[1]['StockQty']).toFixed(2));

                            res=parseFloat(bn[1]['StockQty']).toFixed(2) - get_curr_quantity_in_sale(barcode, batch) >= 0;
                        }
                    });
                }
    });
    return res;
}

function add_response_to_sale(response,isdeal) {

    var diver = $('#item_adder');
    var div_id = diver.find('tbody');
    var tempScrollTop = $(diver).scrollTop() + $(diver).height();
    var data = response;
    var las_info=JSON.parse(localStorage.getItem('last_info'));
    var div_idr = 'item_' + Date.now();

    var def_qty=1;
    var wbcode=JSON.parse(localStorage.getItem('WBARCODE'));
    if(wbcode['WeightBarcodeEnabled']===1){

        def_qty=localStorage.getItem("weight");
        localStorage.setItem("weight","1");
    }
    /*if(!data["category"]["CategoryCode"])*/

    if(las_info['edsr']==0){
        var conedit=false;
    }else{
        conedit=true;
    }

    //console.log(data);
    if (isdeal !== '') {
        if (isdeal === 'child') {
            var div_item = '<tr id="' + div_idr + '" class="item_list child_list_' + localStorage.getItem('master_id') + ' col-md-12"><td hidden class="barcode_item" data-batch_stock="nobatch" data-batch_no="" data-categorycode="0" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="1" data-isnewitem="1" data-itemName="' + data["Item"] + '">' + data["Item"] + '-<br>' + data["BarCode"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="'+def_qty+'" data-unitstockquantity="1"  data-itemquantity="'+def_qty+'" data-itemUnitCode="' + data['UnitCode'] + '" ><input readonly disabled onchange="update_and_calculate(this)" onkeyup="update_and_calculate(this)" data-edit="' + div_idr + '" class="quan_input mousetrap" style="max-width: 50px;" value=1></td><td hidden class="rate_item" data-itemremarks="" data-disc="0" data-itemTaxPercentage="' + data["TaxPercentage"] + '" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemRate="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td contenteditable='+conedit+'; class="q_tot_price" data-itemisedited="0" data-itemDiscountAmount="0" data-itemPromoCode="-" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemtotalprice="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td></td></tr>';
            if (isequalvaluecheck(check_update_quantity_child(data["BarCode"]), 0)) {
                div_id.append(div_item);
            }
        } else {
            // div_item = '<tr id="' + div_idr + '" class="item_list col-md-12"><td hidden class="barcode_item" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="0" data-isnewitem="1" data-itemName="' + data["Item"] + '">' + data["Item"] + '-<br>' + data["BarCode"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="1" data-itemUnitCode="'+data['UnitCode']+'" data-unitstockquantity="1" data-itemquantity="1"><input class="quan_input mousetrap" onchange="update_and_calculate(this)" onkeyup="update_and_calculate(this)" data-edit="'+div_idr+'" style="max-width: 50px;" value=1><span class="unitname">'+data['unitname']+'</span></td><td hidden class="rate_item" data-itemremarks="" data-disc="0" data-itemTaxPercentage="' + data["TaxPercentage"] + '" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemRate="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td class="q_tot_price" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemtotalprice="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td><a class="edit_item ed_del_btn" data-edit=' + div_idr + '><i class="fa fa-edit"></i></a>      <a class="remove_item_master ed_del_btn" data-remove_child='+isdeal+' data-remover=' + div_idr + '>x</a></td></tr>';

            div_item = '<tr id="' + div_idr + '" class="item_list col-md-12"><td hidden class="barcode_item" data-batch_stock="nobatch" data-batch_no="nobatch" data-categorycode="0" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="0" data-isnewitem="1" data-itemName="' + data["Item"] + '">' + data["Item"] + '-<br>' + data["BarCode"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="'+def_qty+'" data-itemUnitCode="' + data['UnitCode'] + '" data-unitstockquantity="1" data-itemquantity="'+def_qty+'"><input class="quan_input mousetrap" onchange="update_and_calculate(this)" onkeyup="update_and_calculate(this)" data-edit="' + div_idr + '" style="max-width: 50px;" value=1></td><td hidden class="rate_item" data-itemremarks="" data-disc="0" data-itemTaxPercentage="' + data["TaxPercentage"] + '" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemRate="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td contenteditable='+conedit+' class="q_tot_price" data-itemisedited="0" data-itemDiscountAmount="0" data-itemPromoCode="-" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemtotalprice="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td><a class="edit_item ed_del_btn" data-edit=' + div_idr + '><i class="fa fa-edit"></i></a>      <a class="remove_item_master ed_del_btn" data-remove_child=' + isdeal + ' data-remover=' + div_idr + '>x</a></td></tr>';


            localStorage.setItem('master_id', div_idr);
            div_id.append(div_item);
        }

    } else {

        // div_item = '<tr id="' + div_idr + '" class="item_list col-md-12"><td hidden class="barcode_item" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="0" data-isnewitem="1" data-itemName="' + data["Item"] + '">' + data["Item"] + '-<br>' + data["BarCode"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="1" data-itemUnitCode="'+data['UnitCode']+'" data-unitstockquantity="1" data-itemquantity="1"><input class="quan_input mousetrap" onchange="update_and_calculate(this)" onkeyup="update_and_calculate(this)" data-edit="'+div_idr+'" style="max-width: 50px;" value=1><span class="unitname">'+data['unitname']+'</span></td><td hidden class="rate_item" data-itemremarks="" data-disc="0" data-itemTaxPercentage="' + data["TaxPercentage"] + '" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemRate="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td class="q_tot_price" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemtotalprice="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td><a class="edit_item ed_del_btn" data-edit=' + div_idr + '><i class="fa fa-edit"></i></a>      <a class="remove_item ed_del_btn" data-remover=' + div_idr + '>x</a></td></tr>';
        div_item = '<tr id="' + div_idr + '" class="item_list col-md-12"><td hidden class="barcode_item" data-batch_stock="nobatch" data-batch_no="nobatch" data-categorycode="'+data["category"]["CategoryCode"]+'" data-itemBarcode="' + data["BarCode"] + '">' + data["BarCode"] + '</td><td class="name_item" data-IsModifier="0" data-isnewitem="1" data-itemName="' + data["Item"] + '">' + data["Item"] + '-<br>' + data["BarCode"] + '<br><span class="rem"></span></td><td class="q_item" data-itemStockQuantity="'+def_qty+'" data-itemUnitCode="' + data['UnitCode'] + '" data-unitstockquantity="1" data-itemquantity="'+def_qty+'"><input class="quan_input mousetrap" onchange="update_and_calculate(this)" onkeyup="update_and_calculate(this)" data-edit="' + div_idr + '" style="max-width: 50px;" value=1></td><td hidden class="rate_item" data-itemremarks="" data-disc="0" data-itemTaxPercentage="' + data["TaxPercentage"] + '" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemRate="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td contenteditable='+conedit+' class="q_tot_price" data-itemisedited="0" data-itemDiscountAmount="0" data-itemPromoCode="-" data-itemTaxAmount="' + data["TaxAmount"] + '" data-itemtotalprice="' + data["SRWT"] + '" >' + data["SRWT"] + '</td><td><a class="edit_item ed_del_btn" data-edit=' + div_idr + '><i class="fa fa-edit"></i></a>      <a class="remove_item ed_del_btn" data-remover=' + div_idr + '>x</a></td></tr>';
        div_id.append(div_item);
    }

        /*var app_disc_prom=check_promotion_applicable(data["BarCode"],data['SRWT'],data['category']['CategoryCode'],1,'item');*/

        if (!isequalvaluecheck(data['DiscountPercent'], '0.00') && !isequalvaluecheck(data['DiscountPercent'], '0')) {

            /*$(".edit_disc").val(data['DiscountPercent']);*/
            var clos_clas = div_idr;
            var restaurant = localStorage.getItem('businesstyperestaurant');
            if (isdeal !== 'child') {
                edit_this_classitem(clos_clas, restaurant, 0);
                change_quantity_with_disc("#" + div_idr, data['DiscountAmount'], data['DiscountPercent']);
            }


        }/*else if(isequalvaluecheck(app_disc_prom['status'],1)){

            clos_clas = div_idr;
            restaurant = localStorage.getItem('businesstyperestaurant');
            if (isdeal !== 'child') {
                edit_this_classitem(clos_clas, restaurant, 0);
                change_quantity_with_promdisc("#" + div_idr, app_disc_prom['item'],app_disc_prom['prom_name'],app_disc_prom['prom_code']);
            }
        }*/

    /*<span class="unitname">'+data['unitname']+'</span>*/

    add_unit(div_idr);
    if(response.IsBatch===1){
        Offline.check();
        if(Offline.state==="up") {
            if ((response.BatchNumbers).length > 0) {
                select_batch(response.BatchNumbers, div_idr, response.BarCode);
            } else {
                $("#" + div_idr).closest('tr.item_list').remove();
                open_error_modal("Please add Batch Nos for this Item");
            }
        }else{
            $("#" + div_idr).closest('tr.item_list').remove();
            open_error_modal("Batch Wise Items are not allowed to sale in offline mode");

        }
    }


    $(diver).scrollTop(tempScrollTop);
    $("#total_bill_discount").text('0');
    $("#bill_dis").val(0);
    $("#bill_dis_number").val(0);
    $("#bill_dis_number").attr("data-billPromoCode","-");
    if($("#unp").val()==="1"){
        allnumpad();
    }

    $('td.q_tot_price').each(function(){

        $(this).blur(function () {
            $(this).attr('data-itemdiscountamount',"0");
            $(this).attr('data-itempromocode',"-");
            $(this).attr('data-itemtaxamount',"0");
            $(this).attr('data-itemtotalprice',parseFloat($(this).html()));
            $(this).attr('data-itemisedited',1);
            $(this).closest('tr.item_list').find('td.rate_item').attr('data-disc',"0");
            var Quantity=$(this).closest('tr.item_list').find('td.q_item').attr('data-itemquantity');

            $(this).closest('tr.item_list').find('td.rate_item').attr('data-itemtaxpercentage',"0");
            $(this).closest('tr.item_list').find('td.rate_item').attr('data-itemtaxamount',"0");

            if(Quantity==1){
                $(this).closest('tr.item_list').find('td.rate_item').attr('data-itemrate',parseFloat($(this).html()));
                $(this).closest('tr.item_list').find('td.rate_item').html(parseFloat($(this).html()));
            }else{
                $(this).closest('tr.item_list').find('td.rate_item').attr('data-itemrate',parseFloat($(this).html())/parseFloat(Quantity));
                $(this).closest('tr.item_list').find('td.rate_item').html(parseFloat($(this).html())/parseFloat(Quantity));
            }

            calculate_total_amount();
        });
    });

    calculate_total_amount();

}



function add_unit(div_idr){
    var val_barcode=$("tr#"+div_idr+" > td.barcode_item").attr('data-itembarcode');
    var quan=$("tr#"+div_idr+" > td.q_item");
    var val_unit=quan.attr('data-itemUnitCode');

    var res=JSON.parse(localStorage.getItem('items'));
    var ops='';
    res.forEach(function(its){

        if (its['BarCode'] === val_barcode) {
            if (its['item_detail'].length > 0) {
                if (val_unit === its['unit']['UnitCode']) {
                    ops += '<option selected data-SP=' + its['SRWT'] + ' data-Quan=1 data-untiname=' + its['unit']['Unit'] + ' value=' + its['unit']['UnitCode'] + '   >' + its['unit']['Unit'] + '</option>';
                }
                else {
                    ops += '<option data-SP=' + its['SRWT'] + ' data-Quan=1 data-untiname=' + its['unit']['Unit'] + ' value=' + its['unit']['UnitCode'] + '   >' + its['unit']['Unit'] + '</option>';
                }
                if (its['item_detail'].length > 0) {
                    its['item_detail'].forEach(function (it) {
                        if (val_unit === it['AlternateUnitCode']) {
                            ops += '<option selected data-SP=' + it['AlternateUnitSalesRate'] + ' data-Quan=' + it['AlternateUnitQuantity'] + ' data-untiname=' + it['AltUnitName'] + ' value=' + it['AlternateUnitCode'] + '   >' + it['AltUnitName'] + '</option>';
                        } else {
                            ops += '<option data-SP=' + it['AlternateUnitSalesRate'] + ' data-Quan=' + it['AlternateUnitQuantity'] + ' data-untiname=' + it['AltUnitName'] + ' value=' + it['AlternateUnitCode'] + '   >' + it['AltUnitName'] + '</option>';
                        }
                    });

                }
                quan.append('<select id="edit_this_unit" data-edit="'+div_idr+'" class="edit_itemunit" >'+ops+'</select>');
            }else{
                quan.append('<select hidden id="edit_this_unit" data-edit="'+div_idr+'" class="edit_itemunit" >'+ops+'</select>');
            }
        }
    });

    $(".edit_itemunit").each(function(){
        $(this).change(function(){
            update_unit(this);
        });
    });
}


$(document).on('click','.remove_item',function (){
    remove_this_classitem(this);
});
$(document).on('click','.remove_item_master',function (){
    /*console.log($(this).attr('data-remove_child'));*/
    for(var j=0;j<$(this).attr('data-remove_child');j++) {
        $(this).closest('tr.item_list').next().remove();
    }



    remove_this_classitem(this);


});
function update_and_calculate(clas){
    var edit_id="#"+$(clas).data('edit');
    var new_quantity=$(clas).closest('tr.item_list').find("td.q_item input.quan_input").val();
    var quantity=$("tr"+edit_id+" > td.q_item");
    var oldquantity=quantity.attr('data-itemquantity');
    quantity.attr('data-itemquantity', new_quantity);


    var barcode=$(clas).closest('tr.item_list').find("td.barcode_item").attr('data-itembarcode');
    var batch=$(clas).closest('tr.item_list').find("td.barcode_item").attr('data-batch_no');
    if(batch!=="nobatch" && (!isequalvaluecheck(quantity,"")) && (!isequalvaluecheck(quantity,0))){

        if(check_batch_stock(barcode,batch)){
            change_direct_quantity(edit_id);
        }else{
            quantity.attr('data-itemquantity', oldquantity);
            $(clas).closest('tr.item_list').find("td.q_item input.quan_input").val(oldquantity);
        }
    }else{
        change_direct_quantity(edit_id);
    }


}
function update_unit(clas){

    var edit_id="#"+$(clas).data('edit');
    var unit=$(clas).closest('tr.item_list').find("td.q_item select.edit_itemunit");
    var item_rate=$("tr"+edit_id+" > td.rate_item");
    var quantity=$("tr"+edit_id+" > td.q_item");
    /*var new_unit=unit.find("option:selected").attr('data-untiname');*/
    var new_item_rate=unit.find("option:selected").attr('data-SP');
    var new_stockquan=unit.find("option:selected").attr('data-Quan');

    item_rate.attr('data-itemrate',new_item_rate);
    quantity.attr('data-unitstockquantity',new_stockquan);
    quantity.attr('data-itemUnitCode',unit.find("option:selected").val());

    change_direct_quantity(edit_id);

}
function remove_this_classitem(clas){

    $(clas).closest('tr.item_list').remove();

    $("#total_bill_discount").text('0');
    $("#bill_dis").val(0);
    $("#bill_dis_number").val(0);
    $("#bill_dis_number").attr("data-billPromoCode","-");
    $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");
    calculate_total_amount();
}
function edit_this_classitem(clas,restaurant,open){
    if(open===1) {
        var edit_id = "#" + $(clas).data('edit');
    }else{
        edit_id="#"+clas;
    }

    /*//console.log($("li"+edit_id+" > div.q_item"));*/
    var item_barcode=$("tr"+edit_id+" > td.barcode_item");
    var item_name=$("tr"+edit_id+" > td.name_item");
    var item_price=$("tr"+edit_id+" > td.rate_item");
    var item_quantity=$("tr"+edit_id+" > td.q_item");
    var item_tot_price=$("tr"+edit_id+" > td.q_tot_price");
    make_edit_quantity(item_barcode,item_name,item_price,item_quantity,edit_id,item_tot_price,restaurant,open);
}

function edit_qty_trig(input){

    var new_quantity=$(input).val();
    var edit_id=$(input).attr("data-edit_id");
    var oldquantity=$(input).attr('data-itemquantity');
    var quantity=$("tr"+edit_id+" > td.q_item");

    var barcode=quantity.closest('tr.item_list').find("td.barcode_item").attr('data-itembarcode');
    var batch=quantity.closest('tr.item_list').find("td.barcode_item").attr('data-batch_no');
    if(batch!=="nobatch" && (!isequalvaluecheck(new_quantity,"")) && (!isequalvaluecheck(new_quantity,0))){

        if(check_batch_stock_offset(barcode,batch,new_quantity,quantity.attr('data-itemquantity'))){
            $(input).attr(new_quantity);
        }else{
            $(input).attr('data-itemquantity', oldquantity);
            $(input).val(oldquantity);
        }
    }else{
        $(input).attr(new_quantity);
    }
}

function make_edit_quantity(barcode,name,price,quantity,edit_id,item_tot_price,restaurant,open){
 
    var val_barcode=barcode.attr('data-itembarcode');
    var val_name=name.attr('data-itemname');
    /*var val_price=price.attr('data-itemrate');*/
    var disc_amt=item_tot_price.attr('data-itemDiscountAmount');
    var price_for_calc_disc=parseFloat(price.attr('data-itemrate'));

    var val_disc=0;

    if(!isequalvaluecheck(price_for_calc_disc,'0')){
        val_disc=(disc_amt / price_for_calc_disc) * 100;
    }

    if(restaurant===true) {
        var val_itemremarks = price.attr('data-itemremarks');
    }
    var val_quantity=quantity.attr('data-itemquantity');
    var val_unit=quantity.attr('data-itemUnitCode');
    var edit_modal=$("#editmodal");
    var res=JSON.parse(localStorage.getItem('items'));
    var ops='';
    res.forEach(function(its){
        if(its['BarCode']===val_barcode) {
            if(val_unit===its['unit']['UnitCode']){
                ops += '<option selected data-SP=' + parseFloat(price.attr('data-itemrate')) + ' data-Quan=1 data-untiname='+its['unit']['Unit']+' value=' + its['unit']['UnitCode'] + '   >' + its['unit']['Unit'] + '</option>';
            }
            else {
                ops += '<option data-SP=' + parseFloat(price.attr('data-itemrate')) + ' data-Quan=1 data-untiname='+its['unit']['Unit']+' value=' + its['unit']['UnitCode'] + '   >' + its['unit']['Unit'] + '</option>';
            }
            if (its['item_detail'].length > 0) {
                its['item_detail'].forEach(function (it) {
                    if(val_unit===it['AlternateUnitCode']) {
                        ops += '<option selected data-SP=' + it['AlternateUnitSalesRate'] + ' data-Quan=' + it['AlternateUnitQuantity'] + ' data-untiname='+it['AltUnitName']+' value=' + it['AlternateUnitCode'] + '   >' + it['AltUnitName'] + '</option>';
                    }else{
                        ops += '<option data-SP=' + it['AlternateUnitSalesRate'] + ' data-Quan=' + it['AlternateUnitQuantity'] + ' data-untiname='+it['AltUnitName']+' value=' + it['AlternateUnitCode'] + '   >' + it['AltUnitName'] + '</option>';
                    }
                });

            }

        }
    });
    var modal_content=edit_modal.children(".modal-dialog").children(".modal-content");
    var modal_title=modal_content.children(".modal-header").children(".modal-title");
    var modal_body=modal_content.children(".modal-body");
    var modal_footer=modal_content.children(".modal-footer");
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Edit "+val_name);
    if(restaurant===true) {
        modal_body.append('<div class="container"><div class="row"><label class="col-md-6"><i class="fa fa-sort-numeric-asc"></i><strong> Quantity</strong><input id="edit_this_qty" data-itemquantity="' + val_quantity + '" data-edit_id="'+edit_id+'" onkeyup="edit_qty_trig(this)"  class="edit_qty form-control" type="number" min=1 value="' + val_quantity + '"></label><label class="col-md-6"><i class="fa fa-sort-amount-desc"></i><strong> Discount(%)</strong><input id="edit_this_disc" class="edit_disc form-control" type="number" min=1 value="' + val_disc + '"></label></div><div class="row"><label class="col-md-6"><i class="fa fa-comment"></i><strong> Remarks</strong><input id="edit_this_remarks" class="edit_itemremarks form-control" value="' + val_itemremarks + '"></label><label class="col-md-6"><i class="fa fa-unit"></i><strong> Unit</strong><select id="edit_this_unit" class="edit_itemunitk form-control" >' + ops + '</select></label></div></div>');
    }else{
        modal_body.append('<div class="container"><div class="row"><label class="col-md-6"><i class="fa fa-sort-numeric-asc"></i><strong> Quantity</strong><input id="edit_this_qty" data-itemquantity="' + val_quantity + '" data-edit_id="'+edit_id+'" onkeyup="edit_qty_trig(this)" class="edit_qty form-control" type="number" min=1 value="'+val_quantity+'"></label><label class="col-md-6"><i class="fa fa-sort-amount-desc"></i><strong> Discount(%)</strong><input id="edit_this_disc" class="edit_disc form-control" type="number" min=1 value="'+val_disc+'"></label></div><div class="row"><label class="col-md-6"><i class="fa fa-unit"></i><strong> Unit</strong><select id="edit_this_unit" class="edit_itemunitk form-control" >'+ops+'</select></label></div></div>');
    }
    /*modal_body.append('<label class="col-md-12 center"><i class="fa fa-sort-amount-desc"></i><strong> Discount(%)</strong><input id="edit_this_disc" class="edit_disc form-control" type="number" min=1 value="'+val_disc+'"></label></div>');*/
    var edit_button='<button id="edit_it" type="button" class="btn btn-danger" data-dismiss="modal" onclick=change_quantity("'+edit_id+'") >Update</button>';
    var cancel_button='<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>';
    modal_footer.append(edit_button+cancel_button);

    if(open===1){
        edit_modal.modal('show');
        $("#edit_this_qty").focus();
    }



}
function change_quantity_with_promdisc(edit_id,disc_amt,prom_name,prom_code){
    var restaurant=localStorage.getItem('businesstyperestaurant');
    var quantity=$("tr"+edit_id+" > td.q_item");
    var item_totprice=$("tr"+edit_id+" > td.q_tot_price");
    var item_rate=$("tr"+edit_id+" > td.rate_item");
    var item_unit=$("tr"+edit_id+" > td.q_item > select.edit_itemunit");


    /*var new_disc=disc_per;*/
    var new_quantity=parseFloat(quantity.attr('data-itemquantity'));
    var unit=$(".edit_itemunitk");
    /*var new_unit=unit.find("option:selected").attr('data-untiname');*/
    var new_item_rate=unit.find("option:selected").attr('data-SP');
    var new_stockquan=unit.find("option:selected").attr('data-Quan');
    item_rate.attr('data-itemrate',new_item_rate);
    quantity.attr('data-unitstockquantity',new_stockquan);
    quantity.attr('data-itemUnitCode',unit.find("option:selected").val());
    /*item_unit.empty();*/


    item_unit.find("option:selected").removeProp("selected");
    item_unit.find("option[value='"+unit.find('option:selected').val()+"']").prop('selected', 'selected');



    var new_tot_price=new_quantity*parseFloat(item_rate.attr('data-itemrate'));

    var price_for_calc_disc=parseFloat(item_rate.attr('data-itemrate'));

    /*var disc_amount=(price_for_calc_disc*new_disc)/100;
    console.log(disc_amount);
    if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
        disc_amount=Math.round(disc_amount);
    }else{
        disc_amount=parseFloat(disc_amount).toFixed(1);
    }*/
    var price_af_disc=new_tot_price-(disc_amt*new_quantity);
    item_totprice.attr('data-itemDiscountAmount',disc_amt);
    item_totprice.attr('data-itemPromoCode',prom_code);
    /*var price_for_calc_disc=new_tot_price-new_tax_price;
    var disc_amount=parseFloat(price_for_calc_disc*new_disc)/100;
    if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
        disc_amount=Math.round(disc_amount);
    }else{
        disc_amount=parseFloat(disc_amount).toFixed(1);
    }
    var price_af_disc=new_tot_price-disc_amount;*/

    /*var new_tax_price=new_quantity*parseFloat(item_rate.attr('data-itemTaxAmount'));*/
    var new_tax_price=new_quantity*((parseFloat(item_rate.attr('data-itemTaxPercentage'))/100)*price_af_disc);
    item_rate.attr('data-itemTaxAmount',new_tax_price);

    if(restaurant===true) {
        var item_rem = $("tr" + edit_id + " > td.name_item > .rem");
        var new_remarks = prom_name+" discount applied " + $(".edit_itemremarks").val();
        item_rate.attr('data-itemremarks', new_remarks);
        item_rem.empty();
        if (new_remarks !== "") {
            item_rem.append("* <small>" + new_remarks + "</small>");
        }
    }else{
        item_rem = $("tr" + edit_id + " > td.name_item > .rem");
        new_remarks = prom_name+" discount applied";
        item_rate.attr('data-itemremarks', new_remarks);
        item_rem.empty();
        if (new_remarks !== "") {
            item_rem.append("* <small>" + new_remarks + "</small>");
        }

    }

    item_totprice.attr('data-itemTaxAmount',new_tax_price);
    quantity.attr('data-itemquantity',new_quantity);
    quantity.attr('data-itemStockQuantity', new_quantity*quantity.attr('data-unitstockquantity'));
    /*quantity.html(new_quantity);*/
    quantity.find("input.quan_input").val(new_quantity);
    item_totprice.attr('data-itemtotalprice',new_tot_price);


    /*item_rate.attr('data-disc',new_disc);*/
    var total_discount=disc_amt*new_quantity;
    item_totprice.html(price_af_disc.toFixed(2));
    if(total_discount>0){
        item_totprice.append("<div><small>"+new_tot_price.toFixed(2)+"-"+total_discount+"<small><div>");
    }

    $("#total_bill_discount").text('0');
    $("#bill_dis").val(0);
    $("#bill_dis_number").val(0);
    $("#bill_dis_number").attr("data-billPromoCode","-");
    calculate_total_amount();
}

function change_quantity_with_disc(edit_id,disc_amt,disc_per){
    var restaurant=localStorage.getItem('businesstyperestaurant');
    var quantity=$("tr"+edit_id+" > td.q_item");
    var item_totprice=$("tr"+edit_id+" > td.q_tot_price");
    var item_rate=$("tr"+edit_id+" > td.rate_item");
    var item_unit=$("tr"+edit_id+" > td.q_item > select.edit_itemunit");


    /*var new_disc=disc_per;*/
    var new_quantity=parseFloat(quantity.attr('data-itemquantity'));
    var unit=$(".edit_itemunitk");
    /*var new_unit=unit.find("option:selected").attr('data-untiname');*/
    var new_item_rate=unit.find("option:selected").attr('data-SP');
    var new_stockquan=unit.find("option:selected").attr('data-Quan');
    item_rate.attr('data-itemrate',new_item_rate);
    quantity.attr('data-unitstockquantity',new_stockquan);
    quantity.attr('data-itemUnitCode',unit.find("option:selected").val());
    /*item_unit.empty();*/


    item_unit.find("option:selected").removeProp("selected");
    item_unit.find("option[value='"+unit.find('option:selected').val()+"']").prop('selected', 'selected');



    var new_tot_price=new_quantity*parseFloat(item_rate.attr('data-itemrate'));

    var price_for_calc_disc=parseFloat(item_rate.attr('data-itemrate'));

    /*var disc_amount=(price_for_calc_disc*new_disc)/100;
    console.log(disc_amount);
    if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
        disc_amount=Math.round(disc_amount);
    }else{
        disc_amount=parseFloat(disc_amount).toFixed(1);
    }*/
    var price_af_disc=new_tot_price-(disc_amt*new_quantity);
    item_totprice.attr('data-itemDiscountAmount',disc_amt);
    /*var price_for_calc_disc=new_tot_price-new_tax_price;
    var disc_amount=parseFloat(price_for_calc_disc*new_disc)/100;
    if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
        disc_amount=Math.round(disc_amount);
    }else{
        disc_amount=parseFloat(disc_amount).toFixed(1);
    }
    var price_af_disc=new_tot_price-disc_amount;*/

    /*var new_tax_price=new_quantity*parseFloat(item_rate.attr('data-itemTaxAmount'));*/
    if(restaurant===true) {
        var item_rem = $("tr" + edit_id + " > td.name_item > .rem");
        var new_remarks = $(".edit_itemremarks").val();
        item_rate.attr('data-itemremarks', new_remarks);
        item_rem.empty();
        if (new_remarks !== "") {
            item_rem.append("*" + new_remarks);
        }
    }
    var new_tax_price=new_quantity*((parseFloat(item_rate.attr('data-itemTaxPercentage'))/100)*price_af_disc);
    item_rate.attr('data-itemTaxAmount',new_tax_price);
    item_totprice.attr('data-itemTaxAmount',new_tax_price);
    quantity.attr('data-itemquantity',new_quantity);
    quantity.attr('data-itemStockQuantity', new_quantity*quantity.attr('data-unitstockquantity'));
    /*quantity.html(new_quantity);*/
    quantity.find("input.quan_input").val(new_quantity);
    item_totprice.attr('data-itemtotalprice',new_tot_price);


    /*item_rate.attr('data-disc',new_disc);*/
    var total_discount=disc_amt*new_quantity;
    item_totprice.html(price_af_disc.toFixed(2));
    if(total_discount>0){
        item_totprice.append("<div><small>"+new_tot_price.toFixed(2)+"-"+total_discount+"<small><div>");
    }

    $("#total_bill_discount").text('0');
    $("#bill_dis").val(0);
    $("#bill_dis_number").val(0);
    $("#bill_dis_number").attr("data-billPromoCode","-");
    calculate_total_amount();
}

function change_quantity(edit_id){
    var restaurant=localStorage.getItem('businesstyperestaurant');
    var quantity=$("tr"+edit_id+" > td.q_item");
    var item_totprice=$("tr"+edit_id+" > td.q_tot_price");
    var item_rate=$("tr"+edit_id+" > td.rate_item");
    var item_unit=$("tr"+edit_id+" > td.q_item > select.edit_itemunit");
    var barcode_item=$("tr"+edit_id+" > td.barcode_item");


    var new_disc=$(".edit_disc").val();
    var new_quantity=$(".edit_qty").val();
    var unit=$(".edit_itemunitk");
    /*var new_unit=unit.find("option:selected").attr('data-untiname');*/
    var new_item_rate=unit.find("option:selected").attr('data-SP');
    var new_stockquan=unit.find("option:selected").attr('data-Quan');
    item_rate.attr('data-itemrate',new_item_rate);
    quantity.attr('data-unitstockquantity',new_stockquan);
    quantity.attr('data-itemUnitCode',unit.find("option:selected").val());
    /*item_unit.empty();*/


    item_unit.find("option:selected").removeProp("selected");
    item_unit.find("option[value='"+unit.find('option:selected').val()+"']").prop('selected', 'selected');



    var new_tot_price=new_quantity*parseFloat(item_rate.attr('data-itemrate'));



    var price_for_calc_disc=parseFloat(item_rate.attr('data-itemrate'));

    var disc_amount=(price_for_calc_disc*new_disc)/100;
   /* console.log(disc_amount);
    if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
        disc_amount=Math.round(disc_amount);
    }else{
        disc_amount=parseFloat(disc_amount).toFixed(1);
    }*/
    var disc_amt=disc_amount;
    var price_af_disc = new_tot_price - (disc_amt * new_quantity);
    item_totprice.attr('data-itemDiscountAmount', disc_amt);


    var new_tax_price=new_quantity*((parseFloat(item_rate.attr('data-itemTaxPercentage'))/100)*price_af_disc);
    item_rate.attr('data-itemTaxAmount',new_tax_price);

    /*var price_for_calc_disc=new_tot_price-new_tax_price;
    var disc_amount=(price_for_calc_disc*new_disc)/100;
    if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
        disc_amount=Math.round(disc_amount);
    }else{
        disc_amount=parseFloat(disc_amount).toFixed(1);
    }
    var price_af_disc=new_tot_price-disc_amount;*/

    /*var new_tax_price=new_quantity*parseFloat(item_rate.attr('data-itemTaxAmount'));*/
    if(restaurant===true) {
        var item_rem = $("tr" + edit_id + " > td.name_item > .rem");
        var new_remarks = $(".edit_itemremarks").val();
        item_rate.attr('data-itemremarks', new_remarks);
        item_rem.empty();
        if (new_remarks !== "") {
            item_rem.append("*" + new_remarks);
        }
    }
    item_totprice.attr('data-itemTaxAmount',new_tax_price);
    quantity.attr('data-itemquantity',new_quantity);
    quantity.attr('data-itemStockQuantity', new_quantity*quantity.attr('data-unitstockquantity'));
    /*quantity.html(new_quantity);*/
    quantity.find("input.quan_input").val(new_quantity);
    item_totprice.attr('data-itemtotalprice',new_tot_price);

    /*item_rate.attr('data-disc',new_disc);*/
    var total_discount=disc_amt*new_quantity;
    item_totprice.html(price_af_disc.toFixed(2));
    if(total_discount>0){
        item_totprice.append("<div><small>"+new_tot_price.toFixed(2)+"-"+total_discount+"<small><div>");
    }

    $("#total_bill_discount").text('0');
    $("#bill_dis").val(0);
    $("#bill_dis_number").val(0);
    
    calculate_total_amount();
}

$(document).on('keyup','#bill_dis',function (){
    add_bill_discount();
    $(this).focus();


});

$(document).on('keyup','#bill_dis_number',function (){
    /*$("#bill_dis_number").attr("data-billPromoCode","-");
    $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");*/
    
    add_bill_discount_number();
    $(this).focus();


});

function check_update_quantity_child(barcode){
    var count=0;
    var after=localStorage.getItem('master_id');
    /*console.log("tbody tr.item_list.child_list_"+after);*/
    $("tbody tr.item_list.child_list_"+after).each(function() {
        var ch_barcode=$(this).find('td.barcode_item').attr('data-itembarcode');
        if(isequalvaluecheck(ch_barcode,barcode)) {
            var quantity =$(this).find('td.q_item');
            var item_totprice=$(this).find('td.q_tot_price');
            var item_rate=$(this).find('td.rate_item');
            var new_disc=item_rate.attr('data-disc');
            var Quantity = quantity.attr('data-itemquantity');
            var new_quantity=parseFloat(Quantity)+1;

            var new_tot_price=new_quantity*parseFloat(item_rate.attr('data-itemrate'));
            var disc_amount=(new_tot_price*new_disc)/100;
            var price_af_disc=new_tot_price-disc_amount;




            quantity.attr('data-itemquantity',new_quantity);
            /*quantity.html(new_quantity);*/
            quantity.find("input.quan_input").val(new_quantity);
            item_totprice.attr('data-itemtotalprice',new_tot_price);
            item_rate.attr('data-disc',new_disc);
            item_totprice.attr('data-itemDiscountAmount',disc_amount);

            item_totprice.html(price_af_disc.toFixed(2));
            if(new_disc>0){
                item_totprice.append("<div><small>"+new_tot_price.toFixed(2)+"-"+new_disc+"%<small><div>");
            }
            count++;
        }
    });
    return count;
}


function change_direct_quantity(edit_id){
    var quantity=$("tr"+edit_id+" > td.q_item");
    var item_totprice=$("tr"+edit_id+" > td.q_tot_price");
    var item_rate=$("tr"+edit_id+" > td.rate_item");
    var barcode_item=$("tr"+edit_id+" > td.barcode_item");

    /*var new_disc=item_rate.attr('data-disc');*/
    var new_quantity=quantity.find("input.quan_input").val();

    var new_tot_price=new_quantity*parseFloat(item_rate.attr('data-itemrate'));
    var new_tax_price=new_quantity*parseFloat(item_rate.attr('data-itemTaxAmount'));
    var price_for_calc_disc=parseFloat(item_rate.attr('data-itemrate'))-parseFloat(item_rate.attr('data-itemTaxAmount'));

   /* var disc_amount=(price_for_calc_disc*new_disc)/100;*/

    /*if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
        disc_amount=Math.round(disc_amount);
    }else{
        disc_amount=parseFloat(disc_amount).toFixed(1);
    }*/
    var disc_amt=parseFloat(item_totprice.attr('data-itemDiscountAmount'));
    var price_af_disc = new_tot_price - (disc_amt * new_quantity);
    item_totprice.attr('data-itemDiscountAmount', disc_amt);



    /*var price_af_disc=new_tot_price-(disc_amount*new_quantity);*/

    /*var new_tax_price=new_quantity*parseFloat(item_rate.attr('data-itemTaxAmount'));*/



    item_totprice.attr('data-itemTaxAmount',new_tax_price);
    quantity.attr('data-itemquantity',new_quantity);
    quantity.attr('data-itemStockQuantity', new_quantity*quantity.attr('data-unitstockquantity'));
    /*quantity.html('<input onkeyup="update_and_calculate(this)" data-edit="'+div_idr+'" class="quan_input mousetrap" style="max-width: 50px;" value=1>');*/
    item_totprice.attr('data-itemtotalprice',new_tot_price);

    item_rate.attr('data-disc',disc_amt);

    var total_discount=disc_amt*new_quantity;
    item_totprice.html(price_af_disc.toFixed(2));
    if(total_discount>0){
        item_totprice.append("<div><small>"+new_tot_price.toFixed(2)+"-"+total_discount+"<small><div>");
    }

    $("#total_bill_discount").text('0');
    $("#bill_dis").val(0);
    $("#bill_dis_number").val(0);
    
    calculate_total_amount();
}





function make_input_field(name){
    return '<div class="col-md-6"><div class="form-group"><label style="text-transform: capitalize;">' + name + '</label><input id="' + name + '" name="' + name + '" placeholder="' + name + '" class="form-control"></div></div>';
}
function make_select_field(name,data){
    var select_inp = '<div class="col-md-6"><div class="form-group"><label style="text-transform: capitalize;">' + name + '</label><br><select id="' + name + '" name="' + name + '" class="form-control ' + name + ' required"><option selected value="">Please Select ' + name + '</option>';
    data.forEach(function(dt){
        select_inp += '<option value="'+dt["id"]+'">'+dt['Area']+'</option>';
    });
    select_inp   +='</select>\n' +
        '</div>' +
        '</div>';
    return select_inp;
}


function make_input_field_email(name){
    return '<div class="col-md-6"><div class="form-group"><label style="text-transform: capitalize;">' + name + '</label><input type="email" id="' + name + '" name="' + name + '" placeholder="' + name + '" class="form-control"></div></div>';
}


function add_bill_discount(){
    var bdis=$("#bill_dis");
    $("#total_bill_discount").text(bdis.val());
    var tot_amount=0;
    var item_tot_disc=0;

    $("tbody tr.item_list").each(function() {
        var Rate=$(this).find('td.rate_item').attr('data-itemRate');
        var Quantity=$(this).find('td.q_item').attr('data-itemquantity');
        Rate=parseFloat(Rate)*Quantity;
        var disc_this_item=$(this).find('td.q_tot_price').attr('data-itemdiscountamount');

        item_tot_disc+=(disc_this_item*Quantity);
        tot_amount+=Rate;
    });
    var disc_percent=bdis.val();
    var total_temp=(tot_amount)-(item_tot_disc);
    var tot_disc_number=(disc_percent*total_temp/100);
    $("#bill_dis_number").val(tot_disc_number.toFixed(2));


    calculate_total_amount();
}
function add_bill_discount_number(){
    var tot_amount=0;
    var item_tot_disc=0;
    var bdis=$("#bill_dis");
    $("tbody tr.item_list").each(function() {
        var Rate=$(this).find('td.rate_item').attr('data-itemRate');
        var Quantity=$(this).find('td.q_item').attr('data-itemquantity');
        Rate=parseFloat(Rate)*Quantity;
        var disc_this_item=$(this).find('td.q_tot_price').attr('data-itemdiscountamount');
        /*item_tot_disc+=((disc_this_item*Rate)/100);*/
        item_tot_disc+=parseFloat(disc_this_item*Quantity);
        tot_amount+=Rate;
    });

    
    var total_temp=(tot_amount)-(item_tot_disc);
    var tot_disc_number=$("#bill_dis_number").val();
    var disc_percent=parseFloat((tot_disc_number/total_temp)*100);
    bdis.val(disc_percent);
    $("#total_bill_discount").text(bdis.val());
    calculate_total_amount();
}
function disselect_all(classname){
    var elements = document.getElementsByClassName(classname);
    for(var i = 0; i < elements.length; i++){
        $(elements[i]).removeClass('selectthisdiv'); // Hide all elements.
    }
}


 /* for sustaining items on sales table start*/


function show_list_draft(restaurant){
    var diver=$('#item_adder');
    var div_id=diver.find('tbody');
    remove_Idraft(div_id,restaurant);
    calculate_total_amount();
}
function remove_Idraft(div_id,restaurant){
    if(restaurant===true) {
        if (localStorage.getItem('recallmode') === "OFF") {
            div_id.append(Lockr.get('Idraft'));
        } else {
            Lockr.rm('Idraft');
        }
    }else{
        div_id.append(Lockr.get('Idraft'));
    }
}

/* for sustaining items on sales table end*/

/* data formatters start*/

function formatDate(d){
    return d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear();
}
function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    return hours + ':' + minutes + ' ' + ampm;
}
function pad(n, width, z) {
    z = z || '0';
    n = n + '';
    return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}


/* data formatters end*/


function clear_this_sale(restaurant){
    var TotalQuantity=Number($("#totalItem_div").text());
    if(TotalQuantity>0) {
        var confirm = "<div class='container'><div class='row'><div class='col-md-12'>Are you sure you want to discard current sale?</div></div></div>";
        var confirm_button = "<div class='btn btn-danger' data-dismiss='modal' onclick='clear_confirmed("+restaurant+")' id='disc_this'>Discard</div>";
        var cancel_button = "<div class='btn btn-primary' data-dismiss='modal' id='cancel_void'>Cancel</div>";
        var ask_modal = $("#askmodal");
        var modal_content = ask_modal.children(".modal-dialog").children(".modal-content");
        var modal_title = modal_content.children(".modal-header").children(".modal-title");
        var modal_body = modal_content.children(".modal-body");
        var modal_footer = modal_content.children(".modal-footer");
        modal_title.empty();
        modal_body.empty();
        modal_footer.empty();
        modal_title.append("Select Payment Mode");
        modal_body.append(confirm);
        modal_footer.append(confirm_button + cancel_button);
        ask_modal.modal('show');
    }else{

        clear_confirmed(restaurant);
    }

}

function isequalvaluecheck(val1,val2){
    return val1==val2;
}


