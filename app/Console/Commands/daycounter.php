<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class daycounter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'day:counter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the info table daily';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $datas = DB::table('funds')->where('status', 'CONFIRM')
            ->where('dayCounter', '>=', 0)
            ->get();

        foreach ($datas as $data) {
            $id = $data->id;
            $count_value = $data->dayCounter;
            $new_countValue = $count_value + 1;
            DB::table("funds")->where('id', $id)->update(['dayCounter' => $new_countValue]);
            
        }

        $datalevels = DB::table("funds")->where('status', 'CONFIRM')
            ->where('plan', 'Level')->get();

        foreach ($datalevels as $datalevel) {
            $id = $datalevel->id;
            $interest = $datalevel->interest;
            $compoundprofit = $datalevel->profit;
            $amount = $datalevel->amount;
            $plan = $datalevel->plan;
            $rate = $datalevel->planAmount;
            $withcapital = DB::table('withdraws')
                    ->where('userId', $datalevel->userId)
                    ->where('status', 'CONFIRM')
                    ->where('paymentType', 'Capital')
                    ->sum('amount'); 
            if ($plan == "Level") {
                $dayInt = (floatval($amount + $compoundprofit - $withcapital) / 100) * $rate;
            } else {
                $dayInt = 0;
            }

            $main_interest = $interest + $dayInt + 0.00;

            DB::table("funds")->where('id', $id)->update(['interest' => $main_interest]);
            $this->info('Successfully UpdatedE.');
        }
        $dataalphas = DB::table("funds")->where('status', 'CONFIRM')
            ->where('interest', '>=', 0)->where('plan', 'Alpha')->get();

            foreach ($dataalphas as $dataalpha) {
                $id = $dataalpha->id;
                $interest = $dataalpha->interest;
                $compoundprofit = $dataalpha->profit;
                $amount = $dataalpha->amount;
                $plan = $dataalpha->plan;
                $rate = $dataalpha->planAmount;
                $withcapital = DB::table('withdraws')
                        ->where('userId', $dataalpha->userId)
                        ->where('status', 'CONFIRM')
                        ->where('paymentType', 'Capital')
                        ->sum('amount'); 
                if ($plan == "Alpha") {
                    $dayInt = (floatval($amount + $compoundprofit - $withcapital) / 100) * $rate;
                } else {
                    $dayInt = 0;
                }
    
                $main_interest = $interest + $dayInt + 0.00;
    
                DB::table("funds")->where('id', $id)->update(['interest' => $main_interest]);
                $this->info('Successfully UpdatedE.');
            }

        $dataleverages = DB::table("funds")->where('status', 'CONFIRM')
            ->where('interest', '>=', 0)->where('plan', 'Leverage')->get();

            foreach ($dataleverages as $dataleverage) {
                $id = $dataleverage->id;
                $interest = $dataleverage->interest;
                $compoundprofit = $dataleverage->profit;
                $amount = $dataleverage->amount;
                $plan = $dataleverage->plan;
                $rate = $dataleverage->planAmount;
                $withcapital = DB::table('withdraws')
                        ->where('userId', $dataleverage->userId)
                        ->where('status', 'CONFIRM')
                        ->where('paymentType', 'Capital')
                        ->sum('amount'); 
                if ($plan == "Leverage") {
                    $dayInt = (floatval($amount + $compoundprofit - $withcapital) / 100) * $rate;
                } else {
                    $dayInt = 0;
                }
    
                $main_interest = $interest + $dayInt + 0.00;
    
                DB::table("funds")->where('id', $id)->update(['interest' => $main_interest]);
                $this->info('Successfully UpdatedE.');
            }

        $datacontracts = DB::table("funds")->where('status', 'CONFIRM')
            ->where('interest', '>=', 0)->where('plan', 'Contract')->get();

            foreach ($datacontracts as $datacontract) {
                $id = $datacontract->id;
                $interest = $datacontract->interest;
                $compoundprofit = $datacontract->profit;
                $amount = $datacontract->amount;
                $plan = $datacontract->plan;
                $rate = $datacontract->planAmount;
                $withcapital = DB::table('withdraws')
                        ->where('userId', $datacontract->userId)
                        ->where('status', 'CONFIRM')
                        ->where('paymentType', 'Capital')
                        ->sum('amount'); 
                if ($plan == "Contract") {
                    $dayInt = (floatval($amount + $compoundprofit - $withcapital) / 100) * $rate;
                } else {
                    $dayInt = 0;
                }
    
                $main_interest = $interest + $dayInt + 0.00;
    
                DB::table("funds")->where('id', $id)->update(['interest' => $main_interest]);
                $this->info('Successfully UpdatedE.');
            }

        
    }
}
