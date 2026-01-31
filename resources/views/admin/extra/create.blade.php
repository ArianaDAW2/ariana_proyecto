<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enviar Mensaje a Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('document.admin.extra.send') }}"
                  class="bg-white w-full max-w-[500px] shadow-lg p-6 rounded-lg">
                @csrf

                <div class="mb-4">
                    <x-label for="title" value="{{ __('Título') }}"/>
                    <x-input id="title" name="title" type="text" class="mt-1 block w-full"
                             placeholder="Título del mensaje" :value="old('title')" required/>
                    <x-input-error for="title" class="mt-2"/>
                </div>

                <div class="mb-4">
                    <x-label for="message" value="{{ __('Mensaje') }}"/>
                    <textarea id="message" name="message" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                              rows="4" placeholder="Tu mensaje aquí" required>{{ old('message') }}</textarea>
                    <x-input-error for="message" class="mt-2"/>
                </div>

                <x-button type="submit">
                    {{ __('Enviar') }}
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
