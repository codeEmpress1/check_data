<?php

use Illuminate\Database\Seeder;
use App\ussd;
class UssdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new ussd();
        $user->phone_no = "08012345678";
        $user->data = 12;
        $user->save();

        $user = new ussd();
        $user->phone_no = "08012345679";
        $user->data = 13;
        $user->save();

        $user = new ussd();
        $user->phone_no = "08012345675";
        $user->data = 16;
        $user->save();

        $user = new ussd();
        $user->phone_no = "08012345672";
        $user->data = 18;
        $user->save();

    }
}
