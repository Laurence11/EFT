<?php

/* BWFFormationsBundle:Formations:listeFormations.html.twig */
class __TwigTemplate_6d8bb49d7f14d3386dce0a86ace4e958365156c6d68010a0460347e2a08121fa extends Twig_Template
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
        echo "
<h2>Nos prochaines Formations</h2>
<iframe src=\"https://www.google.com/calendar/embed?src=kei00998%40gmail.com&ctz=Europe/Brussels\" style=\"border: 0\" width=\"800\" height=\"600\" frameborder=\"0\" scrolling=\"no\"></iframe>
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
        
        <h2><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("bwf_formations_participant_add", array("id" => "new"));
            echo "\">S'inscrire a cette Formation</a></h2>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 


";
    }

    public function getTemplateName()
    {
        return "BWFFormationsBundle:Formations:listeFormations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
