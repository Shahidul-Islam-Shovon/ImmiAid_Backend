<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $adminEmail = 'info@aid-immigration.co.uk';

        if (!User::where('email', $adminEmail)->exists()) {
            User::create([
                'name' => 'Super Admin',
                'email' => $adminEmail,
                'password' => Hash::make('admin@123#'), // use strong password 
                'role' => 'admin',
            ]);

            echo "✅ Super Admin created: $adminEmail" ;
        } else {
            echo "⚠️ This Admin already exists: $adminEmail\n";
        }
    }
}



?>