<?php
require 'vendor/autoload.php';

$baseDn = 'dc=imron,dc=sso';
$options = array(
    'host' => '192.168.43.254',
    'password' => 'iiwg1101',
    'bindRequiresDn' => true,
    'baseDn' => 'dc=imron,dc=sso',
    'username' => "cn=admin,$baseDn"
);
$ldap = new Zend\Ldap\Ldap($options);
$ldap->bind();