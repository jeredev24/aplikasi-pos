<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Animated ASCII Art</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: monospace;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ascii-art {
            white-space: pre;       /* preserve spaces */
            font-size: 18px;
            color: darkred;
            animation: slideAndColor 5s infinite alternate;
        }

        @keyframes slideAndColor {
            0% {
                transform: translateX(-500px); /* start off screen left */
                color: darkred;
            }
            50% {
                transform: translateX(0);      /* center */
                color: orange;
            }
            100% {
                transform: translateX(500px);  /* off screen right */
                color: yellow;
            }
        }
    </style>
</head>
<body>
<?php
echo "<pre class='ascii-art'>
  ____       _       _      ___   __   ____        _           _  
 |  _ \\ ___ (_)_ __ | |_   / _ \\ / _| / ___|  __ _| | ___  ___| | 
 | |_) / _ \\| | '_ \\| __| | | | | |_  \\___ \\ / _` | |/ _ \\/ __| | 
 |  __/ (_) | | | | | |_  | |_| |  _|  ___) | (_| | |  __/\\__ \\_| 
 |_|   \\___/|_|_| |_|\\__|  \\___/|_|   |____/ \\__,_|_|\\___||___(_) 
</pre>";
?>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ASCII Art in HTML</title>
</head>
<body>
  <pre>


        .--'''''''''--.
     .'      .---.      '.
    /    .-----------.    \
   /        .-----.        \
   |       .-.   .-.       |
   |      /   \ /   \      |
    \    | .-. | .-. |    /
     '-._| | | | | | |_.-'
         | '-' | '-' |
          \___/ \___/
       _.-'  /   \  `-._
     .' _.--|     |--._ '.
     ' _...-|     |-..._ '
            |     |
            '.___.'
              | |
             _| |_
            /\( )/\
           /  ` '  \
          | |     | |
          '-'     '-'
          | |     | |
          | |     | |
          | |-----| |
       .`/  |     | |/`.
       |    |     |    |
       '._.'| .-. |'._.'
             \ | /
             | | |
             | | |
             | | |
            /| | |\
          .'_| | |_`.
          `. | | | .'
       .    /  |  \    .
      /o`.-'  / \  `-.`o\
     /o  o\ .'   `. /o  o\
     `.___.'       `.___.'
  </pre>
</body>
<head>
    <meta charset="UTF-8">
    <title>Full Page Color</title>
    <style>
        body {
            margin: 0; /* remove default white margins */
            height: 100vh; /* make sure it covers full viewport height */
            background-color: lightblue; /* fill entire page */
        }

    </style>
</head>
<body>
</body>
</html>

