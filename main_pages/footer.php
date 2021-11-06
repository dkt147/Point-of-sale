        </div>
        <!-- </div> -->
    </div>
</div>


<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/moment/moment.js"></script>
<script src="assets/bower_components/chart.js/dist/Chart.min.js"></script>
<script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="assets/bower_components/ckeditor/ckeditor.js"></script>
<script src="assets/bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/bower_components/dropzone/dist/dropzone.js"></script>
<script src="assets/bower_components/editable-table/mindmup-editabletable.js"></script>

<script src="assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/bower_components/tether/dist/js/tether.min.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/util.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/alert.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/button.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/modal.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/tab.js"></script>

<script src="assets/bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="assets/bower_components/bootstrap/js/dist/popover.js"></script>
<script src="assets/js/main1073.js"></script>
<script type="text/javascript" src="assets/js/jquery.qrcode.js"></script>
<script type="text/javascript" src="assets/js/qrcode.js"></script>
<script src="assets/js/jszip.min.js"></script>
<script src="assets/js/pdfmake.js"></script>
<script src="assets/js/vfs.js"></script>

<!-- SALES -->
<script src="assets/js/sales/mousetrap.js"></script>
<script src="assets/js/sales/offline.js"></script>
<script src="assets/js/sales/locker.js"></script>
<!-- <script src="assets/js/sales/jquery-1.9.1.js"></script> -->
<!-- <script src="assets/js/sales/salesjs.js"></script> -->
<script src="assets/js/sales/jquery-ui.js"></script>
<script src="assets/js/sales/code39.js"></script>
<script src="assets/js/sales/jquery.scannerdetection.js"></script>
<script src="assets/js/sales/select2.js"></script>
<script src="assets/js/sales/pouchdb-6.4.3.js"></script>
<script src="assets/js/sales/items.js"></script>
<script src="assets/js/sales/categories.js"></script>
<script src="assets/js/sales/Order.js"></script>
<script src="assets/js/sales/last_info.js"></script>
<script src="assets/js/sales/promotions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!-- SALES -->
<!-- DATATABLE -->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<!-- <script src="https://cdn.datatables.net/1.10.20/js/dataTables.jqueryui.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.jqueryui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script> -->

<!-- DATATABLE -->





<!-- <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXXXXX-9', 'auto');
    ga('send', 'pageview');
</script> -->
<!-- MY SCRIPTS -->
<script>
    // $(document).ready( function () {
    //     var table = $('#example').DataTable( {
    //     lengthChange: false,
    //     buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    // });
    // table.buttons().container()
    //     .insertBefore( '#example_filter' );
    // });

    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
<script> 

    $(document).ready(function () { 
        $(".add-row").click(function () { 
            markup = 
            "<tr>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<select class='form-control widthAuto' style='height: auto !important;'>"+
                            "<option>Flour</option>"+
                            "<option>Sugar</option>"+
                            "<option>Chicken</option>"+
                            "<option>Beef</option>"+
                        "</select>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<input id='Counter' name='Counter' placeholder='Rate' value='' class='form-control widthAuto'>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<input id='Counter' name='Counter' placeholder='Quantity' value='' class='form-control widthAuto'>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<input id='Counter' name='Counter' placeholder='Amount' value='' class='form-control widthAuto'>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    // "<a href='#' class='edit_item btn btn-success add-row'> "+
                    //     "<i class='fa fa-plus' style='font-size: 16px; color: #fff;'></i>"+
                    // "</a> "+
                    "<button class='remove_item btn btn-danger'> "+
                        "<i class='fa fa-trash' style='font-size: 16px; color: #fff;'></i>"+
                    "</button> "+
                " </td>"+
            "</tr>"; 

            tableBody = $("table tbody"); 
            tableBody.append(markup); 
        });
        $(".add-row2").click(function () { 
            markup = 
            "<tr>"+
                " <td> "+
                    "<div class='form-group'> "+
                        "<select class='form-control' style='height: auto !important;'>"+
                            "<option>Flour</option>"+
                            "<option>Sugar</option>"+
                            "<option>Chicken</option>"+
                            "<option>Beef</option>"+
                        "</select>"+
                    "</div> "+
                " </td>"+
                " <td> "+
                    "<div class='form-group'> "+
                        "<input id='Counter' name='Counter' placeholder='Rate' value='' class='form-control '>"+
                    "</div> "+
                " </td>"+
                " <td>" +
                    "<button class='remove_item btn btn-danger'> "+
                        "<i class='fa fa-trash' style='font-size: 16px; color: #fff;'></i>"+
                    "</button> "+
                " </td>"+
            "</tr>"; 

            tableBody = $("table tbody"); 
            tableBody.append(markup); 
        }); 
        $(".add-row3").click(function () { 
            markup = 
            "<tr>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<select class='form-control widthAuto' style='height: auto !important;'>"+
                            "<option>Flour</option>"+
                            "<option>Sugar</option>"+
                            "<option>Chicken</option>"+
                            "<option>Beef</option>"+
                        "</select>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<input id='Counter' name='Counter' placeholder='Rate' value='' class='form-control widthAuto'>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<input id='Counter' name='Counter' placeholder='Quantity' value='' class='form-control widthAuto'>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<input id='Counter' name='Counter' placeholder='Amount' value='' class='form-control widthAuto'>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    "<div class='form-group'> "+
                        "<textarea rows='1' class='form-control'></textarea>"+
                    "</div> "+
                " </td>"+
                "<td> "+
                    // "<a href='#' class='edit_item btn btn-success add-row'> "+
                    //     "<i class='fa fa-plus' style='font-size: 16px; color: #fff;'></i>"+
                    // "</a> "+
                    "<button class='remove_item btn btn-danger'> "+
                        "<i class='fa fa-trash' style='font-size: 16px; color: #fff;'></i>"+
                    "</button> "+
                " </td>"+
            "</tr>"; 

            tableBody = $("table tbody"); 
            tableBody.append(markup); 
        });
    }); 
</script>

<!-- /MY SCRIPTS -->



<script>
    function timeouttempmsg(identifier){
        setTimeout(function () {
            identifier.fadeOut(1500);
        }, 3000);
    }
    $(document).ready(function(){

        timeoutalert();
        var inv="0";
        var mq="0";
        var invrol="1";
        if(inv && mq && invrol){
            stockalert();
        }
        $("#user-branch").change(function(){
            var url=$(this).find("option:selected").attr('data-url');
            update_branch(url);
        });

        // Delete Row Start //
          $('table').on('click','tr .remove_item',function(e){
            e.preventDefault();
            $(this).parents('tr').remove();
          });

    });
    
    function timeoutalert() {
        setTimeout(function () {
            $(".alert").fadeOut(1500);
        }, 3000);
    }
    function stockalert() {
        $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: "checkstock",
            processData: false,
            success: function (response) { // What to do if we succeed
                var res=JSON.parse(response);
                if(res.stockalert==1){
                    var app='<i class="os-icon os-icon-mail-14"></i>' +
                    '<div class="new-messages-count">' +
                    '1' +
                    '</div>' +
                    '<div class="os-dropdown light message-list">' +
                    '<div class="icon-w">' +
                    '<i class="os-icon os-icon-mail-14"></i>' +
                    '</div>' +
                    '<ul>' +
                    '<li>' +
                    '<a href="reports/MinimumQuantityReport">' +
                    '<div class="user-avatar-w">' +
                    '<img alt="" src="assets/img/bg-pattern.png">' +
                    '</div>'+
                    '<div class="message-content">' +
                    '<h6 class="message-from">' +
                    ' '+res.stockitems+' item(s) stock are not in range of <br>minimum and maximum quantity' +
                    '</h6>' +
                    '<h6 class="message-title">' +
                    'view minimum stock report' +
                    '</h6>' +
                    '</div>' +
                    '</a>' +
                    '</li>' +
                    '</ul>' +
                    '</div>';

                }else{
                    app='<i class="os-icon os-icon-mail-14"></i>' +
                    '<div class="new-messages-count">' +
                    '0' +
                    '</div>' +
                    '<div class="os-dropdown light message-list">' +
                    '<div class="icon-w">' +
                    '<i class="os-icon os-icon-mail-14"></i>' +
                    '</div>' +
                    '<ul>' +
                    '<li>' +
                    '</li>' +
                    '</ul>' +
                    '</div>';
                }
                var apps=$("#stalert");
                apps.append(app);
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                /*open_error_modal("Error in syncing");*/
            }
        });
    }
    function update_branch(url){
        $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: url,
            processData: false,
            success: function (response) { // What to do if we succeed
                window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                /*open_error_modal("Error in syncing");*/
            }
        });
    }
</script>


<script src=assets/js/jquery-1.9.1.js></script>
<script src=assets/js/jquery-ui.js></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<!--  <script src=assets/bower_components/jquery/dist/jquery.min.js></script> -->

<script type="text/javascript">

    var jquery = $.noConflict(true);
    function showamountchart(){
        $("#catdonutChart").hide();
        $("#subcatdonutChart").hide();
        $("#branddonutChart").hide();
        $("#catwiseitemdonutChart").hide();
        $("#catdonutamountChart").show();
        $("#subcatdonutamountChart").show();
        $("#branddonutamountChart").show();
        $("#myChart2").show();
        $("#catwiseitemdonutamountChart").show();
        $("#showamount").hide();
        $("#showquantity").show();
    }
    function showquantitychart(){
        $("#catdonutChart").show();
        $("#myChart1").show();
        $("#subcatdonutChart").show();
        $("#branddonutChart").show();
        $("#catwiseitemdonutChart").show();
        $("#catdonutamountChart").hide();
        $("#subcatdonutamountChart").hide();
        $("#branddonutamountChart").hide();
        $("#catwiseitemdonutamountChart").hide();
        $("#showquantity").hide();
        $("#showamount").show();
    }

    function getconfig(dataarray,labelsr) {
        return {
         type: 'doughnut',
         data: {

             labels: labelsr,
             datasets: [{
                 data: dataarray,
                 backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#ADC49D","#CBD789","#ABD759","#CCD224","#896759","#359AF9","#759ABD","#5B9C3D","#999999","#888BBB","#777EEE","#555AAA","#454ECD","#ECD454",'#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                 '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                 '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                 '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                 '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                 '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                 '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                 '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                 '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                 '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF']
             }]
         },
         options: {
             legend: {
                 verticalAlign: "bottom",
                 horizontalAlign: "center",
                 position: "bottom"
             },
             animation: {
                 animateRotate: false,
                 animateScale: true
             },
             responsive: true
         }
     };

 }
 function getconfigLine(labeline,dataline){
    return {
      type:'line',
      data: {
        labels: labeline,
        datasets: [
        {
            label: "Sales",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: dataline
        }
        ]
    },
    options : {
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Amount'
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Dates'
                }
            }]
        }
    }
};
}

function get_category_wise_item_chart(category,vardif){
    if(vardif==="default"){
        var ajax_url = 'CategoryWiseItems/'+category+'/default/default';
    }else{
        var from_date=$("#from_date").val();
        var to_date=$("#to_date").val();
        ajax_url = 'CategoryWiseItems/'+category+'/'+to_date+'/'+from_date;
    }



    $.ajax({
                method: 'GET', // Type of response and matches what we said in the route
                url: ajax_url,
                processData: false,
                success: function (response) { // What to do if we succeed
                    var responsed = JSON.parse(response);
                    var categitems=responsed['itemsarray'];
                    var categitemsamount = responsed['itemsarrayamount'];
                    var categdataarray=[];
                    var categdataarrayamount=[];
                    var categlabelsr=[];
                    var k=0;
                    for (var categitem in categitems){
                        categdataarray[k] = categitems[categitem];
                        categdataarrayamount[k] = categitemsamount[categitem];
                        categlabelsr[k++]=categitem;
                    }
                    var canvitem=$("#canv_item");
                    var canv='<canvas height="120px" id="catwiseitemdonutChart" width="200"></canvas>\n' +
                    '                                    <canvas style="display: none" height="120px" id="catwiseitemdonutamountChart" width="200"></canvas>';
                    canvitem.empty();
                    canvitem.append(canv);
                    var susbctx = document.getElementById("catwiseitemdonutChart").getContext("2d");
                    window.myDoughnut = new Chart(susbctx, getconfig(categdataarray,categlabelsr));

                    var susbctxamount = document.getElementById("catwiseitemdonutamountChart").getContext("2d");
                    window.myDoughnut = new Chart(susbctxamount, getconfig(categdataarrayamount,categlabelsr));
                },
                error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                    /*open_error_modal("Error in syncing");*/
                }
            });
}


function get_date_wise_all_charts(){
    var from_date=$("#from_date").val();
    var to_date=$("#to_date").val();
    var ajax_url = 'dateWiseItems/'+to_date+'/'+from_date;
    /*get_category_wise_item_chart($("#selcat").find("option:selected").val(),'');*/
    $.ajax({
                method: 'GET', // Type of response and matches what we said in the route
                url: ajax_url,
                processData: false,
                success: function (response) { // What to do if we succeed
                    var responsed = JSON.parse(response);
                    console.log(responsed);
                    var catitems = responsed['catitems'];
                    var catlabels = responsed['catlabels'];
                    var catitems2 = responsed['catitems2'];
                    var catlabels2 = responsed['catlabels2'];

                    if ($("#myChart1").length) {
                      var myChart1 = $("#myChart1");
                      var barData1 = {
                        labels: catlabels,
                        datasets: [{
                          label: "Popular Categories by Quantity",
                          backgroundColor: ["#F7464A","#46BFBD","#FDB45C","#ADC49D","#CBD789","#ABD759","#CCD224","#896759","#359AF9","#759ABD","#5B9C3D","#999999","#888BBB","#777EEE","#555AAA","#454ECD","#ECD454",'#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                          '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                          '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                          '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                          '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                          '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                          '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                          '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                          '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                          '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'],
                          // borderColor: ['rgba(255,99,132,0)', 'rgba(54, 162, 235, 0)', 'rgba(255, 206, 86, 0)', 'rgba(75, 192, 192, 0)', 'rgba(153, 102, 255, 0)', 'rgba(255, 159, 64, 0)'],
                          borderColor: ['rgba(255,99,132,0)', 'rgba(153, 102, 255, 0)'],
                          borderWidth: 1,
                          data: catitems
                      }]
                  };
                      // -----------------
                      // init bar chart
                      // -----------------
                      new Chart(myChart1, {
                        type: 'bar',
                        data: barData1,
                        options: {
                          scales: {
                            xAxes: [{
                              display: true,
                              ticks: {
                                fontSize: '11',
                                fontColor: '#969da5'
                            },
                            gridLines: {
                                color: 'rgba(0,0,0,0.05)',
                                zeroLineColor: 'rgba(0,0,0,0.05)'
                            }
                        }],
                        yAxes: [{
                          ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            color: 'rgba(0,0,0,0.05)',
                            zeroLineColor: '#6896f9'
                        }
                    }]
                },
                legend: {
                    display: false
                },
                animation: {
                    animateScale: true
                }
            }
        });
                  }

                    //Categories by Value
                    if ($("#myChart2").length) {
                      var myChart2 = $("#myChart2");
                      var barData2 = {
                        labels: catlabels2,
                        datasets: [{
                          label: "Popular Categories by Value",
                          backgroundColor: ['#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',"#F7464A","#46BFBD","#FDB45C","#ADC49D","#CBD789","#ABD759","#CCD224","#896759","#359AF9","#759ABD","#5B9C3D","#999999","#888BBB","#777EEE","#555AAA","#454ECD","#ECD454",'#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                          '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                          '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                          '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                          '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                          '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                          '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                          '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                          '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF'],
                          // borderColor: ['rgba(255,99,132,0)', 'rgba(54, 162, 235, 0)', 'rgba(255, 206, 86, 0)', 'rgba(75, 192, 192, 0)', 'rgba(153, 102, 255, 0)', 'rgba(255, 159, 64, 0)'],
                          borderColor: ['rgba(255,99,132,0)', 'rgba(153, 102, 255, 0)'],
                          borderWidth: 1,
                          data: catitems2
                      }]
                  };
                      // -----------------
                      // init bar chart
                      // -----------------
                      new Chart(myChart2, {
                        type: 'bar',
                        data: barData2,
                        options: {
                          scales: {
                            xAxes: [{
                              display: true,
                              ticks: {
                                fontSize: '11',
                                fontColor: '#969da5'
                            },
                            gridLines: {
                                color: 'rgba(0,0,0,0.05)',
                                zeroLineColor: 'rgba(0,0,0,0.05)'
                            }
                        }],
                        yAxes: [{
                          ticks: {
                            beginAtZero: true
                        },
                        gridLines: {
                            color: 'rgba(0,0,0,0.05)',
                            zeroLineColor: '#6896f9'
                        }
                    }]
                },
                legend: {
                    display: false
                },
                animation: {
                    animateScale: true
                }
            }
        });
                  }




                    // var catitemsamount = responsed['catitemsamount'];
                    // var dataarray=[];
                    // var dataarrayamount=[];
                    // var labelsr=[];
                    // var i=0;
                    // for (var item in catitems){
                    //     dataarray[i] = catitems[item];
                    //     dataarrayamount[i] = catitemsamount[item];
                    //     labelsr[i++]=item;
                    // }

                    // var subcatitems = responsed['subcatitems'];
                    // var subcatitemsamount = responsed['subcatitemsamount'];
                    // var subdataarray=[];
                    // var subdataarrayamount=[];
                    // var sublabelsr=[];
                    // var j=0;
                    // for (var subitem in subcatitems){
                    //     subdataarray[j] = subcatitems[subitem];
                    //     subdataarrayamount[j] = subcatitemsamount[subitem];
                    //     sublabelsr[j++]=subitem;
                    // }

                    // var branditems = responsed['branditems'];
                    // var branditemsamount = responsed['branditemsamount'];
                    // var branddataarray=[];
                    // var branddataarrayamount=[];
                    // var brandlabelsr=[];
                    // var k=0;
                    // for (var branditem in branditems){
                    //     branddataarray[k] = branditems[branditem];
                    //     branddataarrayamount[k] = branditemsamount[branditem];
                    //     brandlabelsr[k++]=branditem;
                    // }

                    var lineitems = responsed['dailysalesamount'];
                    var linedataarray=[];
                    var linelabelsr=[];
                    var l=0;

                    lineitems.forEach(function(lineitem){
                        linedataarray[l] = parseFloat(lineitem['amount']);
                        var datenow=new Date(lineitem['date']);
                        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                        linelabelsr[l]= datenow.getDate() +" "+ monthNames[datenow.getMonth()];
                        l++;
                    });

                    // var canvcat=$("#canv_cat");
                    // var canvsubcat=$("#canv_subcat");
                    var canvline=$("#canv_line");
                    // var canv1='<canvas height="120" id="catdonutChart" width="120"></canvas><canvas style="display: none" height="120" id="catdonutamountChart" width="120"></canvas>';
                    // var canv2='<canvas height="120" id="subcatdonutChart" width="120"></canvas>\n' +
                    //     '<canvas style="display: none" height="120" id="catdonutamountChart" width="120"></canvas><canvas style="display: none" height="120" id="subcatdonutamountChart" width="120"></canvas>';
                    var canv3='<canvas id="lineChart1" height="200" width="450"></canvas>';
                    // canvcat.empty();
                    // canvsubcat.empty();
                    canvline.empty();
                    // canvcat.append(canv1);
                    // canvsubcat.append(canv2);
                    canvline.append(canv3);

                    var lctx = document.getElementById("lineChart1").getContext("2d");
                    window.myLine = new Chart(lctx,getconfigLine(linelabelsr,linedataarray));

                    /*var ctx = document.getElementById("catdonutChart").getContext("2d");
                    window.myDoughnut = new Chart(ctx, getconfig(dataarray,labelsr));
                    var subctx = document.getElementById("subcatdonutChart").getContext("2d");
                    window.myDoughnut = new Chart(subctx, getconfig(subdataarray,sublabelsr));*/
                    // var ctx = document.getElementById("barChart1").getContext("2d");
                    // window.myDoughnut = new Chart(ctx, getconfig(dataarray,labelsr));
                    // var subctx = document.getElementById("barChart2").getContext("2d");
                    // window.myDoughnut = new Chart(subctx, getconfig(subdataarray,sublabelsr));

                    /*var brandctx = document.getElementById("branddonutChart").getContext("2d");
                    window.myDoughnut = new Chart(brandctx, getconfig(branddataarray,brandlabelsr));*/




                    // var ctxamount = document.getElementById("catdonutamountChart").getContext("2d");
                    // window.myDoughnut = new Chart(ctxamount, getconfig(dataarrayamount,labelsr));
                    // var subctxamount = document.getElementById("subcatdonutamountChart").getContext("2d");
                    // window.myDoughnut = new Chart(subctxamount, getconfig(subdataarrayamount,sublabelsr));
                    /*var brandctxamount = document.getElementById("branddonutamountChart").getContext("2d");
                    window.myDoughnut = new Chart(brandctxamount, getconfig(branddataarrayamount,brandlabelsr));*/


                },
                error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                    /*open_error_modal("Error in syncing");*/
                }
            });
}







