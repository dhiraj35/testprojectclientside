<?php 
session_start();
//include 'check_session.php'; 
include 'commonfunction.php';  
$id = $_GET['id'];   
if( $id > '0'){
     $idWhere='where  id = '.$id.'';   
     $darr = $dbh->prepare("SELECT name  FROM tbl_portfolio  $idWhere");
     $darr->execute();  
     $selectData = $darr->fetchAll(PDO::FETCH_ASSOC);  
    }
?>
<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            Demo | Dashboard
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;  
                }
            });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
        <link href="metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors -->
        <link href="metronic/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="metronic/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="metronic/assets/demo/default/media/img/logo/favicon1.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <?php include 'header.php'; ?>
            <!-- END: Header -->		
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                    <i class="la la-close"></i>
                </button>
                <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
                    <!-- BEGIN: Aside Menu -->
                    <?php include 'sidebar.php'; ?>
                    <!-- END: Aside Menu -->
                </div>
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader">  
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <!--            <h3 class="m-subheader__title m-subheader__title--separator">
                                                Inventory Category
                                            </h3>-->
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item m-nav__item--home">
                                        <a href="#" class="m-nav__link m-nav__link--icon">
                                            <i class="m-nav__link-icon la la-home"></i>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                Dashboard
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
                                        -
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="javascript:;" class="m-nav__link">
                                            <span class="m-nav__link-text">
                                                Portfolio Manager
                                            </span>
                                        </a>
                                    </li>       
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END: Subheader -->
                    <div class="m-content"> 
                        <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Transaction of <?=$selectData[0]['name']?>
                    </h3>
                </div>
            </div>  
                        <div class="m-portlet__head">
                        <!--<div class="m-portlet__head-tools">
                            <div class="btn-group" role="group" aria-label="Button group"> 
                                <button type="button" class="m-btn m-btn--air btn btn-info btn-sm" data-toggle="collapse" data-target="#subAreaForm1">
                                    <i class="flaticon-interface-6"></i> Filter
                                </button>
                            </div>  
                        </div> -->
                        </div>  
                        
                        <div class="m-portlet__body">
                            <div id="subAreaForm1" class="m-form m-form--label-align-right m--margin-bottom-5 ">
                                <form method="post" id="advSearch" action="#" name="advSearch" onsubmit="javascript:return false;" >
                                    <div class="row align-items-center">
                                        <div class="col-xl-12 order-2 order-xl-1">
                                            <div class="form-group m-form__group row align-items-center">                                                       
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control m-input m-input--air" autocomplete="off" name="first_name"  placeholder="First Name" title="First Name" id="first_name">
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div>

                                                <div class="col-md-3">
                                    <div class='input-group date' ><!-- id='m_daterangepicker_6' -->
                                        <input type='text' class="form-control m-input" id="joining_date" name="joining_date" readonly  placeholder="Select Date" value=""/>
                                        <span class="input-group-addon" onclick="javascript:$('#joining_date').trigger('focus');">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                </div>
                                               <!--  <div class="col-md-3">
                                                    <input type="text" class="form-control m-input m-input--air" autocomplete="off" name="last_name"  placeholder="Last Name" title="Last Name" id="last_name">
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div> -->
                                                <!-- <div class="col-md-3">
                                                    <select class="form-control m-input m-input--air m-bootstrap-select m_selectpicker" multiple data-actions-box="true" name="role_id[]" id="role_id" data-live-search="true">                                       
                                                        <?php foreach ($userArr as $key => $val) { ?>
                                                            <option value="<?php echo $key; ?>"><?php echo $val; ?></option>
                                                        <?php } ?>
                                                    </select>  
                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                </div> -->
                                                <div class="col-md-3">
                                                <div class="m-input-icon m-input-icon--left">
                                                    <button type="button" name="reset_id" class="btn btn-sm m-btn m-btn--air btn-danger" id="reset_id" onclick="resetval()"><i class="flaticon-refresh"></i>&nbsp; Reset</button>
                                                </div>
                                            </div>
                                            </div>
                                            

                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!--end: Search Form -->
                            <!--begin: Datatable -->
                            <div id="testdt"></div>
                            <!--end: Datatable -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- end:: Body -->
            <?php include('footer.php'); ?>  
        </div>
        <!-- end:: Page -->
        <!-- begin::Quick Sidebar -->
       
        <!-- end::Quick Sidebar -->		    
        <!-- begin::Scroll Top -->
        <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->

        <!-- begin::Quick Nav -->	

       

    </body>
    <!-- end::Body -->
