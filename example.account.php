<?php
require 'gapi.class.php';

$ga = new gapi("phuong.ltweb@gmail.com", "key.p12");

$ga->requestAccountData();

foreach($ga->getAccounts() as $result)
{
  echo $result . ' ' . $result->getId() . ' (' . $result->getProfileId() . ")<br />";
}
