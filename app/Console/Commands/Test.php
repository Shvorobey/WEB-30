<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test command artisan';

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
        $users = [['Name'=>'Alex', 'Email'=>'Some@mail.com'],
            ['Name'=>'Andrey', 'Email'=>'Good@mail.com'],
            ['Name'=>'Andrey', 'Email'=>'Good@mail.com'],
            ['Name'=>'Andrey', 'Email'=>'Good@mail.com'],
            ['Name'=>'Andrey', 'Email'=>'Good@mail.com'],
            ['Name'=>'Andrey', 'Email'=>'Good@mail.com'],
            ['Name'=>'Andrey', 'Email'=>'Good@mail.com'],
        ];
        $bar = $this->output->createProgressBar(count($users));

        $bar->start();

        foreach ($users as $user) {
            $bar->advance();
            sleep(1);
        }

        $bar->finish();
    }
}
