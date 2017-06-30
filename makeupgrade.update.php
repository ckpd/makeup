<?php
    require('db.php'); // connect to db
    $test = new db_query(); // init query
    require("makeupgrade.nav.php");




    if(isset($_POST['update'])){
        
        $id = $_POST['ven_id'];
        $name = $_POST['ven_name'];
        $email = $_POST['ven_email'];
        $telephone = $_POST['ven_telephone'];
        
        $test->update($id, $name, $email, $telephone);
    };

   ?>
   
  
 

       <form method="post" action="#">
           <label for="ven_name">Vendor ID:</label>
           <input type="text" name="ven_id"/>
           <label for="ven_name">Vendor Name:</label>
           <input type="text" name="ven_name"/>
           <label for="ven_email">Vendor Email:</label>
           <input type="email" name="ven_email"/>
           <label for="ven_telephone">Telephone Number: </label>
           <input type="tel" name="ven_telephone"/>
           <button type="submit" name="update">update</button>
        </form>
        
        <?php
         $result = $test->read();

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["vendor_id"]. " - Name: " . $row["vendor_name"]. " " . $row["vendor_email"]." ". $row["vendor_telephone"] . "<br>";
       
    }
    } else {
    echo "0 results";
    }
?>

    <?php require("makeupgrade.nav.php"); ?>
