<?php

/* BWFVideosBundle:Videos:editVideo.html.twig */
class __TwigTemplate_8b014c8678354a5b4cd6ed1bc30389202bbc2f50e6d1d07a01af0bbc1f6ec067 extends Twig_Template
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
        return "BWFVideosBundle:Videos:editVideo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  34 => 14,  31 => 13,  25 => 21,  23 => 13,  20 => 12,);
    }
}
