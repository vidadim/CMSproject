<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>

	<!-- jQuery UI -->
	<script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"   integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>

	<!-- Bootsrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

	<!-- My Very Own -->

 	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 	<link rel="stylesheet" type="text/css" href="{{ asset('css/output.css') }}">
 	<script src="{{ asset('js/script.js') }}"></script>

</head>
<body>
	<div class="main no-gutter" >
        <div class="col-md-2" id="navPanel">
            <ul class="s-nav">
                <li class="profile">
                    <ul>
                        <li><a class="sub">Developer user</a></li>
                         <li><a href=""><i class="fa fa-sign-out"></i>Sign out</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#/admin">
                        <i class="fa fa-tachometer"></i>Panel</a>
                </li>
                <li>
                    <a href="blocks/index.php">
                        <i class="fa fa-cube"></i>Blocks
                    </a>
                    <a href="blocks/create.php" class="add">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </li>
                <li>
                    <a href="menus/index.php">
                        <i class="fa fa-th-list"></i>Menu
                    </a>
                    <a href="menus/create.php" class="add">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </li>
                <li>
                	<a href="pages/index.php">
                		<i class="fa fa-tags"></i>Pages</a>
					<a href="pages/create.php" class="add">
						<i class="fa fa-plus-circle"></i>
					</a>
                </li>




                <li class="dropdown drop">
	                <a href="#" class="dropdown-toggle sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                	<i class="fa fa-bullhorn"></i>Publish
                        <i class="fa fa-caret-down caret1" style="float: right;margin-right: 11px"></i>
	                </a>

    					<ul class="dropdown-menu">
    						<li class="sub-li">
    							<a href="publish/categories/index.php" class="label">Categories</a>
    							<!-- <a href="publish/categories/create.php" class="add">
    								<i class="fa fa-plus-circle"></i>
    							</a> -->
    						</li>
    						<li class="sub-li">
    							<a href="publish/posts/index.php" class="label">Posts</a>
    							<!-- <a href="publish/posts/create.php" class="add"><i class="fa fa-plus-circle"></i></a> -->
    						</li>
    					</ul>
                </li>





                <li>
                	<a href="users/index.php"><i class="fa fa-users"></i>Users</a>
					<a href="users/create.php" class="add"><i class="fa fa-plus-circle"></i></a>
                </li>
                <!-- <li>
                	<a href="http://acms.mile-lazar.com/admin/settings/translate" class="sub"><i class="fa fa-gears"></i>Ayarlar</a>
					<ul>
						<li class="sub-li">
							<a class="label" href="http://acms.mile-lazar.com/admin/settings/translate">Translations</a>
						</li>
					</ul>
                </li> -->
            </ul>
        </div>

		<div class="rightSection col-md-10" id="main">

			@yield('content')

		</div>
	</div>
</body>
</html>