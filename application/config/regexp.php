<?php
$config['email_regexp']    = "/^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+$/";
$config['pw_regexp']      = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W).{9,16}$/";
$config['pw_regnum']      = "/(\w)\\1\\1/";
$config['pw_keyboard']    = array("1234567890", "qwertyuiop", "asdfghjkl", "zxcvbnm");
