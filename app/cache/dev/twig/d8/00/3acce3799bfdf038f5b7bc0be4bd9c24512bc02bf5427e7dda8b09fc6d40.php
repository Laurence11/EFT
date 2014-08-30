<?php

/* BWFSiteBundle:Admin:administration.html.twig */
class __TwigTemplate_d8003acce3799bfdf038f5b7bc0be4bd9c24512bc02bf5427e7dda8b09fc6d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::templateGeneral.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "<div>Sélectionnez une section dans le menu </div>
";
        // line 7
        $this->env->loadTemplate("BWFSiteBundle:Admin:menuAdmin.html.twig")->display($context);
        // line 8
        echo "

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    public function getTemplateName()
    {
        return "BWFSiteBundle:Admin:administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,);
    }
}
