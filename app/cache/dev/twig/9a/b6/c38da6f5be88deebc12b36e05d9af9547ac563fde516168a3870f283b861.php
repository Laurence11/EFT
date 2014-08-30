<?php

/* BWFFormationsBundle:Formations:editFormations.html.twig */
class __TwigTemplate_9ab6c38da6f5be88deebc12b36e05d9af9547ac563fde516168a3870f283b861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "        
     <form action=\"\" method=\"post\" >
       ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
       <p><input type=\"submit\" /></p>
     </form>

";
    }

    public function getTemplateName()
    {
        return "BWFFormationsBundle:Formations:editFormations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  33 => 14,  30 => 13,  25 => 21,  23 => 13,  20 => 12,);
    }
}
