<?php

echo    "<table>
            <tr>
                <th>id</th>
                <th>Name</th> 
                <th>Email</th>
                <th></th>
                <th></th>
           </tr>";
    foreach($data as $onerow){ 
echo    "<tr>
            <td>" . $onerow['id'] . "</td>
            <td>" . $onerow['user'] . "</td> 
            <td>" . $onerow['email'] . "</td> 
            <td><a href='?c=users&a=delete&id=" . $onerow['id'] . "'>Delete</a></td> 
            <td><a href='?c=users&a=edit&id=" . $onerow['id'] . "'>Edit</a></td> 
        </tr>" ; 
	}; 
echo    "</table></br>";

echo "<div><a href='?c=users&a=add'>Add new user</a></div>";

