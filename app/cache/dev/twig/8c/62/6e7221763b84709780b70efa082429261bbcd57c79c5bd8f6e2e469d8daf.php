<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8c626e7221763b84709780b70efa082429261bbcd57c79c5bd8f6e2e469d8daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'fb' => array($this, 'block_fb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
<title>
    ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/offCanvas.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mine.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" />
    <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/common.css"), "html", null, true);
        echo "\" />-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.custom.79639.js"), "html", null, true);
        echo "\"></script> 

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/offcanvas.js"), "html", null, true);
        echo "\"></script>
    <div id=\"fb-root\"></div>
 
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



  </head>

    <body>
";
        // line 54
        $this->displayBlock('navbar', $context, $blocks);
        // line 125
        echo "    

        ";
        // line 127
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 129
        echo "        

        
         ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('fb', $context, $blocks);
        // line 148
        echo "       
    </body>


</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    Home
    ";
    }

    // line 54
    public function block_navbar($context, array $blocks = array())
    {
        // line 55
        echo "    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("hello");
        echo "\">
          <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icon.png"), "html", null, true);
        echo "\" style=\"width:43%; height:150%;\"/>
          EasyRoad</a>
        </div>

        <div class=\"collapse navbar-collapse navbar-right\">
               
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("hello");
        echo "\">Home</a></li>
            <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">tarfficJam <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">closest</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">by area</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">by type</a></li>
          </ul>
        </li>
        ";
        // line 83
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 84
            echo "        <li class=\"dropdown \">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">account <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">profile</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 89
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">change password ?</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">logout</a></li>
         </ul>
            </li>
            ";
        }
        // line 95
        echo "            
             ";
        // line 96
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == false)) {
            // line 97
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">login</a></li>
              ";
        }
        // line 99
        echo "            <li><a href=\"#about\">About</a></li>
            <li><a href=\"#contact\">Contact</a></li>

            ";
        // line 102
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 
            <li><a href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
            echo "\">admin dashboard</a></li>
            ";
        }
        // line 105
        echo "          
           ";
        // line 106
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 107
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" 
          >
                ";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                
                    ";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            </li>
            ";
        }
        // line 115
        echo "
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>

        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->
";
    }

    // line 127
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 128
        echo "        ";
    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        // line 133
        echo "
        ";
    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        // line 136
        echo "         
        



        ";
    }

    // line 143
    public function block_fb($context, array $blocks = array())
    {
        // line 144
        echo "<div style=\"position: absolute;  top: 99%;  right: 1%;  width: 28%; height: 8%;\">
<div class=\"fb-like\" data-href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"));
        echo "
\" data-width=\"455\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 145,  308 => 144,  305 => 143,  296 => 136,  293 => 135,  288 => 133,  285 => 132,  281 => 128,  278 => 127,  265 => 115,  258 => 111,  253 => 109,  247 => 107,  245 => 106,  242 => 105,  237 => 103,  233 => 102,  228 => 99,  222 => 97,  220 => 96,  217 => 95,  210 => 91,  205 => 89,  200 => 87,  195 => 84,  193 => 83,  179 => 72,  169 => 65,  165 => 64,  154 => 55,  151 => 54,  146 => 12,  134 => 148,  132 => 143,  129 => 142,  126 => 135,  124 => 132,  119 => 129,  117 => 127,  113 => 125,  111 => 54,  92 => 38,  88 => 37,  84 => 36,  70 => 25,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  39 => 14,  25 => 1,  189 => 130,  178 => 122,  148 => 95,  143 => 11,  137 => 92,  115 => 73,  106 => 67,  90 => 54,  83 => 50,  79 => 49,  44 => 17,  37 => 11,  34 => 14,  29 => 9,);
    }
}
