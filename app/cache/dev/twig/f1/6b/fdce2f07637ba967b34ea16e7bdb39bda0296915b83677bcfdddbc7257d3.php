<?php

/* BWFSiteBundle:Admin:menuAdmin.html.twig */
class __TwigTemplate_f16bfdce2f07637ba967b34ea16e7bdb39bda0296915b83677bcfdddbc7257d3 extends Twig_Template
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
<ul>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("bwf_site_liste_articles");
        echo "\">Articles</a></li>
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("bwf_site_liste_formations");
        echo "\">Formations</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("bwf_site_liste_videos");
        echo "\">Videos</a></li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("bwf_site_liste_participants");
        echo "\">Participants</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BWFSiteBundle:Admin:menuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  27 => 5,  23 => 4,  19 => 2,);
    }
}
