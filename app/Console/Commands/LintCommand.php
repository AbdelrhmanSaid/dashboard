<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LintCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lint';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lint the application';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Linting the application...');

        passthru(base_path('vendor/bin/pint'));
    }
}
