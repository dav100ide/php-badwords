<?php
   $frase = 'ciao a tutti mi chiamo cicciogamer89. mi piace Fortnite';
   $censurato = $_GET['parola'];
   $frase_nuova = str_replace($censurato, '***', $frase);
   
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>bad words</title>
   </head>
   <body>
      <p>
         <?php echo $frase; ?>
      </p>
      <em>
         lunghezza frase:
         <?php echo strlen($frase); ?>
      </em>
      <h3>
         <?php echo $frase_nuova; ?>
      </h3>
   </body>
</html>

