<?php

namespace Lamesya\Freshsales;

use Illuminate\Support\Str;
use Lamesya\Freshsales\Resources\Account;
use Lamesya\Freshsales\Resources\Appointment;
use Lamesya\Freshsales\Resources\Contact;
use Lamesya\Freshsales\Resources\Deal;
use Lamesya\Freshsales\Resources\Lead;
use Lamesya\Freshsales\Resources\Note;
use Lamesya\Freshsales\Resources\SalesActivities;
use Lamesya\Freshsales\Resources\Task;
use Lamesya\Freshsales\Http\FreshsalesClient;
use Lamesya\Freshsales\Http\Request;

/**
 * @method Account account()
 * @method Appointment appointment()
 * @method Contact contact()
 * @method Deal deal()
 * @method Lead lead()
 * @method Note note()
 * @method SalesActivities sales_activities()
 * @method Task task()
 * @property-read Account $account
 * @property-read Appointment $appointment
 * @property-read Contact $contact
 * @property-read Deal $deal
 * @property-read Lead $lead
 * @property-read Note $note
 * @property-read SalesActivities $sales_activities
 * @property-read Task $task
 * @package Freshsales
 */
class Freshsales
{
    /**
     * The base URI.
     * 
     * @var string
     */
    private $baseURI;

    /**
     * The API token.
     *
     * @var string
     */
    protected $token;

    /**
     * Constructs a new api instance
     * @param $apiKey
     * @param $domain
     */
    public function __construct($token = '', $domain = '')
    {
        $this->token = $token;
        $this->baseURI = sprintf('https://%s.freshsales.oi/api/', $domain);
    }

    /**
     * Get the resource instance.
     *
     * @param $resource
     * @return mixed
     */
    public function make($resource)
    {
        $class = $this->resolveClassPath($resource);

        return new $class($this->getRequest());
    }

    /**
     * Get the resource path.
     *
     * @param $resource
     * @return string
     */
    protected function resolveClassPath($resource)
    {
        return 'Lamesya\\Freshsales\\Resources\\' . Str::studly($resource);
    }

    /**
     * Get the request instance.
     *
     * @return Request
     */
    public function getRequest()
    {
        return new Request($this->getClient());
    }

    /**
     * Get the HTTP client instance.
     *
     * @return Client
     */
    protected function getClient()
    {
        return new FreshsalesClient($this->getBaseURI(), $this->token);
    }

    /**
     * Get the base URI.
     *
     * @return string
     */
    public function getBaseURI()
    {
        return $this->baseURI;
    }

    /**
     * Set the token.
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Any reading will return a resource.
     *
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->make($name);
    }

    /**
     * Methods will also return a resource.
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (! in_array($name, get_class_methods(get_class()))) {
            return $this->{$name};
        }
    }
}