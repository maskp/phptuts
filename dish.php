<?php
define('TITLE',"dish");
include('./includes/header.php');

function strip_bad_chars($input){
    $output = preg_replace("/[^a-zA-Z0-9_-]/","",$input);
    return $output;
}

if(isset($_GET['item'])){
  $menuItem = strip_bad_chars($_GET['item']);

  $dish = $menuItems[$menuItem];
}
?>
<hr>

<div id="dish">

  <h1> <?php echo $dish['title']; ?> <sup>$</sup> <?php echo $dish['price'];?> </h1>
  <em><?php echo $dish['blurb']; ?></em><br>
  <em><?php echo $dish['drink']; ?></em><br>
  

</div>



<?php
include('./includes/footer.php')
?>
