<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2fe002dbd9a9c912eaef1f21dc5638532692ee33b688cde3d9dd131aada668e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0c2de1e8377b32a94e48c438b50fdcadd2026fa279703d85305419726027a611 = $this->env->getExtension("native_profiler");
        $__internal_0c2de1e8377b32a94e48c438b50fdcadd2026fa279703d85305419726027a611->enter($__internal_0c2de1e8377b32a94e48c438b50fdcadd2026fa279703d85305419726027a611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c2de1e8377b32a94e48c438b50fdcadd2026fa279703d85305419726027a611->leave($__internal_0c2de1e8377b32a94e48c438b50fdcadd2026fa279703d85305419726027a611_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ed82a7599a1afaa53fe50412a63de55d438a2816c4f5e9c1ac9458ff1675f9e = $this->env->getExtension("native_profiler");
        $__internal_3ed82a7599a1afaa53fe50412a63de55d438a2816c4f5e9c1ac9458ff1675f9e->enter($__internal_3ed82a7599a1afaa53fe50412a63de55d438a2816c4f5e9c1ac9458ff1675f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ed82a7599a1afaa53fe50412a63de55d438a2816c4f5e9c1ac9458ff1675f9e->leave($__internal_3ed82a7599a1afaa53fe50412a63de55d438a2816c4f5e9c1ac9458ff1675f9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c9446f91e2e2b56da8746a15b0a81f644656d918b9dfedcbde17215778374f5 = $this->env->getExtension("native_profiler");
        $__internal_9c9446f91e2e2b56da8746a15b0a81f644656d918b9dfedcbde17215778374f5->enter($__internal_9c9446f91e2e2b56da8746a15b0a81f644656d918b9dfedcbde17215778374f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c9446f91e2e2b56da8746a15b0a81f644656d918b9dfedcbde17215778374f5->leave($__internal_9c9446f91e2e2b56da8746a15b0a81f644656d918b9dfedcbde17215778374f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d1dd2542dce4ec1605d4dc9588334cee5849ecc9c43f8c8df33e059c4a7dba8 = $this->env->getExtension("native_profiler");
        $__internal_6d1dd2542dce4ec1605d4dc9588334cee5849ecc9c43f8c8df33e059c4a7dba8->enter($__internal_6d1dd2542dce4ec1605d4dc9588334cee5849ecc9c43f8c8df33e059c4a7dba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d1dd2542dce4ec1605d4dc9588334cee5849ecc9c43f8c8df33e059c4a7dba8->leave($__internal_6d1dd2542dce4ec1605d4dc9588334cee5849ecc9c43f8c8df33e059c4a7dba8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
