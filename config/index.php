<?php

            $host="127.0.0.1"; // Host name 
            $username="root"; // Mysql username 
            $password="eagle"; // Mysql password 
            $db_name="fantasyStats"; // Database name 
            $tbl_name="QB"; // Table name 
         
           // Connect to server and select databse.
              mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
              mysql_select_db("$db_name")or die("cannot select DB");
              $sql="SELECT * FROM $tbl_name ORDER BY id DESC";
           // OREDER BY id DESC is order result by descending
           }
               $result=mysql_query($sql);
               while($row = mysqli_fetch_array($result))
               {
            echo "<tr>";
            echo "<td>" . $row['Position'] . "</td>";
            echo "<td>" . $row['Rank'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Team'] . "</td>";
            echo "<td>" . $row['Receptions'] . "</td>";
            echo "<td>" . $row['Receiving_Yards'] . "</td>";
            echo "<td>" . $row['Receiving_Touchdowns'] . "</td>";
            echo "<td>" . $row['Yards_Per_Reception'] . "</td>";
            echo "<td>" . $row['Receptions_Per_Game'] . "</td>";
            echo "<td>" . $row['Receiving_Yards_Per_Game'] . "</td>";
            echo "</tr>";
              }
            echo "</table>";
        
             ?>