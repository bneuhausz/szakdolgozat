<h1>{{ trans('email.newMessage') }}</h1>
<hr>
<p>{{ trans('email.subject') }}: <br> {{ $contact_message->subject }}</p>
<br><br>
<p>{{ trans('email.message') }}: <br> {{ $contact_message->body }}</p>