</html>
<style>
    .m-datatable__table{min-height: 275px;}
    
    #group_2{padding-top: 0;}
    
    @media (max-width: 768px){#reset_id{float: right;}}  
</style>
 <?php include('script.php'); ?>  

    <script>


    
        
            
//        function checkauthexportkey() {
//        var authkey = $('#authkeyid_export').val();
//
//        $('#autherror_export').remove();
//        var loading = '<div id="authloading_export" class="alert alert-warning fade-in"><i class="fa fa-cog fa-3x fa-spin"></i>&nbsp;Checking..... </div>';
//        $('#quick-task-modal-authkey_export').find('.modal-body ').append(loading);
//        $.ajax({
//            type: 'POST',
//            url: '/Inventory/Inventory/checkauthexport',
//            async: false,
//            data: {authkey: authkey},
//            success: function (response) {
//                if (response == 1) {
//                    $('#quick-task-modal-authkey_export').modal('hide');
//                    $('#authloading_export').remove();
//                    document.advSearch.action = "/Inventory/Inventory/inoutinventoryexport";
//                    document.advSearch.submit();
//                    document.advSearch.action = "/Inventory/Inventory/inventoryinoutdetails";
//                } else {
//                    var message = '<div id="autherror_export" class="alert alert-danger fade-in" style="margin-top:1%;">Invalid Auth Key</div>';
//                    $('#authloading_export').remove();
//                    $('#quick-task-modal-authkey_export').find('.modal-body ').append(message);
//                }
//            }
//        });
//    }
                    


var r,t;
    var DatatableChildDataLocalDemo = function () {
     r = function (r) {
//        console.log(r);
            $("<div/>").attr("id", "child_data_local_" + r.data.RecordID).appendTo(r.detailCell).mDatatable({

                data: {
                    type: "local",
                    source: r.data.Orders,
                    pageSize: 10,
                    saveState: {
                        cookie: !0,
                        webstorage: !0
                    }
                },
                layout: {
                    theme: "default",
                    scroll: !0,
                    height: 300,
                    footer: !1,
                    spinner: {
                        type: 1,
                        theme: "default"
                    }
                },
                sortable: !0,
                columns: [/*{
                        field: "subsr",
                        title: "Sr",
                        sortable: !1  
                    },*/ {
                        field: "type",
                        title: "Type",
                    },  {
                        field: "Date",
                        title: "Date"
                    }, 
                    {
                        field: "shares",
                        title: "Shares"
                    },
                    {
                        field: "price",
                        title: "Price"
                    },
                    {
                        field: "amount",
                        title: "Amount"
                    }]  
            })
        },
        t = function () {  
               var t =  $("#testdt").mDatatable({    
                         data: {
                            type: "remote",
                            //source: e, 
                            source: {
                        read: {  
                 url: "http://127.0.0.1:8144/transaction_details_data.php?id=<?=$id?>"        
                        }
                    },
                            pageSize: 10,
                            serverPaging: !0,  
                            saveState: {
                                cookie: !0,
                                webstorage: !0
                            }
                        },
                        layout: {
                            theme: "default",
                            scroll: !1,
                            height: null,
                            footer: !1
                        },
                        sortable: !0,
                        filterable: !1,
                        pagination: !0,
                        detail: {
                            title: "Load sub table",
                            content: r
                        },
                        columns: [/*{  
                                field: "RecordID",
                                title: "",
                                sortable: !1,
                                width: 20,
                                textAlign: "center"
                            }, */
                           {
                                field: "msr",
                                title: "",  
                                sortable: !1,
                                 width: 20,
                            },
                            {
                                field: "sec_name",  
                                title: "Name",  
                                sortable: !1,
                                 width: 80,
                            },
                            {
                                field: "Date",
                                title: "Date",  
                                sortable: !1,
                                 width: 80,
                            }
                            // {
                            //     field: "created_by",
                            //     title: "Created By",  
                            //     sortable: !1,
                            //      width: 100,
                            // },
                            // {
                            //     field: "modified_date",  
                            //     title: "Modified Date",  
                            //     sortable: !1,
                            //      width: 80,
                            // },
                            
                        ]
                    }),
                     e = t.getDataSourceQuery();       
                $("#category_id").on("change", function () {
                var e = t.getDataSourceQuery();
                e.category_id = $(this).val(), t.setDataSourceQuery(e), t.load()
                }).val(e.category_id), 
                $("#subcategory_id").on("change", function () {
                var e = t.getDataSourceQuery();
                e.subcategory_id = $(this).val(), t.setDataSourceQuery(e), t.load()
               }).val(e.subcategory_id), 
                $("#header_id").on("change", function () {
                var e = t.getDataSourceQuery();
                e.header_id = $(this).val(), t.setDataSourceQuery(e), t.load()
                }).val(e.header_id),
                 $('#reset_id').on("click",function(){       
                        $("#category_id").selectpicker('deselectAll');
                        $("#subcategory_id").selectpicker('deselectAll');
                        $("#header_id").selectpicker('deselectAll');
                        var a = t.getDataSourceQuery();    
                            a.category_id = "",
                            a.subcategory_id = "",        
                            a.header_id = "",  
                          t.setDataSourceQuery(a), t.load() 
                    });
                            
                };
        return {
            init: function () {
                t()   
            }
        }
        
    }();  
    
    jQuery(document).ready(function () {  
        DatatableChildDataLocalDemo.init();
    });
    
    
    
</script>
        
        

