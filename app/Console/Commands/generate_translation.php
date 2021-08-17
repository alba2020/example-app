<?php

namespace App\Console\Commands;

use App\Models\Translation;
use Illuminate\Console\Command;

class generate_translation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate_translation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $trs = Translation::all();

        foreach ($trs as $tr) {

        }

        return 0;
    }
}
