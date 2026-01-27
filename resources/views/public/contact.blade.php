<x-guest-layout>
    <section class="grid place-items-center py-10">
        <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">{{ __('public.contact') }}</h1>

        @if (session('status'))
            <div
                class="mb-4 w-full max-w-[500px] bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('document.contact.send') }}"
              class="bg-white w-full max-w-[500px] shadow-lg p-6 rounded-lg">
            @csrf

            <div class="mb-4">
                <x-label for="title" value="{{ __('public.title') }}"/>
                <x-input id="title" name="title" type="text" class="mt-1 block w-full"
                         placeholder="{{ __('public.your_title') }}" :value="old('title')" required/>
                <x-input-error for="title" class="mt-2"/>
            </div>

            <div class="mb-4">
                <x-label for="email" value="{{ __('public.email') }}"/>
                <x-input id="email" name="email" type="email" class="mt-1 block w-full"
                         placeholder="{{ __('public.your_email') }}" :value="old('email')" required/>
                <x-input-error for="email" class="mt-2"/>
            </div>

            <div class="mb-4">
                <x-label for="message" value="{{ __('public.message') }}"/>
                <textarea id="message" name="message" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                          rows="4" placeholder="{{ __('public.your_message') }}"
                          required>{{ old('message') }}</textarea>
                <x-input-error for="message" class="mt-2"/>
            </div>

            <x-button type="submit">
                {{ __('public.send') }}
            </x-button>
        </form>
    </section>
</x-guest-layout>
