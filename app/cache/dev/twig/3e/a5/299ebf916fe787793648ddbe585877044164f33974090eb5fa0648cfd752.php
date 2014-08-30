<?php

/* BWFArticlesBundle:Articles:editArticle.html.twig */
class __TwigTemplate_3ea5299ebf916fe787793648ddbe585877044164f33974090eb5fa0648cfd752 extends Twig_Template
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
        return "BWFArticlesBundle:Articles:editArticle.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 16,  29 => 14,  23 => 13,  20 => 12,);
    }
}
