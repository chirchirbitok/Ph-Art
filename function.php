<?php 
 //include "connection.php";
    require __DIR__.'connection.php'; 

    function fetchService( $conn )	
    {

        $request = $conn->prepare("service_id, service_title, services FROM service ");
        return $request->execute() ? $request->fetchAll() : false; 
    }

