<x-emails.layout>
{{ __('You have been invited to "') }}{{ $team }}{{ __('" on "') }}{{ config('app.name') }}{{ __('". Please [click here](') }}{{ $invitation_link }}{{ __(') to accept the invitation. If you have any questions, please contact the team owner.') }}<br><br>

{{ __('If it was not you who requested this invitation, please ignore this email.') }}
</x-emails.layout>
