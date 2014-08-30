<?php

/* BWFFormationsBundle:Participants:listeParticipants.html.twig */
class __TwigTemplate_0126e528432d02bfc8bce70a2ab9bff8b81ed27dfb6a8e4678bff76472bb17fb extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")));
        foreach ($context['_seq'] as $context["_key"] => $context["participants"]) {
            // line 2
            echo "
        <p>NOM : ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")), "nom"), "html", null, true);
            echo "</p>
        <p>PRENOM : ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")), "prenom"), "html", null, true);
            echo "</p>
        <p>EMAIL : ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["participant"]) ? $context["participant"] : $this->getContext($context, "participant")), "mail"), "html", null, true);
            echo "</p>
       
        
        <h2><a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("bwf_formations_participant_edit", array("id" => "new"));
            echo "\">Modifier ce participant</a></h2>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participants'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BWFFormationsBundle:Participants:listeParticipants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
