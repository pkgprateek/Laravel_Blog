@extends('main')

@section('title', '| Login')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel panel-heading">
					Login
				</div>

				<div class="panel panel-body">
					{!! Form::open() !!}
						
						{{ Form::label('email', 'Email:') }}
						{{ Form::email('email', null, ['class' => 'form-control']) }}
						
						{{ Form::label('password', 'Password:', ['class' => 'form-spacing-top']) }}
						{{ Form::password('password', ['class' => 'form-control']) }}

						<br>
						{{ Form::checkbox('remember') }}{{ Form::label('remember', 'Remember Me') }}

						{{ Form::submit('Login', ['class' => 'btn- btn-primary btn-block form-control form-spacing-top']) }}

						<p><a href="{{ url('password/reset') }}">Forgot Password</a></p>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@stop