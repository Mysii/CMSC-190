
@extends('layouts.app')
@extends('layouts.sidenav')

@section('content')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Administrator and Staff</h1>
			</div>
		</div><!--/.row-->
		<!--
		<div class="navbar-header">
			<ul class="user-menu navbar-nav">
				<li>
					<button type="submit" class="btn btn-primary">
		                Add New Admin/Staff
		            </button>
		        </li>
                <li>&nbsp;&nbsp;&nbsp;</li>
                <li>
                	<form role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
					</form>
                </li>
			</ul>
		</div><!--/.row-->


		<div class="row">
            &nbsp;
        </div>
		
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">All</a></li>
							<li><a href="#tab2" data-toggle="tab">Administrators</a></li>
							<li><a href="#tab3" data-toggle="tab">Staff</a></li>
							<li><a href="#tab4" data-toggle="tab">Add New Admin/Staff</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<table  class="table" >
											    <thead>
											    <!--
											    <tr>
											        <th data-field="action">Action</th>
											        <th data-field="id" data-align="">Employee ID</th>
											        <th data-field="name">Name</th>
											        <th data-field="contactNo">Contact No.</th>
											        <th data-field="branch">Branch</th>
											        <th data-field="isAdmin">Position</th>
											    </tr>
											    -->
											    <tr>
											        <th>Action</th>
											        <th>Employee ID</th>
											        <th>Name</th>
											        <th>Email</th>
											        <th>Contact No.</th>
											        <th>Branch</th>
											        <th>Position</th>
											    </tr>
											    
											    @foreach($data as $row)
												    <tr>
												    	<td>
												        <!-- Button trigger modal -->
														<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
														<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
														</button>
														<!-- Button trigger modal -->
														<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
														<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
														</button>
												        </td>
												        <td>{{$row->id}}</td>
												        <td>{{$row->name}}</td>
												        <td>{{$row->email}}</td>
												        <td>{{$row->contactNo}}</td>
												        <td>{{$row->branch}}</td>
												        <td>{{$row->isAdmin}}</td>
												    </tr>
												@endforeach
												
											    </thead>
											</table>
											<?php echo $data->render(); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab2">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<!--<table  data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">-->
											<table  class="table" >
											    <thead>
											    <!--
											    <tr>
											        <th data-field="action">Action</th>
											        <th data-field="id" data-align="">Employee ID</th>
											        <th data-field="name">Name</th>
											        <th data-field="contactNo">Contact No.</th>
											        <th data-field="branch">Branch</th>
											    </tr>
											    -->
											    <tr>
											        <th>Action</th>
											        <th>Employee ID</th>
											        <th>Name</th>
											        <th>Contact No.</th>
											        <th>Branch</th>
											        <th>Position</th>
											    </tr>
											    </thead>

											    @foreach($data as $row)
												    <tr>
												    	<td>
												        <!-- Button trigger modal -->
														<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
														<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
														</button>
														<!-- Button trigger modal -->
														<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
														<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
														</button>
												        </td>
												        <td>{{$row->id}}</td>
												        <td>{{$row->name}}</td>
												        <td>{{$row->contactNo}}</td>
												        <td>{{$row->branch}}</td>
												        <td>{{$row->isAdmin}}</td>
												    </tr>
												@endforeach

											</table>
											<?php echo $data->render(); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab3">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
										    <!--
											<table  data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
											-->
											<table  class="table" >
											    <thead>
											    <!--
											    <tr>
											        <th data-field="action">Action</th>
											        <th data-field="id" data-align="">Employee ID</th>
											        <th data-field="name">Name</th>
											        <th data-field="contactNo">Contact No.</th>
											        <th data-field="branch">Branch</th>
											    </tr>
												-->
												<tr>
											        <th>Action</th>
											        <th>Employee ID</th>
											        <th>Name</th>
											        <th>Contact No.</th>
											        <th>Branch</th>
											        <th>Position</th>
											    </tr>
											    </thead>
											    
											    
											    @foreach($data as $row)
												    <tr>
												    	<td>
												        <!-- Button trigger modal -->
														<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
														<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
														</button>
														<!-- Button trigger modal -->
														<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
														<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
														</button>
												        </td>
												        <td>{{$row->id}}</td>
												        <td>{{$row->name}}</td>
												        <td>{{$row->contactNo}}</td>
												        <td>{{$row->branch}}</td>
												        <td>{{$row->isAdmin}}</td>
												    </tr>
												@endforeach

											</table>
											<?php echo $data->render(); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab4">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<div class="row">
										        <div class="col-md-8 col-md-offset-2">
										            <div class="panel panel-default">
										                <div class="panel-heading">Register New Admin/Staff</div>
										                <div class="panel-body">
										                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
										                        {{ csrf_field() }}

										                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
										                            <label for="name" class="col-md-4 control-label">Name</label>

										                            <div class="col-md-6">
										                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

										                                @if ($errors->has('name'))
										                                    <span class="help-block">
										                                        <strong>{{ $errors->first('name') }}</strong>
										                                    </span>
										                                @endif
										                            </div>
										                        </div>

										                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

										                            <div class="col-md-6">
										                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

										                                @if ($errors->has('email'))
										                                    <span class="help-block">
										                                        <strong>{{ $errors->first('email') }}</strong>
										                                    </span>
										                                @endif
										                            </div>
										                        </div>

										                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										                            <label for="password" class="col-md-4 control-label">Password</label>

										                            <div class="col-md-6">
										                                <input id="password" type="password" class="form-control" name="password" required>

										                                @if ($errors->has('password'))
										                                    <span class="help-block">
										                                        <strong>{{ $errors->first('password') }}</strong>
										                                    </span>
										                                @endif
										                            </div>
										                        </div>

										                        <div class="form-group">
										                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

										                            <div class="col-md-6">
										                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
										                            </div>
										                        </div>

										                        <div class="form-group{{ $errors->has('contactNo') ? ' has-error' : '' }}">
										                            <label for="contactNo" class="col-md-4 control-label">Contact No.</label>

										                            <div class="col-md-6">
										                                <input id="contactNo" type="text" class="form-control" name="contactNo" value="{{ old('contactNo') }}" required autofocus>

										                                @if ($errors->has('contactNo'))
										                                    <span class="help-block">
										                                        <strong>{{ $errors->first('contactNo') }}</strong>
										                                    </span>
										                                @endif
										                            </div>
										                        </div>

										                        <div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
										                            <label for="branch" class="col-md-4 control-label">Branch</label>

										                            <div class="col-md-6">
										                                <input id="branch" type="text" class="form-control" name="branch" value="{{ old('branch') }}" required autofocus>

										                                @if ($errors->has('branch'))
										                                    <span class="help-block">
										                                        <strong>{{ $errors->first('branch') }}</strong>
										                                    </span>
										                                @endif
										                            </div>
										                        </div>

										                        <div class="form-group{{ $errors->has('isAdmin') ? ' has-error' : '' }}">
										                            <label for="isAdmin" class="col-md-4 control-label">Is Admin?</label>

										                            <div class="col-md-6">
										                                <input id="isAdmin" type="text" class="form-control" name="isAdmin" value="{{ old('isAdmin') }}" required autofocus>

										                                @if ($errors->has('isAdmin'))
										                                    <span class="help-block">
										                                        <strong>{{ $errors->first('isAdmin') }}</strong>
										                                    </span>
										                                @endif
										                            </div>
										                        </div>

										                        <div class="form-group">
										                            <div class="col-md-6 col-md-offset-4">
										                                <button type="submit" class="btn btn-primary">
										                                    Register
										                                </button>
										                            </div>
										                        </div>
										                    </form>
										                </div>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->

			<!-- Modal -->
			<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Update User's Information</h4>
			      </div>
			      <div class="modal-body">
			        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Name</label>

							 <div class="col-md-6">
									<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
									@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control" name="password" required>

							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
							</div>
					</div>

					<div class="form-group">
						<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					 </div>

					<div class="form-group{{ $errors->has('contactNo') ? ' has-error' : '' }}">
						<label for="contactNo" class="col-md-4 control-label">Contact No.</label>

						<div class="col-md-6">
							<input id="contactNo" type="text" class="form-control" name="contactNo" value="{{ old('contactNo') }}" required autofocus>

						@if ($errors->has('contactNo'))
						<span class="help-block">
							<strong>{{ $errors->first('contactNo') }}</strong>
						</span>
						@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
						<label for="branch" class="col-md-4 control-label">Branch</label>

						<div class="col-md-6">
							<input id="branch" type="text" class="form-control" name="branch" value="{{ old('branch') }}" required autofocus>

						@if ($errors->has('branch'))
						<span class="help-block">
							<strong>{{ $errors->first('branch') }}</strong>
						</span>
						@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('isAdmin') ? ' has-error' : '' }}">
						<label for="isAdmin" class="col-md-4 control-label">Is Admin?</label>

						<div class="col-md-6">
							<input id="isAdmin" type="text" class="form-control" name="isAdmin" value="{{ old('isAdmin') }}" required autofocus>

							@if ($errors->has('isAdmin'))
							<span class="help-block">
								<strong>{{ $errors->first('isAdmin') }}</strong>
							</span>
							@endif
						</div>
					</div>
					<!--
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Register
							</button>
						</div>
					</div>
					-->
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Delete User</h4>
			      </div>
			      <div class="modal-body">
			        Are you sure you want to delete this user?
			      </div>
			      <div class="modal-footer">
			      	<form action="/adminstaff/{{ $adminstaff->id }}" method="POST" class="pull-right">
			      		{{ csrf_ field() }}
			      		{{ method_field('DELETE') }}

				        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

				        <button type="submit" class="btn btn-danger">Delete</button>
				    </form> 
			       
		
			      </div>
			    </div>
			  </div>
			</div>

	</div>	<!--/.main-->
@endsection