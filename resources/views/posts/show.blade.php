@extends('main')

@section('title', '| View Post')

@section('content')
	<div class='row'>
		<div class="col-md-8" style="text-align: center;">
			<h1 style="margin-bottom: 35px;">{{ $post->title }}</h1>
			<img style=" max-height: 700px; max-width: 700px; width: auto; height: auto; " src="{{ $post->image_path }}">
			<div style="text-align: justify; margin-top: 40px;">
				{!! $post->body !!}
			</div>

		</div>

		<div class="col-md-4">
			<br><br><br><br>

			<div class="well">

				<dl class="dl-horizontal">
					<label>URL:</label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Category:</label>
					<p>{{ $post->category->name }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('l, F d, Y', strtotime($post->created_at)) }}</p>
				</dl>
				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('l, F d, Y', strtotime($post->updated_at)) }}</p>
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