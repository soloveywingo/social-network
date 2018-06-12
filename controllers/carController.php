<?php

if (isset($_POST['send_car']))
{
    $car = new Car();
    $car->addCar();
}

class Car
{
    function addCar()
    {
        $data = $_POST;
        $car = R::dispense("cars");
        $car->id_user = $_SESSION['logged_user']->id;
        $car->name = $data['car_name'];
        $car->model = $data['car_model'];
        $car->year = $data['car_year'];
        $car->color = $data['car_color'];
        $car->engine = $data['car_engine'];
        $car->mileage = $data['car_mileage'];
        $car->type = $data['car_type'];
        $car->description = $data['car_descrtiption'];
        $carImage = addslashes($_FILES['car_image']['tmp_name']);
        $carImage = file_get_contents($carImage);
        $carImage = base64_encode($carImage);
        $car->image = $carImage;
        R::store($car);
    }
}