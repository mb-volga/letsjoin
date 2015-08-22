<?php

/* admin/users/users.twig */
class __TwigTemplate_12e7b3f8d3f927a9ecd162e7cc612fad0e376c7fa9f39341fb83b70bf46c8248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.twig", "admin/users/users.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_headTitle($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("headTitle", $context, $blocks);
        echo "
    Пользователи
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <form method=\"POST\" name=\"users\" action=\"\">
        <table border=\"1\" >
            <tr>
                <th><input type=\"checkbox\" name=\"users[]\" value=\"-1\" id=\"maincb\" /></th>
                <th><span>#</span></th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), 0, array(), "array"), "getAttributeLabel", array(0 => "nickname"), "method"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), 0, array(), "array"), "getAttributeLabel", array(0 => "email"), "method"), "html", null, true);
        echo "</th>
                <th><span>Бан</span></th>                
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), 0, array(), "array"), "getAttributeLabel", array(0 => "phone"), "method"), "html", null, true);
        echo "</th>
                <th><span>Операции</span></th>
            </tr>
            ";
        // line 18
        $context["counter"] = 1;
        // line 19
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td><input type=\"checkbox\" class=\"check_choice\" name=\"users[]\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ban", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
                <td>
                    <label for=\"profile\">
                        ";
            // line 29
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => $this->getAttribute(            // line 30
(isset($context["CHtml"]) ? $context["CHtml"] : null), "img", array(0 => "/design/icons/user.png", 1 => array("width" => "15", "height" => "15")), "method"), 1 => ("admin/viewuser/" . $this->getAttribute(            // line 31
$context["user"], "id", array())), 2 => array("title" => "Профиль")), "method");
            // line 32
            echo "
                    </label>
                    
                    <label for=\"edit\">
                        ";
            // line 36
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "button", array(0 => $this->getAttribute(            // line 37
(isset($context["CHtml"]) ? $context["CHtml"] : null), "img", array(0 => "/design/icons/edit.png", 1 => array("width" => "15", "height" => "15")), "method"), 1 => array("name" => "edit", "type" => "submit", "title" => "Редактировать", "name" => "edit")), "method");
            // line 39
            echo "
                    </label>
                    
                    <label for=\"del\">
                        ";
            // line 43
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "button", array(0 => $this->getAttribute(            // line 44
(isset($context["CHtml"]) ? $context["CHtml"] : null), "img", array(0 => "/design/icons/del.png", 1 => array("width" => "15", "height" => "15")), "method"), 1 => array("type" => "submit", "title" => "Удалить", "name" => "del")), "method");
            // line 46
            echo "
                    </label>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </table>
        <div class=\"controls\">
            ";
        // line 53
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "input", array(0 => "Удалить", 1 => array("name" => "del", "type" => "submit", "title" => "Удалить")), "method");
        echo "
            ";
        // line 54
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "input", array(0 => "Бан", 1 => array("name" => "setban", "type" => "submit", "title" => "Забанить")), "method");
        echo "
            ";
        // line 55
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "input", array(0 => "Разбанить", 1 => array("name" => "unsetban", "type" => "submit", "title" => "Разбанить")), "method");
        echo "
        </div>
    </form>   
</div>

<script type=\"text/javascript\">
    \$(document).ready(function (){
        if(\$('checkbox#maincb')){
            \$('#maincb').click(function (){
                if(\$('input.check_choice')){
                    /* Выбрать все чекбоксы */
                }
    })}})
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/users/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 55,  142 => 54,  138 => 53,  134 => 51,  124 => 46,  122 => 44,  121 => 43,  115 => 39,  113 => 37,  112 => 36,  106 => 32,  104 => 31,  103 => 30,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  79 => 22,  75 => 21,  72 => 20,  67 => 19,  65 => 18,  59 => 15,  54 => 13,  50 => 12,  43 => 7,  40 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
