<x-emails.layout>
{{ __('Database backup for') }} {{ $name }} @if($database_name)(db:{{ $database_name }}{{ __(')@endif with frequency of') }} {{ $frequency }} {{ __('was FAILED. ### Reason') }}

{{ $output }}
</x-emails.layout>
