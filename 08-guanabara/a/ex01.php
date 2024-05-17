<?php
  //https://www.youtube.com/watch?v=JFEelabfc1o&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&index=21
  //14:19
  date_default_timezone_set("America/Sao_Paulo"); //GMT -3
  $day = date("d/M/Y");
  $hour = date("G:i:s T");
  $page = "
    <!DOCTYPE html>
    <html>
      <head>
        <title>PHP</title>
        <meta
          http-equiv='Content-Type'
          content='text/html;charset=utf-8'
        />
      </head>
      <body>
        <div>
          <h2>PHP</h2>
          <h2>\u{1F30E}</h2>
          <h3>Hoje é dia $day e a hora é $hour</h3>
        </div>
      </body>
    </html>";
  echo $page;
?>