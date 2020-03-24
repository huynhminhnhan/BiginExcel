<?php

namespace BiginExcel\Facades;

use Illuminate\Support\Facades\Facade;

class BiginExcel extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BiginExcel';
    }
}