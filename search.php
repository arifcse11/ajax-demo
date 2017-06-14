<?php 

include 'db.php';

   $search = $_POST['search'];


  if (!empty($search)) {
    
      $query = "SELECT * FROM car_names WHERE cars LIKE '%$search%'";

      $search_query = mysqli_query($con,$query);

      $count = mysqli_num_rows($search_query);

      if ($count <= 0) {
        echo "Not Found";
      }else{



      while ($row = mysqli_fetch_array($search_query)) {
         $brand = $row['cars'];
         ?>
         <ul class="list-unstyled">

       <?php echo "<li>{$brand}</li>"; ?>
        

         </ul>
  <?php    } 
}
  } 
 ?>
