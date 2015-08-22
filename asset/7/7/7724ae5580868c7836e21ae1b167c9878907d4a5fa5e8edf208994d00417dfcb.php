<?php

/* admin/layouts/content.twig */
class __TwigTemplate_7724ae5580868c7836e21ae1b167c9878907d4a5fa5e8edf208994d00417dfcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("admin/layouts/main.twig", "admin/layouts/content.twig", 3);
        $this->blocks = array(
            'headMeta' => array($this, 'block_headMeta'),
            'headLink' => array($this, 'block_headLink'),
            'script' => array($this, 'block_script'),
            'headTitle' => array($this, 'block_headTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_headMeta($context, array $blocks = array())
    {
    }

    // line 6
    public function block_headLink($context, array $blocks = array())
    {
    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
    }

    // line 9
    public function block_headTitle($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("headTitle", $context, $blocks);
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/layouts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 10,  47 => 9,  42 => 7,  37 => 6,  32 => 5,  11 => 3,);
    }
}
