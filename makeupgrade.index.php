<!--
Create a form that will accept the following information:
1.Vendor ID
2.Vendor Name
3.Email Address
4.Phone Number

The php code should use a class to connect to the database, insert values and update the information in the database.

vendor_id	 	 	 
vendor_name	 
vendor_email
vendor_telephone
-->

<?php
    require('db.php'); // connect to db
    $test = new db_query(); // init query
    require("makeupgrade.nav.php"); ?>
    
    
<div class="oneBigDiv">    
    <h1>All records</h1>
    
    <?php
        $result = $test->read();
        $count = 1;
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "{$count}.<br>";
            echo "Vendor ID: " . $row["vendor_id"]. " - Name: " . $row["vendor_name"]. " " . $row["vendor_email"]." ". $row["vendor_telephone"] . "<br><br>";
            $count++;
            }
        } else {
            echo "NO RECORDS FOUND";
        }
        
    ?>
    
</div>

</body>
</html>