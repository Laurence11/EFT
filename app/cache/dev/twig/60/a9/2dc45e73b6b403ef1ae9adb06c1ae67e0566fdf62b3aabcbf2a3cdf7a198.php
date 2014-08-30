<?php

/* BWFFormationsBundle:Formations:listeFormationsAdmin.html.twig */
class __TwigTemplate_60a92dc45e73b6b403ef1ae9adb06c1ae67e0566fdf62b3aabcbf2a3cdf7a198 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("bwf_formations_add", array("id" => "new"));
        echo "\">Ajouter une Formation</a></li>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 5
            echo "<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom"), "html", null, true);
            echo "</h3>
        <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "texte"), "html", null, true);
            echo "</p>
        <p>PRIX : ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "prix"), "html", null, true);
            echo " Euros</p>
        <p>DATE DEBUT : ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateDebut"), "d-m-y"), "html", null, true);
            echo "</p>
        <p>DATE FIN : ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "dateFin"), "d-m-y"), "html", null, true);
            echo "</p>
        <p>Nombre de participants maximum : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "participantMax"), "html", null, true);
            echo "</p>
       <ul>        

<li><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bwf_formations_edit", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\">Modifier une Formation</a></li>
<li><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bwf_formations_delete", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id"))), "html", null, true);
            echo "\" onclick=\"return window.confirm('Etes-vous certain(e) de vouloir supprimer cet enregistrement ?')\">Suprimer cette formation</a></li>
        </ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BWFFormationsBundle:Formations:listeFormationsAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  30 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
