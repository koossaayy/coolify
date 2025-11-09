<x-emails.layout>
{{ __('A password reset has been requested for this email address. Click [here](') }}{{ $url }}{{ __(') to reset your password. This link will expire in') }} {{ $count }} {{ __('minutes.') }}
</x-emails.layout>
