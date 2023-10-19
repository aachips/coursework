<!-- require initialize.php -->
<?php require_once('../../private/initialize.php'); ?>

<!-- 
  Write a salamanders array with the following
id=1, salamanderName = Red-Legged Salamander
id=2, salamanderName = Pigeon Mountain Salamander
id=3', salamanderName = ZigZag Salamander
id=4,  salamanderName= Slimy Salamander 
-->
<?php
$salamanders = [
  ['id' => 1, 'salamanderName' => 'Red-Legged Salamander'],
  ['id' => 2, 'salamanderName' => 'Pigeon Mountain Salamander'],
  ['id' => 3, 'salamanderName' => 'ZigZag Salamander'],
  ['id' => 4, 'salamanderName' => 'Slimy Salamander'],
];

?>

<!-- Add the pageTitle for salamanders
Include a shared path to the salamander header -->
<?php 
$pageTitle = 'Salamanders';
include_once(SHARED_PATH . '/salamander-header.php');
?>

<main>
  <h1>Salamanders</h1>
  <a href="#">Create Salamander</a>
  
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
  
    <?php foreach($salamanders as $salamander) { ?>
      <tr>
        <td><?= $salamander['id'] ?></td>
        <td><?= $salamander['salamanderName'] ?></td>
        <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
        <td><a href="<?= h(u('salamanders/show.php?id=' . h(u($salamander['id'])))); ?>">View</a></td>
        <td><a href="#">Edit</a></td>
        <td><a href="#">Delete</a></td>
      </tr>
    <?php } ?>
  </table>
</main>

<!-- add the shared path to the salamander footer -->
<?php include_once(SHARED_PATH . '/salamander-footer.php'); ?>
