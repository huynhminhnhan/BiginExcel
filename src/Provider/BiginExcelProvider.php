<?php

namespace BiginExcel\Provider;

use Illuminate\Support\ServiceProvider;

class BiginExcelProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @SuppressWarnings("unused")
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('BiginExcel', function ($app, $data = null) {
            if (is_array($data)) {
                $data = collect($data);
            }

            return new \Rap2hpoutre\FastExcel\FastExcel($data);
        });
    }
}