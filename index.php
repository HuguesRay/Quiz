<?php 
//////////DOC bloc/////////////
//Quiz Stanley Kubrick
//fonction coté serveur
//par: Hugues Raymond-Lessard
//2014
///////////////////////////////
$racine = simplexml_load_file('xml/template.xml');
// var_dump($racine); 
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
    <p class="large-8 medium-8 columns"><?php echo $racine->intro; ?></p> 
  </header> 
  <main>
    <div class="wrapgress row">
      <div class="cont large-12 small-6 small-centered columns">
        <progress id="progress-bar" min="1" max="100" value="0"></progress>
        <span class="first border-change"></span>
        <span class="second"></span>
        <span class="third"></span>
        <span class="fourth"></span>
        <p class="percent">0%</p>
      </div>
    </div>
    
    <form method="get" name="fQuizTypo" class="row" action="score.php">
      <?php 
      $i = 1;
      foreach($racine->xpath("//question") as $question) { 
        echo '<fieldset id="Q'.$i.'" class="large-12 large-centered medium-12 medium-centered columns">'; ?>
           <legend class="large-12 medium-12 columns"><?php echo $question->interrogation; ?></legend>
           <ul class="row">
            <?php for($k=1;$k<=4;$k++) {
            $value = $question->choixReponse[$k-1]->attributes()->estBonneReponse; ?>
            <li class="large-3 medium-6 small-12 columns choix">
              <?php echo '<input required id="Q'.$i.$k.'" type="radio" name="Q'.$i.'" value="'.$value.'" class="visuallyhidden">'; ?>
              <?php echo '<label for="Q'.$i.$k.'"><span class="q'.$i.' c'.$k.'"></span><p>'.$question->choixReponse[$k-1].'</p></label>' ?>
            </li>
            <?php } ?>
           </ul>
           <div class="retro">
            <script>
              <!--
              document.write('<div class="row"><button type="button" class="next large-3 medium-3 large-centered medium-centered small-6 small-centered columns">Prochaine question</button></div>');
              // -->
            </script>
           </div>
           
           
        </fieldset> 
        <?php
        $i++; } ?>
      <div class="row over">
        <input id='validerQuizTypo' class="large-3 medium-3 large-centered medium-centered small-6 small-centered columns" name='validerQuizTypo' type="submit" value="Valider mes choix"> 
      </div>  
    </form> 
    
    
  </main> 
  <footer class="row">
      <p class="large-12 medium-12 large-centered medium-centered columns">Copyrights Hugues Raymond-Lessard 2014</p>
  </footer> 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!--<script src="bower_components/foundation/js/foundation.min.js"></script> -->
    <script src="js/app.js"></script>
</body>
</html>