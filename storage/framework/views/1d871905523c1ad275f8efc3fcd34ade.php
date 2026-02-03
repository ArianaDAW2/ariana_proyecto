<li class="border-2 border-red-600 group relative">
    <p>
        <button wire:click="switchLanguage('es')">🇪🇸</button>
        <button wire:click="switchLanguage('en')">🇬🇧</button>
    </p>
    <ul class="bg-black border-2 border-red-600 absolute left-[-9999px] md:group-hover:left-auto md:group-hover:right-[0%] w-36 not-md:w-111 not-md:block not-md:left-auto">
        <li>
            <button wire:click="switchLanguage('es')">🇪🇸 Español</button>
        </li>
        <li>
            <button wire:click="switchLanguage('en')">🇬🇧 English</button>
        </li>
    </ul>
</li>
<?php /**PATH /opt/lampp/htdocs/proyectos/ariana_proyecto/resources/views/livewire/language-switcher.blade.php ENDPATH**/ ?>