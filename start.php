<!DOCTYPE html>

<head>
    <link rel ="stylesheet" href="styles.css">
    <style>
        body {
          font-family: Arial, sans-serif;
        }
        .container {
          position: absolute; /* Establish positioning context */
          width: 1200px;
          height: 600px;
          border: 0px solid blue;
          margin: 0px;
        }
        #hfr {
          position:relative;
          top: 0px;
          left: 1px;
          width: 1000px;
          height: 90px;
          border: 0px solid rgb(25, 181, 25);
          z-index: 1; /* Lower layer */
          align-items:top;
          padding: 0px;
        }

        #mfr {
          position:relative;
          top: 1px;
          left: 1px;
          width: 1000px;
          height: 30px;
          border: 0px solid rgb(25, 181, 25);
          z-index: 2; /* Lower layer */
        }
          
        #wfr {
          position: relative;
          top: 1px;
          left: 0px;
          width: 1000px;
          height: 380px;
          border: 0px solid red;
          z-index: 3; 
         /* Lower layer display:block;*/

        }

    
      </style>

</head>
<body>
<?php
echo "<iframe src='headx.html' scrolling='no' name='hdrf' id='hfr' ></iframe>";
echo "<iframe src='welcome.html' scrolling='no' name='mfr' id='mfr'></iframe>";
echo "<iframe src='login.php' scrolling='yes' name='wfr' id='wfr' ></iframe>";
?>

</body>
