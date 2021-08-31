<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\State;

class SetStates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:state';

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
        State::create([
            'state'=>'Activo'
        ]);

        State::create([
            'state'=>'En Proceso'
        ]);

        State::create([
            'state'=>'Cerrado'
        ]);

    }
}
