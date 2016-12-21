<!DOCTYPE html>
<html>
<head>
	<title>{{ trans('email.confirmationTitle') }}</title>
</head>
<body>
	<h1>{{ trans('email.confirmationH1') }}</h1>

	<p>{{ trans('email.confirmationText') }}</p>

	<a href='{{ url("register/confirm/{$user->verificationToken}") }}'>{{ trans('email.confirmationLink') }}</a>
</body>
</html>