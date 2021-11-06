function get_tax_name(){
    var las_in=JSON.parse(localStorage.getItem('last_info'));
    var taxname=las_in['taxname'];
    return taxname;
}
function get_currency(){
    var las_in=JSON.parse(localStorage.getItem('last_info'));
    var curr=las_in['currency'];
    return curr;
}

function make_channel_list(){
    var ls=JSON.parse(localStorage.getItem('last_info'));
    var chan_sel=$("#channel_select");
    chan_sel.empty();
    chan_sel.append("<option value=''>Default</option>");
    if(ls['channels'].length>0){
        ls['channels'].forEach(function(chan){
            chan_sel.append("<option value='"+chan['id']+"'>"+chan['Channel']+"</option>");
        });
    }
}

function on_success_last_info(response){
    var restaurant=localStorage.getItem('businesstyperestaurant');
    restaurant = restaurant === 'true';
    localStorage.setItem('last_info',response);
    var las_in=JSON.parse(localStorage.getItem('last_info'));
    if(restaurant===true) {
        var padnum = pad(las_in['order_last_record_id'], 5);
        $("#bill_no").text(padnum + '/' + las_in['uid'] + las_in['un2']);
    }else{
        padnum=pad(las_in['sale_last_record_id'], 5);
        $("#bill_no").text(padnum+'/'+las_in['uid']+las_in['un2']);
    }
    $("#date_sale").text(formatDate(new Date(las_in['current_date'])));
    make_channel_list();
}
function gli(linfo){
    var las_in=JSON.parse(localStorage.getItem('last_info'));
    return las_in[linfo];
}
