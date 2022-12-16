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
        ->join('auth_group', 'auth_group.group_id=users.id_group')
        ->where('auth_group.group_id', '3')
        ->countAllResults();
}

function userConsoler()
{
    $db = \Config\Database::connect();
    return $db->table('users')
        ->join('auth_group', 'auth_group.group_id=users.id_group')
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

function kontak()
{
    $db = \Config\Database::connect();
    return $db->table('users')->where('id', '1')->get()->getRow();
}
