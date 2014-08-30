<?php

/* BWFVideosBundle:Videos:listeVideosAdmin.html.twig */
class __TwigTemplate_3271a94f64da2747cc2d3df806f3b88eb437bd0088275c7a16fb5ccb7838369e extends Twig_Template
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
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("bwf_videos_add", array("id" => "new"));
        echo "\">Ajouter une Video</a></li>
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 4
            echo "
    <h3>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "nom"), "html", null, true);
            echo "</h3>
    <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "texte"), "html", null, true);
            echo "</p>
    <p>
        ";
            // line 8
            echo $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url");
            echo "
    </p>
  <ul>        

<li><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bwf_videos_edit", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\">Modifier cette Vidéo</a></li>
<li><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bwf_videos_delete", array("id" => $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "id"))), "html", null, true);
            echo "\" onclick=\"return window.confirm('Etes-vous certain(e) de vouloir supprimer cet enregistrement ?')\">Suprimer cette video</a></li>
        </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "BWFVideosBundle:Videos:listeVideosAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  51 => 13,  47 => 12,  40 => 8,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  19 => 2,);
    }
}
