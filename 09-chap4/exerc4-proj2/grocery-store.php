<?php declare(strict_types=1);
  require_once('item.php');

  $rice = new Item(5, 'Chinese Rice', 'Starch', 'Rice', 15, 20, 2.5);
  $beans = new Item(6, 'Black Beans', 'Canned', 'Beans', 8, 30, 5.25);
  $popcorn = new Item(7, 'Mushroom Popcorn', 'Snacks', 'Popcorn', 7, 150, 1.10);
  $lettuce = new Item(8, 'Lettuce Green Leaf', 'Vegetables', 'Lettuce', 6, 45, 2.10);
  $beef = new Item(9, 'Roast Beef', 'Meat', 'Beef', 14, 250, 51.85);

  $grocery_list = [$rice, $beans, $popcorn, $lettuce, $beef];

  foreach($grocery_list as $item)
  {
    print '<h3>Item-'.$item->get_item_number().'</h3>';
    print 'Description: '.$item->get_item_description();
    print ', size: '.$item->get_item_size();
    print ', self: '.$item->get_item_self();
    print ', isle: '.$item->get_item_isle();
    print ', amount: '.$item->get_item_amount();
    print ', price: $ '.$item->get_item_price();
    print '.<br>';
  }
?>