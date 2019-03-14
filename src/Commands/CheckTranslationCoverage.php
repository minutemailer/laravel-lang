<?php

namespace Minutemailer\Lang\Commands;

use Illuminate\Console\Command;

class CheckTranslationCoverage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'language:coverage {language?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks coverage of all or single language';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Hello world');
    }
}