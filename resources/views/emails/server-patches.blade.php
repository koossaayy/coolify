<x-emails.layout>
{{ $total_updates }} {{ __('package updates are available for your server') }} {{ $name }}{{ __('. ## Summary - Operating System:') }} {{ ucfirst($osId) }}
{{ __('- Package Manager:') }} {{ $package_manager }}
{{ __('- Total Updates:') }} {{ $total_updates }}

{{ __('## Available Updates') }}

@if ($total_updates > 0)
@foreach ($updates as $update)

Package: {{ $update['package'] }} ({{ $update['architecture'] }}{{ __('), from version') }} {{ $update['current_version'] }} {{ __('to') }} {{ $update['new_version'] }} {{ __('at repository') }} {{ $update['repository'] ?? 'Unknown' }}
@endforeach

## Security Considerations

Some of these updates may include important security patches. We recommend reviewing and applying these updates promptly.

### Critical packages that may require container/server/service restarts:
@php
$criticalPackages = collect($updates)->filter(function ($update) {
                return str_contains(strtolower($update['package']), 'docker') ||
                    str_contains(strtolower($update['package']), 'kernel') ||
                    str_contains(strtolower($update['package']), 'openssh') ||
                    str_contains(strtolower($update['package']), 'ssl');
            });
@endphp

@if ($criticalPackages->count() > 0)
@foreach ($criticalPackages as $package)
- {{ $package['package'] }}: {{ $package['current_version'] }} → {{ $package['new_version'] }}
@endforeach
@else
No critical packages requiring container restarts detected.
@endif

## Next Steps

1. Review the available updates
2. Plan maintenance window if critical packages are involved
3. Apply updates through the Coolify dashboard
4. Monitor services after updates are applied
@else
Your server is up to date! No packages require updating at this time.
@endif

---

You can manage server patches in your [Coolify Dashboard]({{ $server_url }}).
</x-emails.layout>
