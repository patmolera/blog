@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'https://laracasts.com'])
Let's GOOOOOOOOOOOOO.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
