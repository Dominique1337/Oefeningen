<?php

include 'crawlercode.php';
$startURL = 'urlgoeshere';
$depth = 50;
$username = 'YOURUSER';
$password = 'YOURPASS';
$crawler = new crawler($startURL, $depth);
//$crawler->setHttpAuth($username, $password);
// Exclude path with the following structure to be processed 
//$crawler->addFilterPath('customer/account/login/referer');
$crawler->run();
?>