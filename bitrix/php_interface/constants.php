<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

define('SIGN_KEY', md5('many string'));
define('ENABLE_DEV', true, true);
define('SECRET_KEY_DEV', md5('какая-нибудь строка'));