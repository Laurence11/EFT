<?php

/* BWFVideosBundle:Videos:listeVideos.html.twig */
class __TwigTemplate_5aa857e223b47231b244e77970ab1e980b06eb6dce875becaaa5f040bb11fc99 extends Twig_Template
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
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 2
            echo "
    <h3>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "nom"), "html", null, true);
            echo "</h3>
    <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "texte"), "html", null, true);
            echo "</p>
    <p>
        ";
            // line 6
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url");
            echo "
    </p>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BWFVideosBundle:Videos:listeVideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
