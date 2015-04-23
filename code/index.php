<?php
  $req = explode('/', $_SERVER['REQUEST_URI']);
  array_shift($req);

  if ($req[0] === 'static') { // serve static
    $type = array_pop(explode('.', $req[2]));
    if ($type === 'js') {
      header('content-type', 'text/javascript');
    } elseif ($type === 'css') {
      header('content-type', 'text/css');
    }
    echo(file_get_contents($_SERVER['SCRIPT_FILENAME']));
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload, please</title>

    <link href="static/css/bootstrap-3.3.2.min.css" rel="stylesheet">
    <link href="static/css/dropzone-4.0.1.min.css" rel="stylesheet">
    <link href="static/css/basic.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      body { padding: 1em; }
    </style>
  </head>
  <body>
    <h1><strong>Upload, please</strong></h1>

    <form action="http://localhost:16300/" class="dropzone"></form>

    <pre>
      <?php var_dump($type);?>
    </pre>

    <script src="static/js/jquery-2.1.1.min.js"></script>
    <script src="static/js/bootstrap-3.3.2.min.js"></script>
    <script src="static/js/dropzone-4.0.1.js"></script>
    <script src="static/js/index.js"></script>
  </body>
</html>
