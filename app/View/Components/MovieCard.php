<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    public $movie;
    public $geners;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($geners,$movie)
    {
        $this->movie = $movie;
        $this->geners = $geners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
