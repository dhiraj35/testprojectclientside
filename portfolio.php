<?php 
//session_start();
//include 'check_session.php'; 
include 'commonfunction.php';   
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
                        Portfolio
                        <small>
                          Portfolio Manager 
                        </small>
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
<script type="text/javascript">
    
    $("#role_id").selectpicker({  
        noneSelectedText: 'Role',  
        size: 10
    });
    
    var t;
    var DatatableRemoteAjaxDemo = function () {  
         t = function () {
             t = $("#testdt").mDatatable({
                data: {
                    type: "remote",
                    source: {
                        read: {
                            url: "http://127.0.0.1:8144/portfolio_data.php"        
                        }
                    },
                    pageSize: 10,
                    saveState: false,
                    serverPaging: !0,
                    serverFiltering: !0,
                    serverSorting: !0
                },
                layout: {
                    theme: "default",
                    class: "",
                    scroll: !1,
                    footer: !1
                },
                sortable: !0,
                filterable: !1,
                pagination: !0,
                columns: [{
                        field: "port_name",  
                        title: "Name",
                        filterable: !1,
                        width: 150,
                         template: function (t) {
                            return '<a class="m-link m--font-boldest" style="cursor:pointer;" href="/transaction_details.php?id=' + t.id + '" >' + t.port_name + '</a>';    
                        }
                    
                    }, 
                    {
                        field: "no_security",
                        title: "Number of Holding(Security)",
                        filterable: !1,
                        width: 250,
                    },
                    {
                        field: "mod_date",
                        title: "Modified Date",
                        filterable: !1,
                        width: 150,
                    },
                ] 
            }),
                    e = t.getDataSourceQuery();  
                    $("#first_name").on("keyup", function () {  
                var a = t.getDataSourceQuery();
                a.first_name = $(this).val().toLowerCase(), t.setDataSourceQuery(a), t.load()
            }).val(e.client_name)
            //         $("#last_name").on("keyup", function () {
            //     var a = t.getDataSourceQuery();
            //     a.last_name = $(this).val().toLowerCase(), t.setDataSourceQuery(a), t.load()
            // }).val(e.consumer_no),
            //         $("#role_id").on("change", function () {
            //     var e = t.getDataSourceQuery();
            //     e.role_id = $(this).val(), t.setDataSourceQuery(e), t.load()
            // }).val(void 0 !== e.client_type ? e.client_type : "")   
        },
        ef = function () {               
        $(".m-datatable").on("m-datatable--on-layout-updated", function () {
        $('.order-window').selectpicker();  
        });
};
          
        return {
            init: function () {
                t(),ef()
                
            }
        }
    }();
    
    jQuery(document).ready(function () { 
        DatatableRemoteAjaxDemo.init()
    });
    function resetval() {      
        $("#first_name").val("");
        // $("#last_name").val("");  
        // $("#role_id").selectpicker('deselectAll');    
        var a = t.getDataSourceQuery();
            a.first_name = "",
            // a.last_name = "",    
            // a.role_id = "",
            t.setDataSourceQuery(a), t.load()
        }  
        </script>
        

