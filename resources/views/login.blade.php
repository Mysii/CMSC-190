@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="POST" action="{{ url('/login') }}">
						{{ csrf_field() }}
						<fieldset>
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<input class="form-control" placeholder="E-mail" id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<input class="form-control" placeholder="Password" id="password" name="password" type="password" required>

								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>Remember Me
								</label>
							</div>

								<!--<a href="index.html" class="btn btn-primary">Login</a>-->
								<button type="submit" class="btn btn-primary">
                                    Login
                                </button>

								<a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
@endsection