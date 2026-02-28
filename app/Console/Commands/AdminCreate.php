<?php

namespace App\Console\Commands;

use App\Enums\AdminStatus;
use App\Models\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:admin-create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Admin::create([
            'name' => 'admin',
            'username' => "admin",
            'password' => Hash::make('12345678'),
            'status' => AdminStatus::ENABLE
        ]);

        $this->info('admin crate successfully');
    }


}
