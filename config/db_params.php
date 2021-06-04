<?php

 
$clearDbUrl = parse_url(getenv("CLEARDB_DATABASE_URL"));

return array(
            'host' => $clearDbUrl['host'],
            'dbname' => substr($clearDbUrl['path'],1),
            'user' => $clearDbUrl['user'],
            'password' => $clearDbUrl['pass'],
);

