<?php

namespace App\Livewire;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class ReservationsCrud extends Component
{
    use AuthorizesRequests;

    public Reservation $reservation;
    public array $services = [];

    protected function rules()
    {
        return (new ReservationRequest())->rules();
    }

    public function save()
    {
        $this->authorize($this->reservation->exists ? 'update' : 'create', $this->reservation);

        $this->validate();

        $this->reservation->user_id = auth()->id();
        $this->reservation->save();

        foreach ($this->services as $id => $data) {
            $this->reservation->services()
                ->syncWithPivotValues($id, $data, false);
        }
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.reservations-crud');
    }

}
