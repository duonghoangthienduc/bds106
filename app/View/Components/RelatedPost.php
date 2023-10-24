<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RelatedPost extends Component
{
    /**
     * Create a new component instance.
     */
    public $relatedPost;
    public function __construct($relatedPost)
    {
        $this->relatedPost = $relatedPost;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.related-post');
    }
}
