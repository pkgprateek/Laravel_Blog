@extends('main')

@section('title', '| All Categories')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table>
				<thead>
					<tr>
						<th class="col-md-1">#</th>
						<th class="col-md-3">Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
						<tr>
							<th>{{ $category->id }}</th>
							<td>{{ $category->name }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div><!--  col-md-8 -->

		<div class="col-md-3 col-md-offset-1">
			<div class="well">
				{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

					<h2>New Category</h2>
					{{ Form::label('name', 'Name:') }}
					{{ Form::text('name', null), ['class' => "form-control"] }}

					{{ Form::submit('Create New category', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop