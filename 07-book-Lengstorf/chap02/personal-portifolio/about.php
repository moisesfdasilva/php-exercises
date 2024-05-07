<?php
  (string) $header = "
    <header class='header'>
      <h1>About Page</h1>
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
      <h2>Ricochet Rabbit & Droop-a-Long</h2>
      <ul>
        <li>Genre: Comedy and Western</li>
        <li>Created by: Hanna-Barbera</li>
        <li>Directed by: William Hanna and Joseph Barbera</li>
        <li>Voices of: Don Messick and Mel Blanc</li>
        <li>Theme music composer: Hoyt Curtin</li>
        <li>Country of origin: United States</li>
        <li>Original language: English</li>
        <li>Number of seasons: 2</li>
        <li>Number of episodes: 23</li>
      </ul>
      <h2>Production</h2>
      <ul>
        <li>Producers: William Hanna and Joseph Barbera</li>
        <li>Running time: 7 minutes</li>
        <li>Production Company: Hanna-Barbera Productions</li>
      </ul>
    </article>";
  (string) $aside = "
      <aside class='aside'>
        <img class='science-computer' src='ricochet2.png'>
      </aside>
    </section>";
  (string) $footer = "
    <footer class='footer'>
      <p>Bing-bing-bing!</p>
    </footer>";

  include_once "Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->title = "Ricochet Rabit: Portfolio site (About)";
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