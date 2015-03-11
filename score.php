<?php 
//////////DOC bloc/////////////
//Quiz Stanley Kubrick
//fonction coté serveur
//par: Hugues Raymond-Lessard
//2014
///////////////////////////////
// var_dump($_GET);
$pourcentTotal = (($_GET['Q1']+$_GET['Q2']+$_GET['Q3']+$_GET['Q4'])/8)*100;
$repQ1 = null;
if ($_GET['Q1']==2) {
  $repQ1 = "<span class=good>Bonne Réponse</span>";
}
else {
  $repQ1 = "<span class=bad>Mauvaise Réponse</span>";
}
$repQ2 = null;
if ($_GET['Q2']==2) {
  $repQ2 = "<span class=good>Bonne Réponse</span>";
}
else {
  $repQ2 = "<span class=bad>Mauvaise Réponse</span>";
}
$repQ3 = null;
if ($_GET['Q3']==2) {
  $repQ3 = "<span class=good>Bonne Réponse</span>";
}
else {
  $repQ3 = "<span class=bad>Mauvaise Réponse</span>";
}
$repQ4 = null;
if ($_GET['Q4']==2) {
  $repQ4 = "<span class=good>Bonne Réponse</span>";
}
else {
  $repQ4 = "<span class=bad>Mauvaise Réponse</span>";
}
?>
<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>Quiz Stanley Kubrick</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
</head>
<body>   
  <header class="row">
    <div class="large-4 medium-4 columns">
      <div class="logo">
        <img src="img/kubrick.jpeg" alt="Stanley Kubrick">
      </div>
    </div>
    <h1 class="title large-8 medium-8 columns">Quiz Stanley Kubrick</h1> 
    <p class="large-8 medium-8 columns">Après des débuts dans la photographie, Kubrick, autodidacte, sera également son propre directeur de la photographie, producteur,scénariste ou encore monteur. Ses treize longs métrages en quarante-six ans de carrière l'imposent comme un cinéaste majeur du XXe siècle. Quatre de ses films sont classés dans le top-100 de l'American Film Institute.
Connaissez-vous ses films ? </p> 
  </header> 
  <main>
    <div class="row velocity hidden">
      <div class="wrap">
        <p> 
          <span class="line">Votre score:</span> 
          <span class="line"><?php echo $pourcentTotal; ?>%</span>
        </p>
        <div class="container">
          <div class="box-wrap">
            <div class="box front"> 
            </div>
            <div class="box back">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ------ question 1 ------ -->
    <div class="Q1">
      <div class="row">
        <h2 class="large-12 medium-12 columns large-centered medium-centered">Dans quel film Jack Nicholson cours dans un hotel hanté avec une hache ?</h2>
      </div>
      <div class="row">
        <p class="large-6 medium-6 small-12 columns rep">C. The Shining</p>
        <p class="large-6 medium-6 small-12 columns rep"><?php echo $repQ1; ?></p>
      </div>
      <div class="row">
        <p class="large-8 medium-8 small-12 medium-centered columns">Shining (The Shining) est un film d'horreur britannico-américain réalisé par Stanley Kubrick en 1980, avec Jack Nicholson, Shelley Duvallet Danny Lloyd dans les rôles principaux. Il est sorti en salles aux États-Unis le 23 mai 1980.</p>
      </div>
    </div>
    <!-- ------ question 2 ------ -->
    <div class="Q2">
      <div class="row">
        <h2 class="large-12 medium-12 columns large-centered medium-centered">Quel film de Kubrick parle d’ultra-violence, de viole et de Beethoven ?</h2>
      </div>
      <div class="row">
        <p class="large-6 medium-6 small-12 columns rep">A. A Clockwork Orange</p>
        <p class="large-6 medium-6 small-12 columns rep"><?php echo $repQ2; ?></p>
      </div>
      <div class="row">
        <p class="large-8 medium-8 small-12 medium-centered columns">Adapté du roman d'Anthony Burgess, L'Orange mécanique. Il est à classer dans les films d'anticipation, mais peut également se voir comme une satire de la société moderne.</p>
      </div>
    </div>
    <!-- ------ question 3 ------ -->
    <div class="Q3">
      <div class="row">
        <h2 class="large-12 medium-12 columns large-centered medium-centered">Quel film de Kubrick a Tom Cruise et Nicole Kidman comme acteurs?</h2>
      </div>
      <div class="row">
        <p class="large-6 medium-6 small-12 columns rep">A. Eye Wide Shut</p>
        <p class="large-6 medium-6 small-12 columns rep"><?php echo $repQ3; ?></p>
      </div>
      <div class="row">
        <p class="large-8 medium-8 small-12 medium-centered columns">Eyes Wide Shut est un film américain réalisé, produit et coécrit parStanley Kubrick, dont ce sera le dernier film, sorti en 1999.</p>
      </div>
    </div>
    <!-- ------ question 4 ------ -->
    <div class="Q4">
      <div class="row">
        <h2 class="large-12 medium-12 columns large-centered medium-centered">Quel film de Kubrick met en vedette Kirk Douglas?</h2>
      </div>
      <div class="row">
        <p class="large-6 medium-6 small-12 columns rep">B. Spartacus</p>
        <p class="large-6 medium-6 small-12 columns rep"><?php echo $repQ4; ?></p>
      </div>
      <div class="row">
        <p class="large-8 medium-8 small-12 medium-centered columns">Spartacus est un film américain de Stanley Kubrick sorti en 1960 adapté du roman éponyme de Howard Fast.</p>
      </div>
    </div>
    <div class="row">
      <div class="score large-4 medium-6 small-8 large-centered  medium-centered small-centered columns">
        
        <?php echo $pourcentTotal; ?>%</div>
    </div>
    
    <div class="row">
      <a href="index.php" id="refaireQuiz" class="large-3 medium-3 large-centered medium-centered small-6 small-centered columns">Refaire le Quiz</a>
    </div>
    
  </main> 
  <footer class="row">
      <p class="large-12 medium-12 large-centered medium-centered columns">Copyrights Hugues Raymond-Lessard 2014</p>
  </footer> 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script src="bower_components/foundation/js/foundation.min.js"></script> -->
    <script src="js/app.js"></script>
    <script type="text/JavaScript" src="js/vendor/velocity.min.js"></script>
    <script>
    $('.line').each(function(i) {
      $(this).velocity(
        { 
          translateY: '-50px',
          opacity: 1,
        },
        { 
          delay: 200 * i,
          duration: 500,
          easing: 'easeOutCubic'
        } 
      );
    }); 

    $('.box-wrap').velocity(
      { rotateY: -720 },
      { delay: 50 }
    );
  
$('.container').addClass('active');</script>
</body>
</html>