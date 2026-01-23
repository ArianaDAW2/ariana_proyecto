<footer class="bg-black text-white mt-8 ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <div class="text-center grid grid-cols-3 ">
        <div class="md:content-center">
            <a href="/contact" class="font-bold ">{{ __('public.contact_us') }}</a>
            <nav class="text-sm text-center">
                <p>@HotelForPets</p>
                <a href="https://www.facebook.com/HotelForPets" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/HotelForPets" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/HotelForPets" target="_blank"><i class="fab fa-instagram"></i></a>
            </nav>
        </div>
        <div>
            <div class="text-center">
                <h2 class="text-lg font-semibold">HotelForPets</h2>
                <p class="">{{ __('public.care_24h') }}</p>
            </div>
            <div class="text-[10pt]">
                <p>&copy; {{ date('Y') }} HotelForPets. {{ __('public.all_rights') }}</p>
            </div>
        </div>
        <div class="md:content-center">
            <a href="#top">{{ __('public.back_to_top') }}</a>
        </div>
    </div>
</footer>
