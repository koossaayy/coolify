<x-emails.layout>
{{ __('Failed to check for package updates on your server') }} {{ $name }}{{ __('. ## Error Details - Operating System:') }} {{ ucfirst($osId) }}
{{ __('- Package Manager:') }} {{ $package_manager }}
{{ __('- Error:') }} {{ $error }}

{{ __('--- You can manage your server and view more details in your [Coolify Dashboard](') }}{{ $server_url }}).
</x-emails.layout>
