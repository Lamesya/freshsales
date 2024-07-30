<?php

namespace Lamesya\Freshsales\Resources\Traits;

/**
 * Create Trait
 *
 * @package Lamesya\Freshsales\Resources\Traits
 */
trait CreateTrait
{
    /**
     * @param null $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * Create a resource
     * 
     * @param array $data
     * @return Response
     */
    public function create(array $data)
    {
        return $this->request->post($this->endpoint(), $data);
    }
}