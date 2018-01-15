<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
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
        $__internal_60e6c177da358a66fe1a85d5acb30ca580a7a81c175c1e7b1eb6ef22da5ab500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e6c177da358a66fe1a85d5acb30ca580a7a81c175c1e7b1eb6ef22da5ab500->enter($__internal_60e6c177da358a66fe1a85d5acb30ca580a7a81c175c1e7b1eb6ef22da5ab500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_566b18bee760f5f371d4a8b853bc677d46c9e06fc043b6005e0cd5ee3aaa62aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566b18bee760f5f371d4a8b853bc677d46c9e06fc043b6005e0cd5ee3aaa62aa->enter($__internal_566b18bee760f5f371d4a8b853bc677d46c9e06fc043b6005e0cd5ee3aaa62aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_60e6c177da358a66fe1a85d5acb30ca580a7a81c175c1e7b1eb6ef22da5ab500->leave($__internal_60e6c177da358a66fe1a85d5acb30ca580a7a81c175c1e7b1eb6ef22da5ab500_prof);

        
        $__internal_566b18bee760f5f371d4a8b853bc677d46c9e06fc043b6005e0cd5ee3aaa62aa->leave($__internal_566b18bee760f5f371d4a8b853bc677d46c9e06fc043b6005e0cd5ee3aaa62aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00787ef7d348335de6da23e4740cb4eefaea68d26e664d596eeeb0992047163a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00787ef7d348335de6da23e4740cb4eefaea68d26e664d596eeeb0992047163a->enter($__internal_00787ef7d348335de6da23e4740cb4eefaea68d26e664d596eeeb0992047163a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa776cd9bff7f3bd3146e367e4a5220bd247028140f601a1d9f9527a5caae4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa776cd9bff7f3bd3146e367e4a5220bd247028140f601a1d9f9527a5caae4af->enter($__internal_fa776cd9bff7f3bd3146e367e4a5220bd247028140f601a1d9f9527a5caae4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fa776cd9bff7f3bd3146e367e4a5220bd247028140f601a1d9f9527a5caae4af->leave($__internal_fa776cd9bff7f3bd3146e367e4a5220bd247028140f601a1d9f9527a5caae4af_prof);

        
        $__internal_00787ef7d348335de6da23e4740cb4eefaea68d26e664d596eeeb0992047163a->leave($__internal_00787ef7d348335de6da23e4740cb4eefaea68d26e664d596eeeb0992047163a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f278da847ffbf2e6c8e724585cd18049b430f49b5369f80e64f5a19d5470261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f278da847ffbf2e6c8e724585cd18049b430f49b5369f80e64f5a19d5470261->enter($__internal_5f278da847ffbf2e6c8e724585cd18049b430f49b5369f80e64f5a19d5470261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ec345b86d209cf672f66d9ac37c3b3cad72c612057a4f4793fbdc2f4222176a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec345b86d209cf672f66d9ac37c3b3cad72c612057a4f4793fbdc2f4222176a->enter($__internal_0ec345b86d209cf672f66d9ac37c3b3cad72c612057a4f4793fbdc2f4222176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0ec345b86d209cf672f66d9ac37c3b3cad72c612057a4f4793fbdc2f4222176a->leave($__internal_0ec345b86d209cf672f66d9ac37c3b3cad72c612057a4f4793fbdc2f4222176a_prof);

        
        $__internal_5f278da847ffbf2e6c8e724585cd18049b430f49b5369f80e64f5a19d5470261->leave($__internal_5f278da847ffbf2e6c8e724585cd18049b430f49b5369f80e64f5a19d5470261_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec6857569bddcc4538b3e3be63631fdeb89a005d77f96b7ae716357181a58ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6857569bddcc4538b3e3be63631fdeb89a005d77f96b7ae716357181a58ffd->enter($__internal_ec6857569bddcc4538b3e3be63631fdeb89a005d77f96b7ae716357181a58ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_259d8de3d2eb1a7187fe0a2249ee0f0f34d016319ce28907edccd7a484267a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259d8de3d2eb1a7187fe0a2249ee0f0f34d016319ce28907edccd7a484267a5e->enter($__internal_259d8de3d2eb1a7187fe0a2249ee0f0f34d016319ce28907edccd7a484267a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_259d8de3d2eb1a7187fe0a2249ee0f0f34d016319ce28907edccd7a484267a5e->leave($__internal_259d8de3d2eb1a7187fe0a2249ee0f0f34d016319ce28907edccd7a484267a5e_prof);

        
        $__internal_ec6857569bddcc4538b3e3be63631fdeb89a005d77f96b7ae716357181a58ffd->leave($__internal_ec6857569bddcc4538b3e3be63631fdeb89a005d77f96b7ae716357181a58ffd_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\nacho\\parte_horas\\ERP-Fuencarral\\ERP-Fuencarral\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
