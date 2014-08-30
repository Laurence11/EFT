<?php

/* BWFFormationsBundle:Formations:addFormations.html.twig */
class __TwigTemplate_b6a0d2657807f3ef4f175f0c3dbdcf0a8de37257ec49740869fa90f83745ba45 extends Twig_Template
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
        return "BWFFormationsBundle:Formations:addFormations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  32 => 15,  29 => 14,  23 => 13,  20 => 12,);
    }
}