window.onload = function() {

    jquery("#from_date").datetimepicker({format: 'D-M-Y'});
    jquery("#to_date").datetimepicker({format: 'D-M-Y'});
    jquery("#from_date").val(formatDate(new Date('2020-03-12')));
    jquery("#to_date").val(formatDate(new Date('2020-03-12')));

    localStorage.setItem('from_date','2020-03-12');
    localStorage.setItem('to_date','2020-03-12');
    var categoryss=$("#selcat");

    var getgraphbut=$("#graphbut");

            /*get_category_wise_item_chart(categoryss.find("option:selected").val(),'default');
            categoryss.on('change', function() {
                get_category_wise_item_chart($(this).find("option:selected").val(),'');
            });*/
            get_date_wise_all_charts();
            getgraphbut.on('click', function() {
                get_date_wise_all_charts();
            });


            showquantitychart();
            var catitems = JSON.parse('[]');

            var lineitems = JSON.parse('[]');
            var linedataarray=[];
            var linelabelsr=[];
            var l=0;

            lineitems.forEach(function(lineitem){
                linedataarray[l] = parseFloat(lineitem['amount']);
                var datenow=new Date(lineitem['date']);
                var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                linelabelsr[l]= datenow.getDate() +" "+ monthNames[datenow.getMonth()];
                l++;
            });

            var lctx = document.getElementById("lineChart1").getContext("2d");
            window.myLine = new Chart(lctx,getconfigLine(linelabelsr,linedataarray));




        };

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
            var strTime = hours + ':' + minutes + ' ' + ampm;
            return strTime;
        }



    </script>

    <!-- Sales -->
    
<script>
    function ready_functions(restaurant){

        syncing(restaurant);  /* start with fetching data from server for items,categories,units,channels,last_information
        and (orders,waiters,tables) for restaurants only */


        arrange_held_bills();
        localStorage.setItem('WBARCODE','{"id":1,"WeightBarcodeEnabled":0,"StartBarcode":2,"EndBarcode":6,"StartWeight":9,"EndWeight":9,"StartDecimal":10,"EndDecimal":13}');

        /* customer search autocomplete start */

        var jquery=$.noConflict(true);
        jquery( "#sale_customer_select" ).autocomplete({
            source: "https://turabi.cisepos.com/public/customer_data",
            select: function(event, ui) {
                // prevent autocomplete from updating the textbox
                event.preventDefault();

                jquery(this).val(ui.item.label);
                jquery('#sale_customer').val(ui.item.value);
                jquery('#sale_customer').attr("data-CustomerAddress",ui.item.CustomerAddress);
                jquery('#sale_customer').attr("data-CustomerPhone",ui.item.CustomerPhone);
                jquery('#sale_customer').attr("data-Customer",ui.item.label);
                jquery('#sale_customer').attr("data-AccountCode",ui.item.AccountCode);
            },
            change: function(event,ui){
                event.preventDefault();
                $(this).val((ui.item ? ui.item.label : ""));
                if($(this).val()==='') {
                    var sa_cus=$('#sale_customer');
                    sa_cus.val("");
                    sa_cus.attr("data-CustomerAddress","");
                    sa_cus.attr("data-CustomerPhone","");
                    sa_cus.attr("data-Customer","");
                    sa_cus.attr("data-AccountCode","");
                }
            },
            minLength: 1,
            _resizeMenu: function() {
                this.menu.element.outerWidth(50);
            }

        });
        jquery( "#sale_salesman_select" ).autocomplete({
            source: "https://turabi.cisepos.com/public/salesman_list",
            select: function(event, ui) {
                // prevent autocomplete from updating the textbox
                event.preventDefault();

                jquery(this).val(ui.item.label);
                jquery('#sale_salesman').val(ui.item.value);
                jquery('#sale_salesman').attr("data-salesman",ui.item.label);
            },
            change: function(event,ui){
                event.preventDefault();
                $(this).val((ui.item ? ui.item.label : ""));
                if($(this).val()==='') {
                    var sa_cus=$('#sale_salesman');
                    sa_cus.val("");
                }
            },
            minLength: 1,
            _resizeMenu: function() {
                this.menu.element.outerWidth(50);
            }

        });





        /* for setting all modals focus*/

        $('.modal').on('shown.bs.modal', function(){
            $(".modal").find("input:first").focus();
        });

        /* for setting all modals focus*/


        /* onchange for cash payment and cash tendered option start*/
        $("#bill_dis").change(function(){
            // whatever you need to be done on change of the input field
            add_bill_discount();
            $(this).focus();
        });
        $("#ser_charges").keyup(function(){
            // whatever you need to be done on change of the input field
            calculate_total_amount();
            $(this).focus();
        });
        $("#del_charges").keyup(function(){
            // whatever you need to be done on change of the input field
            calculate_total_amount();
            $(this).focus();
        });


        $("#bill_dis_number").change(function(){
            // whatever you need to be done on change of the input field
            add_bill_discount_number();
            $(this).focus();
        });



        $(document).on({
            change: function() {
                calculate_balance_amount(1);
                /*$("input#sub_payment").focus();*/
            }
        }, 'input#cash_tendered');
        $(document).on({
            change: function() {
                calculate_balance_amount(2);
                /*$("input#sub_payment").focus();*/
            }
        }, 'input#cash_tendered_both');

        $(document).on({
            change: function() {
                calculate_balance_amount(2);
                /*$("input#sub_payment").focus();*/
            }
        }, 'input#card_amount');
        $(document).on({
            change: function() {
                calculate_balance_amount(2);
                /*$("input#sub_payment").focus();*/
            }
        }, 'input#party_amount');




        function calculate_balance_amount(n){
            if(n===2){
                var cash_tendered=$("input#cash_tendered_both");
            }else{
                cash_tendered=$("input#cash_tendered");
            }
            var cash_balance=$("input#cash_balance");
            var amountc=($("#total_paym").text()).replace('PKR',"");
            var newamount=amountc.replace("s ","");
            var amount=parseFloat(cash_tendered.val())-parseFloat(newamount);
            if(n===2){
             var card_amount=$("input#card_amount");
             if(card_amount.val()=="undefined" || card_amount.val()==""){
                 card_amount.val("");
             }
             var party_amount=$("input#party_amount");
             if(party_amount.val()=="undefined" || party_amount.val()==""){
                 party_amount.val("");
             }

             amount = parseFloat(cash_tendered.val()) + parseFloat(card_amount.val()) + parseFloat(party_amount.val()) - parseFloat(newamount);
         }
         cash_balance.val(amount.toFixed(2));
         changemyfocus(n);
     }

     function changemyfocus(n){
        if(n===2){
            var cash_tendered=$("input#cash_tendered_both");
        }else{
            cash_tendered=$("input#cash_tendered");
        }
        cash_tendered.blur();
        $("div#sub_payment.btn.btn-success").focus();
    }

    /* onchange for cash payment and cash tendered option end*/


    ssq = $.noConflict(true);
    if($("#unp").val()==="1") {

        ssq.keyboard.keyaction.enter = function (kb) {
                // same as $.keyboard.keyaction.accept();
                kb.close(true);
                return false;     // return false prevents further processing
            };
            allnumpad();
            ssq('#bill_dis').keyboard({
                visible: function (e, keyboard, el) {
                    keyboard.$preview[0].select();
                },
                layout: 'custom',
                customLayout: {'normal': ['7 8 9', '4 5 6', '1 2 3', '0 . {b}', '{clear} {a} {c}']},
                restrictInput: true, // Prevent keys not in the displayed keyboard from being typed in
                preventPaste: true,  // prevent ctrl-v and right click
                autoAccept: true,
                caretToEnd: true
            }).addTyping();
            ssq('#bill_dis_number').keyboard({
                visible: function (e, keyboard, el) {
                    keyboard.$preview[0].select();
                },
                layout: 'custom',
                customLayout: {'normal': ['7 8 9', '4 5 6', '1 2 3', '0 . {b}', '{clear} {a} {c}']},
                restrictInput: true, // Prevent keys not in the displayed keyboard from being typed in
                preventPaste: true,  // prevent ctrl-v and right click
                autoAccept: true,
                caretToEnd: true
            }).addTyping();

        }


    }
    function allnumpad(){
        ssq('.quan_input').each(function(){
            ssq(this).keyboard({
                visible: function(e, keyboard, el) {
                    keyboard.$preview[0].select();
                },
                layout : 'custom',
                customLayout: { 'normal': ['7 8 9', '4 5 6', '1 2 3', '0 . {b}','{clear} {a} {c}'] },
                restrictInput : true, // Prevent keys not in the displayed keyboard from being typed in
                preventPaste : true,  // prevent ctrl-v and right click
                autoAccept : true,
                caretToEnd : true
            }).addTyping();
        });

    }
    /* offline check start*/
    Offline.on('up', function(){

     if(localStorage.getItem('businesstyperestaurant')==="true" || $("#localstorageuse").val()==="0"){
         $(".dis_on_off").each(function(){
             $(this).show();
         });
         show_sync_loader();
         hide_sync_loader();
     }else{
         arrange_sales_offline(localStorage.getItem('salesoffline'));
         show_sync_loader();
         hide_sync_loader();
     }

 });
    Offline.on('down', function(){

        if(localStorage.getItem('businesstyperestaurant')==="true" || $("#localstorageuse").val()==="0"){
            $(".dis_on_off").each(function(){
                $(this).hide();
            });
            show_error_message("some error");
        }

    });

    Offline.options = {
        // to check the connection status immediatly on page load.
        checkOnLoad: false,

        // to monitor AJAX requests to check connection.
        interceptRequests: true,

        // to automatically retest periodically when the connection is down (set to false to disable).
        reconnect: {
            // delay time in seconds to wait before rechecking.
            initialDelay: 3,

            // wait time in seconds between retries.
            delay: 10
        },

        // to store and attempt to remake requests which failed while the connection was down.
        requests: true
    };

    /* offline check end*/

    function get_last_info(){
        var ajax_url = "https://turabi.cisepos.com/public/last_info";
        $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: ajax_url,
            processData: false,
            success: function (response) { // What to do if we succeed
                on_success_last_info(response)
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                /* open_error_modal('some error occured');*/
                if(jqXHR.status===500){
                    area_list();
                }

            }
        });
    }





    function after_sale_sync(restaurant){
        show_sync_loader();  //show loader
        if($("#localstorageuse").val()==="0") {
            get_items();
        }
        get_last_info(); //important info from server
        if(restaurant===true) {
            order_waiter_table_list(function(){
                $("#recallloader").css('display', 'block');
                $("#recall_order").css('display', 'none');
                get_order_waiter_table_details("refresh");
                localStorage.setItem('recallmode', "OFF");
            }); // waiters ,tables ,orders list
        }else{
            unit_list(); //all units list
        }
        hide_sync_loader(); //hide loader
    }


    function syncing(restaurant){


        show_sync_loader();  //show loader


        /* fetch and make item and category list start */


        get_items();
        get_baranch_today_enabled_promotions(); //get_promotions_enabled
        categories_list(function(){
            get_categories_list();
        });

        /* fetch and make item and category list end */



        get_last_info(); //important info from server


        if(restaurant===true) {
            order_waiter_table_list(function(){
                $("#recallloader").css('display', 'block');
                $("#recall_order").css('display', 'none');
                get_order_waiter_table_details("refresh");
                localStorage.setItem('recallmode', "OFF");
            }); // waiters ,tables ,orders list
        }else{
            unit_list(); //all units list
            Ecom_order_list(function(){}); //all ecommerce orders condition inside function for ecom enable

        }
        area_list(); //all areas list


        /*check_and_sync(restaurant);*/   //sync sales if any in local storage for retail only
        shortcut_keys(restaurant);   //initialize binding for keys
        show_list_draft(restaurant); // reload items that were added to sales before page reload



        hide_sync_loader(); //hide loader

    }

    /*barcode scan start*/
    //https://github.com/kabachello/jQuery-Scanner-Detection


    $("#serch_item").keyup(function(e){
        e.preventDefault();
    });


    var selector="#serch_item";

    $(selector).scannerDetection({

        timeBeforeScanTest: 200, // wait for the next character for upto 200ms
        avgTimeByChar: 40, // it's not a barcode if a character takes longer than 100ms
        preventDefault: true,
        minLength:4,
        endChar: [13],
        startChar: [120],
        onComplete: function(barcode, qty){
            validScan = true;

            if($("#localstorageuse").val()==="1"){
                var res=JSON.parse(localStorage.getItem('items'));
                res.forEach(function(resp){
                    if(isequalvaluecheck(resp['BarCode'],string)){
                        add_this_to_sale(resp);
                    }
                });
                $("input#serch_item").focus();
            }else{
                $.each(xhrPool, function(idx, jqXHR) {
                    jqXHR.abort();
                });
                var ajax_url = 'sale/itemterm/'+string;
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
                        var res=JSON.parse(localStorage.getItem('items'));
                        res.forEach(function(resp){
                            if(isequalvaluecheck(resp['BarCode'],string)){
                                add_this_to_sale(resp);
                            }
                        });
                        $("input#serch_item").focus();
                    },
                    error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                        /*open_error_modal("Error in syncing");*/
                    }
                });
            }

        },
        onError: function(string, qty) {

            var wbcode=JSON.parse(localStorage.getItem('WBARCODE'));

            if(wbcode['WeightBarcodeEnabled']===1){
              var weight=string.substring(wbcode['StartWeight'], parseFloat(wbcode['EndWeight'])+1);
              var decimal=string.substring(wbcode['StartDecimal'], parseFloat(wbcode['EndDecimal'])+1);
              weight=parseFloat(weight+"."+decimal);
              string=string.substring(wbcode['StartBarcode'], parseFloat(wbcode['EndBarcode'])+1);
              console.log(string);
              localStorage.setItem("weight",weight);
          }


          if($("#localstorageuse").val()==="1"){
            var res=JSON.parse(localStorage.getItem('items'));
            res.forEach(function(resp){
                if(isequalvaluecheck(resp['BarCode'],string)){
                    add_this_to_sale(resp);
                }
            });
            $("input#serch_item").focus();
        }else{
            $.each(xhrPool, function(idx, jqXHR) {
                jqXHR.abort();
            });
            var ajax_url = 'sale/itemterm/'+string;
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
                        var res=JSON.parse(localStorage.getItem('items'));
                        res.forEach(function(resp){
                            if(isequalvaluecheck(resp['BarCode'],string)){
                                add_this_to_sale(resp);
                            }
                        });
                        $("input#serch_item").focus();
                    },
                    error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                        /*open_error_modal("Error in syncing");*/
                    }
                });
        }

    }


});

/*barcode scan end*/



