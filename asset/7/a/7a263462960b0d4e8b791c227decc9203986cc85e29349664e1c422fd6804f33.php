<?php

/* admin/index.twig */
class __TwigTemplate_7a263462960b0d4e8b791c227decc9203986cc85e29349664e1c422fd6804f33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layouts/content.twig", "admin/index.twig", 1);
        $this->blocks = array(
            'headMeta' => array($this, 'block_headMeta'),
            'headTitle' => array($this, 'block_headTitle'),
            'headLink' => array($this, 'block_headLink'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layouts/content.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_headMeta($context, array $blocks = array())
    {
    }

    // line 7
    public function block_headTitle($context, array $blocks = array())
    {
        // line 8
        echo "    Админка | 
";
    }

    // line 11
    public function block_headLink($context, array $blocks = array())
    {
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  44 => 11,  39 => 8,  36 => 7,  31 => 4,  11 => 1,);
    }
}
