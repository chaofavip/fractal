<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2018-04
 */
use Moment\Fractal\Fractal;

if (!function_exists('fractal')) {
    /**
     * @return Fractal
     */
    function fractal()
    {
        return app()->get('fractal');
    }
}
