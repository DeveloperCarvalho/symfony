<?php

/* TablelessModelBundle:Post:new.html.twig */
class __TwigTemplate_50c808ffbccd5116c6fbe4ee5f9b0cc6f61d9ca07eea57fc3da2f8bfdad0dadb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TablelessModelBundle:Post:new.html.twig", 1);
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
        $__internal_0457f40ac2a1bf8833f87e1d6d091474253c1f07868441137e2b1ec2039c9be9 = $this->env->getExtension("native_profiler");
        $__internal_0457f40ac2a1bf8833f87e1d6d091474253c1f07868441137e2b1ec2039c9be9->enter($__internal_0457f40ac2a1bf8833f87e1d6d091474253c1f07868441137e2b1ec2039c9be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TablelessModelBundle:Post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0457f40ac2a1bf8833f87e1d6d091474253c1f07868441137e2b1ec2039c9be9->leave($__internal_0457f40ac2a1bf8833f87e1d6d091474253c1f07868441137e2b1ec2039c9be9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a16b0116c1b83e15c770478aec14d234c919ef1bab5d34bff3197b22d30be4e = $this->env->getExtension("native_profiler");
        $__internal_5a16b0116c1b83e15c770478aec14d234c919ef1bab5d34bff3197b22d30be4e->enter($__internal_5a16b0116c1b83e15c770478aec14d234c919ef1bab5d34bff3197b22d30be4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_5a16b0116c1b83e15c770478aec14d234c919ef1bab5d34bff3197b22d30be4e->leave($__internal_5a16b0116c1b83e15c770478aec14d234c919ef1bab5d34bff3197b22d30be4e_prof);

    }

    public function getTemplateName()
    {
        return "TablelessModelBundle:Post:new.html.twig";
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
/*     <h1>Post creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('post') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
