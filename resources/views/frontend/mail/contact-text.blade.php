@lang('strings.emails.contact.email_body_title')

@lang('validation.attributes.frontend.last_name'): {{ $request->last_name }}
@lang('validation.attributes.frontend.first_name'): {{ $request->first_name }}
@lang('validation.attributes.frontend.email'): {{ $request->email }}
@lang('validation.attributes.frontend.subject'): {{ $request->subject }}
@lang('validation.attributes.frontend.message'): {{ $request->message }}
