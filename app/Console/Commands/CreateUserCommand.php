<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
// use Illuminate\Support\Str; - if we dont use this we can add \Str

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::create([
            'name' => \Str::random(6),
            'email' => \Str::random(6) . '@example.com',
            'password' => bcrypt('password')
        ]);

        $this->info('User created');
        
    }
}
