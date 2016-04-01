 <!DOCTYPE html>
 <html>
 <head>
 	<title>CMS Project - Pages</title>
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
		    <div class="s-panel">
		    	<h3><i class="fa fa-tags"></i> Pages <span class="total-items">(6)</span></h3>
		    </div>
			<div class="col-md-9 col-sm-9">			        
				        <!-- Info, error, success and other notifications -->
				        <table class="table">
					        <thead>
					            <tr>
					                <th class="title">Title</th>
					                <th class="url">URL</th>
					                <th class="lang center">Language</th>
					                <th class="icons">&nbsp;</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr id="item_168" class="alt">
					                <td class="title"><a href="http://acms.mile-lazar.com/admin/pages/edit/168" title="Edit">Kontakt</a></td>
					                <td class="url"><a href="http://acms.mile-lazar.com/kontakt" target="_blank">kontakt</a></td>
					                <td class="lang">en</td>
					                <td class="icons">
					                    <a href="http://acms.mile-lazar.com/kontakt" target="_blank"><i class="fa fa-eye"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/edit/168" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/delete/168" class="delete" id="del_168" title="Delete"><i class="fa fa-trash-o"></i></a>
					                </td>
					            </tr>
					            <tr id="item_166">
					                <td class="title"><a href="http://acms.mile-lazar.com/admin/pages/edit/166" title="Edit">Über Uns</a></td>
					                <td class="url"><a href="http://acms.mile-lazar.com/de/uber-uns" target="_blank">uber-uns</a></td>
					                <td class="lang">de</td>
					                <td class="icons">
					                    <a href="http://acms.mile-lazar.com/de/uber-uns" target="_blank"><i class="fa fa-eye"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/edit/166" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/delete/166" class="delete" id="del_166" title="Delete"><i class="fa fa-trash-o"></i></a>
					                </td>
					            </tr>
					            <tr id="item_165" class="alt">
					                <td class="title"><a href="http://acms.mile-lazar.com/admin/pages/edit/165" title="Edit">Contact</a></td>
					                <td class="url"><a href="http://acms.mile-lazar.com/contact" target="_blank">contact</a></td>
					                <td class="lang">en</td>
					                <td class="icons">
					                    <a href="http://acms.mile-lazar.com/contact" target="_blank"><i class="fa fa-eye"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/edit/165" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/delete/165" class="delete" id="del_165" title="Delete"><i class="fa fa-trash-o"></i></a>
					                </td>
					            </tr>
					            <tr id="item_152">
					                <td class="title"><a href="http://acms.mile-lazar.com/admin/pages/edit/152" title="Edit">About</a></td>
					                <td class="url"><a href="http://acms.mile-lazar.com/about" target="_blank">about</a></td>
					                <td class="lang">en</td>
					                <td class="icons">
					                    <a href="http://acms.mile-lazar.com/about" target="_blank"><i class="fa fa-eye"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/edit/152" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/delete/152" class="delete" id="del_152" title="Delete"><i class="fa fa-trash-o"></i></a>
					                </td>
					            </tr>
					            <tr id="item_151" class="alt">
					                <td class="title"><a href="http://acms.mile-lazar.com/admin/pages/edit/151" title="Edit">Hauptseite</a></td>
					                <td class="url"><a href="http://acms.mile-lazar.com/de//" target="_blank">/</a></td>
					                <td class="lang">de</td>
					                <td class="icons">
					                    <a href="http://acms.mile-lazar.com/de//" target="_blank"><i class="fa fa-eye"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/edit/151" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/delete/151" class="delete" id="del_151" title="Delete"><i class="fa fa-trash-o"></i></a>
					                </td>
					            </tr>
					            <tr id="item_150">
					                <td class="title"><a href="http://acms.mile-lazar.com/admin/pages/edit/150" title="Edit">Home</a></td>
					                <td class="url"><a href="http://acms.mile-lazar.com//" target="_blank">/</a></td>
					                <td class="lang">en</td>
					                <td class="icons">
					                    <a href="http://acms.mile-lazar.com//" target="_blank"><i class="fa fa-eye"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/edit/150" class="edit" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
					                    <a href="http://acms.mile-lazar.com/admin/pages/delete/150" class="delete" id="del_150" title="Delete"><i class="fa fa-trash-o"></i></a>
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

 	<script type="text/javascript" src="script/script.js"></script>