<?php

/**
 * Lithuanian Language File - Validation Messages
 * Contains form validation error messages
 * Used by Laravel's validation system
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    // Field is required and cannot be empty
    'required' => 'Laukas :attribute yra privalomas.',

    // Field must be a valid email address
    'email' => 'Laukas :attribute turi būti teisingas el. pašto adresas.',

    // Field must be unique in the database
    'unique' => 'Toks :attribute jau egzistuoja.',

    // Field must match the confirmation field (e.g., password confirmation)
    'confirmed' => 'Laukas :attribute nesutampa su patvirtinimu.',

    // Field must have minimum length
    'min' => [
        'string' => 'Laukas :attribute turi būti bent :min simbolių.',
        'numeric' => 'Laukas :attribute turi būti bent :min.',
    ],

    // Field must have maximum length
    'max' => [
        'string' => 'Laukas :attribute negali būti ilgesnis nei :max simbolių.',
    ],

    // Field must be a valid date
    'date' => 'Laukas :attribute turi būti tinkama data.',

    // Field must be a date after given date
    'after' => 'Laukas :attribute turi būti data po :date.',

    // Field must be a date before given date
    'before' => 'Laukas :attribute turi būti data prieš :date.',

    // Field must be a string
    'string' => 'Laukas :attribute turi būti tekstas.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        // Add custom validation messages for specific fields here
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    // Human-readable attribute names for validation messages
    'attributes' => [
        'title' => 'pavadinimas',
        'description' => 'aprašymas',
        'date' => 'data',
        'address' => 'adresas',
        'country' => 'šalis',
        'city' => 'miestas',
        'participants_count' => 'dalyvių skaičius',
        'email' => 'el. paštas',
        'password' => 'slaptažodis',
        'name' => 'vardas',
    ],
];
