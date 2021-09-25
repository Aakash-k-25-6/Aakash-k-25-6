<?php
  include_once 'header.php';
?>

<section>  
  <article>
    <?php
      if (isset($_SESSION["useruid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
      }
      
    ?>  
      <h1>For You!</h1>
    <p>This cheems page is still in development......  :)  come soomn...</p>
  <h2> Categories</h2>
  <br>
  <div class="index-categories-list" >
  <h3>Romance</h3>
  <div class="scrollmenu">
    <div>
      <a href="movie.php">
      <img src="https://i.pinimg.com/originals/31/f7/15/31f715d1d72d4e9b307b330f074b2fb0.jpg" style="padding:50dp">
      </a>
      <img src="https://images-na.ssl-images-amazon.com/images/I/71s4ezULeOL._SY679_.jpg" >
    
      <img src="https://i.pinimg.com/originals/9c/7f/9d/9c7f9d40ba63dcf1baebb24bf0cc550a.jpg" >

      <img src="https://images-na.ssl-images-amazon.com/images/I/51mTtUGvUCL._SY445_.jpg" >
    
      <img src="https://pbs.twimg.com/media/EZIk7qQUEAEk109.jpg" >

      <img src="https://images-na.ssl-images-amazon.com/images/I/71VfCZVuKTL._SY445_.jpg" >
    </div>
  </div>
  
  
  <div class="index-categories-list" >
  <h3>ScienceFiction</h3>
  <div class="scrollmenu">
    <div>
      <img src="https://posterspy.com/wp-content/uploads/2020/07/z1.jpg"  style="padding:50">
    
      <img src="https://m.media-amazon.com/images/M/MV5BMTRmYzNmOTctZjMwOS00ODZlLWJiZGQtNDg5NDY5NjE3MTczXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg" >
    
      <img src="https://images-na.ssl-images-amazon.com/images/I/51DJT59COYL.jpg" >

      <img src="https://steemitimages.com/DQmbmXjLYi2cNG495w4bE5p4brxnX21XQs84CK4VY1bvKWs/1.jpg" >
    
      <img src="https://www.moviedash.com/wp-content/uploads/2020/05/Tenet-Theories-1.jpeg" >

      <img src="https://cdn.slashgear.com/wp-content/uploads/2019/09/alien_1979_main-1280x720.jpg" >
    </div>
  </div>

  <div class="index-categories-list" >
  <h3>Thriller</h3>
  <div class="scrollmenu">
    <div>
      <img src="https://imgc.allpostersimages.com/img/print/u-g-F54Q2J0.jpg?w=291&h=450"  style="padding:50dp">
    
      <img src="https://121clicks.com/wp-content/uploads/2020/04/netflix_crime_thriller_series_01.jpg" >
    
      <img src="https://imgix.ranker.com/user_node_img/4269/85373369/original/jack-ryan-photo-u4?fit=crop&fm=pjpg&q=60&w=144&h=144&dpr=2" >

      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/98/John_Wick_TeaserPoster.jpg/220px-John_Wick_TeaserPoster.jpg" >
    
      <img src="https://upload.wikimedia.org/wikipedia/en/d/dc/Jumanji_Welcome_to_the_Jungle.png" >

      <img src="https://m.media-amazon.com/images/M/MV5BMGUwZjliMTAtNzAxZi00MWNiLWE2NzgtZGUxMGQxZjhhNDRiXkEyXkFqcGdeQXVyNjU1NzU3MzE@._V1_UX182_CR0,0,182,268_AL__QL50.jpg" >
    </div>
  </div>

  <div class="index-categories-list" >
  <h3>Best of seriesFreaks!</h3>
  <div class="scrollmenu">
    <div>
      <img src="https://cnet3.cbsistatic.com/img/J6WsvoDsr_5GZUfX6uYkbgRnl4U=/2019/03/04/3055d4ad-ad09-4924-9132-eb790c0633af/jonsnowonthronegot.jpg" style="padding:50dp">
    
      <img src="https://images-na.ssl-images-amazon.com/images/I/61boFr6SYZL._SL1000_.jpg" >
    
      <img src="https://cdn.shopify.com/s/files/1/0151/0741/products/pg9900_1024x1024.jpg?v=1578633300" >

      <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/04/27/817597-avengers-endgame.jpg" >
    
      <img src="https://movieposters2.com/images/1467973-b.jpg" >

      <img src="https://cdn.shopify.com/s/files/1/1416/8662/products/avatar_2009_british_quad_teaser_original_film_art_5000x.jpg?v=1569115317" >

    </div>
  </div>
  
  <div class="index-categories-list">
  <h3>CriticsZone</h3>
  <div class="scrollmenu">
    <div>
      <img src="https://www.gbposters.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/t/stranger-things-one-sheet-maxi-poster-1.133.jpg"  style="padding:50dp">
    
      <img src="https://upload.wikimedia.org/wikipedia/en/8/84/Prison_Break_%28miniseries%29.jpg" >
    
      <img src="https://m.media-amazon.com/images/M/MV5BNWNmYzQ1ZWUtYTQ3ZS00Y2UwLTlkMDctZThlOTJkMGJiNzBiXkEyXkFqcGdeQXVyNjg2NjQwMDQ@._V1_UY1200_CR90,0,630,1200_AL_.jpg" >

      <img src="https://upload.wikimedia.org/wikipedia/en/c/c1/Sonic_the_Hedgehog_poster.jpg" >
    
      <img src="https://upload.wikimedia.org/wikipedia/en/3/31/Justice_League_film_poster.jpg" >

      <img src="https://upload.wikimedia.org/wikipedia/en/6/63/The_Emoji_Movie_film_poster.jpg" >
    </div>
  </div>

  <div class="index-categories-list" >
  <h3>Best of NETFLIX</h3>
  <div class="scrollmenu">
    <div>
      <img src="http://amazon.com/images/M/MV5BOGE4MmVjMDgtMzIzYy00NjEwLWJlODMtMDI1MGY2ZDlhMzE2XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg"  style="padding:50dp">
    
      <img src="https://i.pinimg.com/originals/88/43/1a/88431a9ed1430dd5359e13002b24c824.jpg" >
    
      <img src="https://m.media-amazon.com/images/M/MV5BM2EwMmRhMmUtMzBmMS00ZDQ3LTg4OGEtNjlkODk3ZTMxMmJlXkEyXkFqcGdeQXVyMjM5ODk1NDU@._V1_.jpg" >

      <img src="https://upload.wikimedia.org/wikipedia/en/9/93/Jurassic_Park_%28franchise_logo%29.png" >
    
      <img src="https://upload.wikimedia.org/wikipedia/en/3/38/The_SpongeBob_Movie_Sponge_on_the_Run.jpg" >

      <img src="https://upload.wikimedia.org/wikipedia/en/7/74/Ready_Player_One_%28film%29.png" >
    </div>
  </div>

  </article>
</section>


<?php
  include_once 'footer.php';
?>