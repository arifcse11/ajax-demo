<?php 

include 'db.php';


if (isset($_POST['cars'])) {

    $car_name = $_POST['cars'];

    $query = "INSERT INTO car_names(cars) VALUES('$car_name')";

    $query_car_name = mysqli_query($con,$query);

    header("Location: index.html");
}
 ?>