<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IntroPage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public string $page;
    public string $title;
    public function __construct($title, $page)
    {
        //
        $this->title = $title;
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.intro-page');
    }
}
