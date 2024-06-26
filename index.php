<?php

  require_once("globals.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Perhekalenteri</title>
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
   <div class='page'>
    <header>
      <h1>Perhekalenteri</h1>
    </header>
    <section>
      <form action="kalenteri.php" method="GET" target="_blank">
        <div class="grid-container">
          <div class="grid-item">Vuosi:</div>
          <input type="number" name="year" value="<?php echo date("Y"); ?>"><br>
          
          <div class="grid-item">Kuukausi:</div>
          <select name="month">
          <?php
            foreach($months as $key => $value) {
              echo "<option value='$key'>$value</option>\n";
            }
          ?>
          </select><br>
          <div class="grid-item">Otsikkofontti:</div>
          
          <select name="header">
          <?php
            foreach($headerfonts as $key => $value) {
              echo "<option value='$key'>$value[name]</option>\n";
            }
          ?>
          </select><br>
          <div class="grid-item">Kuva:</div>
          
          <select name="bgimage">
          <?php
            foreach ($bgimages as $key => $value) {
              echo "<option value='$key'>$value[name]</option>\n";
            }
          ?>
          </select><br>
          <div class="grid-item">Perheenjäsenet:</div>
          
          <textarea name="names" rows="5"><?= $defaultnames ?></textarea><br>

          <input type="submit" value="Avaa kalenterisivu">
        </div>
      </form>
    </section>
    <footer>
      <hr>
      <div>perhekalenteri by Puppet Master</div>
    </footer>
  </body>
</html>
