<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Company;

class SetCompany extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:company';

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
        Company :: create([
            'name' => 'XIAOMI',
            'nit' => '68165168',
            'phone' => '654 85 98',
            'addres' => 'cra 19c 24 76',
            'email' => 'contact@xiaomi.com',
        ]);
    }
}
