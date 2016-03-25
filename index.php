<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
    <title>CMS Project - Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/output.css"> -->
</head>

<body>
    <div class="main no-gutter">
        <?php 
            include 'nav_panel.php';
        ?>
        
        <div class="col-md-10 col-sm-10" id="rightSection">
            <div class="s-row">
                <div class="s-panel">
                    <h3><i class="fa fa-tachometer"></i> Panel <span class="total-items"></span></h3>
                    <a href="blocks.php" class="dashboard-button"><i class="fa fa-cube"></i>Blocks</a>
                    <a href="menus.php" class="dashboard-button"><i class="fa fa-th-list"></i>Menu</a>
                    <a href="pages.php" class="dashboard-button"><i class="fa fa-tags"></i>Pages</a>
                    <a href="categories.php" class="dashboard-button"><i class="fa fa-bullhorn"></i>Categories</a>
                    <a href="publish.php" class="dashboard-button"><i class="fa fa-bullhorn"></i>Publish</a>
                    <a href="users.php" class="dashboard-button"><i class="fa fa-users"></i>Users</a>
                    <a href="settings.php" class="dashboard-button"><i class="fa fa-gears"></i>Settings</a>
                    <a href="profile.php" class="dashboard-button"><i class="fa fa-user"></i>Edit profile</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="script/script.js"></script>