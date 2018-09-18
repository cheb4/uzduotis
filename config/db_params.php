<?php
$clearDbUrl = parse_url(getenv("CLEARDB_DATABASE_URL"));

return array(
            'host' => $clearDbUrl['host'],
            'dbname' => substr($clearDbUrl['path'],1),
            'user' => $clearDbUrl['user'],
            'password' => $clearDbUrl['pass'],
);

// $clearDbUrl = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $clearDbHost = $clearDbUrl['host'];
// echo"<hr>";
// echo "$clearDbHost";
// print_r($clearDbUrl);

//  [scheme] => mysql 
//  [host] => us-cdbr-iron-east-01.cleardb.net 
//  [user] => b32e344c938404 
//  [pass] => 61db3fa4 
//  [path] => /heroku_7fe484b29314a31 
//  [query] => reconnect=true )