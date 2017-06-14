<?php 

    include 'db.php';

    $query = "SELECT * FROM car_names order by id desc";

    $query_car_info = mysqli_query($con,$query);

    if (!$query_car_info) {
        die("Query Failed" .mysqli_error($con));
    }


    $i = 0;

    while ($row = mysqli_fetch_array($query_car_info)) {

        $i++;


        echo "<tr>";

        echo "<td>{$i}</td>";
        echo "<td><a rel='".$row['id']."' class='title-link' href='javascript:void(0)'>{$row['cars']}</a>";

        echo "</tr>";

    }

 ?>

 <script>
     // $("#action-container").hide();

     $(document).ready(function(){

     $(".title-link").on('click',function(){

        $("#action-container").show();

        var id = $(this).attr("rel");

        $.post("process.php", {id:id}, function(data){

             $("#action-container").html(data);

        });

     });

      });
 </script>