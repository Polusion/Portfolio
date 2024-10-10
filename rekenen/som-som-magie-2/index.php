<?php
include "../header.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../header-footer.css">
  </head>
  <body>
    <main class="container">
        <!-- een grid van 1 row en 3 col -->
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                      Genereer Som-Som-Magie
                    </div>
                    <div id="cardbody" class="card-body">
                        <!-- hier komt een grid van 4 rows en 4 cols -->
                        <div class="row">
                            <div class="col"><input id="inp_A1" type="text" class="form-control text-center" value="" disabled></div>
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col"><input id="inp_D1" type="text" class="form-control text-center" value="" disabled></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col"><input id="opl_B2" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="opl_C2" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="inp_D2" type="text" class="form-control text-center" value="" disabled></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col"><input id="opl_B3" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="opl_C3" type="text" class="form-control text-center" value="?"></div>
                            <div class="col"><input id="inp_D3" type="text" class="form-control text-center" value="" disabled></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col"></div>
                            <div class="col"><input id="inp_B4" type="text" class="form-control text-center" value="" disabled></div>
                            <div class="col"><input id="inp_C4" type="text" class="form-control text-center" value="" disabled></div>
                            <div class="col"></div>
                        </div>
                        <!-- hier einde grid -->
                        <!-- hier een grid met 1 row en 2 col -->
                        <div class="row">
                          <div class="col">
                            <a href="#" class="btn btn-primary mt-3 d-grid" onclick="generateProblem()">Genereer</a>
                          </div>
                          <div class="col">
                            <a href="#" class="btn btn-success mt-3 d-grid" onclick="checkSolution()">Check</a>
                          </div>
                        </div>
                        <!-- einde grid met 1 row en 2 col -->
                    </div>
                    <div class="card-footer text-body-secondary">
                      &copy;2023 by David
                    </div>
                  </div>
            </div>
            <div class="col"></div>
        </div>
        <!-- einde grid van 1 row en 3 col-->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>