<?php
  $tshit_file = simplexml_load_file("tshit-sizes.xml");
  $xmlText = $tshit_file->asXML();
  print "<select name='tshit_size' id='tshit_size'>";
  print "<option>Select a t-shit size</option>";
  foreach ($tshit_file->children() as $name => $value)
  {
    print "<option value='$value'>$value</option>";
  }
  print "</select>";
?>