<?php

namespace App\Rules;

use App\Models\Admin\Menu;
use Illuminate\Contracts\Validation\Rule;

class ValidarCampoUrl implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        if($value != '#') {
            $menu = Menu::where($attribute, $value)->where('id', '!=', request()->route('id'))->get();
            Return $menu->isEmpty();
        }
        return true;
    }

    public function message()
    {
        return 'Esta url ya está asignada.';
    }
}
