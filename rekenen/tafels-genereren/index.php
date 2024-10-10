<?php
include "../header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>reken-app-david</title>
    <link rel="stylesheet" href="../header-footer.css">
</head>

<body>
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4">
            <!-- mijn twee inputvelden -->
            <form style="margin-top: 50%;" class="row g-3 mb-3">
                <div class="col-md-5">
                    <label for="inputTafelvan" class="form-label">Tafel van</label>
                    <input type="number" class="form-control" id="inputTafelvan">
                </div>
                <div class="col-md-5">
                    <label for="inputTafeltot" class="form-label">Tafel tot</label>
                    <input type="number" class="form-control" id="inputTafeltot">
                </div>
                <div class="col-md-2 mt-5">
                    <button type="button" class="btn btn-success" onclick="showTafel()">GO</button>
                </div>
            </form>
            <!-- card -->
            <div class="card text-center">
                <div id="tafelheader" class="card-header">
                    Tafel van ...
                </div>
                <div class="card-body">
                    <p id="tafel" class="card-text">
                    </p>
                </div>
                <div class="card-footer text-body-secondary">
                    made by David 2023
                </div>
            </div>
        </div>
        <div class="col-4">

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <!--scripts-->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>