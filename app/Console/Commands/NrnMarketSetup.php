<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class NrnMarketSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nrnmarket:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup Your Market';

    /**
     * Create a new command instance.
     *
     * @return array
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
        $this->info('just test command');
        $this->callSilent('storage:link');
    }
}
