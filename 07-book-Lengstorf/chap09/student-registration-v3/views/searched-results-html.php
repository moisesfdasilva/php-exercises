<?php
  $searchDataFound = isset($searchData);
  if ($searchDataFound === false) {
    trigger_error('views/searched-results-html.php needs $searchData');
  }
  $searchedHTML = "
    <section id='search'>
      <h1>You searched for <em>$searchTerm</em></h1>
      <ul>";
  while ($searchRow = $searchData->fetchObject()) {
    $href = "index.php?page=students&id=$searchRow->student_id";
    $searchedHTML .= "<li><a href='$href'>$searchRow->student_name</li>";
  }
  $searchedHTML .= "</ul></section>";
  $info .= $searchedHTML;
?>