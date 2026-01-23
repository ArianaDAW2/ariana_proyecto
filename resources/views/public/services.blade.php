<x-guest-layout>
    <div class="text-center">
        @if($request->status === 'inactive')
            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">{{ __('public.inactive_services') }}</h1>
        @else
            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">{{ __('public.services') }}</h1>
        @endif
        {{-- LISTADO --}}
        <table class="border-black border-2 text-center mx-20">
            <thead>
            <tr class="border-black border-2 grid grid-cols-3">
                <th>{{ __('public.name') }}</th>
                <th>{{ __('public.description') }}</th>
                <th>{{ __('public.base_price') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr class="grid grid-cols-3">
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>
                        @if($request->status === 'inactive' || !$service->base_price)
                            {{ __('public.unknown') }} €
                        @else
                            {{ $service->base_price }} €
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $services->links() }}
    </div>
    <div class="inline-block">
        <a href="{{ route('services', ['status' => 'active']) }}" class="btn btn-warning">
            {{ __('public.active') }}
        </a>

        <a href="{{ route('services', ['status' => 'inactive']) }}" class="btn btn-danger">
            {{ __('public.inactive') }}
        </a>
    </div>
</x-guest-layout>
