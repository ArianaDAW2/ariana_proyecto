<?php

namespace App\Livewire;

use Livewire\Component;

class CalendarioCitas extends Component
{
    public $fecha_seleccionada;
    public $citas_del_dia;
    public $mes_actual;
    public $año_actual;

    public function mount()
    {
        $this->fecha_seleccionada = now();
        $this->mes_actual = now()->month;
        $this->año_actual = now()->year;
        $this->cargarCitasDelDia();
    }

    public function cambiarFecha($fecha)
    {
        $this->fecha_seleccionada = $fecha;
        $this->cargarCitasDelDia();
    }

    public function mesAnterior()
    {
        if ($this->mes_actual == 1) {
            $this->mes_actual = 12;
            $this->año_actual--;
        } else {
            $this->mes_actual--;
        }
    }

    public function mesSiguiente()
    {
        if ($this->mes_actual == 12) {
            $this->mes_actual = 1;
            $this->año_actual++;
        } else {
            $this->mes_actual++;
        }
    }

    private function cargarCitasDelDia()
    {
        // Lógica para cargar citas del día seleccionado
        // $this->citas_del_dia = Cita::whereDate('fecha', $this->fecha_seleccionada)->get();
    }

    public function render()
    {
        return view('livewire.calendario-citas');
    }
}
