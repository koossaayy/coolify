<div>
    <x-slot:title>
        {{ __('Teams | Coolify') }}
    </x-slot>
    <x-team.navbar />

    <form class="flex flex-col" wire:submit='submit'>
        <h2>{{ __('General') }}</h2>
        <div class="subtitle">
            {{ __('Manage the general settings of this team.') }}
        </div>

        <div class="flex items-end gap-2 pb-6">
            <x-forms.input id="name" label="Name" required canGate="update" :canResource="$team" />
            <x-forms.input id="description" label="Description" canGate="update" :canResource="$team" />
            @can('update', $team)
                <x-forms.button type="submit">
                    {{ __('Save') }}
                </x-forms.button>
            @endcan
        </div>
    </form>

    @can('delete', $team)
        <div>
            <h2>{{ __('Danger Zone') }}</h2>
            <div class="pb-4">{{ __('Woah. I hope you know what are you doing.') }}</div>
            <h4 class="pb-4">{{ __('Delete Team') }}</h4>
            @if (session('currentTeam.id') === 0)
                <div>{{ __("This is the default team. You can't delete it.") }}</div>
            @elseif(auth()->user()->teams()->get()->count() === 1 || auth()->user()->currentTeam()->personal_team)
                <div>{{ __("You can't delete your last / personal team.") }}</div>
            @elseif(currentTeam()->subscription)
                <div>{{ __('Please cancel your subscription') }} <a class="underline dark:text-white"
                        href="{{ route('subscription.show') }}">{{ __('here') }}</a> {{ __('before deleting this team.') }}</div>
            @else
                @if (currentTeam()->isEmpty())
                    <div class="pb-4">{{ __('This will delete your team. Beware! There is no coming back!') }}</div>
                    <x-modal-confirmation title="Confirm Team Deletion?" buttonTitle="Delete" isErrorButton
                        submitAction="delete({{ currentTeam()->id }})" :actions="['The current team will be permanently deleted from Coolify and the database.']"
                        confirmationText="{{ currentTeam()->name }}"
                        confirmationLabel="Please confirm the execution of the actions by entering the Team Name below"
                        shortConfirmationLabel="Team Name" :confirmWithPassword="false" step2ButtonText="Permanently Delete" />
                @else
                    <div>
                        <div class="pb-4">{{ __('You need to delete the following resources to be able to delete the team:') }}</div>
                        @if (currentTeam()->projects()->count() > 0)
                            <h4 class="pb-4">{{ __('Projects:') }}</h4>
                            <ul class="pl-8 list-disc">
                                @foreach (currentTeam()->projects as $resource)
                                    <li>{{ $resource->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if (currentTeam()->servers()->count() > 0)
                            <h4 class="py-4">{{ __('Servers:') }}</h4>
                            <ul class="pl-8 list-disc">
                                @foreach (currentTeam()->servers as $resource)
                                    <li>{{ $resource->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if (currentTeam()->privateKeys()->count() > 0)
                            <h4 class="py-4">{{ __('Private Keys:') }}</h4>
                            <ul class="pl-8 list-disc">
                                @foreach (currentTeam()->privateKeys as $resource)
                                    <li>{{ $resource->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if (currentTeam()->sources()->count() > 0)
                            <h4 class="py-4">{{ __('Sources:') }}</h4>
                            <ul class="pl-8 list-disc">
                                @foreach (currentTeam()->sources() as $resource)
                                    <li>{{ $resource->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                @endif
            @endif
        </div>
    @endcan
</div>
