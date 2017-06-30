
<?php
 
    require('db.php'); // connect to db
    $test = new db_query(); // init query



    if(isset($_POST["submit"])){
        
        $name = $_POST['ven_name'];
        $email = $_POST['ven_email'];
        $telephone = $_POST['ven_telephone'];
        
        //error check
        if(empty($name) || empty($email) || empty($telephone)){
            echo "Fields Cannot be empty";
        }else {
            $test->create($name, $email, $telephone);
            
        }
    }


    if(isset($_POST['update'])){
        
        $id = $_POST['ven_id'];
        $name = $_POST['ven_name'];
        $email = $_POST['ven_email'];
        $telephone = $_POST['ven_telephone'];
        
        $test->update($id, $name, $email, $telephone);
    };
   
?>


  <form method="post" action="#">
           <label for="ven_name">Vendor Name:</label>
           <input type="text" name="ven_name"/>
           <label for="ven_email">Vendor Email:</label>
           <input type="email" name="ven_email"/>
           <label for="ven_telephone">Telephone Number: </label>
           <input type="tel" name="ven_telephone"/>
           <button type="submit" name="submit">Submit</button>
        </form>
        
       
          <?php require("makeupgrade.nav.php"); ?>
