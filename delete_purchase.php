<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $d_purchase = find_by_id('purchase',(int)$_GET['id']);
  if(!$d_purchase){
    $session->msg("d","Missing purchase id.");
    redirect('purchase.php');
  }
?>
<?php
  $delete_id = delete_by_id('purchase',(int)$d_purchase['id']);
  if($delete_id){
      $session->msg("s","purchase deleted.");
      redirect('purchase.php');
  } else {
      $session->msg("d","purchase deletion failed.");
      redirect('purchase.php');
  }
?>
