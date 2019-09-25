<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClientValidateCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clientvalidate:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email for with validation';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //\DB::table('emails')->get(); 
        $this->info('Cron success');
    }
}
