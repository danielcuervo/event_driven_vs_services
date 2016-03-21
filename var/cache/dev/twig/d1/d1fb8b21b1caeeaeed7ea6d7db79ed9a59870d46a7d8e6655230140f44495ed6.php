<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1aa387b4f6e3fd25ffe3ea9b86290153d152fc3a37286f4eae92ea7d34afaaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb62288980c2f646c271cdb7deffa0f314139e19be98e339488eaf5249e77abe = $this->env->getExtension("native_profiler");
        $__internal_cb62288980c2f646c271cdb7deffa0f314139e19be98e339488eaf5249e77abe->enter($__internal_cb62288980c2f646c271cdb7deffa0f314139e19be98e339488eaf5249e77abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb62288980c2f646c271cdb7deffa0f314139e19be98e339488eaf5249e77abe->leave($__internal_cb62288980c2f646c271cdb7deffa0f314139e19be98e339488eaf5249e77abe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f3dc23043304c4d94d1ba7d67e0687568e26772c9648fd60899f5c606a87a13 = $this->env->getExtension("native_profiler");
        $__internal_8f3dc23043304c4d94d1ba7d67e0687568e26772c9648fd60899f5c606a87a13->enter($__internal_8f3dc23043304c4d94d1ba7d67e0687568e26772c9648fd60899f5c606a87a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f3dc23043304c4d94d1ba7d67e0687568e26772c9648fd60899f5c606a87a13->leave($__internal_8f3dc23043304c4d94d1ba7d67e0687568e26772c9648fd60899f5c606a87a13_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ad3138da935f4c34a0e7250f26023ee84d34fbd11a2e3982855e63e6072205 = $this->env->getExtension("native_profiler");
        $__internal_68ad3138da935f4c34a0e7250f26023ee84d34fbd11a2e3982855e63e6072205->enter($__internal_68ad3138da935f4c34a0e7250f26023ee84d34fbd11a2e3982855e63e6072205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_68ad3138da935f4c34a0e7250f26023ee84d34fbd11a2e3982855e63e6072205->leave($__internal_68ad3138da935f4c34a0e7250f26023ee84d34fbd11a2e3982855e63e6072205_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_631050bc94f5c8d64636b240308864d08833b64db195e0cd57ffd41560a72fa9 = $this->env->getExtension("native_profiler");
        $__internal_631050bc94f5c8d64636b240308864d08833b64db195e0cd57ffd41560a72fa9->enter($__internal_631050bc94f5c8d64636b240308864d08833b64db195e0cd57ffd41560a72fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_631050bc94f5c8d64636b240308864d08833b64db195e0cd57ffd41560a72fa9->leave($__internal_631050bc94f5c8d64636b240308864d08833b64db195e0cd57ffd41560a72fa9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
