<?php

/* BWFArticlesBundle:Articles:listeArticlesAdmin.html.twig */
class __TwigTemplate_360cc11e1d8ab3f57e6b3bb12f73a63247ba5a2fc44d5685fb26157ea0253c06 extends Twig_Template
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
<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("bwf_articles_add", array("id" => "new"));
        echo "\">Ajouter un article</a></li>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "
<h2>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nom"), "html", null, true);
            echo "</h2>
<p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "texte"), "html", null, true);
            echo "</p>
";
            // line 9
            echo "       <ul>        

<li><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bwf_articles_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">Modifier cet article </a></li>
<li><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bwf_articles_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" onclick=\"return window.confirm('Etes-vous certain(e) de vouloir supprimer cet enregistrement ?')\">Suprimer cet article</a></li>
        </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BWFArticlesBundle:Articles:listeArticlesAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  45 => 11,  41 => 9,  37 => 7,  33 => 6,  30 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
