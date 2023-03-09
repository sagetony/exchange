<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;

use Illuminate\Console\Command;

class interestcap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'interest:cap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Compound Interest';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
           $datas = DB::table('funds')->where('status', 'CONFIRM')->where('interest', '>=', 0)
            ->get();
            foreach($datas as $data){
                $id = $data->id;
                $interest_v = $data->interest;
                $interest_cap = $data->profit;

            $new_interest = (int)$interest_v + (int)$interest_cap;
            DB::table("funds")->where('id', $id)->update(['profit' =>  $new_interest, 'interest' => 0]);
            $this->info('Successfully Updated.');
               
            }
            
    }
}
