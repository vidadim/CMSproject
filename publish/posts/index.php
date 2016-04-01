
 <!DOCTYPE html>
 <html>
 <head>
	 	<title>CMS Project - Menus</title>
	 	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
	    <script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"   integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="   crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	 	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	 	<link rel="stylesheet" type="text/css" href="../../css/output.css">

 </head>
 <body>
  	<div class="main no-gutter publish" >
	  	<?php
include '../../nav_panel.php';
?>
	    <div class="rightSection col-md-10" id="main">
		    <div class="s-panel">
		    	<h3><i class="fa fa-bullhorn"></i> Posts <span class="total-items">(5)</span></h3>
		    </div>
			<div class="col-md-9 col-sm-9">
				<table class="table">
				    <thead>
				        <tr>
				            <th></th>						<!-- Image -->
				            <th>Title</th>					<!-- Title -->
				            <th>Created</th>				<!-- Creation date -->
				            <th>Category</th>				<!-- Category -->
				            <th>Published</th>				<!-- Published or not -->
				            <th>Featured</th>				<!-- Featured -->
				            <th>Language</th>				<!-- Language -->
				            <th ></th>						<!-- View/Delete/Edit -->
				        </tr>
				    </thead>
				    <tbody id="sortable">
				        <tr id="item_19" class="alt">
				            <td class="icons icons-left">
				                <img src="http://acms.mile-lazar.com/uploads/cms/70_50/70_50_food-1024-768-9.jpg">
				            </td>
				            <td>
				            	<a href="">What am I doing wrong?</a>
				            </td>
				           <td>06.02.1992 14:43:32</td>
				           <td>Category</td>
				           <td><i class="fa fa-check-circle green"></i></td>
				           <td><i class="fa fa-times-circle red"></i></td>
				           <td class="lang">en</td>
				           <td class="icons">
				            	<a href="#"><i class="fa fa-eye"></i></a>
				                <a href=""><i class="fa fa-pencil-square-o"></i></a>
				                <a href=""><i class="fa fa-trash-o"></i></a>
				            </td>
				        </tr>

				        <tr >
				            <td class="icons icons-left">
				               <img src="http://acms.mile-lazar.com/uploads/cms/70_50/70_50_food-1024-768-9.jpg">
				            </td>
				            <td><a href="#">Bazinga</a></td>
				            <td>06.12.2016 14:43:32 </td>
				            <td>Category</td>
				            <td><i class="fa fa-check-circle green"></i></td>
				            <td><i class="fa fa-times-circle red"></i></td>
				            <td class="lang" >en</td>
				            <td class="icons">
				          		 <a href="#"><i class="fa fa-eye"></i></a>
				                <a href=""><i class="fa fa-pencil-square-o"></i></a>
				                <a href=""><i class="fa fa-trash-o"></i></a>
				            </td>
				        </tr>


				        <tr >
				            <td class="icons icons-left">
				               <img src="http://acms.mile-lazar.com/uploads/cms/70_50/70_50_food-1024-768-9.jpg">
				            </td>
				            <td><a href="#">Bazinga</a></td>
				            <td>06.12.2016 14:43:32 </td>
				            <td>Category</td>
				            <td><i class="fa fa-check-circle green"></i></td>
				            <td><i class="fa fa-times-circle red"></i></td>
				            <td class="lang" >en</td>
				            <td class="icons">
				          		 <a href="#"><i class="fa fa-eye"></i></a>
				                <a href=""><i class="fa fa-pencil-square-o"></i></a>
				                <a href=""><i class="fa fa-trash-o"></i></a>
				            </td>
				        </tr>

				        <tr >
				            <td class="icons icons-left">
				               <img src="http://acms.mile-lazar.com/uploads/cms/70_50/70_50_food-1024-768-9.jpg">
				            </td>
				            <td><a href="#">Bazinga</a></td>
				            <td>06.12.2016 14:43:32 </td>
				            <td>Category</td>
				            <td><i class="fa fa-check-circle green"></i></td>
				            <td><i class="fa fa-times-circle red"></i></td>
				            <td class="lang" >en</td>
				            <td class="icons">
				          		 <a href="#"><i class="fa fa-eye"></i></a>
				                <a href=""><i class="fa fa-pencil-square-o"></i></a>
				                <a href=""><i class="fa fa-trash-o"></i></a>
				            </td>
				        </tr>

				        <tr >
				            <td class="icons icons-left">
				               <img src="http://acms.mile-lazar.com/uploads/cms/70_50/70_50_food-1024-768-9.jpg">
				            </td>
				            <td><a href="#">Bazinga</a></td>
				            <td>06.12.2016 14:43:32 </td>
				            <td>Category</td>
				            <td><i class="fa fa-check-circle green"></i></td>
				            <td><i class="fa fa-times-circle red"></i></td>
				            <td class="lang" >en</td>
				            <td class="icons">
				          		 <a href="#"><i class="fa fa-eye"></i></a>
				                <a href=""><i class="fa fa-pencil-square-o"></i></a>
				                <a href=""><i class="fa fa-trash-o"></i></a>
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
		           	p</div>

		        </form>
			</div>
		</div>
	</div>
 </body>
 </html>

<script type="text/javascript" src="../../script/script.js"></script>
