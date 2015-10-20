<?php

/* base.html.twig */
class __TwigTemplate_8dc08fdb451b3c7175eefc2f190fa8c9ff2d6d5e129cc34bbf7091e0f899a624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a1a226d84239395e17851cfb85aaaa84b229c50f4765fbe39eac742ded2a53d = $this->env->getExtension("native_profiler");
        $__internal_5a1a226d84239395e17851cfb85aaaa84b229c50f4765fbe39eac742ded2a53d->enter($__internal_5a1a226d84239395e17851cfb85aaaa84b229c50f4765fbe39eac742ded2a53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5a1a226d84239395e17851cfb85aaaa84b229c50f4765fbe39eac742ded2a53d->leave($__internal_5a1a226d84239395e17851cfb85aaaa84b229c50f4765fbe39eac742ded2a53d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df264c91f34d95c5231a661830e799d075b5a0637e2bba4dd8cea8fc8d78feb = $this->env->getExtension("native_profiler");
        $__internal_7df264c91f34d95c5231a661830e799d075b5a0637e2bba4dd8cea8fc8d78feb->enter($__internal_7df264c91f34d95c5231a661830e799d075b5a0637e2bba4dd8cea8fc8d78feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7df264c91f34d95c5231a661830e799d075b5a0637e2bba4dd8cea8fc8d78feb->leave($__internal_7df264c91f34d95c5231a661830e799d075b5a0637e2bba4dd8cea8fc8d78feb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e61abb793535a8e8d2c4a787603a602951cc6e57d9625e5ef8924d26983aee27 = $this->env->getExtension("native_profiler");
        $__internal_e61abb793535a8e8d2c4a787603a602951cc6e57d9625e5ef8924d26983aee27->enter($__internal_e61abb793535a8e8d2c4a787603a602951cc6e57d9625e5ef8924d26983aee27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e61abb793535a8e8d2c4a787603a602951cc6e57d9625e5ef8924d26983aee27->leave($__internal_e61abb793535a8e8d2c4a787603a602951cc6e57d9625e5ef8924d26983aee27_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b8bf1b7f9a8031dfc35ba7110e3bac8a9dfc3564d4a40964f1a8ada385e7a14 = $this->env->getExtension("native_profiler");
        $__internal_1b8bf1b7f9a8031dfc35ba7110e3bac8a9dfc3564d4a40964f1a8ada385e7a14->enter($__internal_1b8bf1b7f9a8031dfc35ba7110e3bac8a9dfc3564d4a40964f1a8ada385e7a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b8bf1b7f9a8031dfc35ba7110e3bac8a9dfc3564d4a40964f1a8ada385e7a14->leave($__internal_1b8bf1b7f9a8031dfc35ba7110e3bac8a9dfc3564d4a40964f1a8ada385e7a14_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6729dc977e92089aefdf4581a13ce792a645af83c2b1a5688f403a3d076a8398 = $this->env->getExtension("native_profiler");
        $__internal_6729dc977e92089aefdf4581a13ce792a645af83c2b1a5688f403a3d076a8398->enter($__internal_6729dc977e92089aefdf4581a13ce792a645af83c2b1a5688f403a3d076a8398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6729dc977e92089aefdf4581a13ce792a645af83c2b1a5688f403a3d076a8398->leave($__internal_6729dc977e92089aefdf4581a13ce792a645af83c2b1a5688f403a3d076a8398_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
