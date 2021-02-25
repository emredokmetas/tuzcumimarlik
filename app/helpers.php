<?php
    use App\Models\Settings;

    function settings(string $key, string $default = null)
    {
        $value =  Settings::select('value')->where("key", $key)->where("state", "1")->first();
        if(!is_null($value))
            return $value->value;
        return $default;
    }
