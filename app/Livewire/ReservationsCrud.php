<?php

namespace App\Livewire;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Pet;
use App\Models\Service;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\ReservationRequest;

class ReservationsCrud extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $reservationId;
    public $user_id;
    public $pet_id;
    public $start_date;
    public $end_date;
    public $status = 'pending';
    public $total_price = 0;
    public $selectedServices = [];

    public $isEdit = false;

    protected function rules()
    {
        return (new ReservationRequest())->rules($this->reservationId);
    }

    public function render(Request $request)
    {
        $this->authorize('view', Reservation::class);

        $reservations = Reservation::with(['user', 'pet', 'services'])->paginate(10);

        $users = User::all();
        if ($request->wantsJson()) {
            return response()->json([
                'reservations' => $reservations,
                'users' => $users,
                'pets' => Pet::all(),
                'services' => Service::all(),
            ]);
        } else {
            return view('livewire.reservations-crud', [
                'reservations' => $reservations,
                'users' => $users,
                'pets' => Pet::all(),
                'services' => Service::all(),
            ]);
        }
    }

    public function save()
    {
        $this->authorize('create', Reservation::class);

        $validated = $this->validate();

        $reservation = Reservation::create($validated);

        if (!empty($this->selectedServices)) {
            $reservation->services()->sync($this->selectedServices);
        }

        $this->resetForm();
    }

    public function edit(Reservation $reservation)
    {
        $this->authorize('update', $reservation);

        $this->reservationId = $reservation->id;
        $this->user_id = $reservation->user_id;
        $this->pet_id = $reservation->pet_id;
        $this->start_date = $reservation->start_date->format('Y-m-d');
        $this->end_date = $reservation->end_date->format('Y-m-d');
        $this->status = $reservation->status;
        $this->total_price = $reservation->total_price;
        $this->selectedServices = $reservation->services->pluck('id')->toArray();
        $this->isEdit = true;
    }

    public function update()
    {
        $reservation = Reservation::findOrFail($this->reservationId);
        $this->authorize('update', $reservation);

        $validated = $this->validate();

        $reservation->update($validated);

        if (!empty($this->selectedServices)) {
            $reservation->services()->sync($this->selectedServices);
        }

        $this->resetForm();
    }

    public function delete(Reservation $reservation)
    {
        $this->authorize('delete', $reservation);

        $reservation->delete();
    }

    private function resetForm()
    {
        $this->reset([
            'reservationId',
            'user_id',
            'pet_id',
            'start_date',
            'end_date',
            'status',
            'total_price',
            'selectedServices',
            'isEdit',
        ]);
    }
}
