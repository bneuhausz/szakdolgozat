<h1>{{ trans('email.receivedMessage') }}</h1>
<p>{{ trans('email.response') }}</p>
<hr>
<p>{{ trans('email.subject') }}: <br> {{ $contact_message->subject }}</p>
<br><br>
<p>{{ trans('email.message') }}: <br> {{ $contact_message->body }}</p>