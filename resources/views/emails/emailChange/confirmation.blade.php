<!DOCTYPE html>
<html>
<head>
	  <title>{{ trans('email.emailChangeTitle') }}</title>
</head>
<body>
	  <p>{{ trans('email.emailChangeText1') }}: {{ $email_change->new_email }}, {{ trans('email.emailChangeText2') }}</p>

	  <a href='{{ url("emailChange/confirm/{$email_change->confirmationToken}") }}'>{{ trans('email.confirmationLink') }}</a>
</body>
</html>
