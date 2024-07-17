<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $roleadmin = Role::create(['name' => 'administrador']);
        $user = User::find(1);
        if ($user) {
            $user->assignRole($roleadmin);
        } else {
            $user = User::create([
                'picture' => '/img/fotopredeterminada.jpg',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin1234')
            ]);
            $user->assignRole($roleadmin);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
