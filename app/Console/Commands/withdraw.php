<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class withdraw extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transaction:fund';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deleted';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('funds')->where('status', 'PENDING')->delete();
        DB::table('transactions')->where('status', 'PENDING')->where('paymentMethod', 'Deposit')->delete();
        $this->info('Successfully Updated.');

    }
}
