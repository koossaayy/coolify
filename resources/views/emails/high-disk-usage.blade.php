<x-emails.layout>
{{ __('Your server (') }}{{ $name }}{{ __(') has high disk usage (') }}{{ $disk_usage }}{{ __('% used). Threshold is') }} {{ $threshold }}{{ __('%. Please cleanup your disk to prevent data-loss. Here are some [tips](') }}https://coolify.io/docs/knowledge-base/server/automated-cleanup).

{{ __('(You can change the threshold in the Server Settings menu.)') }}
</x-emails.layout>
