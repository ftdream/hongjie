<?php

namespace HongeGroup\Providers;

use HongeGroup\Models\User;
use Validator;
use Illuminate\Support\ServiceProvider;

class UserValidationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('user', function($attribute, $value, $parameters) {
            return !is_null(User::verifyUser($value));
        });
        //除患者之外的人可以登录后台
        Validator::extend('admin', function($atrribute, $value, $parameters) {
            $user = User::find($value);
            if(!is_null($user))
            {
                if($user->role <> User::ROLE_NORMAL)
                {
                    return true;
                }
                return false;
            }
            return false;
        });
        Validator::extend('department', function($attribute, $value, $parameters) {
            return !is_null(DeptLabel::find($value));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
