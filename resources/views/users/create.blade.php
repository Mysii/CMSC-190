@extends('layouts.app')
@extends('layouts.sidenav')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!--
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!/.row-->

		<div class="row">
            &nbsp;
        </div>
		
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Add User <small><a href="/users">[Back to List]</a></small>
					</div>

					<div class="panel-body">
						<form class="form-horizontal" role="form" method="POST" action="/users">
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
									<select id="branch" type="" class="form-control" name="branch" value="{{ old('branch') }}" required autofocus>
										<!-- Muntinlupa Branches -->
										<option>Muntinlupa</option>
										<option>Starmall Alabang</option>
										<option>Liana's</option>
										<!-- Taguig Branches -->
										<option>Lower Bicutan</option>
										<option>Upper Bicutan</option>
										<option>Hagonoy</option>
										<option>Signal</option>
										<option>Taguig Bayan</option>
										<!-- Makati Branches -->
										<option>Guadalupe</option>
										<!-- Pasig Branches -->
										<option>Pasig 1</option>
										<option>Pasig 2</option>
										<option>Pasig 3</option>
										<option>Pasig 4</option>
										<option>Rosario</option>
										<!-- Antipolo Branches -->
										<option>Antipolo 1</option>
										<option>Antipolo 2</option>
										<option>Antipolo 3</option>
										<option>Cogeo Jaybee</option>
										<option>Cogeo Kris</option>
										<!-- Other Branches -->
										<option>Masinag</option>
										<option>Angono</option>
										<option>Binangonan</option>
										<option>Tanay 1</option>
										<option>Tanay 2</option>
									</select>

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
									<input type="submit" class="btn btn-primary pull-right">
								</div>
							</div>
						</form>
					</div>
						
				</div><!--/.panel-->
			</div>
		</div><!--/.col-->

	</div>	<!--/.main-->

@endsection