<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2018-04
 */

namespace Moment\Fractal;

use FastD\Container\Container;
use FastD\Container\ServiceProviderInterface;

class FractalServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     *
     * @return mixed
     */
    public function register(Container $container)
    {
        $container->add('fractal', new Fractal());
    }
}
