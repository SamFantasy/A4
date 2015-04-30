<?php

/*
Samuel Bui
Date: April 30, 2015

This is a final assignment for IT 496 class.


*/

//include db file
 //  ->  means object operators

if($db = new mysqli("localhost", "root", "" ,"Store")){
    echo "This is my assignment 4";  
    
}
else {
    echo "Failed!";
}

//Rename date_received column to date_updated.

$db->query("ALTER TABLE Inventory CHANGE Date_Received  Date_Updated date");


///Trim the description column to a length of 20.

$db->query(" ALTER TABLE Inventory CHANGE Description Description varchar(20)    "); 

/// Remove the timestamp from date_received.

     // My first function took care of this.


///7. Display the results in a table view.

//prints the results into a table
    $query="SELECT * FROM inventory";
    $results = $db->query($query);

    echo "<table>";                     // Creating the table

                                        //Styling the table
    echo "
        <table border = '1'>                    
    <tr>
        <th>Inventory_Id</th>
        <th>Part_Number</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Date_Updated</th>
        </tr> ";
 

    while($row = $results->fetch_array()){   //fetch data
    echo "<tr><td>" 
        . $row['Inventory_Id'] . "</td><td>" 
        . $row['Part_Number'] . "</td><td>" 
        . $row['Description'] . "</td><td>" 
        . $row['Quantity'] . "</td> <td>" 
        . $row['Price'] . "</td><td>" 
        . $row['Date_Updated'] . "</td> </tr>"; 
    }
   echo "</table>";                 //Closed table

/*
Citation:

http://stackoverflow.com/questions/4002340/how-to-rename-a-table-column-in-mysql
http://stackoverflow.com/questions/14140272/php-how-to-add-a-style-to-html-in-a-table

*/

?>