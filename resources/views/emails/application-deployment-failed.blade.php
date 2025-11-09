<x-emails.layout>
@if ($pull_request_id === 0)
Failed to deploy a new version of {{ $name }} {{ __('at [') }}{{ $fqdn }}]({{ $fqdn }}) .
@else
Failed to deploy a pull request #{{ $pull_request_id }} {{ __('of') }} {{ $name }} {{ __('at [') }}{{ $fqdn }}]({{ $fqdn }}).
@endif

[View Deployment Logs]({{ $deployment_url }})
</x-emails.layout>
