<?php

/* digitsynergyBundle:Default:index.html.twig */
class __TwigTemplate_ac2c75b75d4857cdf6d3760b4183761b87b5c0788f67efdcaf47f0b87390510a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "EasyRoad ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  
     
    
    <div class=\"map\">
    ";
        // line 12
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer((isset($context["map2"]) ? $context["map2"] : $this->getContext($context, "map2")));
        echo "
    </div>
       
    \t";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "          <div class=\"box1\" style=\" position: absolute;  top: 90%;  right: 1%;  width: 28%; height: 8%;\" data-toggle=\"modal\" data-target=\"#myModal\">
            
       
             <a href=\"#\">  <h3>add a trafficJam</h3></a>
          </div>
          
          ";
        }
        // line 23
        echo "       
            <div class=\"modal fade\" id=\"myModal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
       ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div>
          ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label');
        echo "
          ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
          ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
        </div>
        <div>
          ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "
          ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
          ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
        </div>
        <div>
          ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startingtime"), 'label');
        echo "
          ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startingtime"), 'errors');
        echo "
          ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startingtime"), 'widget');
        echo "
        </div>
        <div>
          ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endingtime"), 'label');
        echo "
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endingtime"), 'errors');
        echo "
          ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endingtime"), 'widget');
        echo "
        </div>
        <div>
          ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude"), 'label');
        echo "
          ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude"), 'errors');
        echo "
          ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude"), 'widget');
        echo "
        </div>
        <div>
          ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largitude"), 'label');
        echo "
          ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largitude"), 'errors');
        echo "
          ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largitude"), 'widget');
        echo "
        </div>
        

        <div>
          ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget');
        echo "
        </div>
          ";
        // line 64
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        
   
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts((isset($context["map2"]) ? $context["map2"] : $this->getContext($context, "map2")));
        echo "
            
\t\t";
    }

    public function getTemplateName()
    {
        return "digitsynergyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 74,  192 => 73,  179 => 64,  174 => 62,  166 => 57,  162 => 56,  158 => 55,  152 => 52,  148 => 51,  144 => 50,  138 => 47,  134 => 46,  130 => 45,  124 => 42,  120 => 41,  116 => 40,  110 => 37,  106 => 36,  102 => 35,  96 => 32,  92 => 31,  88 => 30,  83 => 28,  79 => 27,  73 => 23,  64 => 16,  62 => 15,  56 => 12,  50 => 8,  47 => 7,  41 => 3,  36 => 4,  34 => 3,  31 => 2,);
    }
}
