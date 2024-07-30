<?php

namespace Lamesya\Freshsales;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Resources\Account account()
 * @method static Resources\Appointment appointment()
 * @method static Resources\Contact contact()
 * @method static Resources\Deal deal()
 * @method static Resources\Lead lead()
 * @method static Resources\Note note()
 * @method static Resources\SalesActivities sales_activities()
 * @method static Resources\Task task()
 * @property-read Resources\Account $account
 * @property-read Resources\Appointment $appointment
 * @property-read Resources\Contact $contact
 * @property-read Resources\Deal $deal
 * @property-read Resources\Lead $lead
 * @property-read Resources\Note $note
 * @property-read Resources\SalesActivities $sales_activities
 * @property-read Resources\Task $task
 */
class FreshsalesFacade extends Facade
{    
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return 'freshsales';
    }
}