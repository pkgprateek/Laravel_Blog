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
					<label>URL:</label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{$post->created_at->diffForHumans(	)}}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{$post->updated_at->diffForHumans(	)}}</p>
				</dl>
				<hr class="featurate-divider">

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}

						{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}

						{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< See All Posts', array(), array('class' => 'btn btn-deafult btn-block btn-h1-spacing')) }}
					</div>
				</div>

			</div>
		</div>
	</div>
@stop