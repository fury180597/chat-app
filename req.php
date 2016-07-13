<?php



include 'db.php';
        $query= "SELECT * FROM chat ORDER BY id DESC";
        $run= mysql_query($query);
        while($row  = mysql_fetch_array($run))

        {

           echo '<span class="myclass">' . $row['nickname'] . '</span>'; echo "  :  ".$row['text']."</br>";



        }

    ?>
