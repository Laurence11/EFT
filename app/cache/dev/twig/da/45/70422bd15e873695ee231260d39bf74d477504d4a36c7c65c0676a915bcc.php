<?php

/* BWFVideosBundle:Videos:videoVedette.html.twig */
class __TwigTemplate_da4570422bd15e873695ee231260d39bf74d477504d4a36c7c65c0676a915bcc extends Twig_Template
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
        echo " <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "nom"), "html", null, true);
        echo "</h3>
   <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "texte"), "html", null, true);
        echo "</p>
    <p>
        ";
        // line 5
        echo $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url");
        echo "
    </p>";
    }

    public function getTemplateName()
    {
        return "BWFVideosBundle:Videos:videoVedette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  26 => 4,  22 => 3,  19 => 2,  128 => 57,  121 => 55,  119 => 54,  116 => 53,  110 => 51,  108 => 50,  105 => 49,  100 => 47,  93 => 42,  91 => 41,  88 => 40,  83 => 38,  79 => 37,  76 => 36,  74 => 35,  70 => 33,  64 => 32,  62 => 31,  57 => 29,  40 => 14,  37 => 13,  29 => 5,);
    }
}
