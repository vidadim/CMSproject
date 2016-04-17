  @extends('layouts.main')

@section('content')
		    <div class="s-panel">
			    <h3><i class="fa fa-bullhorn"></i>Add/edit post</h3>
		    </div>
		    <div class="col-md-9 col-sm-9"> 

			{!! Form::open(['action' => 'postController@store','method'=>'post']) !!}
				{!! Form::token(); !!} 
				<div class="form-group">
					{!! Form::text('title','', ['class' => 'form-control','placeholder'=>'Title']); !!}
				</div>

				<div class="form-group">
					{!! Form::textarea('content','', ['class' => 'form-control','placeholder'=>'Content','id'=>'contentarea']); !!}
				</div>
				<div class="form-group">
					{!! Form::submit('submit',['class'=> 'form-control btn btn-primary']); !!}
				</div>
				<div class="form-group">
						<div class="dropdown">
					    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Author
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
					      <li><a href="#">User 1</a></li>
					      <li><a href="#">User 2</a></li>
					      <li><a href="#">User 3</a></li>
					    </ul>
					  </div>
				</div>	
			{!! Form::close() !!}


				<table class="table table-images">
				<thead>
					<tr>
						<th>Image</th>
						<th>Title (title tag)</th>
						<th>Description (alt tag)</th>
						</tr>
				</thead>
				<tbody>
					<tr class="alt">
						<td>
							<div class="image-upload">
								<input type="hidden" name="image_id" value="">
								<input type="hidden" name="image_name" value="">

								<div class="form-group">
									<input class="btn btn-default" type="file" id="file" name="userfile" size="60">
								</div>

							</div>
						</td>

						<td><input type="text" name="image_title" value=""></td>
						<td><input type="text" name="image_alt" value=""></td>
					</tr>
				</tbody>
			</table>
			</div>
		    <div class="col-md-3 col-sm-3">
		    	<form action="store" name="filter_form" class="search-form" method="post" accept-charset="utf-8">
				    <div class="sidebar-content">
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
							<div class="form-group">
								<label class="checkbox-inline">
								<input class="checkbox" id="toggleeditor" type="checkbox" value="">Toggle visual editor
								</label>
							</div>
							<div class="form-group">
								<input type="text" placeholder="Meta keywords">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Meta description">
							</div>
						<div class="buttons">
		                    <button type="submit" href='store' class="btn btn-success s-btn">Save</button>
		                    <button type="button" class="btn btn-primary s-btn">Save and continue editing</button>
		                    <button type="button" class="btn btn-primary s-btn">Save and add new</button>
		                </div>
				    </div>
				</form>
		    </div>
 @endsection  