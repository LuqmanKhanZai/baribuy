<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'     => 'Admin',
            'email'     => 'admin@admin.com',
            'email_verified_at' => '2022-08-24 18:22:13',
            'password'      => bcrypt('password'),
            'country'     => "US",
            'birth_date'   => "1997-03-03",
            'gender'     => 'M',
            'image'   => "test.png",
            'address'     => 'Peshawar',
            'contact'     => '03147570135',
            'admin'   => 1
        ]);

        User::create([
            'name'     => 'Luqman Khan',
            'email'     => 'luqmankhanzai800@gmail.com',
            'email_verified_at' => '2022-08-24 18:22:13',
            'password'      => bcrypt('password'),
            'country'     => "US",
            'birth_date'         => "1997-03-03",
            'gender'     => 'M',
            'image'   => "test.png",
            'address'     => 'Peshawar',
            'contact'     => '03147570135',
            'admin'   => 0
        ]);

        Country::insert(array(
            0 =>
            array(
                'name'   => 'US',
                'status' => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            1 =>
            array(
                'name'   => 'Pakistan',
                'status' => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            2 =>
            array(
                'name'   => 'UK',
                'status' => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
        ));

        State::insert(array(
            0 =>
            array(
                'country_id'    => 1,
                'name'        => 'California',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            1 =>
            array(
                'country_id'    => 1,
                'name'        => 'Texas',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            2 =>
            array(
                'country_id'    => 2,
                'name'        => 'KPK',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            3 =>
            array(
                'country_id'    => 2,
                'name'        => 'Punjab',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            4 =>
            array(
                'country_id'    => 3,
                'name'        => 'England',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            5 =>
            array(
                'country_id'    => 3,
                'name'        => 'Scotland',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            )

        ));

        City::insert(array(
            0 =>
            array(
                'state_id'    => 2,
                'name'        => 'Peshawar',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            1 =>
            array(
                'state_id'    => 2,
                'name'        => 'Mardan',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            2 =>
            array(
                'state_id'    => 2,
                'name'        => 'Charsadda',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            3 =>
            array(
                'state_id'    => 3,
                'name'        => 'Islamabad',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            4 =>
            array(
                'state_id'    => 3,
                'name'        => 'Pindi',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ),
            5 =>
            array(
                'state_id'    => 3,
                'name'        => 'Gujrat',
                'status'      => 'Active',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            )

        ));

    }
}
