<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $id;
    public $title;
    public $price;
    public $image;
    public $description;
    public function __construct($id, $title, $price, $image, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}