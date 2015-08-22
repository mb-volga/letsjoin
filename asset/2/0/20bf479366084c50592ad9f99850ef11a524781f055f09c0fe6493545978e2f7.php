<?php

/* admin/layouts/header.twig */
class __TwigTemplate_20bf479366084c50592ad9f99850ef11a524781f055f09c0fe6493545978e2f7 extends Twig_Template
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
        $this->loadTemplate("admin/layouts/nav.twig", "admin/layouts/header.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "admin/layouts/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 3,);
    }
}
