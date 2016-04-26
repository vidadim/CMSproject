@extends('layouts.main')

@section('content')
		    <div class="s-panel">
			    <h3><i class="fa fa-bullhorn"></i>Add/edit post</h3>
		    </div>
		    <div class="col-md-9 col-sm-9">




				<form action="update" method="post">
					<input type="hidden" name="_method" value="PATCH">
				  <div class="form-group">
				    <input value="{{$post->title}}" type="text" name="title" class="form-control" id="page_name" placeholder="Name">
			  	  </div>
				<div class="form-group">
						<textarea placeholder="{{$post->content}}" name="content"  class="form-control"  id="contentarea" rows="10" name="content"></textarea>
					</div>
					<input type="hidden" value="{!! csrf_token() !!}" name="_token">
					 <div class="form-group">
						<input type="submit" value="Submit" class=" form-control btn btn-primary">
					</div>
				</form>


				<!-- <table class="table table-images">
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
			</table> -->
				</div>
		    <div class="col-md-3 col-sm-3">

		    </div>
	@endsection