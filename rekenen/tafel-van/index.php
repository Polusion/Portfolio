<?php
include "../header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../header-footer.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>reken-app_david</title>
  <script src="javascript.js"></script>
</head>

<body>
  <div class="row">
    <div class="col-4">
    </div>
    <div class="col-4">
      <!-- card -->
      <div style="margin-top: 40%;" class="card text-center">
        <div id="tafelheader" class="card-header">
          Tafel van ...
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <input type="text" id="inputSom" class="form-control" placeholder="som" aria-label="som" disabled>
            <span class="input-group-text">=</span>
            <input type="text" id="inputAntwoord" class="form-control" placeholder="antwoord" aria-label="antwoord">
          </div>

          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button" onclick="checkAntwoord()">check antwoord</button>

            <!-- mijn twee inputvelden -->
            <form class="row g-3 mb-3">
              <div class="col-md-5">
                <label for="inputTafelvan" class="form-label">Tafel van</label>
                <input type="number" class="form-control" id="inputTafelvan">
              </div>
              <div class="col-md-5">
                <label for="inputTafeltot" class="form-label">Tafel tot</label>
                <input type="number" class="form-control" id="inputTafeltot" value="10">
              </div>
              <div class="col-md-2 mt-5">
                <button type="button" class="btn btn-primary" onclick="showTafel()">GO</button>
              </div>
            </form>
          </div>
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

    <!--scripts-->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>