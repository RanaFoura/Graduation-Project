<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    // ================================================================ user and admin accounts
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            DB::table('users')->insert([
                'name' => 'Rana',
                'email' => 'Rana@gmail.com',
                'phone' => '0786543218',
                'address'=> 'New Zarqa , 16 Street',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            DB::table('users')->insert([
                'name' => 'Shoman',
                'email' => 'shoman@library.jo',
                'phone' => '0781584378',
                'address'=> 'Al Jaish Street',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            DB::table('users')->insert([
                'name' => 'Zarqa University',
                'email' => 'zu@edu.jo',
                'phone' => '0784326789',
                'address'=> 'Madenet Al Sharq',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);


        


   // ========================================================================= Roles (admin)
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name'=>'Admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('roles')->insert([
            'name' => 'volunteer',
            'display_name'=>'Volunteer',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('roles')->insert([
            'name' => 'organization',
            'display_name'=>'Organization',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('roles')->insert([
            'name' => 'university',
            'display_name'=>'University',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);



   // ======================================================== Permission (View Admin Control)
        DB::table('permissions')->insert([
            'name' => 'vac',
            'display_name'=>'View Admin Control',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


   // ============= assign permission vac to admin role and assign admin role to admin account      
        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1,
            'user_type'=>'App\Models\User',
        ]);
        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 2,
            'user_type'=>'App\Models\User',
        ]);
        DB::table('role_user')->insert([
            'user_id' => 3,
            'role_id' => 3,
            'user_type'=>'App\Models\User',
        ]);
        DB::table('role_user')->insert([
            'user_id' => 4,
            'role_id' => 4,
            'user_type'=>'App\Models\User',
        ]);




        DB::table('volunteers')->insert([
            'user_id' => 2,
            'student_id' => '20180623',
            'university'=>'Zarqa University',
            'dob'=> "24/8",
            'vol_points'=>'40',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('organizations')->insert([
            'user_id' => 3,
            'bio' => 'This Organization Started at 1994',
            'account_manager'=>'Nedal',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('organizations')->insert([
            'user_id' => 4,
            'bio' => 'This University Started at 2002',
            'account_manager'=>'Rawan',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


   // ====================================== insert 3 type of posts (provider,demander,developer)

        DB::table('postypes')->insert([
            'name' => 'org',
            'display_name'=>'Organization',
            'desc'=>'As Organization',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('postypes')->insert([
            'name' => 'dr',
            'display_name'=>'Doctor',
            'desc'=>'As Doctor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('postypes')->insert([
            'name' => 'stu',
            'display_name'=>'Student',
            'desc'=>'As Student',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
   // ========================================= insert tags ==================================

   DB::table('tags')->insert([
    'name' => 'bootstrap',
    'display_name'=>'Bootstrap',
    'desc'=>'',
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
]);

    DB::table('tags')->insert([
        'name' => 'c#',
        'display_name'=>'C#',
        'desc'=>'',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);
        
    DB::table('tags')->insert([
        'name' => 'php',
        'display_name'=>'PHP',
        'desc'=>'',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('tags')->insert([
        'name' => 'laravel',
        'display_name'=>'laravel',
        'desc'=>'',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);

    DB::table('tags')->insert([
        'name' => 'voiceover',
        'display_name'=>'voice_over',
        'desc'=>'',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ]);
   // ========================================= insert Category ==================================

//    DB::table('categories')->insert([
//     'id'=>0,
//     'name' => 'uncategorized',
//     'display_name'=>'UNCATEGORIZED',
//     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
// ]);

   // ====================================== site Settings

   DB::table('sitesettings')->insert([
    'site_name' => 'Prepared Section',
    'phone_number'=>'0787531642',
    'email'=>'preparedsection@gmail.com',
    'address'=>'No Physical Address for Now',
    'paypal'=>'s2gnms54262jsbmsahvd92',
    'desc'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ',
    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
]);



    }
}
