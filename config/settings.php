<?php

return [
    /*
     * Is email activation required
     */
    'activation' => env('ACTIVATION', false),

    // which type of store to use.
    // valid options: 'json', 'database'
    'store' => 'database',

    // if the json store is used, give the full path to the .json file
    // that the store writes to.
    'path' => storage_path() . '/settings.json',

    // if the database store is used, set the name of the table used..
    'table' => 'settings',

    // If the database store is used, you can set which connection to use. if
    // set to null, the default connection will be used.
    'connection' => null,

    // If you want to use custom column names in database store you could
    // set them in this configuration
    'keyColumn' => 'key',
    'valueColumn' => 'value',
];
