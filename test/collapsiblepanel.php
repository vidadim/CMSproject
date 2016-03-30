<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
    <title>CMS Project - Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/output.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/output.css"> -->
</head>

<body>
    <div class="test no-gutter">
        <?php 
            include '../nav_panel.php';
        ?>
        
        <div class="col-md-10 col-sm-10" id="rightSection">
            <div class="s-row">
                <div class="s-panel">
                    <h3><i class="fa fa-tachometer"></i> Panel </h3>
										
								
											
										<div class="flex">
											<div class="flexItem">
												<h3 class="widgetTitle" >
													<i class="fa fa-cube"></i>Blocks													
													<i class="fa fa-times pull-right "></i>
													<i class="fa fa-expand pull-right"></i>
												</h3>
												<div class="effect">
														<a class="dashboard-button" id="expand"><i class="fa fa-cube"></i>Blocks</a>
												</div>
											</div>

											<div class="flexItem">
												<h3 class="widgetTitle"><i class="fa fa-th-list"></i>Users<i class="fa fa-times pull-right "></i></h3>
												<div class="effect">
														<a href="users.php" class="dashboard-button"><i class="fa fa-users"></i>Users</a>
												</div>
											</div>
									

										<div class="flexItem">
												<h3 class="widgetTitle"><i class="fa fa-th-list"></i>Menu<i class="fa fa-times pull-right "></i></h3>
												<div class="effect">
													<a href="menus.php" class="dashboard-button"><i class="fa fa-th-list"></i>Menu</a>
												</div>
											</div>
										
									
										<div class="flexItem">
												<h3 class="widgetTitle"><i class="fa fa-tags"></i>Pages<i class="fa fa-times pull-right "></i></h3>
												<div class="effect">
														<a href="pages.php" class="dashboard-button"><i class="fa fa-tags"></i>Pages</a>
												</div>
											</div>
										</div> 
											
                   
                    <!-- 
                    <a href="users.php" class="dashboard-button"><i class="fa fa-users"></i>Users</a>
                    <a href="settings.php" class="dashboard-button"><i class="fa fa-gears"></i>Settings</a>
                    <a href="profile.php" class="dashboard-button"><i class="fa fa-user"></i>Edit profile</a> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="../script/script.js"></script>
