<?php

/* BWFArticlesBundle:Articles:articleVedette.html.twig */
class __TwigTemplate_8ead2bcf1a02cc520e67cc6ada66a22c85f9d5fed48c9e879ac6d753bdf5e7a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
        echo "</h2>
<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "BWFArticlesBundle:Articles:articleVedette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 3,  19 => 2,  128 => 57,  121 => 55,  119 => 54,  116 => 53,  110 => 51,  108 => 50,  105 => 49,  100 => 47,  93 => 42,  91 => 41,  88 => 40,  83 => 38,  79 => 37,  76 => 36,  74 => 35,  70 => 33,  64 => 32,  62 => 31,  57 => 29,  40 => 14,  37 => 13,  29 => 11,);
    }
}
