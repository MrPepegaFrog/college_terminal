<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>CRT-TERMINAL</title>
</head>
  <body class="crt-flicker">
    <!-- SVG-фильтры  -->
    <svg style="position: absolute; width: 0; height: 0">
      <defs>
        <!-- Искажение экрана (бочкообразное) -->
        <filter id="crt-distort">
          <feTurbulence type="fractalNoise" baseFrequency="0.01" numOctaves="2" result="noise" />
          <feDisplacementMap in="SourceGraphic" in2="noise" scale="3" xChannelSelector="R" yChannelSelector="G" />
        </filter>

        <!-- Свечение (bloom) -->
        <filter id="bloom">
          <feGaussianBlur stdDeviation="2" result="blur" />
          <feMerge>
            <feMergeNode in="blur" />
            <feMergeNode in="SourceGraphic" />
          </feMerge>
        </filter>
      </defs>
    </svg>

    <!-- Слои эффектов -->
    <div class="crt-vignette"></div>
    <div class="crt-noise"></div>

    <div class="headeContainer">
      <div class="headTopRow">
        <h2>USER:<span>unknown</span></h2>
        <div class="headChannelBlock">
          <div class="pick"></div>
          <div class="pick"></div>
          <div class="hardPick">02</div>
          <p>[] CHANNEL.INFO_CHANNEL.INITIALIZE []</p>
        </div>
        <button class="button_day_night">NIGHT</button>
      </div>
      <div class="headDownRow">
        <div class="dawnPick">0G</div>
        <div class="dawnPickHard"></div>
        <div class="dawnPickLight"></div>
        <div class="dawnPickNav">
          <nav class="nav">
            <a href="../../index.php" class="link">LOG:MAIN</a>
            <a href="../../auth.php" class="link">LOG:AUTH</a>
            <a href="../../kernel.php" class="link">LOG:KERNEL</a>
          </nav>
        </div>
        <div class="dawnEndPick">KERNEL UPD...</div>
      </div>
    </div>


    <script src="../script/theme.js"></script>