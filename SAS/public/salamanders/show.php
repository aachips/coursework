<?php require_once('../../private/initialize.php'); 

// fancy if...else
$id = $_GET['id'] ?? '1';

// if the id is not empty assign it the value from $_GET['id' else $id = 1 or use the non-coalesing operator

$pageTitle = 'Salamander Details';

// include the shared path to the header
include(SHARED_PATH . '/salamander-header.php');
?>

<h2>Salamander Details</h2>
<p>Page ID: <?= h($id) ?></p>
<!-- <p> Page ID: Use the h() function and pass in the id/p> -->
<p><a href="<?= urlFor('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>

