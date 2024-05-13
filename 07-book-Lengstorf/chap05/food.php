<?php
  enum Food {
    case Hotdog;
    case Fish;
    case Steak;
    case Salad;
  }

  function eating(Food $type)
  {
    echo "I like $type";
  }
?>