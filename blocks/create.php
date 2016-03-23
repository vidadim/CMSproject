
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


 	<div class="main no-gutter">
  	<?php 
    	include '../nav_panel.php';
 	?>
    <div class="rightSection col-md-10"> 	
	    <div class="s-panel">
		    <h3><i class="fa fa-cube"></i> Add/edit block </h3> 
	    </div>
	    <div class="col-md-9 col-sm-9">
			    
			<form>
			  <div class="form-group">			    
			    <input type="text"  class="form-control" id="exampleInputEmail1" placeholder="Title">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category">
			  </div>
			
				<textarea class="form-control" rows="10" name="content"></textarea>
			        <script src="http://acms.mile-lazar.com/admin_assets/ckeditor/ckeditor.js?t=1603231458759202"></script>
			        <script>
			        var cfg = {
			            "filebrowserBrowseUrl": "http://acms.mile-lazar.com/admin_assets/kcfinder/browse.php",
			            "filebrowserUploadUrl": "http://acms.mile-lazar.com/admin_assets/kcfinder/browse.php",
			            "toolbar": [
			                ["Source", "-", "Bold", "Italic", "Underline", "Strike", "Subscript", "Superscript", "RemoveFormat", "-", "Cut", "Copy", "Paste", "PasteText", "PasteFromWord", "-", "Undo", "Redo"],
			                ["JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyBlock", "NumberedList", "BulletedList", "-", "Blockquote"],
			                ["Flash", "Image", "Link", "Unlink", "Anchor", "Table", "HorizontalRule", "SpecialChar", "-", "Styles", "Format"]
			            ],
			            "language": "en",
			            "defaultLanguage": "en",
			            "stylesSet": "my_styles:http://acms.mile-lazar.com/js/ckeditor-styles.js",
			            "contentsCss": "http://acms.mile-lazar.com/css/editor.css"
			        }
			        </script>
			      <button type="submit" class="btn btn-default">Submit</button>
			</form>
			</div>	    	
	    <div class="col-md-3 col-sm-3">
	    	<div class="container fixed">
			    <div class="sidebar-content">
			        <p class="field-lang">
			            <label for="lang">Dil</label>
			            <select id="lang" name="lang" style="display: none;">
			                <option value="en">English (en)</option>
			                <option selected="selected" value="de">Deutsch (de)</option>
			            </select>
			            <div class="chosen-container chosen-container-single chosen-container-single-nosearch" style="width: 240px;" title="" id="lang_chosen"><a class="chosen-single" tabindex="-1"><span>Deutsch (de)</span><div><b></b></div></a>
			                <div class="chosen-drop">
			                    <div class="chosen-search">
			                        <input type="text" autocomplete="off" readonly="">
			                    </div>
			                    <ul class="chosen-results"></ul>
			                </div>
			            </div>
			        </p>
			        <!-- Only Super Admin can enable or disable editor -->
			        <p class="field-toggle-editor">
			            <input type="checkbox" name="use_editor" id="use_editor" value="1">
			            <label for="use_editor">Toggle visual editor</label>
			        </p>
			    </div>
			    <div class="buttons">
			        <button name="save" value="save" type="submit" class="button2"><i class="fa fa-floppy-o"></i>&nbsp; Сохранить</button>
			        <button name="save" value="save_edit" type="submit">Save and continue editing</button>
			        <button name="save" value="save_new" type="submit">Save and add new</button>
			    </div>
			</div>
	    </div>
	</div>