function get_items(){

    if($("#localstorageuse").val()==="1" || localStorage.getItem('businesstyperestaurant')==="true") {
        var ajax_url = 'item/all/data?type=all';
    }else{
        ajax_url = 'item/all/data?type=limited';
    }
    show_item_loading();
        $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: ajax_url,
            processData: false,
            beforeSend: function (jqXHR, settings) {
                xhrPool.push(jqXHR);
            },
            success: function (response) { // What to do if we succeed
                localStorage.setItem('items', response);
                make_item_list("");
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                if (jqXHR.status === 500) {
                    get_items();
                }
            }
        });


}
$("#search_item").keyup(function(){
    if($("#localstorageuse").val()==1){
        make_item_list($(this).val());
    }else{
        $.each(xhrPool, function(idx, jqXHR) {
            jqXHR.abort();
        });
        show_item_loading();
        var ajax_url = 'sale/itemterm/'+$(this).val();
        $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: ajax_url,
            processData: false,
            beforeSend: function (jqXHR, settings) {
                xhrPool.push(jqXHR);
            },
            success: function (response) { // What to do if we succeed
                localStorage.removeItem('items');
                localStorage.setItem('items',response);
                make_item_list("");
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                /*open_error_modal("Error in syncing");*/
            }
        });
    }


});
function make_item_list(val){
    populate_item_list(localStorage.getItem('items'),val,'search');
}
function make_item_list_by_cat(catval,subcatval){
    if(catval===''){
        catval=0;
    }
    if(subcatval===''){
    }
    if($("#localstorageuse").val()==1) {
        populate_item_list(localStorage.getItem('items'),catval,'cat');
    }else{
        $.each(xhrPool, function(idx, jqXHR) {
            jqXHR.abort();
        });
        show_item_loading();
        var ajax_url = 'sale/itemcat/' + catval;
        $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: ajax_url,
            processData: false,
            beforeSend: function (jqXHR, settings) {
                xhrPool.push(jqXHR);
            },
            success: function (response) { // What to do if we succeed
                localStorage.removeItem('items');
                localStorage.setItem('items', response);
                make_item_list("");
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                /*open_error_modal("Error in syncing");*/
            }
        });

    }
}



