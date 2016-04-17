@extends('layouts.main')

@section('content')

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
				            <th>Description</th>				<!-- Category -->
				            <th>Published</th>				<!-- Published or not -->
				            <th>Featured</th>				<!-- Featured -->
				            <th>Language</th>				<!-- Language -->
				            <th ></th>						<!-- View/Delete/Edit -->
				        </tr>
				    </thead>
				    <tbody id="sortable">
				       	@foreach($data as $post)
				        <tr>
				            <td class="icons icons-left">
				                <img src="http://acms.mile-lazar.com/uploads/cms/70_50/70_50_food-1024-768-9.jpg">
				            </td>
				            <td>
				            	<a href='{{ $post->id }}/edit'>{{ $post->title }}</a>
				            </td>
				           <td>{{ $post->created_at }}</td>
				           <td>{{ substr($post->content,0,60) }}...</td>
				           <td><i class="fa fa-check-circle green"></i></td>
				           <td><i class="fa fa-times-circle red"></i></td>
				           <td class="lang">en</td>
				           <td class="icons">
				            	<a href="#"><i class="fa fa-eye"></i></a>
				                <a href=""><i class="fa fa-pencil-square-o"></i></a>
				                <a href=""><i class="fa fa-trash-o"></i></a>
				            </td>

				        </tr>
				           @endforeach



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

@endsection