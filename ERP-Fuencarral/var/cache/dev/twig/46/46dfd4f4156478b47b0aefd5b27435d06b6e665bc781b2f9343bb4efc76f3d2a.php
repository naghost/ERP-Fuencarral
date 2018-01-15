<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8634137991ed2f1dd11182aeee43766b3ed7a95d2f721f0af7b931b5958eb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8634137991ed2f1dd11182aeee43766b3ed7a95d2f721f0af7b931b5958eb64->enter($__internal_c8634137991ed2f1dd11182aeee43766b3ed7a95d2f721f0af7b931b5958eb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_78cd988931e299209167f0c3d49bc429483f35337d2ca435c5376f1e751717b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cd988931e299209167f0c3d49bc429483f35337d2ca435c5376f1e751717b8->enter($__internal_78cd988931e299209167f0c3d49bc429483f35337d2ca435c5376f1e751717b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c8634137991ed2f1dd11182aeee43766b3ed7a95d2f721f0af7b931b5958eb64->leave($__internal_c8634137991ed2f1dd11182aeee43766b3ed7a95d2f721f0af7b931b5958eb64_prof);

        
        $__internal_78cd988931e299209167f0c3d49bc429483f35337d2ca435c5376f1e751717b8->leave($__internal_78cd988931e299209167f0c3d49bc429483f35337d2ca435c5376f1e751717b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_45fe707c263d5591b8c1844bbfbb4319f7a9bff938751ddb964c75a6df85faba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fe707c263d5591b8c1844bbfbb4319f7a9bff938751ddb964c75a6df85faba->enter($__internal_45fe707c263d5591b8c1844bbfbb4319f7a9bff938751ddb964c75a6df85faba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_551fe8832649a3fab6329f0b2d132ca2e5949937a976bc43c4aad72be9ea8ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551fe8832649a3fab6329f0b2d132ca2e5949937a976bc43c4aad72be9ea8ae6->enter($__internal_551fe8832649a3fab6329f0b2d132ca2e5949937a976bc43c4aad72be9ea8ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_551fe8832649a3fab6329f0b2d132ca2e5949937a976bc43c4aad72be9ea8ae6->leave($__internal_551fe8832649a3fab6329f0b2d132ca2e5949937a976bc43c4aad72be9ea8ae6_prof);

        
        $__internal_45fe707c263d5591b8c1844bbfbb4319f7a9bff938751ddb964c75a6df85faba->leave($__internal_45fe707c263d5591b8c1844bbfbb4319f7a9bff938751ddb964c75a6df85faba_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_872274696d5217a0f8b80256856d9c4b84867ed71456c52c11143a728cf04ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872274696d5217a0f8b80256856d9c4b84867ed71456c52c11143a728cf04ba5->enter($__internal_872274696d5217a0f8b80256856d9c4b84867ed71456c52c11143a728cf04ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f1bad0a5edb9985635edea1df43849f378f682960ca8cc1aafe565f57d0ba852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bad0a5edb9985635edea1df43849f378f682960ca8cc1aafe565f57d0ba852->enter($__internal_f1bad0a5edb9985635edea1df43849f378f682960ca8cc1aafe565f57d0ba852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f1bad0a5edb9985635edea1df43849f378f682960ca8cc1aafe565f57d0ba852->leave($__internal_f1bad0a5edb9985635edea1df43849f378f682960ca8cc1aafe565f57d0ba852_prof);

        
        $__internal_872274696d5217a0f8b80256856d9c4b84867ed71456c52c11143a728cf04ba5->leave($__internal_872274696d5217a0f8b80256856d9c4b84867ed71456c52c11143a728cf04ba5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbc4333b0e680bc79705b22624855ec9c84638efd705b86cdfd69c5763a69a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc4333b0e680bc79705b22624855ec9c84638efd705b86cdfd69c5763a69a09->enter($__internal_dbc4333b0e680bc79705b22624855ec9c84638efd705b86cdfd69c5763a69a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_996df2bce1e50987b242a8fc1b23650792fa81e7d3acd63a259438f691eaf11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996df2bce1e50987b242a8fc1b23650792fa81e7d3acd63a259438f691eaf11f->enter($__internal_996df2bce1e50987b242a8fc1b23650792fa81e7d3acd63a259438f691eaf11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_996df2bce1e50987b242a8fc1b23650792fa81e7d3acd63a259438f691eaf11f->leave($__internal_996df2bce1e50987b242a8fc1b23650792fa81e7d3acd63a259438f691eaf11f_prof);

        
        $__internal_dbc4333b0e680bc79705b22624855ec9c84638efd705b86cdfd69c5763a69a09->leave($__internal_dbc4333b0e680bc79705b22624855ec9c84638efd705b86cdfd69c5763a69a09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
