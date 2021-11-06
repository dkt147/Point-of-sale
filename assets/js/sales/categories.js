function categories_list(callback){
    var ajax_url = 'category/all/data';
    $.ajax({
        method: 'GET', // Type of response and matches what we said in the route
        url: ajax_url,
        processData: false,
        beforeSend: function (jqXHR, settings) {
            xhrPool.push(jqXHR);
        },
        success: function (response) { // What to do if we succeed
            localStorage.setItem('categories',response);
            var box = $("#body_categories");
            if(isequalvaluecheck(box.html(),"Loading Categories ....")){
                callback();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
            /* open_error_modal('some error occured');*/
            if(jqXHR.status===500){
                categories_list(get_categories_list());
            }


        }
    });
}

function get_categories_list(){
    populate_category_list(localStorage.getItem('categories'));
}


function move_to_subcat(code,thisitem){
    localStorage.setItem('SelCategory',code.toString());
    move_to_item('',thisitem);
}

function move_to_item(code,thisitem){
    localStorage.setItem('SelSubCategory',code);
    make_item_list_by_cat(localStorage.getItem('SelCategory'),localStorage.getItem('SelSubCategory'));
    disselect_all("class1-profile");
    $(thisitem).addClass('selectthisdiv');

}

function populate_category_list(response){
    var box = $("#body_categories");
    box.empty();
    var resp = JSON.parse(response);
    var i = 0;
    var count=0;
    var ser=0;
    var data = '<div class="row fit-me">';
    resp.forEach(function (res){
        if(res.DisplayOnPos===1) {
            data += '<div class="class1-profile profile_class paddallzero col-lg-2 col-md-4 col-sm-6 col-xs-12" data-item="' + res.id + '" style="cursor:pointer" onclick=move_to_subcat("' + res.CategoryCode + '",this) ><div class="profile-tile  givemezerobottom">\n';
            if(res.CategoryImage!==0){
                var img = '<img alt="' + res.Item + '" onerror=call_img_not_foundc("' + ser + '");  src="' + res.CategoryImage + '">';

                data += '                        <div id="pric-' + ser + '" class="profile-tile-box">\n' +
                    '                        <div class="pt-avatar-w">\n' +
                    '                        ' + img + '\n' +
                    '                        </div>\n' +
                    '                        <div class="pt-user-name">\n' +
                    '                             ' + res.Category + '\n' +
                    '                    </div>\n' +
                    '                    </div>\n';

            }else{

                data += '                        <div  id="abc-' + ser + '" class="profile-tile-box">\n' +
                    '                        <div class="itemname-box">\n' +
                    '                        <span class="mid-itemname" >      ' + res.Category + '</span>\n' +
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
    });
    if (count === 0) {
        box.append("<div class='col-sm-12 center'>No Categories Found</div>");
    }
    else if (count < 6) {
        data += '</div>';
        box.append(data);
    }
    else if (count < 12) {
        data += '</div>';
        box.append(data);
    }
    else if (count < 18) {
        data += '</div>';
        box.append(data);
    }
    else if (count < 24) {
        data += '</div>';
        box.append(data);
    }
    else if (count < 30) {
        data += '</div>';
        box.append(data);
    }

}