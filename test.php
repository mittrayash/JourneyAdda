<?php 
$dbs=mysqli_connect('localhost','root','','urjentup_journey');
try {

        $stmt = $dbs->query('SELECT * FROM testimonial ORDER BY id DESC ');
        while($rows = $stmt ->fetch_assoc()) {
     	$test[]=$rows;
      }	
      
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
    ?>