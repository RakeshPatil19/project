<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo" style="background-color: #ffffff">
        <!-- BEGIN HEADER -->
        <?php
            require './header.php';
        ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <?php
                        require './sidebar.php';
                    ?>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-head">
                            <h2 style="font-weight:normal; color: #800080" >
                                PHP If Else 
                            </h2>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                       
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        
                        <button type="button" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-left" data-spinner-color="#333" style="background-color:#19a119">
                            <span class="ladda-label">
                                <i class="icon-arrow-left"></i> Previous
                            </span>
                            <span class="ladda-spinner">
                                
                            </span>
                        </button>
                                
                        <button type="button" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-right" style="float:right; background-color:	#19a119">
                            <span class="ladda-label">
                                Next <i class="icon-arrow-right"></i> 
                            </span>
                            <span class="ladda-spinner">
               
                            </span>
                        </button>                        
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div style="border-bottom: 1px solid #D3D3D3; border-top: 1px solid #D3D3D3  ">
                        <p>
                            PHP if else statement is used to test condition. There are various ways to use if statement in PHP.
                        <ul class="note-info">
                        <li> if </li>
                        <li> if-else</li>
                        <li> if-else-if</li> 
                       <li> nested if</li>
                       </ul>
                        </p>
                        
                    </div>
                     <div class="page-title">
                            <h3 style="font-weight:normal; color: #800080" >
                                PHP If Statement 
                            </h3>
                        </div>
                    <div>
                        <p>PHP if statement allows conditional execution of code. It is executed if condition is true.</p>

                        <p>If statement is used to executes the block of code exist inside the if statement only if the specified condition is true.</p>


                    </div>    
                    <div class="page-title">
                            <h4 style="font-weight:normal; color: #800080" >
                                Syntax 
                            </h4>
                        </div>
                    <div style="border-bottom: 1px solid #D3D3D3; border-top: 1px solid #D3D3D3;border-left:  1px solid #D3D3D3;border-right:  1px solid #D3D3D3; padding-left: 20px; padding-top: 10px;padding-bottom: 10px">
                        <b style="color: #0000C0;">if</b>(condition){<br><br>  
                        &nbsp<i style="color: #19a119;">//code to be executed</i><br><br>  
                        }  
                    </div>
                    <div class="page-title">
                            <h4 style="font-weight:normal; color: #800080" >
                                Flowchart 
                            </h4>
                        </div>
                    <img src="<?php echo BASE_URL."/assets/global/img/if1.png"?>">
                    <br>
                    <div class="page-title" style="background-color: #F3F4F5; padding-left: 20px; padding-top:20px; padding-bottom: 20px; ">
                        <h4 style="font-weight:normal; color: #800080" >
                                Example
                        </h4><br>
                        Output : 12 is less than 100 <br>
                        <div class="note note-info" style="background-color: white">
                            <p style="font-weight: normal">
                              
                            &lt;&#63;php<br>              
                           &#36;num=12;<br> 
                           if(&#36;num<100){ <br> 
                            echo "&#36;num is less than 100";<br>  
                              }   <br>
                             ?&gt;<br>
                            
                        </p>
                       
                        
                    </div>
                        <button type="button" class="btn btn-primary mt-ladda-btn ladda-button" data-style="expand-right" style="background-color:	#19a119">
                            <span class="ladda-label">
                                Try it Yourself <i class="icon-arrow-right"></i> 
                            </span>
                            <span class="ladda-spinner">
               
                            </span>
                        </button> 
                  </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
           
           
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
      <?php
            require './footer.php';
        ?>
        <!-- END FOOTER -->
        <!-- BEGIN QUICK NAV -->
      
        
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>