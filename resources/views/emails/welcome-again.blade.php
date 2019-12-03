@component('mail::message')
# Introduction

Welcome {{ $user->name }}
Thank you for registering!

- first thing
- Second thing
- Third thing

@component('mail::button', ['url' => 'https://www.facebook.com/saimon.storm'])
Start Browsing.
@endcomponent

@component('mail::panel', ['url' => 'google.com'])
Some inspirational quote.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
