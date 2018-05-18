<?php
/**
 * Created by PhpStorm.
 * User: LETO
 * Date: 13.05.2018
 * Time: 15:15
 */
?>
<div class="bg-modal-cars">
    <div class="modal">
        <h2>Add Car</h2>
        <div class="modal-body">

            <form  action="#" method="POST" class="holder">

                <input type="text" placeholder="Enter name">
                <input type="text" placeholder="Enter model"><br>
                <input type="text" placeholder="Enter year">
                <input type="text" placeholder="Enter color"><br>
                <input type="text" placeholder="Enter engine capacity">
                <input type="text" placeholder="Enter mileage"><br>

                <select>
                    <option value="" disabled selected hidden>Engine's type</option>
                    <option value="electric">Electric</option>
                    <option value="gas">Gas</option>
                    <option value="diesel">Diesel</option>
                </select><br>

                <textarea placeholder="Enter description" max="200"></textarea>

                <label id="addImageCar" for="addNewImageCar">Add car image</label>
                <input id="addNewImageCar" type="file"><br>

                <div class="buttons">
                    <input type="submit" value="Send">
                    <input type="button" value="Close" class="close-modal-car">
                </div>

            </form>

        </div>

    </div>
</div>
