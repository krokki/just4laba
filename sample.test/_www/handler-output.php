<?php

$data = array();

$sqlShow = "SELECT * FROM films";
if(($connection->query($sqlShow)) != NULL)
{
    $i = 0;
    foreach($connection->query($sqlShow) as $row)
    {
        $data[$i] = $row;
        $i++;
    }

}