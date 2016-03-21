<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a367b9ff35b7ea7791a9392d9198dd68e6064517c1fe0628c922b67399e7f2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67f131873574385736275a65b2ca5ec83e3d13489803ce9883949a2a80b3cd3a = $this->env->getExtension("native_profiler");
        $__internal_67f131873574385736275a65b2ca5ec83e3d13489803ce9883949a2a80b3cd3a->enter($__internal_67f131873574385736275a65b2ca5ec83e3d13489803ce9883949a2a80b3cd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f131873574385736275a65b2ca5ec83e3d13489803ce9883949a2a80b3cd3a->leave($__internal_67f131873574385736275a65b2ca5ec83e3d13489803ce9883949a2a80b3cd3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3191870d55e0ba7d24844a9acc5e97c24bb6b4da36a68346ef391782d0671651 = $this->env->getExtension("native_profiler");
        $__internal_3191870d55e0ba7d24844a9acc5e97c24bb6b4da36a68346ef391782d0671651->enter($__internal_3191870d55e0ba7d24844a9acc5e97c24bb6b4da36a68346ef391782d0671651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3191870d55e0ba7d24844a9acc5e97c24bb6b4da36a68346ef391782d0671651->leave($__internal_3191870d55e0ba7d24844a9acc5e97c24bb6b4da36a68346ef391782d0671651_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59f02fa676a17a655790cf01d9ac7c86b9aa27529f047ab36d8beeeeb21a3e13 = $this->env->getExtension("native_profiler");
        $__internal_59f02fa676a17a655790cf01d9ac7c86b9aa27529f047ab36d8beeeeb21a3e13->enter($__internal_59f02fa676a17a655790cf01d9ac7c86b9aa27529f047ab36d8beeeeb21a3e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_59f02fa676a17a655790cf01d9ac7c86b9aa27529f047ab36d8beeeeb21a3e13->leave($__internal_59f02fa676a17a655790cf01d9ac7c86b9aa27529f047ab36d8beeeeb21a3e13_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96891861c24f3f3a533986f328e13f7cef111a77d7cb9630038d798e62ea2540 = $this->env->getExtension("native_profiler");
        $__internal_96891861c24f3f3a533986f328e13f7cef111a77d7cb9630038d798e62ea2540->enter($__internal_96891861c24f3f3a533986f328e13f7cef111a77d7cb9630038d798e62ea2540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_96891861c24f3f3a533986f328e13f7cef111a77d7cb9630038d798e62ea2540->leave($__internal_96891861c24f3f3a533986f328e13f7cef111a77d7cb9630038d798e62ea2540_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
