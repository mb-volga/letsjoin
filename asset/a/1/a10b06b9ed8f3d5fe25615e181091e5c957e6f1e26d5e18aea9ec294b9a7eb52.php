<?php

/* admin/layouts/nav.twig */
class __TwigTemplate_a10b06b9ed8f3d5fe25615e181091e5c957e6f1e26d5e18aea9ec294b9a7eb52 extends Twig_Template
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
        echo "<nav id=\"nav\">
    <ul id=\"menu\">
        <li>
            ";
        // line 6
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Пользователи", 1 => "admin/users"), "method");
        echo "
            <ul>
                <li>";
        // line 8
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Добавить", 1 => "admin/addusers"), "method");
        echo "</li>
            </ul>
        </li>
        <li>";
        // line 11
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Профиль", 1 => "user/profile"), "method");
        echo "
            <ul>
                <li>";
        // line 13
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Редактировать", 1 => "user/"), "method");
        echo "</li>
                <li><a href=\"#\">Мои события</a></li>
                <li>";
        // line 15
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Мои друзья", 1 => "user/"), "method");
        echo "</li>
            </ul>
        </li>
        <li><a href=\"#\">Новости</a></li>
        <li><a href=\"#\">События</a>
            <ul>
                <li><a href=\"#\">Ближайшие</a></li>
                <li><a href=\"#\">Прошедшие</a></li>
            </ul>
        </li>
        ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "isGuest", array())) {
            // line 26
            echo "            <li>";
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Войти", 1 => "site/login"), "method");
            echo "</li>
            <li>";
            // line 27
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Регистрация", 1 => "site/registration"), "method");
            echo "</li>
        ";
        } else {
            // line 29
            echo "            <li>";
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "link", array(0 => "Выйти", 1 => "user/logout"), "method");
            echo "</li>
        ";
        }
        // line 31
        echo "    </ul><!-- menu -->
</nav><!-- nav -->
            ";
    }

    public function getTemplateName()
    {
        return "admin/layouts/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  70 => 29,  65 => 27,  60 => 26,  58 => 25,  45 => 15,  40 => 13,  35 => 11,  29 => 8,  24 => 6,  19 => 3,);
    }
}
