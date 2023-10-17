<?php require_once('../../private/initialize.php');
include('../../private/functions.php');

$salamanders = [
  ['id' => '1', 'position' => '1', 'Salamander' => 'Red-Legged Salamander'],
  ['id' => '2', 'position' => '2',  'Salamander' => 'Pigeon Mountain Salamander'],
  ['id' => '3', 'position' => '3',  'menu_name' => 'ZigZag Salamander'],
  ['id' => '4', 'position' => '4',  'menu_name' => 'Slimy Salamander'],
];

include('../../private/shared/salamander-header.php');
if(!isset($page_title)) {$page_title = 'Salamanders';}
$page_title = "Salamanders";
?>

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
          <td>Display the salamander id</td>
    	    <td>Display the salamander name</td>
          <td>Use url_for with show.php AND h(u) with the salamander['id']</td>
          <td><?php echo h($subject['id']); ?></td>
          <td><?php echo h($subject['position']); ?></td>
          <td><?php echo $subject['visible']; ?></td>
          <td><?php echo h($subject['menu_name']); ?></td>
          <td><a class="action" href="<?php echo urlFor('/staff/subjects/show.php?id=' . h(u($subject['id']))); ?>">View</a></td>
          <td><a href="#">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
<?php include_once('../../private/shared/salamander-footer.php');?>