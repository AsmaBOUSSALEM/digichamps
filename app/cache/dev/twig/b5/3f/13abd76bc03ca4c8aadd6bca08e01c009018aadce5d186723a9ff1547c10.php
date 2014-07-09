<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b53f13abd76bc03ca4c8aadd6bca08e01c009018aadce5d186723a9ff1547c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo "<script>window.location.replace(\"";
            echo $this->env->getExtension('routing')->getPath("hello");
            echo "\");</script>";
        }
        // line 16
        echo "            


    <div class=\"container\" >

<center>
<section class=\"demo-4\">
        
        <div class=\"grid\">
          <div class=\"box\">
            
          <a data-toggle=\"collapse\" data-parent=\"#accordion\" data-target=\"#login\">  <h3>LOGIN</h3></a>
            
          </div>
          
          <div class=\"box\">
            
            <a data-toggle=\"collapse\" data-parent=\"#accordion\" data-target=\"#signin\"> <h3>SIGN-IN</h3></a>
            
          </div>
        </div><!-- /grid -->
      </section>
</center>

<div class=\"panel-group login \" id=\"accordion\">
  <div class=\"panel panel-default\">
  <div id=\"login\" class=\"panel-collapse collapse\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        LOGIN
      </h4>
    </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal \" role=\"form\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">username</label>
      <div class=\"col-sm-10\">
        <input id=\"username\" name=\"_username\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" type=\"text\" class=\"form-control\"  >
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">Password</label>
      <div class=\"col-sm-10\">
        <input  type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-offset-2 col-sm-10\">
        <div class=\"checkbox\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
         <label for=\"remember_me\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-sm-offset-2 col-sm-10\">
      <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\" >LOGIN </button>
        

      </div>
    </div>
  </form>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
  <div id=\"signin\" class=\"panel-collapse collapse\">
    <div class=\"panel-heading\">
      <h4 class=\"panel-title\">
        SIGN IN
      </h4>
    </div>
      <div class=\"panel-body\">
       
    <div class=\"form-group\">
     <form action=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "   >
    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    </form>

    </div>
      </div>
    </div>
  </div>
  
</div>
 





    
      
      
      
      
      <section class=\"main\">
      
        <ul class=\"ch-grid\">
          <li>
            <div class=\"ch-item ch-img-1\">
              <div class=\"ch-info \" >
                <a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\"><h3>login with facebook</h3>
                </a>
              </div>
            </div>
          </li>
          <li>
            <div class=\"ch-item ch-img-2 \">
              <div class=\"ch-info\">
                <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("hwi_oauth_service_redirect", array("service" => "google"));
        echo "\" ><h3>login with google</h3>
                </a>
              </div>
            </div>
          </li>
          
        </ul>
        
      </section>
      
 






";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 130,  178 => 122,  148 => 95,  143 => 93,  137 => 92,  115 => 73,  106 => 67,  90 => 54,  83 => 50,  79 => 49,  44 => 16,  37 => 15,  34 => 14,  29 => 9,);
    }
}
