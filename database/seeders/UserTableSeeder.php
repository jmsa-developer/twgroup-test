<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Jeffersson Seijas',
            'email'=>'jefferssonseijas@gmail.com',
            'email_verified_at'=>now(),
            'password'=>'$2y$10$Ulk6j4s3QlHf3YOoiAHt1.PpEhtja08C4UXIRkCLgy726Ltg8ScWS', // 12345678
            'remember_token'=>'JPjOs9xMq6x0fsi9NPUM3S2hYCQmSsVLEI9yw42z3uswn8yyoafo8Vm94Ftq',
        ]);

        User::create([
            'name'=>'Usuario de prueba',
            'email'=>'usuarioprueba@gmail.com',
            'email_verified_at'=>now(),
            'password'=>'$2y$10$Ulk6j4s3QlHf3YOoiAHt1.PpEhtja08C4UXIRkCLgy726Ltg8ScWS', // 12345678
            'remember_token'=>'JPjOs9xMq6x0fsi9NPUM3S2hYCQmSsVLEI9yw42z3uswn8yyoafo8Vm94Ftq',
        ]);

    }
}
