<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;


class SeconToolCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'util:secon-tool';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $result = Process::run('docker run -p 3333:8080 secon-tool-1.1.1');
        if ($result->successful()){
            $this->info($result->output());
        }
        $this->info($result->errorOutput());
    }
}
