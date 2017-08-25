<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CrossDatabaseTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test cross database relation';

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
        $user = User::first();
        $this->comment('User with id: '. $user->id);

        $houses = $user->houses;

        foreach ($houses as $house){
            $this->comment('Has house '. $house->name);
        }
    }
}
