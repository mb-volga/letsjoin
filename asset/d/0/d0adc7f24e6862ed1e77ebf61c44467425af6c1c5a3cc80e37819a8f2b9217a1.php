<?php

/* site/registration.twig */
class __TwigTemplate_d0adc7f24e6862ed1e77ebf61c44467425af6c1c5a3cc80e37819a8f2b9217a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("/layouts/content.twig", "site/registration.twig", 2);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/layouts/content.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_headTitle($context, array $blocks = array())
    {
        // line 5
        echo "    Регистрация
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "hasFlash", array(0 => "reg"), "method")) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            <h1>";
            echo $this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "getFlash", array(0 => "reg"), "method");
            echo "</h1>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 13
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["CApp"]) ? $context["CApp"] : null), "app", array(), "method"), "isGuest", array())) {
            // line 14
            echo "
    <div id=\"registration\">
        <form method=\"POST\" name=\"registration\" id=\"form-registration\">
            <div>
                <label class=\"requared\">Email</label>
                <input type=\"text\" name=\"registration[email]\" />
            </div>

            <div>
                <label class=\"requared\">Пароль:</label>
                <input type=\"password\" name=\"registration[password]\"/>
            </div>
            <div>
                <label class=\"requared\">Nickname:</label>
                <input type=\"text\" name=\"registration[nickname]\"/>
            </div>        
            <div>
                <label class=\"requared\">Phone:</label>
                <input type=\"text\" name=\"registration[phone]\"/>
            </div>

            <div>
                <label class=\"requared\">Регион:</label>
                <select name=\"registration[id_region]\">
                    <option value=\"\">Выберите регион</option>
                    ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 40
                echo "                        ";
                echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "option", array(0 => $this->getAttribute($context["region"], "title", array()), 1 => array("value" => $this->getAttribute($context["region"], "id", array()))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </select>
            </div>
                
            <div>
                <label class=\"requared\">Город:</label>
                <select name=\"registration[id_city]\">
                    <option value=\"\">Выберите город</option>
                    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["citys"]) ? $context["citys"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                // line 50
                echo "                        ";
                echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "option", array(0 => $this->getAttribute($context["city"], "title", array()), 1 => array("value" => $this->getAttribute($context["city"], "id", array()))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </select>
            </div>
            ";
            // line 54
            echo $this->getAttribute((isset($context["CHtml"]) ? $context["CHtml"] : null), "inputSubmit", array(0 => "Регистрация"), "method");
            echo "
        </form>
    </div>

    ";
        } else {
            // line 59
            echo "    <p>Вы авторизованы.</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "site/registration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  121 => 54,  117 => 52,  108 => 50,  104 => 49,  95 => 42,  86 => 40,  82 => 39,  55 => 14,  52 => 13,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }
}
