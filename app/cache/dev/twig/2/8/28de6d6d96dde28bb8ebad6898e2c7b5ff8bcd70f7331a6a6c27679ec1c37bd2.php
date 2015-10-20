<?php

/* TablelessModelBundle:Author:new.html.twig */
class __TwigTemplate_252037922616b478d616abb09de7601b836ca585500f6856c3f8897adef07aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TablelessModelBundle:Author:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fed0bb6b29fa474cfc99da3e7e95e4d2b54fe41e5b0cdbb6428f8286fcc2eb89 = $this->env->getExtension("native_profiler");
        $__internal_fed0bb6b29fa474cfc99da3e7e95e4d2b54fe41e5b0cdbb6428f8286fcc2eb89->enter($__internal_fed0bb6b29fa474cfc99da3e7e95e4d2b54fe41e5b0cdbb6428f8286fcc2eb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TablelessModelBundle:Author:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fed0bb6b29fa474cfc99da3e7e95e4d2b54fe41e5b0cdbb6428f8286fcc2eb89->leave($__internal_fed0bb6b29fa474cfc99da3e7e95e4d2b54fe41e5b0cdbb6428f8286fcc2eb89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d08bb16ce7c05f1fef9c0aa0f37a21a526bcb3987b3d77f09c771fbf8a239486 = $this->env->getExtension("native_profiler");
        $__internal_d08bb16ce7c05f1fef9c0aa0f37a21a526bcb3987b3d77f09c771fbf8a239486->enter($__internal_d08bb16ce7c05f1fef9c0aa0f37a21a526bcb3987b3d77f09c771fbf8a239486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Author creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("author");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_d08bb16ce7c05f1fef9c0aa0f37a21a526bcb3987b3d77f09c771fbf8a239486->leave($__internal_d08bb16ce7c05f1fef9c0aa0f37a21a526bcb3987b3d77f09c771fbf8a239486_prof);

    }

    public function getTemplateName()
    {
        return "TablelessModelBundle:Author:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Author creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('author') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
