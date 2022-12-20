<?php

namespace Modules\Landingai\Console\Commands;

use Illuminate\Console\Command;

class LandingaiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:LandingaiCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Landingai Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
