<?php

namespace App\View\Components\Dashboard\Download;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class RecentDownloads extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $recentMediaDownloads
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.download.recent-downloads');
    }

    public function getMediaType($format)
    {
        if($format === "mp3" || $format === "mp4") {
            return "Video";
        }
        return "";
    }
}
