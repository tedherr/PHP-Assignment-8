<html>
<head>
    <title>CS130 PHP Assignment 8</title>
    <link rel="stylesheet" type="text/css" href="assignmentstyle.css">
    
<?php
  if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
  }
?>
</head>
<body>
<main>
  <h1>Assignment 8 (Functions)</h1>

    <p id="author">Ted Herr</p><br>

      <h3>Source Code</h3>

        <a href="assign08.php?source" target="_blank">Click here to view the source code.</a><br><br>
      <h3>Task 1:  Write php code to list three countries and their capitals.</h3><br>

<?php
$animalNoise[] = filter_input(INPUT_POST, 'animalNoise');
print_r($animalNoise);
$printAnimalNoise = (string) $animalNoise;
echo $printAnimalNoise;
?>
<!--  **************************************************
      *
      *
      *
      **************************************************
-->
<!-- 
<br>
-->
<?php
?>
<?php 
 ?>
 
 
 
 
 
 <form action='assign08.php' method='post'>
   <p>Select as many animals as you would like.  
   <ol>
   <li>To select more than one on a Mac, hold down the control key and click.</li>
      <li>To deselect a choice on a Mac, hold down the control key and click.</li>
   <br/>
   <select name='animalNoise[]' size=5 multiple>
     <option value='pig:oink'>Pig
     <option value='duck:quack'>Duck
     <option value='cow:moo'>Cow
     <option value='sheep:baa'>Sheep
     <option value='horse:neigh'>Horse
     <option value='dog:woof'>Dog
     <option value='cat:meow'>Cat
     <option value='rooster:cock-a-doodle-doo'>Rooster
   </select></p>
   <input type='submit' value='Sing!'>
 </form>
 
</main>
</body>
</html>
