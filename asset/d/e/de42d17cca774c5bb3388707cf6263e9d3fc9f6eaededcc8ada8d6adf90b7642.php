<?php

/* site/events.twig */
class __TwigTemplate_de42d17cca774c5bb3388707cf6263e9d3fc9f6eaededcc8ada8d6adf90b7642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layouts/content.twig", "site/events.twig", 2);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
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

    // line 4
    public function block_headTitle($context, array $blocks = array())
    {
        // line 5
        echo "    События
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "details", array()), "html", null, true);
            echo "
        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["places"]) ? $context["places"] : null), $this->getAttribute($context["event"], "id", array()), array(), "array"), "title", array()), "html", null, true);
            echo "
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "site/events.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  45 => 10,  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }
}
