<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doctoral Programs</title>

</head>
<link rel="stylesheet" href="/CSS/DC_Program.css">
<body>

<div class="container">
  <a href="{{ route('home') }}"><button class="back-button">&#8592;</button></a>
  <h1>Doctoral Programs</h1>

  <div class="card-container">
    <div class="card">
    <a href="{{ route('dc_rupp') }}">
      <img src="../Images/Rupp_logo.png" alt="Royal University of Phnom Penh">
    </a>
      <p>Royal University of Phnom Penh (RUPP)</p>
    </div>

    <div class="card">
        <a href="{{ route('dc_itc') }}">
          <img src="../Images/Institute_of_Technology_of_Cambodia_logo.png" alt="Institute Technology of Cambodia">
        </a>
        <p>Institute Technology of Cambodia (ITC)</p>
      </div>
      

    <div class="card">
        <a href="{{ route('dc_aeu') }}">
            <img src="../Images/aeu.png" alt="Asia Euro University">
        </a>
      <p>Asia Euro University (AEU)</p>
    </div>
  </div>
</div>

</body>
</html>
