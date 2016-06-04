@extends('main')

@section('title', '| View Post')
	<br><br><br><br>
@section('content')
	<div class='row'>
		<div class='col-md-8'>
			<h1>{{ $post->title }}</h1>

			<p class="lead">{{ $post->body }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">

				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{$post->created_at->diffForHumans(	)}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{$post->updated_at->diffForHumans(	)}}</dd>
				</dl>
				<hr class="featurate-divider">

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
				</div>

			</div>
		</div>
	</div>
@stop