function area_list(){
    var ajax_url = "https://turabi.cisepos.com/public/area_list";
    $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: ajax_url,
            processData: false,
            success: function (response) { // What to do if we succeed
                localStorage.setItem('Areas',response);
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                /*open_error_modal('some error occured');*/
                if(jqXHR.status===500) {
                    area_list();
                }
            }
        });
}
    //Order Functions


    function change_pmode(thiselem){
        var cash_details=$("#cash_details");
        var card_details=$("#card_details");
        var both_details=$("#cash_details_both");
        var party_details=$("#party");
        var amountc=($("#total_paym").text()).replace('PKR',"");
        var newamount=amountc.replace("s ","");
        if($(thiselem).val()==="cash"){
            cash_details.css("display","block");
            card_details.css("display","none");
            both_details.css("display","none");
            party_details.css("display","none");
            $("input#card_number").val("");
            $("input#cash_balance").val(0);
            $("input#cash_tendered").val(newamount);
            $("input#card_number_both").val("");
            $("input#cash_tendered_both").val("");
        }else if($(thiselem).val()==="card"){
            cash_details.css("display","none");
            card_details.css("display","block");
            both_details.css("display","none");
            party_details.css("display","none");
            $("input#cash_balance").val(0);
            $("input#cash_tendered").val("");
            $("input#card_number_both").val("");
            $("input#cash_tendered_both").val("");
        }else if($(thiselem).val()==="party"){
            cash_details.css("display","none");
            card_details.css("display","none");
            both_details.css("display","none");
            party_details.css("display","block");
            $("input#cash_balance").val(0);
            $("input#cash_tendered").val("");
            $("input#card_number_both").val("");
            $("input#cash_tendered_both").val("");
        }else{
            cash_details.css("display","none");
            card_details.css("display","none");
            party_details.css("display","none");
            both_details.css("display","block");
            $("input#cash_balance").val(0);
            $("input#cash_tendered").val("");
            $("input#cash_tendered_both").val(newamount);
            $("input#card_number").val("");
            $("input#party_amount").val(0);
            $("input#card_amount").val(0);
        }
    }

    function disselect_all_pm(classname){
        var elements = document.getElementsByClassName(classname);
        for(var i = 0; i < elements.length; i++){
            $(elements[i]).removeClass('selectthispm'); // Hide all elements.
        }
    }



    function select_payment_mode(sm){
        var thiselem=$("#pmode");
        if($(sm).attr("data-id")==="1"){
            thiselem.val("cash");
            change_pmode(thiselem);
            disselect_all_pm("pm-button");
            $(sm).addClass('selectthispm');
        }else if($(sm).attr("data-id")==="2"){

            thiselem.val("card");
            change_pmode(thiselem);
            disselect_all_pm("pm-button");
            $(sm).addClass('selectthispm');
            var ajaxcard_url='https://turabi.cisepos.com/public/bank_acc_alldata';
            $.ajax({
                method : 'GET', // Type of response and matches what we said in the route
                url: ajaxcard_url, // This is the url we gave in the route
                processData: false,
                headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
                success: function(response){ // What to do if we succeed
                    /*var select_box=$("#sale_customer");*/


                    var res=JSON.parse(response);
                    var ss = "<option value='0'></option>";
                    var sa_cus=$("#card_num");
                    res.forEach(function (r) {


                        ss = ss + '<option  value="' + r.AccountCode + '">' + r.Account + ' (' + r.AccountCode + ')</option>';

                    });




                    var party='<div class="col-sm-6"><div class="form-group">' +
                    '<label>Select Bank</label>' +
                    '<select  style="font-family: FontAwesome, sans-serif;" class="form-control select_bank " id="card_type" ><option value="" disabled="disabled">Choose Bank</option>'+ss+'</select>' +
                    '</div></div>' +
                    '<div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label><input style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number">' +
                    '</div></div></div></div>';

                    var pd=$("#card_div");
                    pd.empty();
                    pd.append(party);
                    $('#card_type').select2();
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    /*open_error_modal('some error occured');*/
                }
            });

        }else if($(sm).attr("data-id")==="3"){
            thiselem.val("both");
            change_pmode(thiselem);
            disselect_all_pm("pm-button");
            $(sm).addClass('selectthispm');

            var ajax_url='https://turabi.cisepos.com/public/cred_cust_alldata';
            $.ajax({
                method : 'GET', // Type of response and matches what we said in the route
                url: ajax_url, // This is the url we gave in the route
                processData: false,
                headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
                success: function(response){ // What to do if we succeed
                    /*var select_box=$("#sale_customer");*/


                    var res=JSON.parse(response);
                    var ss = "<option value='0'></option>";
                    var sa_cus=$("#sale_customer");
                    res.forEach(function (r) {
                        if(sa_cus.attr("data-AccountCode")!=0 && sa_cus.attr("data-AccountCode")==r.AccountCode) {
                            ss = '<option selected balance="' + r.customerbalance + '"  value="' + r.AccountCode + '">' + r.Account + ' (' + r.AccountCode + ')</option>';
                        }else{
                            ss = ss + '<option balance="' + r.customerbalance + '"  value="' + r.AccountCode + '">' + r.Account + ' (' + r.AccountCode + ')</option>';
                        }
                    });




                    var party='<div class="col-sm-8"><div class="form-group">' +
                    '<label>Select Party</label>' +
                    '<select style="font-family: FontAwesome, sans-serif;" class="form-control party_code_both " id="party_code_both" ><option value="" disabled="disabled">Choose Party</option>'+ss+'</select>' +
                    '</div></div>';
                    party +='<div class="col-sm-4"><div class="form-group">' +
                    '<label>Party Balance </label>' +
                    '<div class="partyBalance" id="partyBalance"> 0 </div>' +
                    '</div></div>';
                    
                    var pd=$("#party_div_both");
                    pd.empty();
                    pd.append(party);
                    $('#party_code_both').select2();
                    $("div#partyBalance").text($("select#party_code_both").find("option:selected").attr('balance'));
                    $("select#party_code_both").change(function (event) {

                        var value = $(this).val();
                        $(this).find("option").each(function (){
                            if (value == $(this).val() ) {
                                var bal = $(this).attr('balance');
                                $("div#partyBalance").text(bal);
                                    // console.log($(this).attr('balance'));
                                }

                            });
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    /*open_error_modal('some error occured');*/
                }
            });

            var ajaxcardboth_url='https://turabi.cisepos.com/public/bank_acc_alldata';
            $.ajax({
                method : 'GET', // Type of response and matches what we said in the route
                url: ajaxcardboth_url, // This is the url we gave in the route
                processData: false,
                headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
                success: function(response){ // What to do if we succeed
                    /*var select_box=$("#sale_customer");*/


                    var res=JSON.parse(response);
                    var ss = "<option value='0'></option>";
                    var sa_cus=$("#card_num");
                    res.forEach(function (r) {

                        ss = ss + '<option  value="' + r.AccountCode + '">' + r.Account + ' (' + r.AccountCode + ')</option>';

                    });




                    var party='<div class="col-sm-6"><div class="form-group">' +
                    '<label>Select Bank</label>' +
                    '<select style="font-family: FontAwesome, sans-serif;" class="form-control select_bank " id="card_type_both" ><option value="" disabled="disabled">Choose Bank</option>'+ss+'</select>' +
                    '</div></div>' +
                    '<div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label><input style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number_both">' +
                    '</div></div>' +
                    '<div class="col-sm-6"><div class="form-group"><label>Card Amount</label>' +
                    '<p style="color:red;display:none">A valid value is required</p>' +
                    '<input style="font-family: FontAwesome, sans-serif;" class="form-control" value=0 id="card_amount">' +
                    '</div></div>'+
                    '</div></div>';

                    var pd=$("#card_div_both");
                    pd.empty();
                    pd.append(party);
                    $('#card_type_both').select2();
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    /*open_error_modal('some error occured');*/
                }
            });

        }
        else if($(sm).attr("data-id")==="4"){
            thiselem.val("party");
            change_pmode(thiselem);
            disselect_all_pm("pm-button");
            $(sm).addClass('selectthispm');

            ajax_url='https://turabi.cisepos.com/public/cred_cust_alldata';
            $.ajax({
                method : 'GET', // Type of response and matches what we said in the route
                url: ajax_url, // This is the url we gave in the route
                processData: false,
                headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
                success: function(response){ // What to do if we succeed
                    /*var select_box=$("#sale_customer");*/


                    var res=JSON.parse(response);

                    var ss="";
                    var sa_cus=$("#sale_customer");
                    res.forEach(function (r) {
                        if(sa_cus.attr("data-AccountCode")!=0 && sa_cus.attr("data-AccountCode")==r.AccountCode) {
                            ss = ss + '<option selected balance="' + r.customerbalance + '" value="' + r.AccountCode + '">' + r.Account + ' (' + r.AccountCode + ')</option>';
                        }else{
                            ss = ss + '<option balance="' + r.customerbalance + '" value="' + r.AccountCode + '">' + r.Account + ' (' + r.AccountCode + ')</option>';
                        }
                    });

                    var party='<div class="col-sm-8"><div class="form-group">' +
                    '<label>Select Party</label>' +
                    '<select style="font-family: FontAwesome, sans-serif;" class="form-control party_code " id="party_code" ><option value="" disabled="disabled">Choose Party</option>'+ss+'</select>' +
                    '</div></div>';

                    party +='<div class="col-sm-4"><div class="form-group">' +
                    '<label>Party Balance </label>' +
                    '<div class="partyBalance" id="partyBalance"> 0 </div>' +
                    '</div></div>';

                    var pd=$("#party_div");
                    pd.empty();
                    pd.append(party);
                    $('#party_code').select2();
                    $("div#partyBalance").text($("select#party_code").find("option:selected").attr('balance'));
                    $("select#party_code").change(function (event) {

                        var value = $(this).val();
                        $(this).find("option").each(function (){
                            if (value == $(this).val() ) {
                             var bal = $(this).attr('balance');
                             $("div#partyBalance").text(bal);
           // console.log($(this).attr('balance'));
       }

   });

                    });

                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    /*open_error_modal('some error occured');*/
                }
            });


        }

    }

     //credCustomer
     function credCustomer(){
   // var jquery=$.noConflict(true);
   // var $=jquery.noConflict(true);
   $("#party_code" ).autocomplete({
    source: "https://turabi.cisepos.com/public/cred_cust_alldata",
    select: function(event, ui) {
                // prevent autocomplete from updating the textbox
                event.preventDefault();

                $(this).val(ui.item.label);
                $('#sale_credcustomer').val(ui.item.value);
                $('#sale_credcustomer').attr("data-credCustomer",ui.item.label);
            },
            change: function(event,ui){
                event.preventDefault();

                $(this).val((ui.item ? ui.item.label : ""));
                if($(this).val()==='') {
                    var sa_cus=$('#sale_credcustomer');
                    sa_cus.val("");
                    sa_cus.attr("data-credCustomer","");
                }
            },
            minLength: 1,
            _resizeMenu: function() {
                this.menu.element.outerWidth(50);
            }

        });  

       // jquery=$.noConflict(true);
   }

   function ask_payment_mode(restaurant,e,error){
    if(!isequalvaluecheck($("#card_num").val(),"")){
        e=1;

    }
    if(e===0){
        var displaycard="none";
        var displaycash="block";
        var displayboth="none";
        var displayparty="none";

    }else if(e===1){
        displaycard="block";
        displaycash="none";
        displayboth="none";
        displayparty="none";

    }else if(e===4){
        displaycard="none";
        displaycash="none";
        displayboth="none";
        displayparty="block";

    }else{
        displaycard="none";
        displaycash="none";
        displayboth="block";
        displayparty="none";

    }
    var sm=4;
    var party_display='none';
    var fs='2rem';
    var fssp='1rem';

    var error_display_cash="none";
    var error_display_both="none";
    var acc_mod=JSON.parse(localStorage.getItem('last_info')).account_module;
    var sbot=JSON.parse(localStorage.getItem('last_info')).sbot;
    var delop=JSON.parse(localStorage.getItem('last_info')).delop;
    if(acc_mod==="1"){
       sm=3;
       party_display='block';
       fs='2rem';
       fssp='0.8rem';
   }
   if(error===1){
    error_display_cash="block";
}
if(error===2){
    error_display_both="block";
}




var tp=$("#total_paym").text();
var amountc=(tp).replace('PKR',"");
var newamount=parseFloat(amountc.replace("s ",""));
var total_payment='<div class="container">' +
'<div class="row" style="background: #5bc0de;padding: 10px;text-align: center;color: white;font-size: 1.5rem;">' +
'<div class="col-sm-6">' +
'    Total Payment     '+
'</div>' +
'<div class="col-sm-6">'+tp+'</div>' +
'</div>';
var payment_selector='<div class="row" id="ordertype">' +
'<div class="col-sm-'+sm+'">' +
'<a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="1" class="pm-type-button pm-button button-1">' +
'<span style="font-size:1rem;"> Cash <br> <i style="font-size:'+fs+';" class="fa fa-money"></i></span>' +
'</a>' +
'</div>' +
'<div class="col-sm-'+sm+'">' +
'<a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="2" class="pm-type-button pm-button button-2">' +
'<span style="font-size:1rem;"> Card <br> <i style="font-size:'+fs+';" class="fa fa-credit-card-alt"></i></span>' +
'</a>' +
'</div>' +
'<div class="col-sm-'+sm+'" style="display:'+party_display+'">' +
'<a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="4" class="pm-type-button pm-button button-4">' +
'<span style="font-size:1rem;"> Party <br> <i style="font-size:'+fs+';" class="fa fa-user"></i></span>' +
'</a>' +
'</div>' +
'<div class="col-sm-'+sm+'">' +
'<a onclick="select_payment_mode(this)" style="color:white;min-width:100%;" data-id="3" class="pm-type-button pm-button button-3">' +
'<span style="font-size:1rem;"> Split <br><br><i style="font-size:'+fssp+';" class="fa fa-money"></i> | <i style="font-size:'+fssp+';" class="fa fa-credit-card-alt"></i> | <i style="font-size:'+fssp+';" class="fa fa-user"></i></span>' +
'</a>' +
'</div>' +
'</div>';
if(!isequalvaluecheck($("#card_num").val(),"")){
    payment_selector='<div class="row" id="ordertype">' +
    '<div class="col-sm-'+sm+'">' +
    '<a onclick="#" style="color:white;min-width:100%;" data-id="1" class="pm-type-button pm-button button-1">' +
    '<span style="font-size:1rem;"> Cash <br> <i style="font-size:'+fs+';" class="fa fa-money"></i></span>' +
    '</a>' +
    '</div>' +
    '<div class="col-sm-'+sm+'">' +
    '<a onclick="#" style="color:white;min-width:100%;" data-id="2" class="pm-type-button pm-button button-2">' +
    '<span style="font-size:1rem;"> Card <br> <i style="font-size:'+fs+';" class="fa fa-credit-card-alt"></i></span>' +
    '</a>' +
    '</div>' +
    '<div class="col-sm-'+sm+'" style="display:'+party_display+'">' +
    '<a onclick="#" style="color:white;min-width:100%;" data-id="4" class="pm-type-button pm-button button-4">' +
    '<span style="font-size:1rem;"> Party <br> <i style="font-size:'+fs+';" class="fa fa-user"></i></span>' +
    '</a>' +
    '</div>' +
    '<div class="col-sm-'+sm+'">' +
    '<a onclick="#" style="color:white;min-width:100%;" data-id="3" class="pm-type-button pm-button button-3">' +
    '<span style="font-size:1rem;"> Split <br><br><i style="font-size:'+fssp+';" class="fa fa-money"></i> | <i style="font-size:'+fssp+';" class="fa fa-credit-card-alt"></i> | <i style="font-size:'+fssp+';" class="fa fa-user"></i></span>' +
    '</a>' +
    '</div>' +
    '</div>';
}


var payment_mode="<div class='row'><div class='col-sm-12'><div class='form-group'><select style='display:none;font-family: FontAwesome, sans-serif;' class='form-control col-sm-6' id='pmode'>" +
"<option value='cash'>&#xf0d6; Cash</option>" +
"<option value='card'>&#xf283; Card</option>" +
"<option value='party'>&#xf283; Party</option>" +
"<option value='both'>Both &#xf0d6; Cash and &#xf283; Card</option>" +
"</select></div></div></div>";

        //if account not enabled and bank accounts not added and parameter 0

        if(isequalvaluecheck(sbot,1)){
            var card_details='<div id="card_details" style="display:'+displaycard+'"> \n'+
            '<div class="row" id="card_div"><div class="col-sm-6"><div class="form-group"><label>Card type</label><select style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_type" >' +
            '</select></div></div>' +
            '<div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label><input style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number">' +
            '</div></div></div></div>';
            if(!isequalvaluecheck($("#card_num").val(),"")){
                card_details='<div id="card_details" style="display:'+displaycard+'"> \n'+
                '<div class="row" id="card_div"><div class="col-sm-6"><div class="form-group"><label>Card type</label><select style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_type" >' +
                '</select></div></div>' +
                '<div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label><input value='+$("#card_num").val()+' style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number">' +
                '</div></div></div></div>';
            }

        }else{
            card_details='<div id="card_details" style="display:'+displaycard+'"> \n'+
            '<div class="row" id="card_div"><div class="col-sm-6"><div class="form-group"><label>Card type</label><select style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_type" >' +
            '<option value="visa">visa</option>' +
            '<option value="master">master</option>' +
            '</select></div></div>' +
            '<div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label><input style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number">' +
            '</div></div></div></div>';
        }


        var cash_tendered='<div id="cash_details" style="display:'+displaycash+'">' +
        '<div class="row">' +
        '<div class="col-sm-6">' +
        '<div class="form-group">' +
        '<label>Cash Tendered</label>' +
        '<p style="color:red;display:'+error_display_cash+'">A valid value is required</p>' +
        '<input id="cash_tendered" value="'+newamount+'" name="cash_tendered" placeholder="Cash Tendered" class="form-control">' +
        '<br><button class="col-sm-6 btn btn-default">ENTER</button></div></div></div></div>';


        var both_cash_card='<div id="cash_details_both" style="display:'+displayboth+'">' +
        '<div class="row"><strong>Cash</strong></div>' +
        '<div class="row">' +
        '<div class="col-sm-6"><div class="form-group">' +
        '<label>Cash Tendered</label>' +
        '<p style="color:red;display:'+error_display_both+'">A valid value is required</p>' +
        '<input id="cash_tendered_both" value="'+newamount+'" name="cash_tendered_both" placeholder="Cash Tendered" class="form-control">' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="row"><strong>Card</strong></div>' +
        '<div class="row" id="card_div_both">' +
        '<div class="col-sm-6"><div class="form-group">' +
        '<label>Card type</label>' +
        '<select style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_type_both" >' +
        '<option value="visa">visa</option> \n' +
        '<option value="master">master</option> \n' +
        '</select></div></div>' +
        '<div class="col-sm-6"><div class="form-group"><label>Card Number(4 digits)</label>' +
        '<input style="font-family: FontAwesome, sans-serif;" class="form-control" id="card_number_both">' +
        '</div></div>' +

        '<div class="col-sm-6"><div class="form-group"><label>Card Amount</label>' +
        '<p style="color:red;display:'+error_display_both+'">A valid value is required</p>' +
        '<input style="font-family: FontAwesome, sans-serif;" value=0 class="form-control" id="card_amount">' +
        '</div></div>' +
        '</div>' +
        '<div  style="display:'+party_display+'">' +
        '<div class="row"><strong>Party</strong></div>' +
        '<div class="row" id="party_div_both">' +
        '</div>' +
        '<div class="row">'+
        '<div class="col-sm-6"><div class="form-group"><label>Party Amount</label>' +
        '<p style="color:red;display:'+error_display_both+'">A valid value is required</p>' +
        '<input style="font-family: FontAwesome, sans-serif;" class="form-control" id="party_amount">' +
        '</div></div></div></div>' +
        '<div class="row"><div class="col-sm-6"><button class="btn btn-default">ENTER</button></div></div></div>';

        var party='<div id="party" style="display:'+displayparty+'">' +
        '<div class="row"><strong>Party</strong></div>' +
        '<div class="row" id="party_div">' +
        '</div>' +
        '<div class="row"><div class="col-sm-6"><button class="btn btn-default">ENTER</button></div></div></div>';
        var cash_balance='<div class="row"><div class="col-sm-12 text-center"><div class="form-group"><label><strong>Return Cash </strong>(PKRs)</label><input style="font-size:3em;text-align:center" readonly value="0" id="cash_balance" name="cash_balance" class="form-control"></div></div></div>';
        var Remarks='<div class="row"><div class="col-sm-12 text-center"><div class="form-group"><label><strong>Remarks </strong></label><textarea style="text-align:center;min-height:80px" id="bill_remarks" name="bill_remarks" class="form-control"></textarea></div></div></div></div></div>';

        if(delop==1){
            var DeliveryDate='<div class= "row" >\n' +
            '              <div class="col-md-12">\n' +
            '                <div class="form-group">\n' +
            '                  <label for=""><strong>Delivery Date </strong></label>\n' +
            '                  <div class="date-input" style="overflow:auto">\n' +
            '                    <input id="delivery_date" name="delivery_date" class="single-daterange form-control" placeholder="Delivery Date" type="text" value="12-03-2020">\n' +
            '                  </div>\n' +
            '                </div>\n' +
            '              </div></div>';
        }else{
            DeliveryDate='';
        }


        var pay_button="<div class='btn btn-success' data-dismiss='modal' onclick='submit_payment(true,"+restaurant+",true)' id='sub_payment'><i class='fa fa-money'></i> Pay (TAB + F7)</div>";
        var direct_pay_button="<div class='btn btn-success' data-dismiss='modal' onclick='submit_payment(false,"+restaurant+",true)' id='sub_direct_payment'><i class='fa fa-money'></i> Pay & Print (TAB + F9)</div>";
        var ask_modal=$("#askmodal");
        var modal_content=ask_modal.children(".modal-dialog").children(".modal-content");
        var modal_title=modal_content.children(".modal-header").children(".modal-title");
        var modal_body=modal_content.children(".modal-body");
        var modal_footer=modal_content.children(".modal-footer");
        modal_title.empty();
        modal_body.empty();
        modal_footer.empty();
        modal_title.append("Select Payment Mode");
        modal_body.append(total_payment+payment_selector+payment_mode+party+card_details+cash_tendered+both_cash_card+cash_balance+DeliveryDate+Remarks);
        if(e===0){
            disselect_all_pm("pm-button");
            $(".pm-button.button-1").addClass('selectthispm');
            $("#pmode").val("cash");
        }else if(e===1){
            disselect_all_pm("pm-button");
            $(".pm-button.button-2").addClass('selectthispm');
            $("#pmode").val("card");
            select_payment_mode($(".button-2"));
        }else if(e===4){
            disselect_all_pm("pm-button");
            $(".pm-button.button-4").addClass('selectthispm');
            $("#pmode").val("party");
        }
        else{
            disselect_all_pm("pm-button");
            $(".pm-button.button-3").addClass('selectthispm');
            $("#pmode").val("both");
        }

        modal_footer.append(pay_button+direct_pay_button);
        $('#cash_tendered').focus().val(newamount);
        ask_modal.modal('show');
        $('input.single-daterange').each(function(){
          $(this).daterangepicker({
              "singleDatePicker": true,
              "locale": {
                  format: 'DD-MM-YYYY'
              }
          });
      });
        $('.daterangepicker.dropdown-menu').css("top","35% !important");

    }
    function add_disc_to_all_b_items(disc_arr,callback){
        var i=0;
        for(var d in disc_arr){
            var dataarr=disc_arr[d];
            var k=0;
            $("tbody tr.item_list").each(function() {
                if(dataarr["BarCode"]==$(this).find('td.barcode_item').attr('data-itembarcode')){
                    var item_rem = $(this).find("td.name_item > .rem");
                    var app_disc_item_prom = check_promotion_applicable(dataarr["BarCode"], dataarr['SRWT'], dataarr['category'], dataarr['quantity'], 'item');

                    if (app_disc_item_prom['status'] == 1) {


                        var new_remarks = app_disc_item_prom['prom_name'] + " discount applied ";
                        $(this).find('td.rate_item').attr('data-itemremarks', new_remarks);
                        item_rem.empty();
                        if (new_remarks !== "") {
                            item_rem.append("* <small>" + new_remarks + "</small>");
                        }
                        var disc = parseFloat($(this).find('td.q_item').attr('data-itemquantity')) * parseFloat((app_disc_item_prom['item'] / dataarr['quantity']));

                        disc=disc.toFixed(2);
                        $(this).find('td.rate_item').attr('data-disc', (disc / $(this).find('td.q_item').attr('data-itemquantity')));
                        $(this).find('td.q_tot_price').attr('data-itemDiscountAmount', (disc / $(this).find('td.q_item').attr('data-itemquantity')));
                        $(this).find('td.q_tot_price').attr('data-itemPromoCode', app_disc_item_prom['prom_code']);


                    } else {
                        $(this).find('td.rate_item').attr('data-itemremarks', "");
                        item_rem.empty();
                        $(this).find('td.rate_item').attr('data-disc', 0);
                        $(this).find('td.q_tot_price').attr('data-itemDiscountAmount', 0);
                        $(this).find('td.q_tot_price').attr('data-itemPromoCode', '-');

                    }
                    var new_tot_price = parseFloat($(this).find('td.q_item').attr('data-itemquantity')) * parseFloat($(this).find('td.rate_item').attr('data-itemrate'));
                    var total_discount = parseFloat($(this).find('td.rate_item').attr('data-disc')) * parseFloat($(this).find('td.q_item').attr('data-itemquantity'));
                    var price_af_disc = new_tot_price - (parseFloat($(this).find('td.q_tot_price').attr('data-itemDiscountAmount')) * parseFloat($(this).find('td.q_item').attr('data-itemquantity')));
                    $(this).find('td.q_tot_price').html(price_af_disc.toFixed(2));
                    if (total_discount > 0) {
                        $(this).find('td.q_tot_price').append("<div><small>" + new_tot_price.toFixed(2) + "-" + total_discount + "<small><div>");
                    }


                }
                k++;
            });


            i++;



        }
        callback();
    }
    function item_disc_check_add(callback){

        var disc_arr=[];
        var i=0;
        $("tbody tr.item_list").each(function() {
            var barcode_item=$(this).find("td.barcode_item");
            var dis_amount=$(this).find('td.q_tot_price').attr('data-itemDiscountAmount');
            if(dis_amount=="" || dis_amount==0 || $(this).find('td.q_tot_price').attr('data-itemPromoCode')!="-") {
                if (disc_arr[barcode_item.attr('data-itembarcode')] === undefined) {
                    disc_arr[barcode_item.attr('data-itembarcode')] = [];
                    disc_arr[barcode_item.attr('data-itembarcode')]['category'] = barcode_item.attr('data-categorycode');
                    disc_arr[barcode_item.attr('data-itembarcode')]['BarCode'] = barcode_item.attr('data-itembarcode');
                    disc_arr[barcode_item.attr('data-itembarcode')]['SRWT'] = parseFloat($(this).find('td.q_item').attr('data-itemquantity')) * parseFloat($(this).find('td.rate_item').attr('data-itemRate'));
                    disc_arr[barcode_item.attr('data-itembarcode')]['quantity'] = parseFloat($(this).find('td.q_item').attr('data-itemquantity'));
                } else {
                    disc_arr[barcode_item.attr('data-itembarcode')]['quantity'] += parseFloat($(this).find('td.q_item').attr('data-itemquantity'));
                    disc_arr[barcode_item.attr('data-itembarcode')]['SRWT'] += parseFloat($(this).find('td.rate_item').attr('data-itemRate'));
                }
            }
            i++;
        });



        add_disc_to_all_b_items(disc_arr,function(){
            callback();
        });




        /*console.log(disc_arr);

        disc_arr.forEach(function(dataarr){

            $("tbody tr.item_list").each(function() {

            });

        });*/


    }
    function calculate_total_amount(){

        item_disc_check_add(function(){
            tot_amount=0;
            tot_tax=0;
            var Rate=0;
            var Tax=0;
            countItems=0;
            item_tot_disc=0;
            tot_disc=0;
            $("tbody tr.item_list").each(function() {
                Rate1=$(this).find('td.rate_item').attr('data-itemRate');
                var Quantity=$(this).find('td.q_item').attr('data-itemquantity');
                Rate=parseFloat(Rate1)*Quantity;
                var barcode_item=$(this).find("td.barcode_item");


                var tot_this_item_discount=$(this).find('td.q_tot_price').attr('data-itemDiscountAmount');
                if($("#bill_dis").val()==""){
                    $("#bill_dis").val(0);
                }
                var tot_this_bill_discount=parseFloat($("#bill_dis").val());
                tot_this_bill_discount = (parseFloat(tot_this_bill_discount/100)*(Rate1-tot_this_item_discount));
                tot_this_item_discount = parseFloat(tot_this_item_discount)*Quantity;
                tot_this_bill_discount = parseFloat(tot_this_bill_discount)*Quantity;


                var Tax_calc_amount=Rate-tot_this_item_discount-tot_this_bill_discount;
                var TaxPercentage=parseFloat($(this).find('td.rate_item').attr('data-itemtaxpercentage'));
                var fin_tax=(Tax_calc_amount)*(TaxPercentage/100);
                $(this).find('td.rate_item').attr('data-itemtaxamount',fin_tax);
                $(this).find('td.q_tot_price').attr('data-itemtaxamount',fin_tax);

                Tax1=$(this).find('td.rate_item').attr('data-itemtaxamount');
                Tax=parseFloat(Tax1);

            //Rate=Rate+Tax;
            tot_disc+=tot_this_item_discount+tot_this_bill_discount;
            tot_tax+=Tax;
            item_tot_disc+=tot_this_item_discount;
            tot_amount+=Rate;
            countItems+=1;

        });

            if(tot_amount>0) {
                var app_disc_prom = check_promotion_applicable("", tot_amount.toFixed(2), "", "", 'order');

                if (($("#bill_dis_number").val() == "0" || $("#bill_dis_number").val() == "") && app_disc_prom['status'] == 1) {

                    $("#bill_dis_number").val(app_disc_prom['order']);
                    $("#bill_dis_number").attr("data-billPromoCode", app_disc_prom['prom_code']);
                    $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");

                    var node = document.createElement("span");
                    node.setAttribute("id", "bill_prom_code");
                    node.setAttribute("class", "pull-left");


                    node.style.color = "#3F7114";

                    var text1 = app_disc_prom['prom_name'] + " discount applied";
                    var txt = document.createTextNode(text1);
                    node.append(txt);

                    $("#showDiscText").append(node);
                    add_bill_discount_number();
                }

            }
            if(tot_amount>0) {

                var app_disc_card_prom = check_promotion_Card_applicable($("#card_num").val(),tot_amount.toFixed(2), 'order');
                if (($("#bill_dis_number").val() == "0" || $("#bill_dis_number").val() == "") && app_disc_card_prom['status'] == 1) {

                    $("#bill_dis_number").val(app_disc_card_prom['order']);
                    $("#bill_dis_number").attr("data-billPromoCode", app_disc_card_prom['prom_code']);

                    $("#bill_dis_number").attr("readonly","readonly");
                    $("#bill_dis_number").addClass("disabled");
                    $("#bill_dis").attr("readonly","readonly");
                    $("#bill_dis").addClass("disabled");





                    $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");

                    var node = document.createElement("span");
                    node.setAttribute("id", "bill_prom_code");
                    node.setAttribute("class", "pull-left");


                    node.style.color = "#3F7114";

                    var text1 = app_disc_card_prom['prom_name'] + " discount applied";
                    var txt = document.createTextNode(text1);
                    node.append(txt);

                    $("#showDiscText").append(node);
                    add_bill_discount_number();
                }

            }

            var Extra_charges=parseFloat($("#del_charges").val())+parseFloat($("#ser_charges").val());
            var total_div=$("#total_div");
            var subtotal_div=$("#sub_total_div");
            total_div.empty();
            total_div.append((parseFloat(tot_amount)+parseFloat(tot_tax)).toFixed(2));
            var totalItem_div=$("#totalItem_div");
            totalItem_div.empty();
            totalItem_div.append(countItems);
            var total_payment=$("#total_paym");
            var total_tax=$("#total_tax");
            var total_taxes_div=$("#total_taxes");
            var item_discounts=$("#total_item_discount");
            var bill_discount=$("#total_bill_discount");
            if(bill_discount.text()===""){
                bill_disc=parseFloat("0");
            }else{
                var bill_disc=parseFloat(bill_discount.text());
            }
            item_discounts.text(item_tot_disc.toFixed(2));
            var itm_dis=parseFloat(item_discounts.text());
            var total_temp=(tot_amount)-(itm_dis);
            var bill_dis_amount=(total_temp*bill_disc)/100;
            var tot_paym=(tot_amount)-(tot_disc)+(tot_tax)+(Extra_charges);
            var disp_item_discount=$("#item_discount");
            var disp_bill_discount=$("#bill_discount");

            total_payment.empty();
            total_payment.text("PKR"+"s "+tot_paym.toFixed(2));

            subtotal_div.empty();
            subtotal_div.text((tot_amount).toFixed(2));



            total_tax.empty();
            total_tax.text(parseFloat(tot_tax).toFixed(2));
            total_taxes_div.empty();
            total_taxes_div.text(parseFloat(tot_tax).toFixed(2));
            disp_item_discount.empty();
            disp_item_discount.text(item_discounts.text());
            disp_bill_discount.empty();
            disp_bill_discount.text(bill_dis_amount.toFixed(2));
            var diver=$('#item_adder');
            var div_id=diver.find('tbody');
            Lockr.rm('Idraft');
            insert_lockr(div_id);

        });

}

function open_invoice_modal(master,detail,reload,showpopup){

    var info_modal=$("#invoicemodal");
    var modal_content=info_modal.children(".modal-dialog").children(".modal-content");
    var modal_title=modal_content.children(".modal-header").children(".modal-title");
    var modal_body=modal_content.children(".modal-body");
    var modal_footer=modal_content.children(".modal-footer");
    var modal_header_button = modal_content.children(".modal-header").children("button");
    modal_header_button.empty();
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Sale Complete");

    var note="";
    var Bill_Remarks = master.BillRemarks;
    /*var paymentmode='Cash';*/
    var d=new Date();
    var OrderType="";
    if(isequalvaluecheck(typeof master.OrderRefNo,"undefined") && isequalvaluecheck(master.OrderRefNo,'')) {
        OrderType = master.OrderTypeName;
    }

    var receiptname='Sale Receipt';
    if(master.CardPayment==='1'){
        master.CashTendered=0;
        master.CashBalance=0;
        /* paymentmode='Card';*/
    }
    las_info=JSON.parse(localStorage.getItem('last_info'));
    var paid = "";
    if (isequalvaluecheck(master.CardPayment, 0)) {
        paid = '                            <tr>\n' +
        '                                <td class="text-right strong-font">Cash Paid  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.CashTendered).toFixed(2) + '</td>\n' +
        '                            </tr>';
    }
    else if (isequalvaluecheck(master.CardPayment, 1)) {
        master.CashTendered = 0;
        master.CashBalance = 0;
        var cardType = master.card_type.charAt(0).toUpperCase() + master.card_type.slice(1);
        paymode = " Card";
    }
    else if (isequalvaluecheck(master.CardPayment, 4)) {
        master.CashTendered = 0;
        master.CashBalance = 0;
        paymode = "Party Credit";
        paid = '                            <tr>\n' +
        '                                <td class="text-right strong-font">Party Credit  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.PartyAmount).toFixed(2) + '</td>\n' +
        '                            </tr>';
    }

    else if (isequalvaluecheck(master.CardPayment, 2)) {
        cardType = master.card_type.charAt(0).toUpperCase() + master.card_type.slice(1);
        paymode = "";
        paid = "";
        if (master.CardAmount > 0) {
            paymode += " Card";
            paid += '                            <tr>\n' +
            '                                <td class="text-right strong-font">Paid via Card  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.CardAmount).toFixed(2) + '</td>\n' +
            '                            </tr>';

        }
        if (master.CashTendered > 0) {
            if (paymode === "") {
                paymode += "Cash"
            } else {
                paymode += "/Cash";
            }
            paid += '                            <tr>\n' +
            '                                <td class="text-right strong-font">Paid via Cash  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.CashTendered).toFixed(2) + '</td>\n' +
            '                            </tr>\n';


        }
        if (master.PartyAmount > 0) {
            if (paymode === "") {
                paymode += "Party"
            } else {
                paymode += "/Party";
            }

            paid += '                            <tr>\n' +
            '                                <td class="text-right strong-font">Party Credit  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.PartyAmount).toFixed(2) + '</td>\n' +
            '                            </tr>';
        }
    }
    var invoice ='<div class="invoice" style="background: #fff;width:100%;">\n' +
    '                <div id="printing_body">\n' +
    '                    <div class="container outside-cont">\n' +
    '                      <div class="row">\n' +
    '                             <div class="col-sm-12">\n' +
    '                       <div class="row make-border-bottom">\n' +
    '                           <div class="col-md-12">\n' +
    '                               <div class="row">\n' +
    '                           <div class="col-md-6 invoice_doc_elements">\n' +
    '                               <div class="row">\n' +
    '                                   <img src="https://turabi.cisepos.com/public/assets/img/bg-pattern.png">\n' +
    '                             <br><div id="bigbashfont">' + gli("store_name") + '</div>\n' +
    '                               </div>\n' +
    '                           </div>\n' +
    '                           <div class="col-md-6 invoice-elements-full" style="padding:15px !important;">\n' +
    '                               <div class="row">\n' +
    '                               <div class="col-sm-12 make-right"><h1 class="make-right">INVOICE</h1></div>\n' +
    '                               <div class="col-sm-12"><p class="more-small make-right">' + gli("store_address") + '</p></div>\n' +
    '                               <div class="col-sm-12"><p class="more-small make-right">' + gli("store_contact") + '</p></div><br>\n' +
    '                               </div>\n' +
    '                           </div>\n';

    if(master.PartyName!=="" && master.PartyName!="undefined") {
        invoice+='                           <div class="col-md-6 invoice-elements-full">\n' +
        '                               <div class="row make-left">\n' +
        '<div class="col-sm-12 make-left"><strong>Customer Address  &nbsp;:&nbsp;</strong>  ' + master.PartyAddress + '</div>\n'+
        '                               <div class="col-sm-12 make-left"><strong>Customer Name  &nbsp;:&nbsp;</strong>  ' + master.PartyName + '</div>\n'+
        '                               <div class="col-sm-12 make-left"><strong>Customer Number  &nbsp;:&nbsp;</strong>  ' + master.PartyPhone + '</div>' +
        '                       </div>\n' +
        '                       </div>\n';
    }else{
        invoice+='                           <div class="col-md-6 invoice-elements-full">\n' +
        '                                <div class="row make-left">' +
        '</div>\n' +
        '</div>\n';
    }

    invoice+='                           <div class="col-md-6 invoice-elements-fulls">\n'+
    '                               <div class="row make-right">\n' +
    '                                   <div class="col-sm-12"><p class="make-right more-small"><strong>Bill No   &nbsp;:&nbsp;</strong>  '+master.BillNo+'</p></div>\n';
    if(master.InvoiceNo!="" && master.InvoiceNo!="undefined") {
        invoice += '                                   <div class="col-sm-12"><p class="make-right more-small"><strong>Invoice No   &nbsp;:&nbsp;</strong>  ' + master.InvoiceNo + '</p></div>\n';
    }
    if(las_info['delop']==1){

        invoice += '<div class="col-sm-12"><p class="make-right more-small"><strong>Delivery Date &nbsp;:&nbsp;</strong>  ' + master.DeliveryDate + '</p></div>\n';
    }
    invoice +='                                   <div class="col-sm-12"><p class="make-right more-small"><strong>Date & Time  &nbsp;:&nbsp;</strong>  '+formatDate(new Date(master.BillDate))+'  '+formatAMPM(new Date(master.BillTime))+'</p></div>\n' +
    '                                   <div class="col-sm-12"><p class="make-right more-small"><strong>User &nbsp;:&nbsp;</strong> '+master.UserName+'</p></div>\n' +
    '                                   <div class="col-sm-12"><p class="make-right more-small"><strong>Counter &nbsp;:&nbsp;</strong>'+master.CounterCode+'</p></div>\n' +
    '    <div class="col-sm-12 desc-value ordertt order_no_receipt">\n' +
    '                                <p class="make-right more-small"><strong>Order No  &nbsp;:&nbsp;</strong>  '+master.OrderRefNo+'</span>\n' +
    '                            </div>\n' +
    '                            <div class="col-sm-12 desc-value ordertt table_name_receipt">\n' +
    '                                <p class="make-right more-small"><strong>Table  &nbsp;:&nbsp;</strong>  '+master.TableName+'</span>\n' +
    '                            </div>\n' +
    '                            <div class="col-sm-12 desc-value ordertt">\n' +
    '                                <p class="make-right more-small"><strong>Waiter  &nbsp;:&nbsp;</strong>  '+master.WaiterName+'</span>\n'
    '                            </div>\n' ;


    invoice+='                               </div>\n' +
    '                           </div>\n' +
    '                               </div>\n' +
    '                       </div>\n' +
    '                       <div class="row table_row">\n' +
    '                           <table class="table table-bordered datatab invoice-elements-full">\n' +
    '                               <thead>\n' +
    '                               <tr>\n' +
    '                                   <th>\n' +
    '                                    Items\n' +
    '                                   </th>\n' +
    '                                   <th>\n' +
    '                                    Quantity\n' +
    '                                   </th>\n' +
    '                                   <th>\n' +
    '                                    Price\n' +
    '                                   </th>\n' +
    '                                   <th>\n' +
    '                                    Discount\n' +
    '                                   </th>\n' +
    '                                   <th>\n' +
    '                                   Amount\n' +
    '                                   </th>\n' +
    '                               </tr>\n' +
    '                               </thead>\n' +
    '                               <tbody id="mainbody" class="mainbodyclass">\n' +
    '                               </tbody>\n' +
    '                                <table class="table table-bordered datatab invoice-elements-full"><tbody><tr>\n' +
    '                                    <td colspan="1" class="text-left">\n' +
    '                                        <small>No Of Items:   '+master.TotalQuantity+'</small>\n' +
    '                                    </td>\n' +
    '                                    <td colspan="2" class="text-left">\n' +
    '                                        <small>Total Qty:   '+master.tot_qty+'</small>\n' +
    '                                    </td>\n' +
    '\n' +
    '                                    <td colspan="1" class="text-center">\n' +
    '                                        ' + (parseFloat(master.NetAmount) - parseFloat(master.TotalTaxAmount) + parseFloat(master.TotalDiscount) - parseFloat(master.DeliveryCharges) - parseFloat(master.ServiceCharges)).toFixed(2) + '\n' +
    '                                    </td>\n' +
    '                                </tr>\n' +
    '                                </tbody></table>\n' +
    '                            </table>\n' +
    /*'                            <div class="text-center"><svg style="width:70%;font-size:1px" id="barcode_svg"></svg></div>\n' +*/
    '                       </div>\n' +
    '                                 <div class="row">\n' +
    '                                     <div class="col-md-12">\n' +
    '                                         <div class="row">\n' +
    '                                                   <div class="col-md-6 invoice-elements-full">\n' +
    '                                                   </div>\n' +
    '                                             <div class="col-md-6 invoice-elements-full">\n' +
    '                                                 <div class="row make-right">\n' +
    '                            <table class="total-table" align="right">\n' +
    '                                <tr class="TotalTax" >\n' +
    '                                    <td class="text-right strong-font">'+get_tax_name()+' &nbsp;:&nbsp;  </td><td>  '+parseFloat(master.TotalTaxAmount).toFixed(2)+'</td>\n' +
    '                                </tr>\n' +
    '                                <tr class="TBDis">\n' +
    '                                    <td class="text-right strong-font">Total Bill Discount  &nbsp;:&nbsp;  </td><td>  '+parseFloat(master.BillDiscount).toFixed(2)+'</td>\n' +
    '                                </tr>\n' +
    '                                <tr class="TIDis">\n' +
    '                                    <td class="text-right strong-font">Total Item Discount  &nbsp;:&nbsp;  </td><td>  '+parseFloat(master.TotalDiscount-master.BillDiscount).toFixed(2)+'</td>\n' +
    '                                </tr>\n';
    if (master.PartyAmount > 0 && (isequalvaluecheck(las_info['pbaos'], 1))){

        var alif=parseFloat(($("div#partyBalance").text()).replace("Dr"," ").replace("Cr",""));

        invoice +=   '                            <tr>\n' +
        '                            <td class="text-right strong-font">Previous Balance  :  </td><td>    ' + parseFloat(alif).toFixed(2) + '</td></tr>\n';


    }

    if (master.DeliveryCharges > 0 ){

        invoice +=   '                            <tr>\n' +
        '                            <td class="text-right strong-font">Delivery Charges  :  </td><td>    ' + parseFloat(master.DeliveryCharges).toFixed(2) + '</td></tr>\n';


    }
    if (master.ServiceCharges > 0){

        invoice +=   '                            <tr>\n' +
        '                            <td class="text-right strong-font">Service Charges  :  </td><td>    ' + parseFloat(master.ServiceCharges).toFixed(2) + '</td></tr>\n';


    }


    invoice +='                            <tr>\n' +
    '                                <td class="text-right strong-font" style="font-size:25px;font-weight:bold">Total  &nbsp;:&nbsp;  </td><td class="strong-font"  style="font-size:25px;font-weight:bold">  '+parseFloat(master.NetAmount).toFixed(2)+'</td>\n' +
    '                            </tr>\n' + paid +
    '                            <tr>\n' +
    '\n' +
    '                            <td class="text-right  strong-font" >Cash Balance  :  </td><td>'+parseFloat(master.CashBalance).toFixed(2)+'</td>\n' +
    '                            </tr>\n';
    if (master.PartyAmount > 0 && (isequalvaluecheck(las_info['pbaos'], 1))){


        var bay=master.PartyAmount;
        invoice +=   '                            <tr>\n' +
        '                            <td class="text-right strong-font" style="font-size:25px;font-weight:bold">Current Balance  :  </td><td class="strong-font" style="font-size:25px;font-weight:bold">    ' + (parseFloat(alif)+parseFloat(bay)).toFixed(2) + '</td></tr>\n';


    }
    invoice += '                            </table>\n' +
    '                                                 </div>\n' +
    '                                             </div>\n' +
    '                                         </div>\n' +
    '                                     </div>\n' +
    '                                 </div>\n' +
    '                       </div>\n' +

    '                                 <div class="row">\n' +
    '                                     <div class="col-md-12">\n' +
    '                                         <div class="row">\n';
    if(isequalvaluecheck(las_info['EFBRIntegration'],1))
        invoice +='                          <div class="col-sm-12"><div><strong>FBR Invoice Number</strong></div></div>\n';

    invoice +='                           <div class="col-sm-12"><div id="FBRqrcode"></div></div>\n' +
    '                            <div class="col-sm-12"><div id="FBRprint"></div></div>\n' +
    '                                             <div class="col-sm-12"></div>\n' +
    '                                             <div class="col-sm-12">\n' +
    '                                                 <p class="more-small">'+Bill_Remarks+'\n' +
    '                                                 <p class="more-small">'+note+'\n' +
    '                                                 </p>\n' +
    '                                             </div>\n' +
    '                                         </div>\n' +
    '                                     </div>\n' +
    '                                 </div>\n' +
    '\n' +
    '                     </div>\n' +
    '                     </div>\n' +
    '                       \n' +
    '                     </div>\n' +
    '                    </div>\n' +
    '                </div>';




    modal_body.append(invoice);
    var ok_button='<button id="ok_it" type="button" class="btn btn-success" data-dismiss="modal">OK (esc)</button>';
    var print_button='<button id="osk_it" type="button" class="btn btn-success" onclick=printElement_exe("print_it")>Print (F8)</button>';
    modal_footer.append(ok_button);
    modal_footer.append(print_button);

    if((isequalvaluecheck(typeof OrderType,'undefined')) || isequalvaluecheck(OrderType,'')){
        $(".ordertt").css("display","none");
    }else{
        $(".ordertt").css("display","block");
    }
    if(parseFloat(master.TotalTaxAmount).toFixed(2)==="0.00"){
        $(".TotalTax").each(function(){
            $(this).hide();
        });
    }
    if(parseFloat(master.BillDiscount).toFixed(2)==="0.00"){
        $(".TBDis").each(function(){
            $(this).hide();
        });
    }
    if(parseFloat(master.TotalDiscount-master.BillDiscount).toFixed(2)==="0.00"){
        $(".TIDis").each(function(){
            $(this).hide();
        });
    }
    if (master.DeliveryCharges == 0 ) {

        $(".DELch").each(function () {
            $(this).hide();
        });
    }
    if (master.ServiceCharges == 0){

        $(".SERch").each(function(){
            $(this).hide();
        });
    }


    var table_body=$("#mainbody");
    /*JsBarcode("#barcode_svg", master.BillNo);*/
    detail.forEach(function(det){
        table_body.append('<tr><td>' + det.ItemName + '</td><td>' + det.Quantity +' '+ det.UnitName +'</td><td>' + det.Rate + '</td><td>' + det.ItemDiscountAmount + '</td><td>' + det.NetAmount.toFixed(2) + '</td></tr><br>');
            /*if(det.ItemDiscountAmount>0){
                table_body.append('<tr><td>' + det.ItemName + '</td><td>' + det.Quantity +' '+ det.UnitName +'</td><td>' + det.Rate + '</td><td>' + det.NetAmount.toFixed(2) + '<div><small>' + det.Amount.toFixed(2) + '-'+det.ItemDiscountPercentage+'%</small></div></td></tr><br>');
            }
            else{
                table_body.append('<tr><td>' + det.ItemName + '</td><td>' + det.Quantity +' '+ det.UnitName +'</td><td>' + det.Rate + '</td><td>' + det.NetAmount.toFixed(2) + '</td></tr><br>');
            }*/
        });

    if(showpopup===true){
        info_modal.modal('show');
    }else{
        printElement_exe("print_it");
    }


    if(reload===true){
        info_modal.on('hidden.bs.modal', function (){
            /*location.reload();*/
        });
    }
}





function open_info_modal(master,detail,reload,showpopup) {

    var info_modal = $("#infomodal");
    var modal_content = info_modal.children(".modal-dialog").children(".modal-content");
    var modal_title = modal_content.children(".modal-header").children(".modal-title");
    var modal_body = modal_content.children(".modal-body");
    var modal_footer = modal_content.children(".modal-footer");
    var modal_header_button = modal_content.children(".modal-header").children("button");
    modal_header_button.empty();
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Sale Complete");

    var note = "";
    /*var paymentmode='Cash';*/
    var d = new Date();
    var OrderType = "";
    if (isequalvaluecheck(typeof master.OrderRefNo, "undefined") || isequalvaluecheck(master.OrderRefNo, '')) {
        OrderType = "";
    } else {
        OrderType = master.OrderTypeName;
    }
    las_info=JSON.parse(localStorage.getItem('last_info'));
    var receiptname = 'Sale Receipt';
    var paymode = "Cash";
    var paid = "";
    var Bill_Remarks = master.BillRemarks;
    if (isequalvaluecheck(master.CardPayment, 0)) {
        paid = '                            <tr>\n' +
        '                                <td class="text-right strong-font">Cash Paid  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.CashTendered).toFixed(2) + '</td>\n' +
        '                            </tr>';
    }
    else if (isequalvaluecheck(master.CardPayment, 1)) {
        master.CashTendered = 0;
        master.CashBalance = 0;
        if(las_info['sbot']==0){
            var cardType = master.card_type.charAt(0).toUpperCase() + master.card_type.slice(1);
        }else{
            cardType="";
        }

        paymode = "Card";
    }
    else if (isequalvaluecheck(master.CardPayment, 4)) {
        master.CashTendered = 0;
        master.CashBalance = 0;
        paymode = "Party Credit";
        paid = '                            <tr>\n' +
        '                                <td class="text-right strong-font">Party Credit  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.PartyAmount).toFixed(2) + '</td>\n' +
        '                            </tr>';
    }

    else if (isequalvaluecheck(master.CardPayment, 2)) {
        if(las_info['sbot']==0){
            cardType = master.card_type.charAt(0).toUpperCase() + master.card_type.slice(1);
        }else{
            cardType="";
        }
        paymode = "";
        paid = "";
        if (master.CardAmount > 0) {
            paymode += " Card";
            paid += '                            <tr>\n' +
            '                                <td class="text-right strong-font">Paid via Card  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.CardAmount).toFixed(2) + '</td>\n' +
            '                            </tr>';

        }
        if (master.CashTendered > 0) {
            if (paymode === "") {
                paymode += "Cash"
            } else {
                paymode += "/Cash";
            }
            paid += '                            <tr>\n' +
            '                                <td class="text-right strong-font">Paid via Cash  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.CashTendered).toFixed(2) + '</td>\n' +
            '                            </tr>\n';


        }
        if (master.PartyAmount > 0) {
            if (paymode === "") {
                paymode += "Party"
            } else {
                paymode += "/Party";
            }

            paid += '                            <tr>\n' +
            '                                <td class="text-right strong-font">Party Credit  &nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.PartyAmount).toFixed(2) + '</td>\n' +
            '                            </tr>';
        }
    }


    var invoice = '<div class="invoice-table" >\n' +
    '<div class="invoice-logo-w">\n' +
    '                                <img class="logo-big-rec" alt="" src="' + gli("client_logo") + '">\n' +
    '                                <br><div id="bigbashfont" class="text-center">' + gli("store_name") + '</div>\n' +
    '                                <br><div id="bigbashfont" class="text-center">' + gli("store_address") + '</div>\n' +
    '                                <div id="bigbashfont" class="text-center">' + gli("store_contact") + '</div><br>\n' +
    '                                <div class="make-border text-center"><h6>' + receiptname + '</h6></div>\n' +
    '                            <div class="make-border ordertt text-center">\n' +
    '                              <strong>' + OrderType + '</strong>\n' +
    '                            </div>\n' +
    '                            </div>\n' +
    '                            <div class="desc-value">\n' +
    '                                <span class="pull-left"> <strong>Bill No   &nbsp;:&nbsp;</strong>  ' + master.BillNo + '</span>\n' +
    '                            </div><br>\n' ;
    if(master.InvoiceNo!="" && master.InvoiceNo!="undefined") {
        invoice += '                            <div class="desc-value">\n' +
        '                                <span class="pull-left"> <strong>Invoice No   &nbsp;:&nbsp;</strong>  ' + master.InvoiceNo + '</span>\n' +
        '                            </div><br>\n' ;
    }
    invoice+=   '                            <div class="desc-value">\n' +
    '                                <span class="pull-left"><strong>Date & Time  &nbsp;:&nbsp;</strong>  ' + formatDate(new Date(master.BillDate)) + '  ' + formatAMPM(new Date(master.BillTime)) + '</span>\n' +
    '                            </div><br>\n' +
    '                            <div class="desc-value">\n' +
    '                                <span class="pull-left"><strong>Payment Type  &nbsp;:&nbsp;</strong>  ' + paymode + '</span>\n' +
    '                            </div><br>';
    if(las_info['delop']==1){
        invoice += '                            <div class="desc-value">\n' +
        '                                <span class="pull-left"><strong>Delivery Date   &nbsp;:&nbsp;</strong>  ' + master.DeliveryDate + '</span>\n' +
        '                            </div><br>\n';
    }
    if (master.PartyName !== "" && master.PartyName != "undefined") {
        invoice += '                            <div class="desc-value address_receipt">\n' +
        '                                <span class="pull-left"><strong>Customer Address  &nbsp;:&nbsp;</strong>  ' + master.PartyAddress + '</span>\n' +
        '                            </div><br class="address_receipt">\n' +
        '                            <div class="desc-value address_receipt">\n' +
        '                                <span class="pull-left"><strong>Customer Name  &nbsp;:&nbsp;</strong>  ' + master.PartyName + '</span>\n' +
        '                            </div><br class="address_receipt">\n' +

        '                            <div class="desc-value name_receipt">\n' +
        '                                <span class="pull-left"><strong>Customer Number  &nbsp;:&nbsp;</strong>  ' + master.PartyPhone + '</span>\n' +
        '                            </div><br class="address_receipt">';
    }
    invoice += '                            <div class="desc-value">\n' +
    '                                <span class="pull-left"><strong>User &nbsp;:&nbsp;</strong> ' + master.UserName + '</span><br><span class="pull-left"><strong>Counter &nbsp;:&nbsp;</strong>' + master.CounterCode + '</span>\n' +
    '                            </div><br>\n' +
    '                            <div class="desc-value ordertt order_no_receipt">\n' +
    '                                <span class="pull-left"><strong>Order No  &nbsp;:&nbsp;</strong>  ' + master.OrderRefNo + '</span>\n' +
    '                            </div>';
    if (isequalvaluecheck(OrderType, "DineInn")) {
        invoice += '<br class="ordertt">\n' +
        '                            <div class="desc-value ordertt table_name_receipt">\n' +
        '                                <span class="pull-left"><strong>Table  &nbsp;:&nbsp;</strong>  ' + master.TableName + '</span>\n' +
        '                            </div>';
    }
    invoice += '<br class="ordertt">\n' +
    '                            <div class="desc-value ordertt">\n' +
    '                                <span class="pull-left"><strong>Waiter  &nbsp;:&nbsp;</strong>  ' + master.WaiterName + '</span>\n' +
    '                            </div><br class="ordertt">\n' +
    '                            <table class="table">\n' +
    '                                <thead>\n' +
    '                                <tr>\n' +
    '                                    <th class="big-font">Description</th><th class="big-font">Qty</th><th class="big-font">Rate</th><th class="big-font">Disc</th><th class="big-font">Amount (PKRs)</th>\n' +
    '                                </tr>\n' +
    '                                </thead>\n' +
    '                                <tbody class="mainbodyclass" id="mainbody">\n' +
    '                                </tbody>\n' +
    '                                <tfoot style="border:0">\n' +
    '                                <tr>\n' +
    '                                    <td colspan="2" class="text-left">\n' +
    '                                        <small>No Of Items:   ' + master.TotalQuantity + '</small>\n' +
    '                                    </td>\n' +
    '                                    <td colspan="1" class="text-left">\n' +
    '                                        <small>Total Qty:   ' + master.tot_qty + '</small>\n' +
    '                                    </td>\n' +
    '\n' +
    '                                    <td colspan="3" class="text-center">\n' +
    '                                        <small>' + (parseFloat(master.NetAmount) - parseFloat(master.TotalTaxAmount) - parseFloat(master.DeliveryCharges) - parseFloat(master.ServiceCharges) + parseFloat(master.TotalDiscount)).toFixed(2) + '</small>\n' +
    '                                    </td>\n' +
    '                                </tr>\n' +
    '                                </tfoot>\n' +
    '                            </table>\n' +
    '                            <div class="row">' +
    '                               <table class="total-table" style="left:100px;position:relative;" align="right">\n' +
    '                                <tr class="TotalTax" >\n' +
    '                                    <td class="text-right strong-font">' + get_tax_name() + ' &nbsp;&nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.TotalTaxAmount).toFixed(2) + '</td>\n' +
    '                                </tr>\n' +
    '                                <tr class="TBDis">\n' +
    '                                    <td class="text-right strong-font">Total Bill Discount  &nbsp;&nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.BillDiscount).toFixed(2) + '</td>\n' +
    '                                </tr>\n' +
    '                                <tr class="TIDis">\n' +
    '                                    <td class="text-right strong-font">Total Item Discount  &nbsp;&nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.TotalDiscount - master.BillDiscount).toFixed(2) + '</td>\n' +
    '                                </tr>\n';

    if (master.PartyAmount > 0 && (isequalvaluecheck(las_info['pbaos'], 1))){

        var alif=parseFloat(($("div#partyBalance").text()).replace("Dr"," ").replace("Cr",""));

        invoice +=   '                            <tr>\n' +
        '                            <td class="text-right strong-font">Previous Balance  :  </td><td>    ' + parseFloat(alif).toFixed(2) + '</td></tr>\n';


    }
    invoice +='                                <tr class="DELch">\n' +
    '                                    <td class="text-right strong-font">Delivery Charges  &nbsp;&nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.DeliveryCharges).toFixed(2) + '</td>\n' +
    '                                </tr>\n'+
    '                                <tr class="SERch">\n' +
    '                                    <td class="text-right strong-font">Service Charges  &nbsp;&nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.ServiceCharges).toFixed(2) + '</td>\n' +
    '                                </tr>\n';
    invoice +=
    '                            <tr class="strong_border">\n' +
    '                                <td class="text-right strong-font">Total  &nbsp;&nbsp;:&nbsp;  </td><td>  ' + parseFloat(master.NetAmount).toFixed(2) + '</td>\n' +
    '                            </tr>\n'
    + paid +
    '                            <tr>\n' +
    '\n' +
    '                            <td class="text-right strong-font">Cash Balance  :  </td><td>    ' + parseFloat(master.CashBalance).toFixed(2) + '</td>' +
    ' </tr>\n';
    if (master.PartyAmount > 0 && (isequalvaluecheck(las_info['pbaos'], 1))){

        var bay=master.PartyAmount;
        invoice +=   '                            </tr>\n' +
        '                            <td class="text-right strong-font">Current Balance  :  </td><td>    ' + (parseFloat(alif)+parseFloat(bay)).toFixed(2) + '</td></tr>\n';
    }
    invoice +=    '                            </table></div>\n' +
    '                                <div class="row remarks_row" style="margin-left:1px;position:relative;">\n' +
    '                                <div class="terms-header remarks-header">\n' +
    '                                    <strong>Remarks:</strong>\n' +
    '                                </div>\n' +
    '                                <div class="terms-content bill_remarks str-font">\n' +
    '                                    '+Bill_Remarks+'\n'+
    '                                </div>\n' +
    '                                </div>\n' +
    '                            <div class="text-center"><svg style="width:70%;font-size:1px" id="barcode_svg"></svg></div>\n' +
    '                            <div class="text-center"><div id="qrcode"></div></div>\n';
    if(isequalvaluecheck(las_info['EFBRIntegration'],1))
        invoice +='                            <div class="text-center"><div><strong>FBR Invoice Number</strong></div></div>\n';

    invoice +='                            <div class="text-center"><div id="FBRqrcode"></div></div>\n' +
    '                            <div class="text-center"><div id="FBRprint"></div></div>\n' +
    '                            <div class="terms">\n' +
    '                                <div class="terms-header">\n' +
    '                                </div>\n' +
    '                                <div class="terms-content str-font">\n' +
    '                                    '+note+'\n'+
    '                                </div>\n' +
    '                            </div>\n' +
    '                            <div class="make-border text-center">\n' +
    '                                      <span class="text-center">  <small>Print Date:   '+formatDate(d)+'</small></span>\n' +
    '                                       <span class="text-center"> <small>Print Time:   '+formatAMPM(d)+'</small></span>\n' +
    '                            </div>\n' +
    '                    <div class="invoice-footer" style="margin-top:0;padding:0">\n' +
    '                        <div class="invoice-logo">\n' +
    '                            <img alt="" src="'+gli("rec_logo_url")+'"><br><span>Powered by CIS website:www.cisepos.com</span>\n' +
    '                        </div>\n' +
    '                        <div class="invoice-info">\n' +
    '                            <span>info@cisepos.com</span>\n' +
    '                        </div>\n' +
    '                    </div>\n'+
    '                        </div>';




    modal_body.append(invoice);
    var ok_button='<button id="ok_it" type="button" class="btn btn-success" data-dismiss="modal">OK (esc)</button>';
    var print_button='<button id="osk_it" type="button" class="btn btn-success" onclick=printElement_exe("printing_body")>Print (F8)</button>';
    modal_footer.append(ok_button);
    modal_footer.append(print_button);

    if((isequalvaluecheck(typeof OrderType,'undefined')) || isequalvaluecheck(OrderType,'')){
        $(".ordertt").css("display","none");
    }else{
        $(".ordertt").css("display","block");
    }
    if(parseFloat(master.TotalTaxAmount).toFixed(2)==="0.00"){
        $(".TotalTax").each(function(){
            $(this).hide();
        });
    }
    if(parseFloat(master.BillDiscount).toFixed(2)==="0.00"){
        $(".TBDis").each(function(){
            $(this).hide();
        });
    }
    if(parseFloat(master.TotalDiscount-master.BillDiscount).toFixed(2)==="0.00"){
        $(".TIDis").each(function(){
            $(this).hide();
        });
    }
    if (master.DeliveryCharges == 0 ) {

        $(".DELch").each(function () {
            $(this).hide();
        });
    }
    if (master.ServiceCharges == 0) {

       $(".SERch").each(function () {
           $(this).hide();
       });
   }





   var table_body=$("#mainbody");

   if(isequalvaluecheck(las_info['barcode_receipt'],1)) {
    JsBarcode("#barcode_svg", master.BillNo);
}else{
    var bsvg=$("#barcode_svg");
    bsvg.css('width','0px');
    bsvg.css('display','none');
}
if(isequalvaluecheck(las_info['rqc'],1)) {
    $('#qrcode').qrcode({
        text: las_info['rqcs'],
        width:80,
        height:80
    });
    var canvas = $('#qrcode canvas');
    var spca=canvas.get(0).toDataURL('image/jpeg');
    $("#qrcode").empty();
    $("#qrcode").append("<img src='"+spca+"' height='80' width='80'>");

}



if(isequalvaluecheck(Bill_Remarks,"")) {
    $(".remarks_row").css("display","none");
}

detail.forEach(function(det){
    table_body.append('<tr><td>' + det.ItemName + '</td><td>' + det.Quantity +' '+ det.UnitName +'</td><td>' + det.Rate + '</td><td>' + det.ItemDiscountAmount + '</td><td>' + det.NetAmount.toFixed(2) + '</td></tr><br>');
});

if(showpopup===true){
    info_modal.modal('show');
}else{
    printElement_exe("printing_body");
}


if(reload===true){
    info_modal.on('hidden.bs.modal', function (){
        /*location.reload();*/
    });
}
}

function get_unitname(unitcode,restaurant){
    if(restaurant===true) {
        var myarray = JSON.parse(localStorage.getItem('order_waiters_response'));
    }else{
        myarray = JSON.parse(localStorage.getItem('units'));
    }
    var unitname="";
    myarray['units'].forEach(function(unit){
        if(unitcode===unit['UnitCode']){
            unitname=unit['Unit']
        }
    });
    return unitname;
}




function check_and_sync(restaurant){
    if(restaurant!==true) {
        var n=localStorage.getItem('salesoffline');
        if(n===null || n<0){
            localStorage.setItem('salesoffline',0);
        } else {
            var last = parseFloat(n) + 1;
            callrec_sync(0, last,restaurant);
        }
    }
}



function save_sale_local(sendData,arraysend,showpopup,restaurant){

    var salemaster=[];
    var las_in=JSON.parse(localStorage.getItem('last_info'));
    var padnum=pad(las_in['sale_last_record_id'], 5);
    var BN=padnum+'/'+las_in['uid']+las_in['un2'];


    salemaster['BranchCode']=las_in['BranchCode'];
    salemaster['CounterCode']=las_in['CounterCode'];
    salemaster['UserName']=las_in['UserName'];
    salemaster['BillDate']=las_in['current_date'];
    salemaster['BillTime']=new Date();
    salemaster['BillNo']=BN;
    salemaster['InvoiceNo']=$("#inv_no").val();
    salemaster['BillDiscountPercentage']=sendData.get('BillDiscountPercentage');
    salemaster['BillDiscount']=sendData.get('BillDiscount');
    salemaster['DeliveryCharges']=sendData.get('DeliveryCharges');
    salemaster['ServiceCharges']=sendData.get('ServiceCharges');
    salemaster['TotalQuantity']=sendData.get('TotalQuantity');
    salemaster['TotalStockQuantity']=sendData.get('TotalStockQuantity');
    salemaster['TotalAmount']=sendData.get('TotalAmount');
    salemaster['billPromoCode']=sendData.get('billPromoCode');
    salemaster['PartyName']=sendData.get('PartyName');
    salemaster['PartyAddress']=sendData.get('PartyAddress');
    salemaster['PartyPhone']=sendData.get('PartyPhone');
    salemaster['CRMCUSCode']=sendData.get('CRMCUSCode');
    salemaster['SalesmanCode']=sendData.get('SalesmanCode');
    salemaster['PartyCode']=sendData.get('PartyCode');
    salemaster['PartyAmount']=sendData.get('PartyAmount');
    salemaster['PaymentMode']=sendData.get('PaymentMode');
    salemaster['CashTendered']=sendData.get('CashTendered');
    salemaster['CashBalance']=sendData.get('CashBalance');
    salemaster['BillRemarks']=sendData.get('BillRemarks');
    salemaster['TotalTaxAmount']=sendData.get('TotalTaxAmount');
    salemaster['channel_id']=sendData.get('channel_id');
    if(las_in['delop']==1){
        salemaster['DeliveryDate']=sendData.get('DeliveryDate');
    }
    var i=0;
    var saledetail=[];
    var disc_items=0;
    var tot_qty=0;
    sendData.getAll('items[]').forEach(function(itemsent){
        var item=JSON.parse(itemsent);
        itemsent=item[0];
        saledetail[i]=[];

        if(itemsent['IsModifier']==='1'){
            saledetail[i]['Rate'] = 0;
            saledetail[i]['Amount'] = 0;
            saledetail[i]['ItemDiscountAmount'] = 0;
            saledetail[i]['ItemPromoCode'] = itemsent['ItemPromoCode'];
            saledetail[i]['ItemPromoCode'] = "-";
            saledetail[i]['DiscountAmount'] = 0;
            saledetail[i]['NetAmount'] = 0;
            saledetail[i]['Quantity'] = itemsent['Quantity'];
            var saledet=getitem(itemsent['BarCode']);
            saledetail[i]['ItemName'] = saledet[0]['Item'];
            saledetail[i]['IsModifier'] = "1";
            saledetail[i]['UnitName'] = itemsent['UnitName'];
            saledetail[i]['UnitCode'] = itemsent['UnitCode'];
            saledetail[i]['StockQuantity'] = itemsent['StockQuantity'];

            disc_items += saledetail[i]['DiscountAmount'];
        }else {

            saledet=getitem(itemsent['BarCode']);
            if(las_in['edsr']==1){
                saledetail[i]['Rate'] = itemsent['ItemAmountOnSale'];
            }else{
                saledetail[i]['Rate'] = parseFloat(saledet[0]['SRWT']);
            }

            if(saledet[0]['item_detail'].length>0){
                saledet[0]['item_detail'].forEach(function(itm){
                    if(itm['AlternateUnitCode']===itemsent['UnitCode']){
                        saledetail[i]['Rate'] = itm['AlternateUnitSalesRate'];
                    }
                });
            }
            saledetail[i]['Quantity'] = parseFloat(itemsent['Quantity']);
            tot_qty+=saledetail[i]['Quantity'];

            saledetail[i]['ItemName'] = saledet[0]['Item'];

            saledetail[i]['Amount'] = parseFloat(saledetail[i]['Rate']) * parseFloat(saledetail[i]['Quantity']);

            var new_tax_price=parseFloat(itemsent['Quantity'])*parseFloat(itemsent['ItemTaxAmount']);
            var price_for_calc_disc=parseFloat(saledetail[i]['Amount']);

            saledetail[i]['ItemDiscountAmount'] = parseFloat(itemsent['ItemDiscountAmount'])*parseFloat(itemsent['Quantity']);
            saledetail[i]['ItemPromoCode'] = itemsent['ItemPromoCode'];
            if(!isequalvaluecheck(parseFloat(price_for_calc_disc),0)){
                saledetail[i]['ItemDiscountPercentage']=(parseFloat(itemsent['ItemDiscountAmount']) / parseFloat(price_for_calc_disc)) *  100;
            }else{
                saledetail[i]['ItemDiscountPercentage']=0;
            }
            console.log(saledetail[i]['ItemDiscountPercentage']);
            // exit();

            var disc_amount=parseFloat(saledetail[i]['ItemDiscountAmount']).toFixed(2);
               /* if ((parseFloat(disc_amount).toFixed(1)) % 1!==0.5 ){
                    disc_amount=Math.round(disc_amount);
                }else{
                    disc_amount=parseFloat(disc_amount).toFixed(2);
                }*/
                /*saledetail[i]['DiscountAmount'] = parseFloat(saledetail[i]['ItemDiscountAmount']);*/
                saledetail[i]['DiscountAmount'] = parseFloat(disc_amount);
                saledetail[i]['NetAmount'] = parseFloat(saledetail[i]['Amount']).toFixed(2) - parseFloat(saledetail[i]['DiscountAmount']).toFixed(2);
                saledetail[i]['UnitName'] = itemsent['UnitName'];
                saledetail[i]['UnitCode'] = itemsent['UnitCode'];
                saledetail[i]['StockQuantity'] = itemsent['StockQuantity'];
                saledetail[i]['IsModifier'] = "0";
                disc_items += saledetail[i]['DiscountAmount'];
                /*saledetail[i] = itemsent;*/

            }
            i++;

        });
    salemaster['tot_qty']=tot_qty;
        //salemaster['BillDiscount']=(parseFloat(salemaster['TotalAmount'])-parseFloat(salemaster['TotalTaxAmount'])-parseFloat(disc_items)) * parseFloat(salemaster['BillDiscountPercentage'] / 100) ;
        salemaster['TotalDiscount']=parseFloat(salemaster['BillDiscount']) + parseFloat(disc_items);
        salemaster['GSTPer']=0.00;
        salemaster['GSTAmount']=parseFloat(salemaster['TotalAmount']) * parseFloat(salemaster['GSTPer'] / 100);
        salemaster['NetAmount'] = parseFloat(salemaster['TotalAmount']) - parseFloat(salemaster['TotalDiscount']) + parseFloat(salemaster['GSTAmount']) + parseFloat(salemaster['DeliveryCharges']) + parseFloat(salemaster['ServiceCharges']);
        if(sendData.get('PaymentMode')==='card'){
            salemaster['CardPayment']=1;
            salemaster['card_type'] = sendData.get('card_type');
            salemaster['CardNo'] = sendData.get('CardNo');
            salemaster['CardAmount']=salemaster['NetAmount'];
            salemaster['PartyAmount']=0.00;
        } else if(sendData.get('PaymentMode')==='party'){
            salemaster['CardPayment']=4;
            salemaster['PartyAmount']=salemaster['NetAmount'];
            salemaster['PartyCode']=sendData.get('PartyCode');
        } else if(sendData.get('PaymentMode')==='cash'){
            salemaster['CardPayment']=0;
            salemaster['CashAmount']=salemaster['NetAmount'];
            salemaster['CashTendered']=sendData.get('CashTendered');
            salemaster['CashBalance']=sendData.get('CashBalance');
            salemaster['CardAmount']=0.00;
            salemaster['PartyAmount']=0.00;
        }else if(sendData.get('PaymentMode')==='both'){
            salemaster['CardPayment']=2;
            salemaster['card_type'] = sendData.get('card_type');
            salemaster['CardNo'] = sendData.get('CardNo');
            salemaster['PartyCode']=sendData.get('PartyCode');
            salemaster['CashAmount']=salemaster['NetAmount'];
            salemaster['CashTendered']=sendData.get('CashTendered');
            salemaster['CashBalance']=sendData.get('CashBalance');
            salemaster['CardAmount']=sendData.get('CardAmount');
            salemaster['PartyAmount']=sendData.get('PartyAmount');
        }


        if(restaurant===true) {
            if (sendData.has('OrderRefNo')) {
                salemaster['OrderTypeName'] = getordertypename(localStorage.getItem('send_order_type'));
                salemaster['OrderRefNo'] = sendData.get('OrderRefNo');
                salemaster['WaiterName'] = getWaiterName(localStorage.getItem('send_waiter'));
                //salemaster['WaiterName']=getWaiterName(sendData.get('Waiter'));
                salemaster['TableName'] = getTableName(localStorage.getItem('send_table'));
                // salemaster['TableName'] = getTableName(sendData.get('TableName'));
                localStorage.setItem('send_order_type', "1");
                localStorage.setItem('send_table', "");
                localStorage.setItem('send_waiter', "");
            }
        }
        var res=[];

        res['master']=salemaster;
        res['detail']=saledetail;

        var n=localStorage.getItem('salesoffline');
        /*console.log(n);*/
        if(n===null || n<0){
            localStorage.setItem('salesoffline',0);
            n=0;
        }
        localStorage.setItem('sale'+n,JSON.stringify(arraysend));
        localStorage.setItem('salesoffline',parseFloat(n)+1);

        las_in['sale_last_record_id']=parseFloat(las_in['sale_last_record_id'])+1;
        localStorage.setItem('last_info',JSON.stringify(las_in));
        if(restaurant===true || !isequalvaluecheck($("#ecom").val(),0)) {
            if (sendData.has('OrderRefNo')) {
                localStorage.setItem('recallmode', "ON");
                setorderref(sendData.get('OrderRefNo'), BN);
            }
            localStorage.setItem('recallmode', 'OFF');
            if(restaurant===true){
                make_table_waiter_occupied();
            }
        }else{
            var padnums = pad(las_in['sale_last_record_id'], 5);
            var NBN = padnums + '/' + las_in['uid'] + las_in['un2'];
            $('#bill_no').text(NBN);
        }
        var is_inv=las_in['invoice_bill'];
        if(is_inv==="1") {
            open_invoice_modal(res.master, res.detail, true, showpopup);
        }else{
            open_info_modal(res.master, res.detail, true, showpopup);
        }



        Lockr.rm('Idraft');
        clear_confirmed(restaurant);
        Offline.check();
        /*console.log(Offline.state);*/

        //online work
        var last=parseFloat(n)+1;
        if(restaurant===true) {
            var ordlast = parseFloat(localStorage.getItem('ordersoffline')) + 1;
        }
        if(Offline.state==='down'){
            show_error_message("some error");

        }else {
            callrec_sync(0, last,restaurant);
        }
    }
    function sync_sale(senData,j,last,restaurant){
        var ajax_url = 'https://turabi.cisepos.com/public/insertSale';
        var sendData=new FormData();

        if(senData.BillDiscount==""){
            senData.BillDiscount=0;
            senData.BillDiscountPercentage=0;
        }
        if(senData.DeliveryCharges==""){
            senData.DeliveryCharges=0;
        }
        if(senData.ServiceCharges==""){
            senData.ServiceCharges=0;
        }


        sendData.append('BillDate',senData.BillDate);
        sendData.append('BillTime',senData.BillTime);
        sendData.append('BillNo',senData.BillNo);
        sendData.append('InvoiceNo',senData.InvoiceNo);
        sendData.append('BillDiscountPercentage',senData.BillDiscountPercentage);
        sendData.append('BillDiscount',senData.BillDiscount);
        sendData.append('DeliveryCharges',senData.DeliveryCharges);
        sendData.append('ServiceCharges',senData.ServiceCharges);
        sendData.append('TotalQuantity',senData.TotalQuantity);
        sendData.append('TotalStockQuantity',senData.TotalStockQuantity);
        sendData.append('TotalAmount',senData.TotalAmount);
        sendData.append('billPromoCode',senData.billPromoCode);
        sendData.append('PartyCode',senData.PartyCode);
        sendData.append('PartyAmount',senData.PartyAmount);
        sendData.append('PaymentMode',senData.PaymentMode);
        sendData.append('CashTendered',senData.CashTendered);
        sendData.append('CardAmount',senData.CardAmount);
        sendData.append('PartyAmount',senData.PartyAmount);
        sendData.append('CashBalance',senData.CashBalance);
        sendData.append('BillRemarks',senData.BillRemarks);
        sendData.append('TotalTaxAmount',senData.TotalTaxAmount);
        sendData.append('channel_id',senData.channel_id);
        sendData.append('card_type',senData.card_type);
        sendData.append('CardNo',senData.CardNo);
        sendData.append('CRMCUSCode',senData.CRMCUSCode);
        sendData.append('SalesmanCode',senData.SalesmanCode);
        sendData.append('DeliveryDate',senData.DeliveryDate);
        if(restaurant===true || !isequalvaluecheck($("#ecom").val(),0)) {
            sendData.append('OrderRefNo', senData.OrderRefNo);
        }
        senData.items.forEach(function(item){

            sendData.append('items[]',item);
        });

        show_sync_loader();
        $.ajax({
            method: 'post',
            contentType: false,
            processData: false,
            url:ajax_url,
            async:false,
            dataType:'json',
            headers:{'X-CSRF-Token': 'YWvuFWyFJ4X4qjR8CUySmSYBrsMUI2OVZhSfBISu'},
            data:sendData,
            success: function(response){ // What to do if we succeed
                //console.log(response);
                if(response.status===true){
                    localStorage.removeItem('sale'+j);
                    j++;
                    append_fbr(response.master['BillNo']);
                    callrec_sync(j,last,restaurant);
                }
                else{
                    /*show_error_message("some error");*/
                    j++;
                    callrec_sync(j,last,restaurant);
                    hide_sync_loader();
                }
            },
            error: function(jqXHR, textStatus, errorThrown){ // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                /*hide_sync_loader();*/
                show_error_message("some error");
                /*open_error_modal('some error occured');*/
            }
        });
    }

    function append_fbr(billno){
        if(isequalvaluecheck(las_info['EFBRIntegration'],1)) {
            $.ajax({
                method: 'get',
                contentType: false,
                processData: false,
                url:"https://turabi.cisepos.com/public/fbr/bill/get",
                async:false,
                dataType:'json',
                headers:{'X-CSRF-Token': 'YWvuFWyFJ4X4qjR8CUySmSYBrsMUI2OVZhSfBISu'},
                data:"bill_no="+billno,
                success: function(response){ // What to do if we succeed
                    if(response==0 || response=="Not Available"){
                        $('#FBRqrcode').append("FBR Invoice Number not found");
                    }else{
                        $('#FBRqrcode').qrcode({
                            text: response,
                            width:120,
                            height:120,
                            render:'canvas'
                        });
                        var canvas = $('#FBRqrcode canvas');
                        var spca=canvas.get(0).toDataURL('image/jpeg');
                        $("#FBRqrcode").empty();
                        $("#FBRqrcode").append("<img src='"+spca+"' height='120' width='120'>");


                    }
                },
                error: function(jqXHR, textStatus, errorThrown){ // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    /*hide_sync_loader();*/
                    show_error_message("some error");
                    /*open_error_modal('some error occured');*/
                }
            });

        }
    }
    function matchCustom(params, data) {
        // If there are no search terms, return all of the data
        if ($.trim(params.term) === '') {
            return data;
        }

        // Do not display the item if there is no 'text' property
        if (typeof data.text === 'undefined') {
            return null;
        }

        // `params.term` should be the term that is used for searching
        // `data.text` is the text that is displayed for the data object
        if (data.text.toLowerCase().indexOf(params.term.toLowerCase()) > -1) {
            var modifiedData = $.extend({}, data, true);
            /*modifiedData.text += ' (matched)';*/

            // You can return modified objects from here
            // This includes matching the `children` how you want in nested data sets
            return modifiedData;
        }

        // Return `null` if the term should not be displayed
        return null;
    }

    function submit_payment(showpopup,restaurant,getvaluefrommodal){
        /* show_loader();*/

        var BillNo=$("#bill_no").text();
        var InvoiceNo=$("#inv_no").val();
        var Bilo=BillNo;
        var las_in = JSON.parse(localStorage.getItem('last_info'));
        var BillDate=las_in['current_date'];
        var BillTime=Date.now();

        if(restaurant===true) {

            var padnum = pad(las_in['sale_last_record_id'], 5);
            Bilo = padnum + '/' + las_in['uid'] + las_in['un2'];
        }else{
            var sa_sale=$("#sale_salesman");
            var SalesmanCode=sa_sale.val();
            if(las_in['sc']==="1" && SalesmanCode==="" || SalesmanCode===0){
                open_error_modal("Please Enter Salesman");
                return;
            }

        }
        var bill_disc=$("#bill_dis");
        var bill_disc_number=$("#bill_dis_number");
        if(bill_disc.val()===""){
            bill_disc.val(0);
            bill_disc_number.val(0);
        }
        var BillDiscountPercentage=bill_disc.val();
        var BillDiscount=bill_disc_number.val();
        var DeliveryCharges=$("#del_charges").val();
        var ServiceCharges=$("#ser_charges").val();
        var TotalQuantity=Number($("#totalItem_div").text());
        var TotalStockQuantity=TotalQuantity;
        var TotalAmount=$("#total_div").text();
        var billPromoCode=$("#bill_dis_number").attr("data-billPromoCode");
        var sa_cus=$("#sale_customer");

        var PartyCode="";
        var CRMCUSCode=sa_cus.val();
        if(las_in['cc']==="1" && (CRMCUSCode==="" || CRMCUSCode===0)){
            open_error_modal("Please Enter Customer");
            return;
        }
        var CRMCUSName=sa_cus.attr("data-Customer");
        var CRMCUSAddress=sa_cus.attr("data-CustomerAddress");
        var CRMCUSPhone=sa_cus.attr("data-CustomerPhone");
        var PaymentMode ='cash';
        var amountc=($("#total_paym").text()).replace('PKR',"");
        var cash_tendered = amountc.replace("s ", "");
        var cash_tendered_both=0;
        var cash_balance = 0;
        if(getvaluefrommodal===true) {
            cash_tendered = $("#cash_tendered").val();
            cash_tendered_both = $("#cash_tendered_both").val();
            cash_balance = $("#cash_balance").val();
            PaymentMode=$("#pmode").val();
        }
        var bill_remarks=$("#bill_remarks").val();
        var TaxAmount=$("#total_taxes").text();
        var channel_id=$("#channel_select").find("option:selected").val();
        var card_amount=$("#card_amount").val();
        var PartyAmount=$("#party_amount").val();
        if (PaymentMode==="cash" && (cash_tendered === "" || cash_balance < 0 )) {

            ask_payment_mode(restaurant,0,1);
            return;
        }
        else if(PaymentMode==="both" && (cash_tendered_both === "" || cash_balance < 0 || card_amount === "" || PartyAmount === "")){
            ask_payment_mode(restaurant,2,2);
            return;
        }else if( parseFloat(PartyAmount) > parseFloat(TotalAmount) ){
            ask_payment_mode(restaurant,2,2);
            var sm=$(".pm-type-button.pm-button.button-3");
            select_payment_mode(sm);
            return;
        }
        else{
            var ask_modal=$("#askmodal");
            ask_modal.modal('hide');
        }
        if(PaymentMode==="both"){
            cash_tendered = cash_tendered_both;
            PartyCode = $("#party_code_both").val();

        }


        if(PartyCode===""){
            PartyCode="NULL";
        }


        if(PaymentMode==="party"){
            PartyCode = $("#party_code").val();
        }


        var diver=$('#item_adder');
        var div_id=diver.find('tbody tr');
        var i=1;
        var j=0;
        var sendData=new FormData();



        sendData.append('BillDate',BillDate);
        sendData.append('BillTime',BillTime);
        sendData.append('BillNo',Bilo);
        sendData.append('InvoiceNo',InvoiceNo);
        sendData.append('BillDiscountPercentage',BillDiscountPercentage);
        sendData.append('BillDiscount',BillDiscount);
        sendData.append('DeliveryCharges',DeliveryCharges);
        sendData.append('ServiceCharges',ServiceCharges);
        sendData.append('TotalQuantity',TotalQuantity);
        sendData.append('TotalStockQuantity',TotalStockQuantity);
        sendData.append('TotalAmount',TotalAmount);
        sendData.append('billPromoCode',billPromoCode);
        sendData.append('PartyCode',PartyCode);
        sendData.append('CRMCUSCode',CRMCUSCode);
        sendData.append('SalesmanCode',SalesmanCode);
        sendData.append('PartyName',CRMCUSName);
        sendData.append('PartyAddress',CRMCUSAddress);
        sendData.append('PartyPhone',CRMCUSPhone);
        sendData.append('PaymentMode',PaymentMode);
        sendData.append('CashTendered',cash_tendered);
        sendData.append('CardAmount',card_amount);
        sendData.append('CashBalance',cash_balance);
        sendData.append('BillRemarks',bill_remarks);
        sendData.append('TotalTaxAmount',TaxAmount);


        var arraysend={};
        arraysend['BillDate']=BillDate;
        arraysend['BillTime']=BillTime;
        arraysend['BillNo']=Bilo;
        arraysend['InvoiceNo']=InvoiceNo;
        arraysend['BillDiscountPercentage']=BillDiscountPercentage;
        arraysend['BillDiscount']=BillDiscount;
        arraysend['DeliveryCharges']=DeliveryCharges;
        arraysend['ServiceCharges']=ServiceCharges;
        arraysend['TotalQuantity']=TotalQuantity;
        arraysend['TotalStockQuantity']=TotalStockQuantity;
        arraysend['TotalAmount']=TotalAmount;
        arraysend['billPromoCode']=billPromoCode;
        arraysend['PaymentMode']=PaymentMode;
        arraysend['CashTendered']=cash_tendered;
        arraysend['CardAmount']=card_amount;
        arraysend['CashBalance']=cash_balance;
        arraysend['BillRemarks']=bill_remarks;
        arraysend['TotalTaxAmount']=TaxAmount;
        arraysend['channel_id']=channel_id;
        arraysend['CRMCUSCode']=CRMCUSCode;
        arraysend['SalesmanCode']=SalesmanCode;
        if(las_in['delop']==1){
            var DeliveryDate = $("#delivery_date").val();
            sendData.append('DeliveryDate',DeliveryDate);
            arraysend['DeliveryDate']=DeliveryDate;
        }
        if(restaurant===true || !isequalvaluecheck($("#ecom").val(),0)) {
            if (localStorage.getItem('recallmode') === "ON") {
                sendData.append('OrderRefNo', BillNo);
                arraysend['OrderRefNo'] = BillNo;
            } else {
                sendData.append('OrderRefNo', "");
                arraysend['OrderRefNo'] = "";
            }
        }
        if(PaymentMode==="card"){
            var card_type=$("#card_type").find("option:selected").val();

            var CardNo=$("#card_number").val();
            sendData.append('card_type', card_type);
            arraysend['card_type'] = card_type;
            sendData.append('CardNo', CardNo);
            arraysend['CardNo'] = CardNo;

        }
        if(PaymentMode==="party"){
            PartyCode=$("#party_code").find("option:selected").val();

            sendData.append('PartyCode', PartyCode);
            arraysend['PartyCode'] = PartyCode;
        }

        if(PaymentMode==="both"){
            card_type=$("#card_type_both").find("option:selected").val();

            CardNo=$("#card_number_both").val();
            sendData.append('card_type', card_type);
            arraysend['card_type'] = card_type;

            sendData.append('CardNo', CardNo);
            arraysend['CardNo'] = CardNo;

            sendData.append('CardAmount',card_amount);
            arraysend['CardAmount']=card_amount;

            PartyCode=$("#party_code_both").find("option:selected").val();

            sendData.append('PartyCode', PartyCode);
            arraysend['PartyCode'] = PartyCode;
            sendData.append('PartyAmount',PartyAmount);
            arraysend['PartyAmount']=PartyAmount;




        }

        var itemss=[];
        var quan=0;
        var barcodes_array=[];
        div_id.each(function(){

            var items=[{'SerialNo':i
            ,'BarCode':$(this).find("td.barcode_item").attr('data-itemBarcode')
            ,'BatchNo':$(this).find("td.barcode_item").attr('data-batch_no')
            ,'Quantity':$(this).find("td.q_item").attr('data-itemquantity')
            ,'StockQuantity':$(this).find("td.q_item").attr('data-itemStockQuantity')
            ,'ItemDiscountPercentage':$(this).find('td.rate_item').attr('data-disc')
            ,'ItemDiscountAmount':$(this).find('td.q_tot_price').attr('data-itemDiscountAmount')
            ,'ItemTaxPercentage':$(this).find('td.rate_item').attr('data-itemTaxPercentage')
            ,'ItemTaxAmount':$(this).find('td.q_tot_price').attr('data-itemTaxAmount')
            ,'ItemAmountOnSale':$(this).find('td.rate_item').attr('data-itemrate')
            ,'Edited':$(this).find('td.q_tot_price').attr('data-itemisedited')
            ,'IsModifier':$(this).find('td.name_item').attr('data-IsModifier')
            ,'UnitCode':$(this).find('td.q_item').attr('data-itemunitcode')
            ,'UnitName':get_unitname($(this).find('td.q_item').attr('data-itemunitcode'),restaurant)
            ,'ItemPromoCode':$(this).find('td.q_tot_price').attr('data-itemPromoCode')
        }];
        sendData.append('items[]',JSON.stringify(items));
        barcodes_array.push($(this).find("td.barcode_item").attr('data-itemBarcode'));
        itemss[j]=JSON.stringify(items);
        quan += parseFloat($(this).find("td.q_item").attr('data-itemquantity'));
        i++;
        j++;
    });
        arraysend['items']=itemss;

        if(i>1) {
            if($("#localstorageuse").val()==="0" && restaurant===false) {
                get_sale_items(barcodes_array,function(){
                    save_sale_local(sendData,arraysend,showpopup,restaurant);
                });
            }else{
                save_sale_local(sendData,arraysend,showpopup,restaurant);
            }
        }else{
            open_error_modal("There should be atleast single item in sale");
        }



    }

    function arrange_sales_offline(lasttotal){
        var salesoffline=0;
        var s=0;
        for(var tot=0;tot<lasttotal;tot++){
            if(localStorage.getItem('sale'+tot)!==null) {
                var sale_pres=localStorage.getItem('sale'+tot);
                localStorage.removeItem('sale'+tot);
                localStorage.setItem('sale'+s,sale_pres);
                salesoffline++;
                s++;
            }
        }
        localStorage.setItem('salesoffline',salesoffline);
        $("#offline_sales").text(salesoffline);
        if(salesoffline==0) {
            $("#offline_sales_disp").hide();
        }else{

            $("#offline_sales_disp").empty();
            $("#offline_sales_disp").append('<strong>Total Sales Offline : </strong><strong id="offline_sales" >'+salesoffline+'</strong>');
            $("#offline_sales_disp").append('<div id="sync_butt"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-success" onclick="callrec_sync(0,'+salesoffline+','+localStorage.getItem("businesstyperestaurant")+')" id="submit_payment_dd"><i class=\'fa fa-refresh\'></i>Synchronize ALL</div></div>');
            $("#offline_sales_disp").show();
        }
    }
    function callrec_sync(j,last,restaurant){
        if(j<last) {
            if(localStorage.getItem('sale'+j)!==null){
                /*console.log(j+">"+localStorage.getItem('sale'+j)+">"+last);*/
                var sales = JSON.parse(localStorage.getItem('sale'+j));
                sync_sale(sales,j,last,restaurant);
            } else{
                j++;
                callrec_sync(j,last,restaurant);
                localStorage.removeItem('sale'+j);
            }

        }else{
            localStorage.setItem('salesoffline',0);
            hide_sync_loader();
            //syncing(restaurant);
            arrange_sales_offline(last);
            after_sale_sync(restaurant);
            if(restaurant===true) {
                localStorage.setItem('recallmode', "OFF");
            }
        }
    }
    $( document ).on('click','.edit_item',function (){
        var restaurant=localStorage.getItem('businesstyperestaurant');
        restaurant = restaurant === 'true';
        edit_this_classitem(this,restaurant,1);
    });

    function insert_lockr(div_id){
        var restaurant=localStorage.getItem('businesstyperestaurant');
        restaurant = restaurant === 'true';
        if(restaurant===true) {
            if (localStorage.getItem('recallmode') === "OFF") {
                Lockr.set('Idraft', div_id.html());
            }
        }else{
            Lockr.set('Idraft', div_id.html());
        }
    }

    function hold_this_bill(){
        var diver=$('#item_adder');
        var div_id=diver.find('tbody');
        var restaurant=localStorage.getItem('businesstyperestaurant');
        var heldno=1;
        var totalheld=localStorage.getItem('totalheld');
        if(totalheld){heldno=totalheld;}
        heldno=parseFloat(heldno)+1;
        restaurant = restaurant === 'true';
        if(restaurant===true) {
            if (localStorage.getItem('recallmode') === "OFF") {
                Lockr.set('held'+heldno, div_id.html());
                localStorage.setItem('totalheld',heldno);
            }
        }else{
            Lockr.set('held'+heldno, div_id.html());
            localStorage.setItem('totalheld',heldno);
        }
        arrange_held_bills();
        clear_confirmed(restaurant);


    }
    function arrange_held_bills(){
        var salesheld=0;
        var s=0;
        var totalheld=parseFloat(localStorage.getItem('totalheld'))+1;
        for(var tot=0;tot<totalheld;tot++){

            if(localStorage.getItem('held'+tot)!==null) {
                var sale_pres=localStorage.getItem('held'+tot);
                localStorage.removeItem('held'+tot);
                localStorage.setItem('held'+s,sale_pres);
                salesheld++;
                s++;
            }
            $("#total_bills_on_hold").text("Sales on hold: "+salesheld)
        }
        localStorage.setItem('totalheld',salesheld);
    }
    function show_all_held_bills(){
        arrange_held_bills();
        var totalheld=localStorage.getItem('totalheld');
        var tbody=$("#loadheld-table1 tbody");
        tbody.empty();
        for(var i=0;i<totalheld;i++){
         var k=i+1;
         tbody.append("<tr><td>"+k+"</td><td><button class='btn btn-primary' onclick='get_held_bill("+i+")'>Show</button></td></tr>");
     }
     $("#loadheld").modal('show');
 }
 function get_held_bill(heldno){
    var held=Lockr.get('held'+parseFloat(heldno));
    Lockr.set('Idraft', held);
    Lockr.rm('held'+parseFloat(heldno));
    arrange_held_bills();
    var restaurant=localStorage.getItem('businesstyperestaurant');
    show_list_draft(restaurant);
    $("#loadheld").modal('hide');
}
function clear_confirmed(restaurant){
    var diver=$('#item_adder');
    var Sale_customer=$('#sale_customer_select');
    var sa_cus=$('#sale_customer');
    sa_cus.val("");
    sa_cus.attr("data-CustomerAddress","");
    sa_cus.attr("data-CustomerPhone","");
    sa_cus.attr("data-Customer","");
    var Sale_salesman=$('#sale_salesman_select');
    var sa_sale=$('#sale_salesman');
    sa_sale.val("");
    var div_id=diver.find('tbody');
    div_id.empty();
    Sale_customer.val("");
    Sale_salesman.val("");
    $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");
    clear_bill_disc();
    /*clear_extra_charges();*/
    if(restaurant===true) {
        $("#waiter").text("");
        $("#table").text("");
        $("#void_ord_butt").hide();
        $("#bill_butt").hide();
        $("#cancel_butt").hide();
        $("#tab_wait").show();
        $("#rec_ord").css('display', 'block');
        $("#recallloader").css('display', 'none');
        $("#recall_order").css('display', 'block');
        $("#disc_butt").show();
        var las_in = JSON.parse(localStorage.getItem('last_info'));
        var padnum = pad(las_in['order_last_record_id'], 5);
        $("#bill_no").text(padnum + '/' + las_in['uid'] + las_in['un2']);
        localStorage.setItem('recallmode', "OFF");
    }

    if($("#ecom").val()!==0){
        $("#void_ord_butt").hide();
        $("#bill_butt_ecom").hide();
        $("#cancel_butt").hide();
        $("#recallloader").css('display', 'none');
        $("#rec_ord").css('display', 'block');
        $("#recall_ecom_butt").css('display', 'block');
        $("#disc_butt").show();
        las_in = JSON.parse(localStorage.getItem('last_info'));
        padnum = pad(las_in['order_last_record_id'], 5);
        $("#bill_no").text(padnum + '/' + las_in['uid'] + las_in['un2']);
        localStorage.setItem('recallmode', "OFF");
    }
    calculate_total_amount();
}


/*  customer   work start  */


$(document).on('click','.add_new_customer',function () {
    make_add_customer();
});


function Add_customer(){
    var ajax_url = 'https://turabi.cisepos.com/public/insert_Customer';
    var formData = $("#acf").serialize();
    $.ajax({
            method : 'GET', // Type of response and matches what we said in the route
            url: ajax_url, // This is the url we gave in the route
            data:formData,
            processData: false,
            headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
            success: function(response){ // What to do if we succeed
                /*var select_box=$("#sale_customer");*/
                var msg_box=$('#temp_msg');

                var res=JSON.parse(response);

                msg_box.empty();
                msg_box.append(res.message);
                msg_box.show();
                timeouttempmsg(msg_box);
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                open_error_modal('some error occured');
            }
        });
}

function customer_list(){
    var ajax_url = "https://turabi.cisepos.com/public/customer_data";
    $.ajax({
            method: 'GET', // Type of response and matches what we said in the route
            url: ajax_url,
            processData: false,
            success: function (response) { // What to do if we succeed
                /*localStorage.setItem('customer_list',response);*/
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                /*open_error_modal('some error occured');*/
            }
        });
}

function make_add_customer(){
    var customer=make_input_field('customer');
    var row_start="<div class='row'>";
    var row_end="</div>";
    var area_data=localStorage.getItem('Areas');
    var area=make_select_field('area',JSON.parse(area_data));
    var address=make_input_field('address');
    var phone=make_input_field('phone');
    var fax=make_input_field('fax');
    var mobile=make_input_field('mobile');
    var email=make_input_field_email('email');
    var CustomerCode=make_input_field('CustomerCode');

    var add_modal=$("#addmodal");
    var modal_content=add_modal.children(".modal-dialog").children(".modal-content");
    var modal_title=modal_content.children(".modal-header").children(".modal-title");
    var modal_body=modal_content.children(".modal-body");
    var modal_footer=modal_content.children(".modal-footer");
    modal_title.empty();
    modal_body.empty();
    modal_footer.empty();
    modal_title.append("Add Customer");
    var form_start='<div class="col-sm-12"><form name="acf" id="acf">';
    var form_end='</form></div>';
    var csrf_field='<input type="hidden" name="_token" value="YWvuFWyFJ4X4qjR8CUySmSYBrsMUI2OVZhSfBISu">';
    var acc_mod=JSON.parse(localStorage.getItem('last_info')).account_module;
    if(acc_mod==="1"){
        var is_credit_customer="<div class='col-md-6' ><div class='form-group'><label style=\"text-transform: capitalize;\">Is Credit Customer?</label><select id=\"is_credit_customer\" name=\"is_credit_customer\" placeholder=\"is_credit_customer\">\n" +
        "                                               <option value=\"0\">No</option>\n" +
        "                                               <option value=\"1\">Yes</option>\n" +
        "                                           </select></div></div>";

    }else{
        is_credit_customer="";
    }
    modal_body.append(form_start+csrf_field+row_start+customer+area+row_end+row_start+address+phone+row_end+row_start+fax+mobile+row_end+row_start+email+CustomerCode+row_end+row_start+is_credit_customer+row_end+form_end);
    var add_button='<button id="add_customer" type="button" class="btn btn-danger" data-dismiss="modal" onclick=Add_customer() >Add</button>';
    var cancel_button='<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>';
    modal_footer.append(add_button+cancel_button);
    var area_element=$("#area");
    area_element.css("width","100%");
    area_element.select2({
        matcher: matchCustom
    });
    add_modal.modal('show');
}


/*  customer work end */

function clear_bill_disc(){
    $("#bill_dis_number").removeAttr("readonly");
    $("#bill_dis_number").removeClass("disabled");
    $("#bill_dis").removeAttr("readonly");
    $("#bill_dis").removeClass("disabled");
    $("#bill_dis_number").attr("data-billPromoCode", "");

    $("#showDiscText").find("span#bill_prom_code").remove("span#bill_prom_code");
    $("#bill_dis").val(0);
    $("#bill_dis_number").val(0);
    $("#card_num").val("");

    calculate_total_amount();
}
function clear_extra_charges(){
    $("#del_charges").val(0);
    $("#ser_charges").val(0);

    calculate_total_amount();
}




</script>
<script type="text/javascript">
    $( document ).ready(function() {
        localStorage.setItem('businesstyperestaurant',true);
        localStorage.setItem('vaction','1');
        var restaurant=localStorage.getItem('businesstyperestaurant');
        restaurant = restaurant === 'true';
        ready_functions(restaurant);
        if($(window).width() >575 && $(window).width()< 992){

            $('button.add_new_customer').empty();
            $('button.clear_sale').empty();

            $('button.add_new_customer').append('Add'); 
            $('button.clear_sale').append('Discard');
            $('div.childNav').setBackgroundColor = "#000000";


        }else{
            $('button.add_new_customer').empty();
            $('button.clear_sale').empty();

            $('button.add_new_customer').append('<i class="fa fa-btn fa-plus"></i> Add New Customer');
            $('button.clear_sale').append('<i class="fa fa-btn fa-trash"></i> Discard Sale');
        }

    });

    /* Place Order start */
    function insert_order(senData,cb){
        var ajax_url = 'https://turabi.cisepos.com/public/insertOrder';

        var sendData=new FormData();


        sendData.append('BillDate',senData.BillDate);
        sendData.append('BillTime',senData.BillTime);
        sendData.append('BillNo',senData.BillNo);
        sendData.append('BillDiscountPercentage',senData.BillDiscountPercentage);
        sendData.append('BillDiscount',senData.BillDiscount);
        sendData.append('TotalQuantity',senData.TotalQuantity);
        sendData.append('TotalStockQuantity',senData.TotalStockQuantity);
        sendData.append('TotalAmount',senData.TotalAmount);
        sendData.append('billPromoCode',senData.billPromoCode);
        sendData.append('PartyCode',senData.PartyCode);
        sendData.append('PartyAmount',senData.PartyAmount);
        sendData.append('BillRemarks',senData.BillRemarks);
        sendData.append('TotalTaxAmount',senData.TotalTaxAmount);
        sendData.append('NewItem',senData.NewItem);
        sendData.append('OrderType',senData.OrderType);
        sendData.append('Waiter',senData.Waiter);
        sendData.append('Table',senData.Table);

        senData.items.forEach(function(item){

            sendData.append('items[]',item);
        });

        show_sync_loader();
        $.ajax({
            method: 'post',
            contentType: false,
            processData: false,
            url:ajax_url,
            async:false,
            dataType:'json',
            headers:{'X-CSRF-Token': 'YWvuFWyFJ4X4qjR8CUySmSYBrsMUI2OVZhSfBISu'},
            data:sendData,
                success: function(response){ // What to do if we succeed
                    //console.log(response);
                    if(response.status===true){
                        cb(response['master'],response['detail']);
                        hide_sync_loader();
                    }
                    else{
                        show_error_message("some error");
                        hide_sync_loader();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){ // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    show_error_message("some error");
                }
            });
    }

    /* Place Order end */

    /* Void Order start */


    function voidorder(senddata,cb){
        var ajax_url = 'https://turabi.cisepos.com/public/voidOrder';
        var sendData=new FormData();
        sendData.append('BillNo',senddata.BillNo);
        sendData.append('Reason',senddata.Reason);
        show_sync_loader();
        $.ajax({
            method: 'post',
            contentType: false,
            processData: false,
            url:ajax_url,
            dataType:'json',
            headers:{'X-CSRF-Token': 'YWvuFWyFJ4X4qjR8CUySmSYBrsMUI2OVZhSfBISu'},
            data:sendData,
                success: function(response){ // What to do if we succeed
                    //console.log(response);
                    if(response.status===true){
                        /*location.reload();*/
                        /*open_order_info_modal(res.master,res.detail,true,"Void Order Receipt");*/
                        cb(response);
                        hide_sync_loader();
                    }
                    else{
                        hide_sync_loader();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){ // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    show_error_message("some error");
                }
            });
    }


    /* Void Order end */


    /* Void Item Start */

    function voiditem_sync(senddata,cb){

        var ajax_url = 'https://turabi.cisepos.com/public/voidItem';
        var sendData=new FormData();
        sendData.append('BillNo',senddata.BillNo);
        sendData.append('Reason',senddata.Reason);
        sendData.append('BarCode',senddata.BarCode);

        show_sync_loader();
        $.ajax({
            method: 'post',
            contentType: false,
            processData: false,
            url:ajax_url,
            dataType:'json',
            headers:{'X-CSRF-Token': 'YWvuFWyFJ4X4qjR8CUySmSYBrsMUI2OVZhSfBISu'},
            data:sendData,
                success: function(response){ // What to do if we succeed
                    //console.log(response);
                    if(response.status===true){
                        cb(response);
                        hide_sync_loader();
                    }
                    else{
                        hide_sync_loader();
                        /*open_error_modal(res.message);*/
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){ // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    show_error_message("some error");
                }
            });
    }

    /* Void Item End */
  </script>


    <!-- Sales -->








</body>
</html>