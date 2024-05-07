<?php
  (string) $header = "
    <header class='header'>
      <h1>Main Page</h1>
    </header>";
  (string) $nav = "
    <section class='main-section'>
      <nav class='nav-top'>
        <ul>
          <li><a href='main.php'>Main Page</a></li>
          <li><a href='about.php'>About</a></li>
        </ul>
      </nav>";
  (string) $article = "
    <article class='article'>
      <h2>Ricochet Rabbit</h2>
      <p>
        Ricochet Rabbit & Droop-a-Long was a segment of Hanna-Barbera's 
        1964–1966 cartoon The Magilla Gorilla Show, and later appeared 
        on The Peter Potamus Show.
      </p>
      <p>
        Taking place in a Wild West setting, Ricochet Rabbit (voiced by 
        Don Messick) worked as a sheriff in the town of Hoop 'n' Holler. 
        Ricochet would bounce off stationary objects yelling 'Bing-bing-bing!' 
        His deputy and foil Droop-a-Long Coyote (voiced by Mel Blanc 
        impersonating Ken Curtis) was not as fast and was very clumsy.
      </p>
      <p>
        In addition to his speed, which enabled him to outrun bullets, 
        Ricochet used trick bullets against his opponents, including a 
        bullet that would stop in mid-flight and strike the target with 
        an impossibly oversized mallet, and another which would draw a 
        target on his nose and punch it.
      </p>
    </article>";
  (string) $aside = "
      <aside class='aside'>
        <img class='science-computer' src='ricochet.jpg'>
      </aside>
    </section>";
  (string) $footer = "
    <footer class='footer'>
      <p>Bing-bing-bing!</p>
    </footer>";

  include_once "Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->title = "Ricochet Rabit: Portfolio site (Main)";
  $pageData->css = "<link href='style.css' rel='stylesheet'/>";
  $pageData->content = $header . $nav . $article . $aside . $footer;
  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
    include_once "$fileToLoad.php";
  }
  require "page.php";
  echo $page;
?>