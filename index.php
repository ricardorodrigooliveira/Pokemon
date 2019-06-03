<?php include "includes/header.php"; ?>
<img src="img/H2R.jpg" alt="">
<div class="container">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Marca</label>
            <input class="form-control mb-6" type="text" name="marca" placehouder="Marca">
        </div>
        <div class="form-group col-md-6">
            <label>Modelo</label>
            <input class="form-control mb-6" type="text" name="marca" placehouder="Modelo">
        </div>
        <div class="form-group col-md-9">
            <label>Fabricante</label>
            <input class="form-control mb-6" type="text" name="marca" placehouder="Fabricante">
        </div>
        <div class="form-group col-md-3">
            <label for="">Vel. Max</label>
            <select class="custom-select" name="velocidade" id="1">
                <?php
                    for($v=199; $v<501; $v++){
                        echo "<option>".$v."</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <?php include "button.php"; ?> 
</div>
<?php include "includes/footer.php"; ?>