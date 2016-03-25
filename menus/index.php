 <!DOCTYPE html>
 <html>
 <head>
	 	<title>CMS Project - Menus</title>
	 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
	    <script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"   integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="   crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	 	<link rel="stylesheet" type="text/css" href="../css/style.css">

 </head>
 <body>
  	<div class="main no-gutter" >
	  	<?php 
	        include '../nav_panel.php';
	    ?>
	    <div class="rightSection col-md-10" id="main"> 	
		    <div class="s-panel">
		    	<h3><i class="fa fa-th-list"></i> Menus <span class="total-items">(5)</span></h3> 
		    </div>
			<div class="col-md-12 col-sm-12">			     
				<table class="table">
				    <thead>
				        <tr>
				            <th class="icons icons-left"></th>
				            <th>İdentifier</th>
				            <th class="title">Title</th>
				            <th class="lang">Language</th>
				            <th class="icons" style="width:80px;">&nbsp;</th>
				        </tr>
				    </thead>
				    <tbody id="sortable">
				        <tr id="item_19" class="alt">
				            <td class="icons icons-left">
				                <a href="http://acms.mile-lazar.com/admin/menuitems/19/" title="Menü nesnelerini düzenle"><i class="fa fa-bars"></i></a>
				                <a href="http://acms.mile-lazar.com/admin/menuitems/reorder/19" class="reorder-icon" id="del_19" title="Reorder Menu Items"><i class="fa fa-sort"></i></a>
				            </td>
				            <td><a href="http://acms.mile-lazar.com/admin/menuitems/19/" title="Reorder Menu Items">xzcdc</a></td>
				            <td>xsac&nbsp;</td>
				            <td class="lang">en</td>
				            <td class="icons">
				                <a href="http://acms.mile-lazar.com/admin/menus/edit/19" class="edit" title="Düzenle"><i class="fa fa-pencil-square-o"></i></a>
				                <a href="http://acms.mile-lazar.com/admin/menus/delete/19" class="delete" title="Sil"><i class="fa fa-trash-o"></i></a>
				            </td>
				        </tr>
				        <tr id="item_18">
				            <td class="icons icons-left">
				                <a href="http://acms.mile-lazar.com/admin/menuitems/18/" title="Menü nesnelerini düzenle"><i class="fa fa-bars"></i></a>
				                <a href="http://acms.mile-lazar.com/admin/menuitems/reorder/18" class="reorder-icon" id="del_18" title="Reorder Menu Items"><i class="fa fa-sort"></i></a>
				            </td>
				            <td><a href="http://acms.mile-lazar.com/admin/menuitems/18/" title="Reorder Menu Items">main</a></td>
				            <td>Main menu&nbsp;</td>
				            <td class="lang" >en</td>
				            <td class="icons">
				                <a href="http://acms.mile-lazar.com/admin/menus/edit/18" class="edit" title="Düzenle"><i class="fa fa-pencil-square-o"></i></a>
				                <a href="http://acms.mile-lazar.com/admin/menus/delete/18" class="delete" title="Sil"><i class="fa fa-trash-o"></i></a>
				            </td>
				        </tr>
				    </tbody>
				</table>

			</div>
		</div>  
	</div>
 </body>
 </html>

<script type="text/javascript" src="../script/script.js"></script>
