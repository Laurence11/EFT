<?php

/* ::templateGeneral.html.twig */
class __TwigTemplate_30fad1e5348d6967a2c0037e0e9a583d7d5eb399b9f48b3a17c0759372248d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    </head>
    <body>
        <header>
<!-- Affichage menu dynamique -->
    ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BWFSiteBundle:Categorie:menu"));
        echo "
<!-- Fin affichage menu dynamique -->
        </header>

      <!-- Affichage contenu central des pages-->
     ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "<!-- Fin affichage contenu central -->  

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "EFT ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "            
          ";
    }

    public function getTemplateName()
    {
        return "::templateGeneral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  59 => 15,  53 => 5,  45 => 18,  27 => 5,  21 => 1,  43 => 15,  41 => 6,  38 => 5,  35 => 10,  29 => 3,);
    }
}
