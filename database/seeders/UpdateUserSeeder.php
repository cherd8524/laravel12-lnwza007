<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UpdateUserSeeder extends Seeder
{
    public function run(): void
    {
        // วิธีที่ 1: update โดยใช้ where
        User::where('email', 'admin@mail.com')
            ->update([
                'role' => 'admin',
            ]);

        // วิธีที่ 2: หา user แล้วแก้ไข
        // $user = User::find(1);
        // if ($user) {
        //     $user->name = "Updated User";
        //     $user->save();
        // }
    }
}
