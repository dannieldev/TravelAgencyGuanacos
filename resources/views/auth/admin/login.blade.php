@extends('layout.admin')
@section('content')
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div >
								<br>
								<center><a>Ingresa tus Credenciales de Administrador</a></center>
							</div>
						</div>
						<br>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<!-- Iniciar Sessión -->
								<form id="login-form" action="/admins/login" method="post" role="form" style="display: block;">
						            {{ csrf_field() }}
									<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
										<input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
										{!! $errors->first('name','<span class="help-block">:message</span>') !!}
									</div>
									<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" value="">
										{!! $errors->first('password','<span class="help-block">:message</span>') !!}

									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary btn-block" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
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
@endsection