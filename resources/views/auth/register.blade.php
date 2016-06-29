@extends('main')

@section('title', '| Register')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
			{!! Form::open() !!}
				
				{{ Form::label('name', 'Name:', ['class' => 'form-spacing-top']) }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::label('email', 'Email:', ['class' => 'form-spacing-top']) }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}
				
				{{ Form::label('password', 'Password:', ['class' => 'form-spacing-top']) }}
				{{ Form::password('password', ['class' => 'form-control']) }}

				{{ Form::label('password_confirmation', 'Confirm Password:', ['class' => 'form-spacing-top']) }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}

				{{ Form::submit('Register', ['class' => 'btn- btn-primary btn-block form-control form-spacing-top']) }}

			{!! Form::close() !!}

		</div>
	</div>

@stop