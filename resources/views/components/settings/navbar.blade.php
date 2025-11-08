<div class="pb-5">
    <h1>{{ __('Settings') }}</h1>
    <div class="subtitle">{{ __('Instance wide settings for Coolify.') }}</div>
    <div class="navbar-main">
        <nav class="flex items-center gap-6 min-h-10 whitespace-nowrap">
            <a class="{{ request()->routeIs('settings.index') ? 'dark:text-white' : '' }}"
                href="{{ route('settings.index') }}">
                {{ __('Configuration') }}
            </a>
            <a class="{{ request()->routeIs('settings.backup') ? 'dark:text-white' : '' }}"
                href="{{ route('settings.backup') }}">
                {{ __('Backup') }}
            </a>
            <a class="{{ request()->routeIs('settings.email') ? 'dark:text-white' : '' }}"
                href="{{ route('settings.email') }}">
                {{ __('Transactional Email') }}
            </a>
            <a class="{{ request()->routeIs('settings.oauth') ? 'dark:text-white' : '' }}"
                href="{{ route('settings.oauth') }}">
                {{ __('OAuth') }}
            </a>
            <div class="flex-1"></div>
        </nav>
    </div>
</div>
