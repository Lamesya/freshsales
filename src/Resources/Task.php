<?php

namespace Lamesya\Freshsales\Resources;

use Lamesya\Freshsales\Resources\Resource;
use Lamesya\Freshsales\Resources\Traits\AllTrait;
use Lamesya\Freshsales\Resources\Traits\CreateTrait;
use Lamesya\Freshsales\Resources\Traits\DeleteTrait;
use Lamesya\Freshsales\Resources\Traits\UpdateTrait;
use Lamesya\Freshsales\Resources\Traits\ViewTrait;

/**
 * Tasks resource
 * 
 * @package Lamesya\Freshsales\Resources
 */
class Task extends Resource
{
    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     */
    protected $endpoint = 'tasks';
}