<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script defer src="./bundle.js"></script>
  <link rel="stylesheet" href="./style.css">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body class="min-h-screen h-screen overflow-auto">
<section class="gap-1">

  <div id="goled-ratio-1" class="square green overflow-hidden">
    <div class="swiper-wrapper max-h-0">
      <?php
        $colors = ['bg-red-100', 'bg-red-200', 'bg-red-300'];
        for ($i=0; $i < count($colors); $i++): ?>
        <div class="swiper-slide  border <?= $colors[$i] ?>">
          Slide <?= $i ?>
        </div>
      <?php endfor; ?>
    </div>
  </div>

  <div class="constr gap-1">
    <div id="goled-ratio-2" class=" tall-rect orange overflow-hidden">
      <div class="swiper-wrapper max-w-0">
      <?php
        $colors = ['bg-red-100', 'bg-red-200', 'bg-red-300'];
        for ($i=0; $i < count($colors); $i++): ?>
        <div class="swiper-slide  border <?= $colors[$i] ?>">
          Slide <?= $i ?>
        </div>
      <?php endfor; ?>
      </div>
    </div>
    <div class="wide-rect gap-1">
      <div class="constr gap-1">
        <div id="goled-ratio-3" class=" wide-rect overflow-hidden  bg-red-800 swiper-swipe">
        <div class="swiper-wrapper max-h-0">
          <?php
            $colors = ['bg-red-100', 'bg-red-300', 'bg-red-200'];
            for ($i=0; $i < count($colors); $i++): ?>
            <div class="swiper-slide  block border <?= $colors[$i] ?>">
              Slide <?= $i ?>
            </div>
          <?php endfor; ?>
          </div>
        </div>
        <div id="goled-ratio-4" class="tall-rect blue overflow-hidden">
          <div class="swiper-wrapper max-w-0">
          <?php
            $colors = ['bg-red-100', 'bg-red-300', 'bg-red-200'];
            for ($i=0; $i < count($colors); $i++): ?>
            <div class="swiper-slide  border <?= $colors[$i] ?>">
              Slide <?= $i ?>
            </div>
          <?php endfor; ?>
          </div>
        </div>
      </div>
      <div class="square aqua">
      <div id="goled-ratio-5" class="tall-rect blue overflow-hidden">
          <div class="swiper-wrapper max-h-0">
          <?php
            $colors = ['bg-red-100', 'bg-red-300', 'bg-red-200'];
            for ($i=0; $i < count($colors); $i++): ?>
            <div class="swiper-slide  border <?= $colors[$i] ?>">
              Slide <?= $i ?>
            </div>
          <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>