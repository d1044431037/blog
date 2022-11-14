<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - Tower Blocks</title>
  <link rel="stylesheet" href="game/style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <meta name="viewport" content="width=device-width,user-scalable=no">

  <div id="container">
    <div id="game"></div>
    <div id="score">0</div>
    <div id="instructions">Click (or press the spacebar) to place the block</div>
    <div class="game-over">
      <h2>Game Over</h2>
      <p>You did great, you're the best.</p>
      <p>Click or spacebar to start again</p>
    </div>
    <div class="game-ready">
      <div id="start-button">Start</div>
      <div></div>
    </div>
  </div>
  <!-- partial -->
  <script src='https://codepen.io/ste-vg/pen/zBVaZw.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
  <script src="game/script.js"></script>
  <script src="{{ asset('gallery/script.js')}}"></script>


</body>

</html>