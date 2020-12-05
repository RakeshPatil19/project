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
                                HTML Table  
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
                            <b>HTML table tag</b> is used to display data in tabular form (row * column). There can be many columns in a row.
                            We can create a table to display data in tabular form, using &lt;table&gt; element, with the help of &lt;tr&gt; , &lt;td&gt;, and &lt;th&gt; elements.
                            In Each table, table row is defined by &lt;tr&gt; tag, table header is defined by &lt;th&gt;, and table data is defined by &lt;td&gt; tags.
                            HTML tables are used to manage the layout of the page e.g. header section, navigation bar, body content, footer section etc. But it is recommended to use div tag over table to manage the layout of the page .


                        </p>
                        
                    </div>
                     <div class="page-title">
                            <h3 style="font-weight:normal; color: #800080" >
                                HTML Table Tags
                            </h3>
                        </div>
                        <table id="table1">
                            <tr>
                                <th>Tag</th>
                                <th>Description</th> 
                            </tr>
                            <tr>
                                <td>&lt;Table&gt;</td>
                                <td>It defines a table.</td>
                            </tr>
                            <tr>
                                <td>&lt;tr&gt;</td>
                                <td>It defines a row in a table.</td>
                            </tr>
                            <tr>
                                <td>&lt;th&gt;</td>
                                <td>It defines a header cell in a table.</td>
                            </tr>
                            <tr>
                                <td>&lt;td&gt;</td>
                                <td>It defines a cell in a table.</td>
                            </tr>
                            <tr>
                                <td>&lt;caption&gt;</td>
                                <td>It defines the table caption.</td>
                            </tr>
                            <tr>
                                <td>&lt;colgroup&gt;</td>
                                <td>It specifies a group of one or more columns in a table for formatting.</td>
                            </tr>
                            <tr>
                                <td>&lt;col&gt;</td>
                                <td>It is used with <colgroup> element to specify column properties for each column.</td>
                            </tr>
                            <tr>
                                <td>&lt;tbody&gt;</td>
                                <td>It is used to group the body content in a table.</td>
                            </tr>
                            <tr>
                                <td>&lt;thead&gt;</td>
                                <td>It is used to group the header content in a table.</td>
                            </tr>
                            <tr>
                                <td>&lt;tfooter&gt;</td>
                                <td>It is used to group the footer content in a table.</td>
                            </tr>
                        </table>
                        
                    <br>
                    <div class="page-title" style="background-color: #F3F4F5; padding-left: 20px; padding-top:20px; padding-bottom: 20px; ">
                        <h4 style="font-weight:normal; color: #800080" >
                                Example
                        </h4><br>
                        <br>
                        <div class="note note-info" style="background-color: white">
                             <form action="editor.php" method="post" id="nameform">
                            <p style="font-weight: normal">
                                <textarea rows="10" cols="90" name="fname" style="text-align: left">  
                            <table border="1">  
                                <tr><th>First_Name</th><th>Last_Name</th><th>Marks</th></tr>  
                                <tr><td>Sonoo</td><td>Jaiswal</td><td>60</td></tr>  
                                <tr><td>James</td><td>William</td><td>80</td></tr>  
                                <tr><td>Swati</td><td>Sironi</td><td>82</td></tr>  
                                <tr><td>Chetna</td><td>Singh</td><td>72</td></tr>  
                            </table>  
                           </textarea>
                        </p>
                       
 
                       
                        
                    </div>
                        <button type="submit" form="nameform" value="submit"  class="btn btn-primary mt-ladda-btn ladda-button" onclick="window.location.href='editor.php'" data-style="expand-right"  style="background-color:	#19a119">
                            <span class="ladda-label">
                                   Try it Yourself <i class="icon-arrow-right"></i> 
                            </span>
                            <span class="ladda-spinner">
               
                            </span>
                        </button> 
                    </form>
    
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