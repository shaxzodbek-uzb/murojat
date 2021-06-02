<?php

namespace App\Nova\Metrics;

use App\Models\Appeal;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class AppealsPerStatus extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        return $this->count($request, Appeal::class, 'status')
        ->label(function ($value) {
            switch ($value) {
                case 1:
                    return 'New';
                case 2:
                    return 'Accepted';
                case 3:
                    return 'Processing';
                case 4:
                    return 'Completed';
                case null:
                default:
                    return 'None';
            }
        });
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'appeals-per-status';
    }
}