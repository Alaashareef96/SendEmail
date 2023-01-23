<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class SendEmailUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email for User';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::chunk(100, function ($data) {
            \App\Jobs\SendEmailUser::dispatch($data);
        });
        return Command::SUCCESS;
    }
}
