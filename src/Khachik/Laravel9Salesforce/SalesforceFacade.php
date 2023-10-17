<?php namespace Khachik\Laravel9Salesforce;

use Illuminate\Support\Facades\Facade;

/**
 * Class SalesforceFacade
 * @package  Khachik\Laravel9Salesforce
 *
 * Facade for the Salesforce service
 */
class SalesforceFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'salesforce';
    }
}