function populate_item_list(response,val,valtype){
    var box = $("#body_items");
    box.empty();
    var resp = JSON.parse(response);
    var i = 0;
    var count=0;
    var ser=0;
    var viewType = localStorage.getItem("data-list");
//gridView Starts when data-list = 1 or null
    if (viewType == 1 || viewType==null) {
    var data = '<div class="row fit-me">';
    resp.forEach(function (res){
        if(res.DisplayOnPos===1) {
            if ((valtype === "cat" && val !== '' && res.CategoryCode === val) || ((valtype === "search" && ((res.BarCode.toLowerCase()).indexOf(val.toLowerCase()) !== -1 || (res.Item.toLowerCase()).indexOf(val.toLowerCase()) !== -1)))) {
                data += '<div class="class1-profile paddallzero col-sm-2" data-item="' + res.id + '" style="cursor:pointer" onclick="add_to_sale(' + res.id + ',0)" ><div class="profile-tile  givemezerobottom">\n';
                if(res.image!==0) {
                    var img = '<img alt="' + res.Item + '" onerror=call_img_not_found("' + ser + '"); src="' + res.image + '">';

                    data += '                        <div id="pri-' + ser + '" class="profile-tile-box">\n' +
                        '                        <div class="pt-avatar-w">\n' +
                        '                        ' + img + '\n' +
                        '                        </div>\n' +
                        '                        <div class="pt-user-name">\n' +
                        '                        ' + res.Item + '\n' +
                        '                    </div>\n' +
                        '                    </div>\n';
                }else{
                    data += '                        <div  id="ab-' + ser + '" class="profile-tile-box">\n' +
                        '                        <div class="itemname-box">\n' +
                        '                        <span class="mid-itemname" >' + res.Item + '</span>\n' +
                        '                        </div>\n' +
                        '                    </div>\n';
                }


                data += '</div></div>';
                if (i === 5) {
                    data += '</div>';
                    i = 0;
                    box.append(data);
                    data = '<div class="row fit-me">';
                    count++;
                    ser++;
                }
                else {
                    i++;
                    count++;
                    ser++;

                }
            }
        }
    });

    }else{
//listView Starts when data-list = 0
    var data = '<ul class=" list-group"  style="list-style-type: none; padding-left:5px !important;">';
    resp.forEach(function (res){
        if(res.DisplayOnPos===1) {
            if ((valtype === "cat" && val !== '' && res.CategoryCode === val) || ((valtype === "search" && ((res.BarCode.toLowerCase()).indexOf(val.toLowerCase()) !== -1 || (res.Item.toLowerCase()).indexOf(val.toLowerCase()) !== -1)))) {
                data += '<li class="list-group-item" data-item="' + res.id + '" style="cursor:pointer;list-style-type: none;" onclick="add_to_sale(' + res.id + ',0)" ><div class="profile-tile  givemezerobottom">\n';
                if(res.image!==0) {
                    var img = '<img alt="' + res.Item + '" onerror=call_img_not_found("' + ser + '"); src="' + res.image + '" style="width:42px !important; height:42px !important; border-radius:50px;">';

                    data += '                        <div id="pri-' + ser + '" class="profile-tile-box"style="width:100% !important;">\n' +

                        '                        <div class="pt-user-name">\n' +
                        '                        <div class="pull-left" style="width:40px !important; height:40px !important;">\n' +
                        '                        ' + img + '\n' +
                        '                        </div>\n' +
                        '                        <span class="pull-left" style="margin-left:10px;position: relative;top: 16px;font-size: 1.2em;">\n' +
                        '                        ' + res.Item + '\n' +
                        '                        </span>\n' +
                        '                    </div>\n' +
                        '                    </div>\n';
                }else{
                    data += '                    <div  id="ab-' + ser + '" class="profile-tile-box" style="width:100% !important;text-align: left !important;">\n' +
                        '                      <div class="itemname-box">\n' +
                        '                    <span class="mid-itemname pull-left" >' + res.Item + '</span>\n' +
                        '                   </div>\n' +
                        '               </div>\n';
                }



                data += '</div></li>';

                if (i === 5) {
                    data += '</ul>';
                    i = 0;
                    box.append(data);
                    data = '<ul class="list-group" style="list-style-type: none;padding-left:5px !important;">';
                    count++;
                    ser++;
                }
                else {
                    i++;
                    count++;
                    ser++;

                }
            }
        }
    });
    }//listView ends here
    if (count === 0) {
        box.append("<div class='col-sm-12 center'>No Items Found</div>");
    }
    else if (count % 6 !== 0) {
        data += '</div>';
        box.append(data);
    }

}


function getitem(barcode){

    var items=localStorage.getItem('items');
    var item = JSON.parse(items);
    var ite =[];
    item.forEach(function(it){
        if(it.BarCode===barcode){
            ite[0] = it;
        }
    });
    return ite;

}
function get_item_name_by_id(id){

    var items=localStorage.getItem('items');
    var item = JSON.parse(items);
    var itemname ="";
    item.forEach(function(it){
        if(isequalvaluecheck(it.id,id)){
            itemname = it.Item;
        }
    });
    return itemname;
}


function get_sale_items(barcodes,cb){
    var ajax_url="sale/item/"+barcodes.join(",");
    $.ajax({
        method: 'GET', // Type of response and matches what we said in the route
        url: ajax_url,
        processData: false,
        beforeSend: function (jqXHR, settings) {
            xhrPool.push(jqXHR);
        },
        success: function (response) { // What to do if we succeed
            localStorage.setItem('items', response);
            cb();
        },
        error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
            if (jqXHR.status === 500) {
                get_items();
            }
        }
    });
}


function show_item_loading(){
    var box = $("#body_items");
    box.empty();
    box.append("Loading Items ....");
}