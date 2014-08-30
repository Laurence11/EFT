<?php

/* BWFSiteBundle:Categories:detail.html.twig */
class __TwigTemplate_e4837ed253bddb84b79c71063f2a7b27f8175ecb6992088c8e23099bd520935c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::templateGeneral.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::templateGeneral.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<!--affichage bouton don paypal -->
<form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
<input type=\"hidden\" name=\"cmd\" value=\"_donations\">
<input type=\"hidden\" name=\"business\" value=\"niennatelrunia@hotmail.com\">
<input type=\"hidden\" name=\"lc\" value=\"FR\">
<input type=\"hidden\" name=\"item_name\" value=\"Avec le Soleil ASBL\">
<input type=\"hidden\" name=\"no_note\" value=\"0\">
<input type=\"hidden\" name=\"currency_code\" value=\"EUR\">
<input type=\"hidden\" name=\"bn\" value=\"PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest\">
<input type=\"image\" src=\"https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !\">
<img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif\" width=\"1\" height=\"1\">
</form>

<!-- Fin affichage bouton don paypal-->
<div>
<!--";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "texte"), "html", null, true);
        echo "-->
</div>
";
        // line 31
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "activites")) {
            // line 32
            echo "         ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BWFArticlesBundle:Article:listeArticles"));
            echo "
";
        }
        // line 33
        echo "  

";
        // line 35
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "acceuil")) {
            // line 36
            echo "     
        ";
            // line 37
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BWFArticlesBundle:Article:articleVedette"));
            echo ",
        ";
            // line 38
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BWFVideosBundle:Video:videoVedette"));
            echo "
";
        }
        // line 40
        echo "        
";
        // line 41
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "contact")) {
            // line 42
            echo "        <h2>Nos coordonnées</h2>
        <h3>Avec le Soleil ASBL</h3>
        <p>rue de la Chaudronnerie 15</p>
        <p>4230 Grivegnée</p>
        <iframe width=\"425\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Rue+de+la+Chaudronnerie+14,+Li%C3%A8ge,+Belgique&amp;aq=0&amp;oq=rue&amp;sll=37.0625,-95.677068&amp;sspn=50.644639,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Rue+de+la+Chaudronnerie+14,+4030+Li%C3%A8ge,+Belgique&amp;t=m&amp;z=14&amp;ll=50.631895,5.627435&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=Rue+de+la+Chaudronnerie+14,+Li%C3%A8ge,+Belgique&amp;aq=0&amp;oq=rue&amp;sll=37.0625,-95.677068&amp;sspn=50.644639,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Rue+de+la+Chaudronnerie+14,+4030+Li%C3%A8ge,+Belgique&amp;t=m&amp;z=14&amp;ll=50.631895,5.627435\" style=\"color:#0000FF;text-align:left\">Agrandir le plan</a></small>
        ";
            // line 47
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BWFContactBundle:Contact:Contacter"));
            echo "
";
        }
        // line 49
        echo "        
";
        // line 50
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "videos")) {
            // line 51
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BWFVideosBundle:Video:listeVideos"));
            echo "
";
        }
        // line 53
        echo "        
";
        // line 54
        if (($this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "slug") == "formations")) {
            // line 55
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BWFFormationsBundle:Formation:listeFormations"));
            echo ", 
       
";
        }
        // line 57
        echo "    

";
    }

    public function getTemplateName()
    {
        return "BWFSiteBundle:Categories:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  121 => 55,  119 => 54,  116 => 53,  110 => 51,  108 => 50,  105 => 49,  100 => 47,  93 => 42,  91 => 41,  88 => 40,  83 => 38,  79 => 37,  76 => 36,  74 => 35,  70 => 33,  64 => 32,  62 => 31,  57 => 29,  40 => 14,  37 => 13,  29 => 11,);
    }
}
