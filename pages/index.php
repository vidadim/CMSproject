 <!DOCTYPE html>
 <html>
 <head>
	 	<title>CMS Project - Blocks</title>
	 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
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
		    	<h3><i class="fa fa-tags"></i> Pages <span class="total-items">(5)</span></h3> 
		    </div>
			<div class="col-md-9 col-sm-9">			        
				        <!-- Info, error, success and other notifications -->
				        <table style="width:100%" class="table">
				            <thead>
				                <tr>
				                    <th>Block</th>
				                    <th class="title">Title</th>
				                    <th class="lang">Language</th>
				                    <th class="icons">&nbsp;</th>
				                </tr>
				            </thead>
				            <tbody>
				                <tr id="item_360" class="alt">
				                    <td class="title"><a href="http://acms.mile-lazar.com/admin/blocks/edit/360">categories</a></td>
				                    <td>&nbsp;</td>
				                    <td class="lang">de</td>
				                    <td class="icons">
				                        <a href="http://acms.mile-lazar.com/admin/blocks/edit/360" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				                        <a href="http://acms.mile-lazar.com/admin/blocks/delete/360" class="delete" id="del_360"><i class="fa fa-trash-o"></i></a>
				                    </td>
				                </tr>
				                <tr id="item_358">
				                    <td class="title"><a href="http://acms.mile-lazar.com/admin/blocks/edit/358">categories</a></td>
				                    <td>&nbsp;</td>
				                    <td class="lang">en</td>
				                    <td class="icons">
				                        <a href="http://acms.mile-lazar.com/admin/blocks/edit/358" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				                        <a href="http://acms.mile-lazar.com/admin/blocks/delete/358" class="delete" id="del_358"><i class="fa fa-trash-o"></i></a>
				                    </td>
				                </tr>
				                <tr id="item_356" class="alt">
				                    <td class="title"><a href="http://acms.mile-lazar.com/admin/blocks/edit/356">featured_post</a></td>
				                    <td>&nbsp;</td>
				                    <td class="lang">en</td>
				                    <td class="icons">
				                        <a href="http://acms.mile-lazar.com/admin/blocks/edit/356" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				                        <a href="http://acms.mile-lazar.com/admin/blocks/delete/356" class="delete" id="del_356"><i class="fa fa-trash-o"></i></a>
				                    </td>
				                </tr>
				                <tr id="item_355">
				                    <td class="title"><a href="http://acms.mile-lazar.com/admin/blocks/edit/355">latest_post</a></td>
				                    <td>&nbsp;</td>
				                    <td class="lang">en</td>
				                    <td class="icons">
				                        <a href="http://acms.mile-lazar.com/admin/blocks/edit/355" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				                        <a href="http://acms.mile-lazar.com/admin/blocks/delete/355" class="delete" id="del_355"><i class="fa fa-trash-o"></i></a>
				                    </td>
				                </tr>
				                <tr id="item_352" class="alt">
				                    <td class="title"><a href="http://acms.mile-lazar.com/admin/blocks/edit/352">copyright</a></td>
				                    <td>&nbsp;</td>
				                    <td class="lang">en</td>
				                    <td class="icons">
				                        <a href="http://acms.mile-lazar.com/admin/blocks/edit/352" class="edit"><i class="fa fa-pencil-square-o"></i></a>
				                        <a href="http://acms.mile-lazar.com/admin/blocks/delete/352" class="delete" id="del_352"><i class="fa fa-trash-o"></i></a>
				                    </td>
				                </tr>
				            </tbody>
				        </table>	    		  
				
			</div>
			<div class="col-md-3 col-sm-3">
				        <form action="" name="filter_form" class="search-form" method="get" accept-charset="utf-8">
				            <div class="sidebar-content">
				                <p class="field-filter-q toggle-label">
				                    <input placeholder="Enter search term" type="text" name="q" id="q" class="focus" value="">
				                </p>
				                <p class="field-lang">
				                    <div class="dropdown ">
									  <button class="s-btn color btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Language
									  <span class="caret"></span></button>
									  <ul class="dropdown-menu">
									    <li><a href="#">English (en) </a></li>
									    <li><a href="#">Deustch (de) </a></li>								   
									  </ul>
									</div>
												                    
									</p>
									 <div class="buttons">
				                    <button type="submit" class="btn btn-success s-btn">Filter</button>
				                </div>
				                </div>
				               
				            </form>
			</div>
		</div>  
	</div>
 </body>
 </html>

<script type="text/javascript" src="../script/script.js"></script>
