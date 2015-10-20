<?php

/* TablelessModelBundle:Author:show.html.twig */
class __TwigTemplate_254c0975f640baf9a777cca8eacd3f56dfa83691203dc9c9e092702897c40c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TablelessModelBundle:Author:show.html.twig", 1);
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
        $__internal_75b1d061e425b59d4f07ae191119d68655a97040d1289fac3d516390d079836b = $this->env->getExtension("native_profiler");
        $__internal_75b1d061e425b59d4f07ae191119d68655a97040d1289fac3d516390d079836b->enter($__internal_75b1d061e425b59d4f07ae191119d68655a97040d1289fac3d516390d079836b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TablelessModelBundle:Author:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b1d061e425b59d4f07ae191119d68655a97040d1289fac3d516390d079836b->leave($__internal_75b1d061e425b59d4f07ae191119d68655a97040d1289fac3d516390d079836b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76d5c266f801f03414797ec9de922534c3831bc7f5e2554576a66aa995f425a7 = $this->env->getExtension("native_profiler");
        $__internal_76d5c266f801f03414797ec9de922534c3831bc7f5e2554576a66aa995f425a7->enter($__internal_76d5c266f801f03414797ec9de922534c3831bc7f5e2554576a66aa995f425a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Author</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("author");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("author_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_76d5c266f801f03414797ec9de922534c3831bc7f5e2554576a66aa995f425a7->leave($__internal_76d5c266f801f03414797ec9de922534c3831bc7f5e2554576a66aa995f425a7_prof);

    }

    public function getTemplateName()
    {
        return "TablelessModelBundle:Author:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  73 => 26,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Author</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ entity.name }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('author') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('author_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
