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
				<h1 class="page-header">User Profile</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
            &nbsp;
        </div>
		
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-md-12">
							<table  class="table" >
								<tr>
									<td><label for="" class="col-md-12">Action</label></td>
									<td>
									<!-- Button trigger modal -->
									<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
										Update Profile
									</button>
                                	</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Employee ID</label></td>
									<td>{{$user->id}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Name</label></td>
									<td>{{$user->name}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">E-mail</label></td>
									<td>{{$user->email}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Password</label></td>
									<td>{{$user->password}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Contact No.</label></td>
									<td>{{$user->contactNo}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Branch</label></td>
									<td>{{$user->branch}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Position</label></td>
									<td>{{$user->isAdmin}}</td>
								</tr>
							</table>
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
			        <h4 class="modal-title" id="myModalLabel">Update Profile</h4>
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

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Register
							</button>
						</div>
					</div>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>

	</div>	<!--/.main-->
@endsection