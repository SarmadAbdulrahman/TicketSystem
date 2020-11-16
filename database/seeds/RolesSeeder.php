<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // create new item ,
        Role::create(['name' => 'SystemAdministrator','Arabic_Name'=>'مدير النظام']);
        Role::create(['name' => 'TaskManager','Arabic_Name'=>'مدير المهام']);
        Role::create(['name' => 'IwDepartmentAdmin','Arabic_Name'=>'مدير قسم']);
        Role::create(['name' => 'IwDepartmentAssociateDirector','Arabic_Name'=>'معاون مدير ']);
        Role::create(['name' => 'IwAgent','Arabic_Name'=>'موظف ']);
        Role::create(['name' => 'ClientAgent','Arabic_Name'=>'الزبون ']);
        // create new item  ,


    }
}
