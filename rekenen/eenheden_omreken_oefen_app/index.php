<?php
include "../header.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eenheden omreken-oefenapp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../header-footer.css">
  </head>
  <body>
    <!-- hier komt mijn code -->
    <!-- eerst mijn grid opmaken -->
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <!-- hier mijn card -->
        <div class="card text-center">
            <div class="card-header">
              Eenheden-omreken-oefenapp
            </div>
            <div class="card-body">
              <select id="dim_select" class="form-select" aria-label="Default select example">
                <!-- <option selected>Kies ...</option> -->
                <option value="">1D (lengte)</option>
                <option value="2">2D (oppervlakte)</option>
                <option value="3">3D (inhoud)</option>
              </select>
              <!-- de twee input-groups met de = er tussen-->
              <!-- grid: 1 row met 3 cols -->
                <div class="row mt-2">
                  <div class="col-5">
                    <div class="input-group mb-3">
                      <input id="inp_left" type="text" class="form-control" placeholder="opgave" disabled>
                      <span id="eenh_left" class="input-group-text">mm</span>
                    </div>
                  </div>
                  <div class="col-1 mt-1">=</div>
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <input id="inp_right" type="text" class="form-control" placeholder="antwoord" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span id="eenh_right" class="input-group-text" id="basic-addon2">km</span>
                    </div>
                  </div>
                </div>
              <!-- einde 1 row met 3 cols -->
              <!-- einde twee input-groups -->
              <!-- begin van de twee knoppen -->
              <a href="#" class="btn btn-primary" onclick="makeProblem()">Genereer</a>
              <a href="#" class="btn btn-success" onclick="checkSolution()">&nbsp;&nbsp;&nbsp;&nbsp;Check&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <!-- einde van de twee knoppen -->
            </div>
            <div class="card-footer text-body-secondary">
              &copy; 2023 made by David 
            </div>
          </div>
        <!-- hier einde card -->
        </div>
        <div class="col-3"></div>
    </div>
</div>
<!-- hier eindigt mijn code -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>  
  </body>

</html>