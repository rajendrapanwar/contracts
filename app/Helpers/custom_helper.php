<?php

// format date to January 04, 2024
function formatDate($date)
{
    $dateTime = new DateTime($date);
    return $dateTime->format('F d, Y');
}

// get first letter of string
function getFirstLetter($string)
{
    return ucfirst(substr($string, 0, 1));
}


// get latest projects
function getLatestProjects()
{
    $db = db_connect();
    $query = $db->table('projects')
        ->select('*')
        ->orderBy('created_at', 'DESC')
        ->limit(10)
        ->get();

    return $query->getResultArray();
}
?>