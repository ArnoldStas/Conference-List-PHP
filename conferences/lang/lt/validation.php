<?php

return [

    'required' => 'Laukas :attribute yra privalomas.',

    'email' => 'Laukas :attribute turi būti teisingas el. pašto adresas.',

    'unique' => 'Toks :attribute jau egzistuoja.',

    'confirmed' => 'Laukas :attribute nesutampa su patvirtinimu.',

    'min' => [
        'string' => 'Laukas :attribute turi būti bent :min simbolių.',
        'numeric' => 'Laukas :attribute turi būti bent :min.',
    ],

    'max' => [
        'string' => 'Laukas :attribute negali būti ilgesnis nei :max simbolių.',
    ],

    'date' => 'Laukas :attribute turi būti tinkama data.',

    'after' => 'Laukas :attribute turi būti data po :date.',

    'before' => 'Laukas :attribute turi būti data prieš :date.',

    'string' => 'Laukas :attribute turi būti tekstas.',

    'custom' => [

    ],

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
