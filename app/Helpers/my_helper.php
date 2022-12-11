<?php
function userlogin()
{
    $db = \Config\Database::connect();
    return $db->table('users')->where('id', session('id'))->get()->getRow();
}
