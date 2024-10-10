<?php
session_start(); // Start the session to store previous row ID

include "../header.php";
include "dbconnection.class.php";
$dbconnect = new dbconnection();

// Check if there's a stored previous row ID
$previousRowId = isset($_SESSION['previous_row_id']) ? $_SESSION['previous_row_id'] : null;

// Generate SQL query to get a random row excluding the previous one
if ($previousRowId !== null) {
    $sql = "SELECT * FROM sommen WHERE id != :previousRowId ORDER BY RAND() LIMIT 1";
    $query = $dbconnect->prepare($sql);
    $query->bindParam(':previousRowId', $previousRowId, PDO::PARAM_INT);
} else {
    $sql = "SELECT * FROM sommen ORDER BY RAND() LIMIT 1";
    $query = $dbconnect->prepare($sql);
}

$query->execute();
$recset = $query->fetchAll(PDO::FETCH_ASSOC);

// Store the current row ID in session as previous for next iteration
if (!empty($recset)) {
    $_SESSION['previous_row_id'] = $recset[0]['id'];
}

$voor_achter = $recset[0]["voor_achter"];
$eenheid = $recset[0]["eenheid"];
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../header-footer.css">
</head>

<body>
  <div class="vraag-container">
    <div style="margin-top: 10%;" class="vraag">
      <i id="som_antwoord"><?= $recset[0]["antwoord"] ?></i>
      <h1>Inleiding: <?=$recset[0]["inleiding"]?></h1>
      <h2>Vraag: <?=$recset[0]["vraag"]?></h2>

      <div style="width: 50%;" class="input-group mb-3">
        <?php if ($voor_achter === 0): ?>
          <span class="input-group-text"><?=$eenheid?></span>
        <?php endif; ?>
        <input id="antwoord_input" type="text" class="form-control">
        <?php if ($voor_achter === 1): ?>
          <span class="input-group-text"><?=$eenheid?></span>
        <?php endif; ?>
      </div>

      <button class="btn btn-success" onclick="checkAnswer()">controleer</button>
      <a href="index.php"><button class="btn btn-success">nieuwe som</button></a><br>
      <?php if (!empty($recset[0]['afbeelding'])): ?>
        <img id="image" src="Sommen/<?= htmlspecialchars($recset[0]['afbeelding'], ENT_QUOTES, 'UTF-8') ?>" alt="">
      <?php endif; ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- linker card -->
        <div class="card" style="margin-top: 200px">
          <div class="card-header">
            Oud
          </div>
          <div class="card-body">
            Denk ook aan:<br>
            <ul>
              <li>zonder of exclusief BTW</li>
              <li>zonder of exclusief korting</li>
            </ul>
          </div>
          <div class="card-footer text-body-secondary">
            <input id="inp_oud" class="form-control is-invalid" onchange="checkInformation()">
          </div>
        </div>
        <!-- einde linker card -->
      </div>
      <div class="col-4">
        <select id="select_soort" class="form-select mt-4 mb-3 is-invalid" onchange="checkInformation()">
          <option value="" selected>Kies....</option>
          <option value="1">van</option>
          <option value="2">toename</option>
          <option value="3">afname</option>
        </select>
        <div class="input-group mb-3">
          <span class="input-group-text">Percentage</span>
          <input id="inp_perc" type="text" class="form-control is-invalid" onchange="checkInformation()">
          <span class="input-group-text">%</span>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Vermenigvuldigingsfactor</span>
          <input id="inp_factor" type="text" class="form-control" disabled>
        </div>
        <img src="pijlen.avif" alt="" class="img-fluid">
        <div class="input-group mb-3">
          <span class="input-group-text">Deelfactor</span>
          <input id="inp_deler" type="text" class="form-control" disabled>
        </div>
        <div class="d-grid">
          <button id="losop_btn" type="button" class="btn btn-success" disabled onClick="solveProblem()">Los op</button>
        </div>
      </div>
      <div class="col-3">
        <!-- rechter card -->
        <div class="card" style="margin-top: 200px">
          <div class="card-header">
            Nieuw
          </div>
          <div class="card-body">
            Denk ook aan:<br>
            <ul>
              <li>met of inclusief BTW</li>
              <li>met of inclusief korting</li>
            </ul>
          </div>
          <div class="card-footer text-body-secondary">
            <input id="inp_nieuw" class="form-control is-invalid" onchange="checkInformation()">
          </div>
        </div>
        <!-- einde rechter card -->
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>