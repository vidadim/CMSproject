<!DOCTYPE html>
<html>

<head>
    <title>CMS Project - Add/Edit Users</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- CKeditor -->
    <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
</head>

<body>
    <div class="pages no-gutter">
        <?php 
	    	include '../nav_panel.php';
	 	?>
        <div class="rightSection col-md-10" id="main">
            <div class="s-panel">
                <h3><i class="fa fa-users"></i>Add/edit user</h3>
            </div>
            <div class="col-md-9 col-sm-9">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="page_name" placeholder="User e-mail">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="page_name" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="page_name" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="page_name" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <p class="leave-blank">Leave password fields blank if you do not want to change the password.</p>
                    <label for="bio">Bio</label>
                    <textarea class="form-control" id="editor_pages" rows="10" name="content"></textarea>
                    <label for="group">User group</label>
                    <p class="field-group">
                        <select id="group" name="group">
                            <option value="4" selected="selected">Super Admin</option>
                            <option value="3">Admin</option>
                            <option value="2">Editor</option>
                            <option value="1">User</option>
                        </select>
                    </p>
                </form>
            </div>
            <div class="col-md-3 col-sm-3">
                <form action="" name="filter_form" class="search-form" method="get" accept-charset="utf-8">
                    <div class="sidebar-content">
                        <div class="buttons">
                            <button type="submit" class="btn btn-success s-btn">Save</button>
                            <button type="button" class="btn btn-primary s-btn">Save and continue editing</button>
                            <button type="button" class="btn btn-primary s-btn">Save and add new</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript" src="../script/script.js"></script>
