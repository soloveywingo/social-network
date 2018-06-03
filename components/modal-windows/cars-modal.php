<?php

if (isset($_POST['send_car']))
{
        addCar();
}
function addCar(){
    $data = $_POST;
    $car = R::dispense("cars");
    $car->id_user = $_SESSION['logged_user']->id;
    $car->name = $data['car_name'];
    $car->model = $data['car_model'];
    $car->year = $data['car_year'];
    $car->color = $data['car_color'];
    $car->engine = $data['car_engine'];
    $car->mileage =$data['car_mileage'];
    $car->type = $data['car_type'];
    $car->description = "";
    $car->description = $data['car_description'];
    $carImage = addslashes($_FILES['car_image']['tmp_name']);
    $carImage = file_get_contents($carImage);
    $carImage = base64_encode($carImage);
    $car->image = $carImage;
   R::store($car);
}


?>
<div class="bg-modal-cars">
    <div class="modal">
        <h2>Add Car</h2>
        <div class="modal-body">

            <form action="#" method="POST" class="holder" enctype="multipart/form-data">

                <input type="text" placeholder="Enter name" name="car_name">
                <input type="text" placeholder="Enter model" name="car_model"><br>
                <input type="text" placeholder="Enter year" name="car_year">
                <input type="text" placeholder="Enter color" name="car_color"><br>
                <input type="text" placeholder="Enter engine capacity" name="car_engine">
                <input type="text" placeholder="Enter mileage" name="car_mileage"><br>

                <select name="car_type">
                    <option value="" disabled selected hidden ">Engine's type</option>
                    <option value="electric">Electric</option>
                    <option value="gas">Gas</option>
                    <option value="diesel">Diesel</option>
                </select><br>

                <textarea placeholder="Enter description" max="200" name="car_descrtiption"></textarea>

                <label id="addImageCar" for="addNewImageCar" >Add car image</label>
                <input id="addNewImageCar" type="file" name="car_image"><br>

                <div class="buttons">
                    <input type="submit" value="Send" name="send_car">
                    <input type="button" value="Close" class="close-modal-car">
                </div>

            </form>

        </div>

    </div>
</div>
