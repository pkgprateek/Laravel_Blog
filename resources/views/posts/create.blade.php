@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
	{!! Html::style('../css/parsley.css') !!}
@stop

@section('content')
		<div class="col-md-8 col-md-offset-2">
			<br><br>
			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('slug', 'Custom URL:', ['class' => 'form-spacing-top']) }}
				{{ Form::text('slug', null, array('class' => 'form-control', 'placeholder' => "hello-post (Only Alpha-Numaric characters, No space)", 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

				{{ Form::label('category_id', 'Category:') }}
				<select class="form-control" name="category_id">
					@foreach ($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>

				{{ Form::label('body', 'Post:', ['class' => 'form-spacing-top']) }}
				{{ Form::textarea('body', null, array('id' => 'bodyarea')) }}

				{{ Form::label('image','Upload Image:', ['class' => 'form-spacing-top']) }}
    			{{ Form::file('image', null) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}

		</div>
@stop

@section('scripts')
	{!! Html::script('js/parsley.min.js') !!}
	<script type="text/javascript" src='//cdn.tinymce.com/4/tinymce.min.js'></script>
	<script type="text/javascript">
		tinymce.init({
			selector: 'textarea#bodyarea',
			height: 350,
			theme: 'modern',
			plugins: [
				"advlist autolink charmap anchor lists link print preview hr",
				'searchreplace wordcount visualblocks visualchars code fullscreen',
				'insertdatetime save table contextmenu directionality',
				'emoticons paste textcolor colorpicker textpattern'
			],
			font_formats: 'Andale Mono=andale mono,times;'+ 'Arial=arial,helvetica,sans-serif;'+ 'Arial Black=arial black,avant garde;'+ 'Book Antiqua=book antiqua,palatino;'+ 'Comic Sans MS=comic sans ms,sans-serif;'+ 'Courier New=courier new,courier;'+ 'Georgia=georgia,palatino;'+ 'Helvetica=helvetica;'+ 'Impact=impact,chicago;'+ 'Symbol=symbol;'+ 'Tahoma=tahoma,arial,helvetica,sans-serif;'+ 'Terminal=terminal,monaco;'+ 'Times New Roman=times new roman,times;'+ 'Trebuchet MS=trebuchet ms,geneva;'+ 'Verdana=verdana,geneva;'+ 'Webdings=webdings;'+ 'Wingdings=wingdings,zapf dingbats',
			fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
			toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link charmap',
			toolbar2: 'print preview | fontselect fontsizeselect |forecolor backcolor emoticons',
			contextmenu: "copy paste inserttable | cell row column deletetable ",
			content_css: [
				'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			]
		});
	</script>
@stop