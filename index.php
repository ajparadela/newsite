<?php 
include "includes/header.php";
include "includes/navigation.php";


 	if (isset($_GET['source'])) 
 	{ 
        $source=$_GET['source'];
    }
    else
    {
        $source="";
    }

	switch ($source) 
    {
      
        case 'home':
             include "includes/featured.php";
            break;
        default:
        	include "includes/imageslider.php";
        	include "includes/featured.php";
        break;
    } 


include "includes/footer.php";
 ?>