<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Planning uncertainty, begone!</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="./index.html"><img src="resources/images/Logo Resources/Logo.png" alt="Journey Junkie"
        class="brandImg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
        <li class="nav-item">
          <a class="nav-link" href="./explore.html">Explore Journeys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./itinerary.html">Itinerary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about.html">About Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input id="myInput" class="form-control mr-sm-2" type="search" placeholder="I'm headed to...">
        <button id="myBtn" class="btn btn-success btn-click my-2 my-sm-0" type="submit"><img class="NavBarButtonImg"
            src="resources/images/Logo Resources/NavBarSearchButton.png" alt=""></button>
      </form>
    </div>
  </nav>
  <!-- NavBar End -->
  <!-- Landing -->
  <div class="backGround"> </div>
  <div class="landing">
    <div class="hero-text">
      <form action="./actions/createSchedule.php" method="POST">
        <div class="form-row">
          <div class="col">
            <label for="validationDefault01" class="formPad">Schedule Name</label>
            <input Stype="text" name="name" class="form-control formPad" id="validationDefault01" placeholder="JSON Derulo&apos;s World Tour" required>
          </div>
          <div class="col">
            <label for="validationDefault01" class="formPad">City</label>
            <input Stype="text" name="city" class="form-control formPad" id="validationDefault01" value="<?php echo htmlspecialchars($_GET['city']); ?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="date" class="topFormPad formPad">Start Date</label>
            <div class="col">
              <input class="form-control" type="datetime-local" name="start" value="2018-11-25T13:00" id="example-datetime-local-input" required>
            </div>
          </div>
          <div class="col">
            <label for="validationDefault02" class="topFormPad formPad">End Date</label>
            <div class="col">
              <input class="form-control" type="datetime-local" name="end" value="2019-01-09T09:00" id="example-datetime-local-input" required>
            </div>
          </div>
        </div>

        <div class="form-row">
          <label for="customRange3" class="topFormPad2 ">What is your budget?</label>
<input type="range" class="slider custom-range topFormPad2 formPad2 " min="0" max="4" step="1" id="customRange3">
        </div>

        <input type="submit" class="btn btn-click" type="submit" value="Show me my itinerary!">
      </form>
    </div>
    <!-- Landing End -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <script src="resources/js/app.js"></script>
    <script>
      var first = getUrlVars()["city"];
      first = first.replace("+", " ");
      $('input[name=validationDefault01]').val(first);
      document.getElementById("test").innerHTML = first;
      function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
          vars[key] = value;
        });
        return vars;
      }

    </script>
</body>

</html>
