<?php 

    include 'db.php';

    if (isset($_POST['id'])) {

        $id = mysqli_real_escape_string($con,$_POST['id']);

    $query = "SELECT * FROM car_names WHERE id = {$id}";

    $query_car_info = mysqli_query($con,$query);

    if (!$query_car_info) {
        die("Query Failed" .mysqli_error($con));
    }



    while ($row = mysqli_fetch_array($query_car_info)) {


        echo "<input rel='{$row['id']}' class='form-control title-input' type='text' value='{$row['cars']}'>";

        echo "<br>";

        echo "<input class='btn btn-success update' type='button' value='Update'>";

        echo "<input class='btn btn-danger delete' type='button' value='Delete'>";

     

    }

}


if (isset($_POST['updatethis'])) {
    
    $id = mysqli_real_escape_string($con,$_POST['id']);

    $title = mysqli_real_escape_string($con,$_POST['title']);

    $query = "UPDATE car_names SET cars = '$title' WHERE id = $id";

    $result_set = mysqli_query($con,$query);

    if (!result_set) {
        die("Query Failed".mysqli_error($con));
    }
}


if (isset($_POST['deletethis'])) {
    
    $id = mysqli_real_escape_string($con,$_POST['deleteId']);

    $query = "DELETE FROM car_names WHERE id = $id";

    $result_set = mysqli_query($con,$query);

    if (!result_set) {
        die("Query Failed".mysqli_error($con));
    }
}

 ?>


 <script type="text/javascript">
     
     $(document).ready(function(){

        var id;

        var title;

        var updatethis = 'update';

        var deletethis = 'delete';

        $(".title-input").on('input',function(){
            id = $(this).attr('rel');
            title = $(this).val();

        });

        $(".update").on('click',function(){

            $.post("process.php",{id:id,title:title,updatethis:updatethis}, function(data){
                alert("Updated Successfully");
                $("#action-container").hide();
            })
        });

         $(".delete").on('click',function(){

            var deleteId = $(".title-input").attr('rel');

            $.post("process.php",{deleteId:deleteId,deletethis:deletethis}, function(data){
                alert("Deleted Successfully");
                $("#action-container").hide();
            })
        })



        });

 </script>
