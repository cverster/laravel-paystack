<?php

namespace CornelVerster\LaravelPaystack\Commands;

use Illuminate\Console\Command;

class LaravelPaystackCommand extends Command
{
    public $signature = 'laravel-paystack';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
