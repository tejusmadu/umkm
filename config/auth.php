<?php

return [

   // config/auth.php

'guards' => [
    'user' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

],

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],


],

    

];
