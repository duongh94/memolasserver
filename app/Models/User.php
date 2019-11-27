<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return array
     */
    private function getPermissionsOfUser()
    {
        $roleId = $this->role->id;
        $userRole = Role::where('id', $roleId)->first();
        $listPermission = [];
        foreach ($userRole->permissions as $permission) {
            $listPermission[] = $permission->name;
        }

        return $listPermission;
    }

    /**
     * @param $permission
     * @param bool $requireAll
     * @return bool
     */
    public function hasPermission($permission, $requireAll = false)
    {
        if (is_array($permission)) {
            foreach ($permission as $permName) {
                $hasPerm = $this->hasPermission($permName);
                if ($hasPerm && !$requireAll) {
                    return true;
                } elseif (!$hasPerm && $requireAll) {
                    return false;
                }
            }
            // If we've made it this far and $requireAll is FALSE, then NONE of the perms were found
            // If we've made it this far and $requireAll is TRUE, then ALL of the perms were found.
            // Return the value of $requireAll;
            return $requireAll;
        } else {
            $listPermission = $this->getPermissionsOfUser();
            foreach ($listPermission as $perm) {
                if ($permission === $perm) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
