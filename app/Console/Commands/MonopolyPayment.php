<?php

namespace App\Console\Commands;

use App\MonopolyService;
use Illuminate\Console\Command;

class MonopolyPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monopoly:payment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to start get data payments';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        (new MonopolyService)->callPayment();
    }
}
