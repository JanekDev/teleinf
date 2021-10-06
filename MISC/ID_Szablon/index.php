<?php
$url = "https://1drv.ms/u/s!Amju4goAMpLUjRD-_2h_aIkHdQ6B";
?>
<!DOCTYPE HTML>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="1;url=<?php echo $url ?>">
  <script type="text/javascript">
    window.location.href = "<?php echo $url ?>"
  </script>
  <title>Przekierowanie</title>
  <style>
    body {
      margin: 0;
      display: grid;
    }

    #container {
      display: table;
      position: absolute;
      font-family: arial;
      text-align: center;
      height: 100%;
      width: 100%;
      margin: 0;
    }

    #center {
      display: table-cell;
      vertical-align: middle;
      margin: 0;
    }

    #center h1 {
      margin: 16px;
    }

    #center p {
      margin: 16px;
    }
  </style>
</head>

<body>
  <div id="container">
    <div id="center">
      <h1>Trwa przekierowywanie...</h1>
      <p>Strona znajduje się pod tym adresem: <a href='<?php echo $url ?>'><?php echo $url ?></a></p>
    </div>
  </div>
</body>

</html>