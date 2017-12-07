<?php

require_once('include/vue_generique.php');


class VueCover extends VueGenerique {

	function __construct() {
		parent:: __construct();
		$this->titre = "Cover";
	}


	function affiche() {
		?>
		<div class="site-wrapper">

	      <div class="site-wrapper-inner">

	        <div class="cover-container">

	          <div class="masthead clearfix">
	            <div class="inner">
	              <!--<h3 class="masthead-brand">Cover</h3>
	              <nav>
	                <ul class="nav masthead-nav">
	                  <li class="active"><a href="#">Home</a></li>
	                  <li><a href="#">Features</a></li>
	                  <li><a href="#">Contact</a></li>
	                </ul>
	              </nav>-->
	            </div>
	          </div>

	          <div class="inner cover">
	            <h1 class="cover-heading">Bienvenue sur le site PastaPloutos</h1>
	            <p class="lead">Page où apparaitra une animation de fond </p>
	            <p class="lead" onclick="redirection()">
	              <a href="#" class="btn btn-lg btn-default" >Learn more</a>
	            </p>
	          </div>

	          <div class="mastfoot">
	            <div class="inner">
	              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
	            </div>
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