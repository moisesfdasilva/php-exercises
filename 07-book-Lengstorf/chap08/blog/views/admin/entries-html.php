<?php
  $entriesFound = isset($entries);
  if ($entriesFound === false) {
    trigger_error('views/list-entries-html.php needs $entries');
  }
  $info = "<h1>All Blog Entries</h1>";
  $info .= "<ul id='blog-entries'>";
  while ($entry = $entries->fetchObject()) {
    $info .= "<li>
      <h2>$entry->title [$entry->entry_id]</h2>
      <div>
      <p>$entry->intro</p>
      </div>
      </li>";
  }
  $info .= "</ul>";
?>
<?php
  //complete code for views/admin/entries-html.php
  $entriesFound = isset( $entries );
  if ( $entriesFound === false ) {
    trigger_error( 'views/admin/entries-html.php needs $entries' );
  }
  //create a <ul> element
  $info = "<h1>Blog Entries</h1>";
  $info .= "<ul id='blog-entries'>";
  $info .= "<ul>";
  //loop through all $entries from the database
  //remember each one row temporarily as $entry
  //$entry will be a StdClass object with entry_id, title and intro
  while ( $entry = $entries->fetchObject() ) {
    $href  = "admin.php?page=editor&id=$entry->entry_id";
    //create an <li> for each of the entries
    $info .= "<li><a href='$href'>$entry->title</a></li>";
  }
  //end the <ul>
  $info .= "</ul>";
?>
