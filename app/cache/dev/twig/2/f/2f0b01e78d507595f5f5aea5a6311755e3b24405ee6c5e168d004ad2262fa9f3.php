<?php

/* TablelessModelBundle:Post:edit.html.twig */
class __TwigTemplate_780818098b9bd3f700e9ca705762534cf0dcc9153b02dfafe2f7ed8242bd3ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TablelessModelBundle:Post:edit.html.twig", 1);
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
        $__internal_b529ffa683182054f0e586bca49fd7f2a0302dce2a7b8f018229053b940be365 = $this->env->getExtension("native_profiler");
        $__internal_b529ffa683182054f0e586bca49fd7f2a0302dce2a7b8f018229053b940be365->enter($__internal_b529ffa683182054f0e586bca49fd7f2a0302dce2a7b8f018229053b940be365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TablelessModelBundle:Post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b529ffa683182054f0e586bca49fd7f2a0302dce2a7b8f018229053b940be365->leave($__internal_b529ffa683182054f0e586bca49fd7f2a0302dce2a7b8f018229053b940be365_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb98c6ea663402936137fb84d9d899c7d4812229056c8da096d39ff9a18dc18 = $this->env->getExtension("native_profiler");
        $__internal_cbb98c6ea663402936137fb84d9d899c7d4812229056c8da096d39ff9a18dc18->enter($__internal_cbb98c6ea663402936137fb84d9d899c7d4812229056c8da096d39ff9a18dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_cbb98c6ea663402936137fb84d9d899c7d4812229056c8da096d39ff9a18dc18->leave($__internal_cbb98c6ea663402936137fb84d9d899c7d4812229056c8da096d39ff9a18dc18_prof);

    }

    public function getTemplateName()
    {
        return "TablelessModelBundle:Post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Post edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('post') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
