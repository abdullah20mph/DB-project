<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'], // You can restrict to only required methods, e.g., ['GET', 'POST']
    
    'allowed_origins' => ['http://localhost:5173'], // Replace with your frontend's URL in production

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // You can restrict this to only headers you need, e.g., ['Content-Type', 'Authorization']

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // Set to true if you need to send cookies or authentication info

];

