<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Innskráning</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="col-lg-4 col-lg-push-4 col-xs-12">
		{!! Form::open() !!}
		<div class="form-group">
			{!! Form::label('username', 'Notendanafn:') !!}
			{!! Form::text('username', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::label('password', 'Lykilorð:') !!}
			{!! Form::text('password', null, ['class' => 'form-control']) !!}
		</div>

		<div class='form-group'>
			{!! Form::submit('Áfram', ['class' => 'btn btn-primary form-control']) !!}
		</div>

		{!! Form::close() !!}
	</div>
</div>
</body>
</html>