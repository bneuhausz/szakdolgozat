<?php

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

    'accepted'             => 'A(z) :attribute nincs elfogadva.',
    'active_url'           => 'A(z) :attribute nem érvényes URL.',
    'after'                => 'A(z) :attribute -nak :date utáni dátumnak kell lennie.',
    'after_or_equal'       => 'A(z) :attribute -nak :date -tel megegyező vagy későbbi dátumnak kell lennie.',
    'alpha'                => 'A(z) :attribute csak betűket tartalmazhat.',
    'alpha_dash'           => 'A(z) :attribute csak betűket, számokat és kötőjeleket tartalmazhat.',
    'alpha_num'            => 'A(z) :attribute csak betűket és számokat tartalmazhat.',
    'array'                => 'A(z) :attribute -nak tömbnek kell lennie.',
    'before'               => 'A(z) :attribute -nak :date előtti dátumnak kell lennie.',
    'before_or_equal'      => 'A(z) :attribute -nak :date előtti vagy azzal megegyező dátumnak kell lennie.',
    'between'              => [
        'numeric' => 'A(z) :attribute -nak :min és :max között kell lennie.',
        'file'    => 'A(z) :attribute -nak :min és :max közötti kilobyte-nak kell lennie.',
        'string'  => 'A(z) :attribute -nak :min és :max közötti számú karakternek kell lennie.',
        'array'   => 'A(z) :attribute -nak :min és :max közötti eleme kell, hogy legyen.',
    ],
    'boolean'              => 'A(z) :attribute mező csak igaz vagy hamis lehet.',
    'confirmed'            => 'A(z) :attribute megerősítő nem egyezik.',
    'date'                 => 'A(z) :attribute nem érvényes dátum.',
    'date_format'          => 'A(z) :attribute nem egyezik a :format formátummal.',
    'different'            => 'A(z) :attribute és :other nem lehet ugyan az.',
    'digits'               => 'A(z) :attribute :digits számjegyű kell, hogy legyen.',
    'digits_between'       => 'A(z) :attribute csak :min és :max közötti számjegyű lehet.',
    'dimensions'           => 'A(z) :attribute érvénytelen képdimenziói vannak.',
    'distinct'             => 'A(z) :attribute mező már létezik.',
    'email'                => 'A(z) :attribute csak érvényes e-mail cím lehet.',
    'exists'               => 'A kiválasztott :attribute hibás.',
    'file'                 => 'A(z) :attribute csak fájl lehet.',
    'filled'               => 'A(z) :attribute mező kitöltése kötelező.',
    'image'                => 'A(z) :attribute csak kép lehet.',
    'in'                   => 'A kiválasztott :attribute hibás.',
    'in_array'             => 'A(z) :attribute mező nem létezik :other -ben.',
    'integer'              => 'A(z) :attribute csak integer lehet.',
    'ip'                   => 'A(z) :attribute csak érvényes IP cím lehet.',
    'json'                 => 'A(z) :attribute csak JSON string lehet.',
    'max'                  => [
        'numeric' => 'A(z) :attribute nem lehet nagyobb mint :max.',
        'file'    => 'A(z) :attribute nem lehet nagyobb mint :max kilobyte.',
        'string'  => 'A(z) :attribute nem lehet több, mint :max karakter.',
        'array'   => 'A(z) :attribute nem tartalmazhat több, mint :max elemet.',
    ],
    'mimes'                => 'A(z) :attribute csak :values típusú fájl lehet.',
    'mimetypes'            => 'A(z) :attribute csak :values típusú fájl lehet.',
    'min'                  => [
        'numeric' => 'A(z) :attribute nem lehet kevesebb, mint :min.',
        'file'    => 'A(z) :attribute nem lehet kevesebb, mint :min kilobyte.',
        'string'  => 'A(z) :attribute nem lehet kevesebb, mint :min karakter.',
        'array'   => 'A(z) :attribute nem tartalmazhat kevesebb, mint :min element.',
    ],
    'not_in'               => 'A kiválasztott :attribute hibás',
    'numeric'              => 'A(z) :attribute csak szám lehet.',
    'present'              => 'A(z) :attribute mezőnek léteznie kell.',
    'regex'                => 'A(z) :attribute formátuma nem megfelelő.',
    'required'             => 'A(z) :attribute mező kitöltése kötelező.',
    'required_if'          => 'A(z) :attribute mező kitöltése kötelező, amikor :other = :value.',
    'required_unless'      => 'A(z) :attribute mező kitöltése kötelező, kivéve ha :other = :values.',
    'required_with'        => 'A(z) :attribute mező kitöltése kötelező, ha :values létezik.',
    'required_with_all'    => 'A(z) :attribute mező kitöltése kötelező, ha :values létezik.',
    'required_without'     => 'A(z) :attribute mező kitöltése kötelező, ha :values nem létezik.',
    'required_without_all' => 'A(z) :attribute mező kitöltése kötelező, kivéve ha :values közül egyik se létezik.',
    'same'                 => 'A(z) :attribute -nak és :other -nek egyezniük kell.',
    'size'                 => [
        'numeric' => 'A(z) :attribute csak :size méretű lehet.',
        'file'    => 'A(z) :attribute csak :size kilobyte lehet.',
        'string'  => 'A(z) :attribute csak :size db karakter lehet.',
        'array'   => 'A(z) :attribute -nak :size méretű elemeket kell tartalmaznia.',
    ],
    'string'               => 'A(z) :attribute csak string lehet.',
    'timezone'             => 'A(z) :attribute csak létező időzóna lehet.',
    'unique'               => 'A(z) :attribute már létezik.',
    'uploaded'             => 'A(z) :attribute feltöltése nem sikerült.',
    'url'                  => 'A(z) :attribute formátuma helytelen.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
