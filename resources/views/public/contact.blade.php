<x-guest-layout>

    @section('title', __('public.contact'))

    @section('content-1')
        <section class="grid place-items-center">
            <h1 class="font-bold text-gray-700 text-[35px] pb-5 not-md:text-center">{{ __('public.contact') }}</h1>
            <form class=" bg-white w-[500px] shadow-lg grid grid-rows-3 h-[300px] p-[20px]">
                <div class="row-start-1">
                    <label class="m-[5px]">{{ __('public.name') }}</label><br>
                    <input class="m-[5px] h-[30px] w-[25em] border-2 p-[5px]" type="text"
                           placeholder="{{ __('public.your_name') }}">
                </div>
                <div class="row-start-2">
                    <label class="m-[5px]">{{ __('public.email') }}</label><br>
                    <input class="m-[5px] h-[30px] w-[25em] border-2 p-[5px]" type="email"
                           placeholder="{{ __('public.your_email') }}">
                </div>
                <div class="row-start-3">
                    <label class="m-[5px]">{{ __('public.message') }}</label><br>
                    <textarea class="m-[5px] h-[50px] w-[25em] border-2 p-[5px]"
                              placeholder="{{ __('public.your_message') }}"></textarea>
                </div>
                <button type="submit"
                        class="bg-blue-500 text-white p-[5px] px-[20px] m-[20px] mb-[0px] rounded-[5px] h-[40px] w-[100px]">
                    {{ __('public.send') }}
                </button>
            </form>
        </section>
        <div class="md:h-150"></div>
    @endsection
</x-guest-layout>
