<?php

use App\Models\Permission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });


        $r1 = Permission::create([
            'display_name' => 'Add remind',
            'name' => 'remind-create',
            'description' => 'Be able to create an remind',
            'grouping' => 'remind',
        ]);

        $r2 = Permission::create([
            'display_name' => 'Edit remind',
            'name' => 'remind-edit',
            'description' => 'Be able to edit an remind',
            'grouping' => 'remind',
        ]);

        $r3 = Permission::create([
            'display_name' => 'Delete remind',
            'name' => 'remind-delete',
            'description' => 'Be able to delete an remind',
            'grouping' => 'remind',
        ]);

        $roles = \App\Models\Role::whereIn('name', ['owner', 'administrator'])->get();
        foreach ($roles as $role) {
            $role->permissions()->attach([$r1->id, $r2->id, $r3->id]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reminders');
    }
}
