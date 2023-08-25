<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $judul_menu = "DAFTAR MENU";
        return view('components.sidebar', [
            "judul_menu" => $judul_menu
        ]);
    }
}
