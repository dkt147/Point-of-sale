function get_baranch_today_enabled_promotions(){
    var ajax_url = 'promotion/active/today';
    $.ajax({
        method: 'GET', // Type of response and matches what we said in the route
        url: ajax_url,
        processData: false,
        success: function (response) { // What to do if we succeed
            localStorage.setItem('promotions',response);
            if(!check_promotion_Card_available()){
                $(".card_prom").each(function(){
                 $(this).hide();
                });
            }else{
                $(".card_prom").each(function(){
                    $(this).show();

                });
                $("#card_num").keyup(function(){
                    $("#bill_dis").val("0");
                    $("#bill_dis_number").val("0");
                    $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");
                    calculate_total_amount();
                });
            }
        },
        error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail

        }
    });
}
function check_promotion_applicable(barcode,totalamount,categorycode,quantity,type){
    var promotions=JSON.parse(localStorage.getItem("promotions"));
    var discount=[];
    discount['status'] = 0;
    discount['order'] = 0;
    discount['item'] = 0;
    discount['prom_name'] = "";
    discount['prom_code'] = "";
    promotions.forEach(function(prom){

        switch (prom['discount_application']){
            case "AOrders":
                if(type==="order") {
                    if (prom['amount_discount'] !== "-") {
                        discount['order'] = parseFloat(prom['amount_discount']).toFixed(2);
                    } else if (prom['percent_discount'] !== "-") {
                        discount['order'] = parseFloat((parseFloat(totalamount) * parseFloat(prom['percent_discount'])) / 100).toFixed(2);
                    }
                    discount['item'] = 0;
                    discount['status'] = 1;
                    discount['prom_name'] = prom['promo_name'];
                    discount['prom_code'] = prom['promo_code'];

                }

                break;
            case "EOrders":
                if(type==="order") {
                    if (parseFloat(totalamount) > parseFloat(prom['application_detail'])) {
                        if (prom['amount_discount'] !== "-") {
                            discount['order'] = parseFloat(prom['amount_discount']).toFixed(2);
                        } else if (prom['percent_discount'] !== "-") {
                            discount['order'] = parseFloat((parseFloat(totalamount) * parseFloat(prom['percent_discount'])) / 100).toFixed(2);
                        }
                        discount['status'] = 1;
                        discount['item'] = 0;
                        discount['prom_name'] = prom['promo_name'];
                        discount['prom_code'] = prom['promo_code'];

                    }
                }
                break;
            case "PCat":
                if(type==="item") {
                    var minqty = prom['application_detail'].split('minQty')[1].split(',')[0];
                    var maxqty = prom['application_detail'].split('maxQty')[1];

                    if ((prom['application_detail'].indexOf(categorycode) > -1) && (quantity >= minqty || minqty == 0) && (quantity <= maxqty || maxqty == 0)){

                        if (prom['amount_discount'] !== "-") {
                            discount['item'] = parseFloat(prom['amount_discount']).toFixed(2);

                        } else if (prom['percent_discount'] !== "-") {
                            discount['item'] = parseFloat((parseFloat(totalamount) * parseFloat(prom['percent_discount'])) / 100).toFixed(2);

                        }
                        discount['status'] = 1;
                        discount['order'] = 0;
                        discount['prom_name'] = prom['promo_name'];
                        discount['prom_code'] = prom['promo_code'];

                    }
                }
                break;
            case "SProd":
                if(type==="item") {
                    minqty = prom['application_detail'].split('s_minQty')[1].split(',')[0];
                    maxqty = prom['application_detail'].split('s_maxQty')[1];
                    if (prom['application_detail'].indexOf(barcode) > -1 && (quantity >= minqty || minqty == 0) && (quantity <= maxqty || maxqty == 0)) {

                        if (prom['amount_discount'] !== "-") {
                            discount['item'] = parseFloat(prom['amount_discount']).toFixed(2);
                        } else if (prom['percent_discount'] !== "-") {
                            discount['item'] = parseFloat((parseFloat(totalamount) * parseFloat(prom['percent_discount'])) / 100).toFixed(2);
                        }
                        discount['status'] = 1;
                        discount['order'] = 0;
                        discount['prom_name'] = prom['promo_name'];
                        discount['prom_code'] = prom['promo_code'];

                    }
                }
                break;
        }
    });
    return discount;
}
function check_promotion_Card_applicable(cardno,totalamount,type){
    var promotions=JSON.parse(localStorage.getItem("promotions"));
    var discount=[];
    discount['status'] = 0;
    discount['order'] = 0;
    discount['item'] = 0;
    discount['prom_name'] = "";
    discount['prom_code'] = "";
    promotions.forEach(function(prom){

        switch (prom['discount_application']){
            case "SCard":
                if(type==="order") {
                    var cprom=prom['application_detail'].split(",");
                    var card_prom_no=cprom[0];
                    if (cardno === card_prom_no) {
                        if (prom['amount_discount'] !== "-") {
                            discount['order'] = parseFloat(prom['amount_discount']).toFixed(2);
                        } else if (prom['percent_discount'] !== "-") {
                            discount['order'] = parseFloat((parseFloat(totalamount) * parseFloat(prom['percent_discount'])) / 100).toFixed(2);
                        }
                        discount['status'] = 1;
                        discount['item'] = 0;
                        discount['prom_name'] = prom['promo_name'];
                        discount['prom_code'] = prom['promo_code'];

                    }
                }
                break;
        }
    });
    return discount;
}
function check_promotion_Card_available(){
    var promotions=JSON.parse(localStorage.getItem("promotions"));
    var available=0;
    promotions.forEach(function(prom){
        switch (prom['discount_application']){
            case "SCard":
                available=1;
            break;
        }
    });
    return available;
}


































