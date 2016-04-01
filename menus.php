 <!DOCTYPE html>
 <html>
 <head>
 	<title>CMS Project - Menus</title>
 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
  	<div class="main no-gutter" >
	  	<?php 
	        include 'nav_panel.php';
	    ?>
	    <div class="rightSection col-md-10" id="main"> 	

	    	<section class="main-content">
			    <!-- confirmation box -->
			    <div class="g-row">
			        <div class="g-col col1">

				        <div class="s-panel">
					    	<h3><i class="fa fa-th-list"></i> Menu <span class="total-items">(2)</span></h3>
					    </div>
			          	<div class="col-md-12 col-sm-9">
			            <!-- Info, error, success and other notifications -->
			            	<table class="table" style="width:100%">
			                <thead>
			                    <tr>
			                        <th class="icons icons-left"></th>
			                        <th>İdentifier</th>
			                        <th class="title">Title</th>
			                        <th class="lang">Language</th>
			                        <th class="icons" style="width:80px;">&nbsp;</th>
			                    </tr>
			                </thead>
			                <tbody>
			                    <tr id="item_18" class="alt">
			                        <td class="icons icons-left">
			                            <a href="http://acms.mile-lazar.com/admin/menuitems/18/" title="Edit Menu Items"><i class="fa fa-bars"></i></a>
			                            <a href="http://acms.mile-lazar.com/admin/menuitems/reorder/18" class="reorder-icon" id="del_18" title="Reorder Menu Items"><i class="fa fa-sort"></i></a>
			                        </td>
			                        <td><a href="http://acms.mile-lazar.com/admin/menuitems/18/" title="Reorder Menu Items">main</a></td>
			                        <td>Main menu&nbsp;</td>
			                        <td class="lang" align="center">en</td>
			                        <td class="icons">
			                            <a href="http://acms.mile-lazar.com/admin/menus/edit/18" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
			                            <a href="http://acms.mile-lazar.com/admin/menus/delete/18" class="delete" title="Delete"><i class="fa fa-trash-o"></i></a>
			                        </td>
			                    </tr>
			                    <tr id="item_17">
			                        <td class="icons icons-left">
			                            <a href="http://acms.mile-lazar.com/admin/menuitems/17/" title="Edit Menu Items"><i class="fa fa-bars"></i></a>
			                            <a href="http://acms.mile-lazar.com/admin/menuitems/reorder/17" class="reorder-icon" id="del_17" title="Reorder Menu Items"><i class="fa fa-sort"></i></a>
			                        </td>
			                        <td><a href="http://acms.mile-lazar.com/admin/menuitems/17/" title="Reorder Menu Items">main</a></td>
			                        <td>Main menu&nbsp;</td>
			                        <td class="lang" align="center">de</td>
			                        <td class="icons">
			                            <a href="http://acms.mile-lazar.com/admin/menus/edit/17" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
			                            <a href="http://acms.mile-lazar.com/admin/menus/delete/17" class="delete" title="Delete"><i class="fa fa-trash-o"></i></a>
			                        </td>
			                    </tr>
			                </tbody>
			            </table>
			            </div>
			        </div>
			    </div>
			</section>
		</div>  
	</div>
 </body>
 </html>

 	<script type="text/javascript" src="script/script.js"></script>