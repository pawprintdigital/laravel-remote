<?php

namespace PawprintDigital\LaravelRemote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PawprintDigital\LaravelRemote\RemoteManager
 * @see \PawprintDigital\LaravelRemote\Connection
 */
class RemoteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'remote';
    }
}
