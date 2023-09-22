<?php

namespace Rey\Translation;

class Validation
{
    public const INPUTS = [
        'email' => 'ایمیل',
        'password' => 'رمز عبور',
        'phone' => 'تلفن همراه',
        'name' => 'نام',
        'username' => 'نام کاربری',
        'phone-code' => 'کد تایید'
    ];

    public const ERRORS = [
        'required' => "{field} ضروری است",
        'integer' => '{field} فقط می‌تواند شامل اعداد باشد',
        'numeric' => '{field} فقط می‌تواند شامل اعداد باشد',
        'exact_length' => '{field} باید {param} کاراکتر باشد',
        'min_length' => '{field} باید حداقل {param} کاراکتر باشد',
        'max_length' => '{field} باید حداکثر {param} کاراکتر باشد',
        'regex_match' => 'ساختار {field} صحیح نیست',
        'is_unique' => '{field} وجود دارد'
    ];

    public const ALL = [
        ...self::INPUTS,
        ...self::ERRORS,
    ];
}
