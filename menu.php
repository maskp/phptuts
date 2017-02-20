<?php
define("TITLE","menu");
include('/includes/header.php');

?>
<div id="menu-items">
  <h1>Deliciosu menu</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
  <hr>
  <ul>
    <!--
      syntax: foreach ($array as $key => $value)
      http://www.tuxradar.com/practicalphp/5/3/0
    -->
    <?php foreach ($menuItems as $dish => $item) { ?>

      <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a> <sup>$</sup><?php echo $item['price']; ?></li>

    <?php } ?>
  </ul>

</div>
<?php
  include('./includes/footer.php');

?>
