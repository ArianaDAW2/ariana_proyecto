<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardVeterinario extends Component
{
    public $citasHoy;
    public $citasPendientes;
    public $totalMascotas;
    public $totalClientes;
    public $proximasCitas;
    public $vacunasVencidas;

    public function mount()
    {
        $this->cargarEstadisticas();
    }

    public function cargarEstadisticas()
    {
        // Lógica para cargar las estadísticas del día
        // Ejemplo: $this->citasHoy = Cita::whereDate('fecha', today())->count();
    }

    public function render()
    {
        return view('livewire.dashboardVeterinario');
    }
}
