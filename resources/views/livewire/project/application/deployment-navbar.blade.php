<div class="flex items-center gap-2 pb-4">
    <h2>{{ __('Deployment Log') }}</h2>
    @if ($is_debug_enabled)
        <x-forms.button wire:click.prevent="show_debug">{{ __('Hide Debug Logs') }}</x-forms.button>
    @else
        <x-forms.button wire:click.prevent="show_debug">{{ __('Show Debug Logs') }}</x-forms.button>
    @endif
    @if (isDev())
        <x-forms.button x-on:click="$wire.copyLogsToClipboard().then(text => navigator.clipboard.writeText(text))">{{ __('Copy Logs') }}</x-forms.button>
    @endif
    @if (data_get($application_deployment_queue, 'status') === 'queued')
        <x-forms.button wire:click.prevent="force_start">{{ __('Force Start') }}</x-forms.button>
    @endif
    @if (data_get($application_deployment_queue, 'status') === 'in_progress' ||
            data_get($application_deployment_queue, 'status') === 'queued')
        <x-forms.button isError wire:click.prevent="cancel">{{ __('Cancel') }}</x-forms.button>
    @endif
</div>
