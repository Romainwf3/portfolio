<p>@lang('strings.emails.contact.email_body_title')</p>

<p><strong>@lang('validation.attributes.frontend.last_name'):</strong> {{ $request->last_name }}</p>
<p><strong>@lang('validation.attributes.frontend.first_name'):</strong> {{ $request->first_name }}</p>
<p><strong>@lang('validation.attributes.frontend.email'):</strong> {{ $request->email }}</p>
<p><strong>@lang('validation.attributes.frontend.subject'):</strong> {{ $request->subject }}</p>
<p><strong>@lang('validation.attributes.frontend.message'):</strong> {{ $request->message }}</p>
