<?php
function userlogin()
{
    $db = \Config\Database::connect();
    return $db->table('users')->where('id', session('id'))->get()->getRow();
}

function userSum()
{
    $db = \Config\Database::connect();
    return $db->table('users')
        ->join('auth_user_group', 'auth_user_group.user_id=users.id')
        ->join('auth_group', 'auth_group.group_id=auth_user_group.group_id')
        ->where('auth_group.group_id', '3')
        ->countAllResults();
}

function userConsoler()
{
    $db = \Config\Database::connect();
    return $db->table('users')
        ->join('auth_user_group', 'auth_user_group.user_id=users.id')
        ->join('auth_group', 'auth_group.group_id=auth_user_group.group_id')
        ->where('auth_group.group_id', '2')
        ->countAllResults();
}

function materi()
{
    $db = \Config\Database::connect();
    return $db->table('materi')->countAllResults();
}

function podcast()
{
    $db = \Config\Database::connect();
    return $db->table('podcast')->countAllResults();
}
