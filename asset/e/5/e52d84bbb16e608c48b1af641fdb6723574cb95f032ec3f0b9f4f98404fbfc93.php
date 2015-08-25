<?php

/* site/index.twig */
class __TwigTemplate_e52d84bbb16e608c48b1af641fdb6723574cb95f032ec3f0b9f4f98404fbfc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layouts/content.twig", "site/index.twig", 2);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'headMeta' => array($this, 'block_headMeta'),
            'headLink' => array($this, 'block_headLink'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/content.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        // line 4
        echo "Главная";
    }

    // line 7
    public function block_headMeta($context, array $blocks = array())
    {
    }

    // line 10
    public function block_headLink($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"blocks\">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            <div class=\"block\">
                ";
            // line 17
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => $this->getAttribute($context["item"], "title", array()), 1 => ("category/parents/" . $this->getAttribute($context["item"], "link", array()))), "method");
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "site/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  61 => 17,  58 => 16,  54 => 15,  51 => 14,  48 => 13,  43 => 10,  38 => 7,  34 => 4,  31 => 3,  11 => 2,);
    }
}
