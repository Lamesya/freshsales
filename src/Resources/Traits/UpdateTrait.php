<?php

namespace Lamesya\Freshsales\Resources\Traits;

/**
 * Update Trait
 *
 * @package Lamesya\Freshsales\Resources\Traits
 */
trait UpdateTrait
{
    /**
     * @param integer $end string
     * @return string
     */
    abstract protected function endpoint($end = null);

    /**
     * Update a resource
     * 
     * @param int $id
     * @param array $data
     * @return array|null
     */
    public function update($id, array $data)
    {
        return $this->request->put($this->endpoint($id), $data);
    }
}