<div>
    <h2>{{ __('Destination') }}</h2>
    <div class="">{{ __('The destination server / network where your application will be deployed to.') }}</div>
    <div class="py-4 ">
        <p>{{ __('Server:') }} {{ data_get($destination, 'server.name') }}</p>
        <p>{{ __('Destination Network:') }} {{ $destination->network }}</p>
    </div>
</div>
