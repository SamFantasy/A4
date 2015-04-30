<?php
//Inclass work on April 23
// Set up 2 table at http://localhost/phpmyadmin
//connect to database




if($db = new mysqli("localhost", "root", "" ,"Store")){
 echo "Works!";   
}
else {
    echo "Failed!";
}

echo "<br>";



?>