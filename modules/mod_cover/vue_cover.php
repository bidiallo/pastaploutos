<?php

require_once('include/vue_generique.php');


class VueCover extends VueGenerique {

	function __construct() {
		parent:: __construct();
		$this->titre = "Cover";
	}


	function affiche() {
		?>
		<style type="text/css">

		</style>
		<div class="site-wrapper" style="background-image: url(images/liste_recette.jpg); background-repeat: no repeat; background-size: cover; background-position: center; height: 500px">

	      <div class="site-wrapper-inner">

	        <div class="cover-container">

	          <div class="masthead clearfix">
	            <div class="inner">
	             
	            </div>
	          </div>

	          <div class="inner cover" style="color:#FFFFFF; font-weight: 30px">
	            <h1 class="cover-heading">Bienvenue sur le site PastaPloutos</h1>
	            <p class="lead" onclick="redirection()">
	              <a href="index.php?module=accueil" class="btn btn-lg btn-default" >Venez manger !</a>
	            </p>
	          </div>

	        </div>

	      </div>

	    </div>

	     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


     <script type="text/javascript">
      
        function redirection() {
          document.location.href = 'index.php?module=accueil';
        }
    </script>
      <?php		
	}

}

?>