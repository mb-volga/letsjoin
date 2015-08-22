<?php

/* admin/users/registration.twig */
class __TwigTemplate_6c221cf8de7bd451a4355373c29facabfaa95507392762c06780525b6a257d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/index.twig", "admin/users/registration.twig", 1);
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

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("headTitle", $context, $blocks);
        echo "
    Добавить пользователя
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "hasFlash", array(0 => "reg"), "method")) {
            // line 10
            echo "<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "getFlash", array(0 => "reg"), "method"), "html", null, true);
            echo "</h1>
";
        }
        // line 12
        echo "<div id=\"registration\">
    <form method=\"POST\" name=\"registration\" id=\"form-registration\">
        <div>
            <label for=\"email\" class=\"requared\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "email"), "method"), "html", null, true);
        echo "</label>
            <input id=\"email\" type=\"text\" name=\"registration[email]\"/>
        </div>
        <div>
            <label for=\"pass\" class=\"requared\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "password"), "method"), "html", null, true);
        echo ":</label>
            <input id=\"pass\" type=\"password\" name=\"registration[password]\"/>
        </div>
        <div>
            <label for=\"nickname\" class=\"requared\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "nickname"), "method"), "html", null, true);
        echo ":</label>
            <input id=\"nickname\" type=\"text\" name=\"registration[nickname]\"/>
        </div>        
        <div>
            <label for=\"phone\" class=\"requared\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "phone"), "method"), "html", null, true);
        echo ":</label>
            <input id=\"phone\" type=\"text\" name=\"registration[phone]\"/>
        </div>
        
        <div>
            <label class=\"requared\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["regions"]) ? $context["regions"] : null), 0, array(), "array"), "getAttributeLabel", array(0 => "title"), "method"), "html", null, true);
        echo ":</label>
            <select name=\"registration[id_city]\">
                <option value=\"\">Выберите регион</option>
                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 36
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "title", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </select>
        </div> 
        
        <div>
            <label class=\"requared\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["citys"]) ? $context["citys"] : null), 0, array(), "array"), "getAttributeLabel", array(0 => "title"), "method"), "html", null, true);
        echo ":</label>
            <select name=\"registration[id_city]\">
                <option value=\"\">Выберите город</option>
                ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["citys"]) ? $context["citys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 46
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "title", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </select>
        </div>       
        
        <div>
            <label for=\"ban\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAttributeLabel", array(0 => "ban"), "method"), "html", null, true);
        echo ":</label>
            <select id=\"ban\" name=\"registration[ban]\">
                <option value=\"\">Выберите..</option>
                <option value=\"0\">Нет</option>
                <option value=\"1\">Да</option>
            </select>
        </div>
        
        ";
        // line 60
        echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "input", array(0 => "Регистрация", 1 => array("type" => "submit")), "method");
        echo "
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/users/registration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  139 => 52,  133 => 48,  122 => 46,  118 => 45,  112 => 42,  106 => 38,  95 => 36,  91 => 35,  85 => 32,  77 => 27,  70 => 23,  63 => 19,  56 => 15,  51 => 12,  45 => 10,  43 => 9,  40 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
