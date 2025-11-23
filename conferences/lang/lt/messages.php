<?php

/**
 * Lithuanian Language File - Application Messages
 * Contains all UI texts used throughout the application
 * Usage: __('messages.key_name') in blade templates or controllers
 */

return [
    // Navigation and general UI
    'welcome' => 'Sveiki',
    'login' => 'Prisijungti',
    'logout' => 'Atsijungti',
    'all_rights_reserved' => 'Visos teisės saugomos',

    // Conferences list page
    'conferences' => 'Konferencijos',
    'conferences_list' => 'Konferencijų sąrašas',
    'no_conferences' => 'Konferencijų nėra',
    'add_conference' => 'Pridėti konferenciją',
    'view' => 'Peržiūrėti',
    'edit' => 'Redaguoti',
    'delete' => 'Ištrinti',
    'actions' => 'Veiksmai',

    // Conference details
    'conference_title' => 'Pavadinimas',
    'conference_description' => 'Aprašymas',
    'conference_date' => 'Data',
    'conference_address' => 'Adresas',
    'conference_details' => 'Konferencijos informacija',
    'country' => 'Šalis',
    'city' => 'Miestas',
    'participants_count' => 'Dalyvių skaičius',

    // Forms
    'create_conference' => 'Sukurti konferenciją',
    'edit_conference' => 'Redaguoti konferenciją',
    'save' => 'Išsaugoti',
    'cancel' => 'Atšaukti',
    'add' => 'Pridėti',
    'update' => 'Atnaujinti',
    'submit' => 'Pateikti',

    // Form placeholders
    'enter_title' => 'Įveskite pavadinimą',
    'enter_description' => 'Įveskite aprašymą',
    'select_date' => 'Pasirinkite datą',
    'enter_address' => 'Įveskite adresą',
    'enter_country' => 'Įveskite šalį',
    'enter_city' => 'Įveskite miestą',
    'enter_participants_count' => 'Įveskite dalyvių skaičių',

    // Authentication
    'email' => 'El. paštas',
    'password' => 'Slaptažodis',
    'remember_me' => 'Prisiminti mane',
    'login_title' => 'Prisijungimas',
    'login_to_account' => 'Prisijunkite prie savo paskyros',
    'invalid_credentials' => 'Neteisingas el. paštas arba slaptažodis',

    // Success messages
    'conference_created' => 'Konferencija sėkmingai sukurta',
    'conference_updated' => 'Konferencija sėkmingai atnaujinta',
    'conference_deleted' => 'Konferencija sėkmingai ištrinta',
    'logged_in' => 'Sėkmingai prisijungėte',
    'logged_out' => 'Sėkmingai atsijungėte',

    // Error messages
    'error_occurred' => 'Įvyko klaida',
    'unauthorized' => 'Neturite prieigos prie šio puslapio',
    'conference_not_found' => 'Konferencija nerasta',

    // Confirmation messages
    'confirm_delete' => 'Ar tikrai norite ištrinti šią konferenciją?',
    'delete_warning' => 'Šis veiksmas negrįžtamas',

    // Validation messages
    'field_required' => 'Šis laukas yra privalomas',
    'invalid_date' => 'Netinkama data',
    'invalid_email' => 'Netinkamas el. pašto adresas',
];
