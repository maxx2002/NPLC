@component('mail::message')
# 9th NPLC Verification

Please check your data

@component('mail::button', ['url' => ''])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
