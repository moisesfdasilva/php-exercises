<?php
  $info = "
    <form method='post' action='index.php?page=money'>
      <h2>Fill out the form to calculate reais (R$) to another money</h2>
      <p>Value (R$)</p>
      <input type='number' step='0.01' name='real'/>
      <select name='money'>
        <option value='dollar'>Dollar US</option>
        <option value='euro'>Euro</option>
        <option value='pesoar'>Peso AR</option>
        <option value='pesouy'>Peso UY</option>
        <option value='rublo'>Rublo RU</option>
        <option value='yuan'>Yuan CN</option>
      </select>
      <input type='submit' name='money-submitted' value='post'/>
    </form>";
?>
