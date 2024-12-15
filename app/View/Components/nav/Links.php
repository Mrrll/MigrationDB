<?php

namespace App\View\Components\nav;

use Closure;
use App\Traits\LinksNav;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Links extends Component
{
    use LinksNav;
    public $links;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public String|Null $name = null,
        public String|Null $class = null
    ) {
        $this->links = $this->Links();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav.links');
    }
}
