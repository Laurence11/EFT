<?php

/* BWFVideosBundle:Videos:addVideo.html.twig */
class __TwigTemplate_cc41df01a57d6c39e685d3463b33435fda030aa7a4124792ea3494f88dfe1b09 extends Twig_Template
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
    }

    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "        
         <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("bwf_formations_add", array("id" => "new"));
        echo "\" method=\"post\" >
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
        return "BWFVideosBundle:Videos:addVideo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  32 => 15,  29 => 14,  23 => 13,  20 => 12,);
    }
}
