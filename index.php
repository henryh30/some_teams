 <?php
    require_once __DIR__ . '/header.php';
    require_once __DIR__ . '/data.php';
    ?>

 <body>
     <div class="headLine">
         <div>
             <h1>Some teams</h1>
             <p>Here are a list of some teams:</p>
         </div>
     </div>

     <div class="articles">
         <div>
             <?php foreach ($teams as $key => $value) : ?>
                 <article>
                     <div class=mainInfo>
                         <div class="logos">
                             <img src="<?php echo $value['logo']; ?>" />
                             <img src="<?php echo $value['logo_uefa']; ?>" />
                         </div>
                         <h2>
                             <?php echo $key; ?>
                         </h2>
                         <h3>
                             <?php echo $value['league']; ?>
                         </h3>
                     </div>
                     <div>
                         <h4>
                             <?php echo "Uefa coefficient ranking: " .  $value['uefa-coefficient-ranking']; ?>
                             <br />
                             <?php
                                if ($value['league-position'] !== null) {
                                    echo "League position: " . $value['league-position'];
                                } else {
                                    echo "Could not identify league position";
                                } ?>
                             <br />
                             <?php echo "City: " . $value['city']; ?>
                             <br />
                             <a href="<?php echo $value['url']; ?>">About <?php echo $key; ?></a>
                         </h4>
                     </div>
                 </article>
             <?php endforeach; ?>
         </div>
     </div>

     <footer>
         <div>
             <div>
                 <a href="about.php">About me</a>
             </div>
         </div>
     </footer>
 </body>

 <?php require_once __DIR__ . '/footer.php' ?>