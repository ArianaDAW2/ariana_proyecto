<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Component
{
    public $locale;

    public function mount()
    {
        $this->locale = Session::get('locale', config('app.locale'));
    }

    public function switchLanguage($lang)
    {
        if ($lang == 'es') {
            Session::forget('locale');
            App::setLocale('es');
        } else {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }
        $this->locale = $lang;

        return $this->redirect(request()->header('Referer'), navigate: true);
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
