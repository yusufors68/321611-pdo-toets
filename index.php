<?php

include_once("./create.php");

if(isset($_POST["submit"])){
    $bodemformaat = $_POST["bodemformaat"];
    $saus = $_POST["saus"];
    $topping = $_POST["topping"];
    $kruiden = $_POST["peterselie"] . ", " . $_POST["oregano"] . ", " . $_POST["chiliflakes"] . ", " . $_POST["zwartepeper"];
    $sqll = "INSERT INTO `pizza` (`id`, `bodemformaat`, `saus`, `pizzatoppings`, `kruiden`) VALUES (NULL, ?, ?, ?, ?);";
    $dbh->prepare($sqll)->execute([$bodemformaat, $saus, $topping, $kruiden]);
    header("location: ./index.php?success");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Maak je pizza</title>
    <
  </head>
  <body>
  <!-- navbar om makkelijker door de sections heen te gaan -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="read.php">Read</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- einde navbar -->
<br>
    <div class="container">
                    <form action="" method="POST">
                    <h1>Maak je eigen pizza</h1>
                    <br>
                    <p>Bodemformaat</p>
                    <select name="bodemformaat" class="form-select" aria-label="Default select example">
                        <option selected value="niet gekozen">Maak je keuze</option>
                        <option value="20 cm">20 cm</option>
                        <option value="25 cm">25 cm</option>
                        <option value="30 cm">30 cm</option>
                        <option value="35 cm">35 cm</option>
                        <option value="40 cm">40 cm</option>
                    </select>
                    <br>
                    <p>Saus</p>
                    <select name="saus" class="form-select" aria-label="Default select example">
                        <option selected value="niet gekozen">Maak je keuze</option>
                        <option value="tomatensaus">Tomatensaus</option>
                        <option value="Extra Tomatensaus">Extra Tomatensaus</option>
                        <option value="Spicy Tomatensaus">Spicy Tomatensaus</option>
                        <option value="BBQ Saus">BBQ Saus</option>
                        <option value="Creme Fraiche">Creme Fraiche</option>
                    </select>
                    <br>
                    <p>Pizzatoppings</p>
                    <div class="form-check" style="text-align: left;">
                    <input class="form-check-input" type="radio" value="vegan" name="topping" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        vegan
                    </label>
                    </div>
                    <div class="form-check" style="text-align: left;">
                    <input class="form-check-input" type="radio" value="vegatarisch" name="topping" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        vegatarisch
                    </label>
                    </div>
                    <div class="form-check" style="text-align: left;">
                    <input class="form-check-input" type="radio" value="vlees" name="topping" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        vlees
                    </label>
                    </div>
                    <br>
                    <p style="text-align: left;">Kruiden</p>
                    <div class="form-check" style="text-align: left;">
                      <input class="form-check-input" type="checkbox" name="peterselie" value="peterselie" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Peterselie
                      </label>
                    </div>
                    <div class="form-check" style="text-align: left;">
                      <input class="form-check-input" type="checkbox" name="oregano" value="oregano" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                        Oregano
                      </label>
                    </div>
                    <div class="form-check" style="text-align: left;">
                      <input class="form-check-input" type="checkbox" name="chiliflakes" value="chiliflakes" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                        Chili flakes
                      </label>
                    </div>
                    <div class="form-check" style="text-align: left;">
                      <input class="form-check-input" type="checkbox" name="zwartepeper" value="zwartepeper" id="flexCheckChecked">
                      <label class="form-check-label" for="flexCheckChecked">
                        Zwarte peper
                      </label>
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-success">bestel</button>
                    </div>
                    <br>
                </form>
              </div>
              <div class="col-3">
              </div>
          </div>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>