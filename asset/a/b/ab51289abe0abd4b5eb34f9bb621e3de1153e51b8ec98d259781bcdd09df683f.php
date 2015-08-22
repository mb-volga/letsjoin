<?php

/* layouts/header.twig */
class __TwigTemplate_ab51289abe0abd4b5eb34f9bb621e3de1153e51b8ec98d259781bcdd09df683f extends Twig_Template
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
        // line 3
        $this->loadTemplate("layouts/nav.twig", "layouts/header.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 3,);
    }
}
