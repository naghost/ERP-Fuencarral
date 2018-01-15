<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_067d30199cee58249521f27886bd7fad214ff22a03148dde42958e0e08337ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067d30199cee58249521f27886bd7fad214ff22a03148dde42958e0e08337ed5->enter($__internal_067d30199cee58249521f27886bd7fad214ff22a03148dde42958e0e08337ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1cacaecb41fa3cfba98f82e768a979f41f3abe9cb75096c833f2dff7014cc201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cacaecb41fa3cfba98f82e768a979f41f3abe9cb75096c833f2dff7014cc201->enter($__internal_1cacaecb41fa3cfba98f82e768a979f41f3abe9cb75096c833f2dff7014cc201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067d30199cee58249521f27886bd7fad214ff22a03148dde42958e0e08337ed5->leave($__internal_067d30199cee58249521f27886bd7fad214ff22a03148dde42958e0e08337ed5_prof);

        
        $__internal_1cacaecb41fa3cfba98f82e768a979f41f3abe9cb75096c833f2dff7014cc201->leave($__internal_1cacaecb41fa3cfba98f82e768a979f41f3abe9cb75096c833f2dff7014cc201_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7f0ee22170bdee9b8bebf8ae32b7512ac7a79f86c8de10bcde1135b1326932e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f0ee22170bdee9b8bebf8ae32b7512ac7a79f86c8de10bcde1135b1326932e->enter($__internal_e7f0ee22170bdee9b8bebf8ae32b7512ac7a79f86c8de10bcde1135b1326932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bdd762bcd8e9231dd6adcc6f1eb3106f6d2fb13b5199c1d4f46c2a8f9eaa9517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd762bcd8e9231dd6adcc6f1eb3106f6d2fb13b5199c1d4f46c2a8f9eaa9517->enter($__internal_bdd762bcd8e9231dd6adcc6f1eb3106f6d2fb13b5199c1d4f46c2a8f9eaa9517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bdd762bcd8e9231dd6adcc6f1eb3106f6d2fb13b5199c1d4f46c2a8f9eaa9517->leave($__internal_bdd762bcd8e9231dd6adcc6f1eb3106f6d2fb13b5199c1d4f46c2a8f9eaa9517_prof);

        
        $__internal_e7f0ee22170bdee9b8bebf8ae32b7512ac7a79f86c8de10bcde1135b1326932e->leave($__internal_e7f0ee22170bdee9b8bebf8ae32b7512ac7a79f86c8de10bcde1135b1326932e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b9ad6560e952b920256bd40fe954aa6b4d81e104422e2920d0c71f8318c3d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9ad6560e952b920256bd40fe954aa6b4d81e104422e2920d0c71f8318c3d22->enter($__internal_2b9ad6560e952b920256bd40fe954aa6b4d81e104422e2920d0c71f8318c3d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e2551f5502368aa0568cc9918736cedaf4575a8e9a61ac8b299145e6a255db18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2551f5502368aa0568cc9918736cedaf4575a8e9a61ac8b299145e6a255db18->enter($__internal_e2551f5502368aa0568cc9918736cedaf4575a8e9a61ac8b299145e6a255db18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e2551f5502368aa0568cc9918736cedaf4575a8e9a61ac8b299145e6a255db18->leave($__internal_e2551f5502368aa0568cc9918736cedaf4575a8e9a61ac8b299145e6a255db18_prof);

        
        $__internal_2b9ad6560e952b920256bd40fe954aa6b4d81e104422e2920d0c71f8318c3d22->leave($__internal_2b9ad6560e952b920256bd40fe954aa6b4d81e104422e2920d0c71f8318c3d22_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d887e4775a66cf73d9d11d82b794f032cf1d4f7281ef9dfbcbc44a883f27f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d887e4775a66cf73d9d11d82b794f032cf1d4f7281ef9dfbcbc44a883f27f61->enter($__internal_2d887e4775a66cf73d9d11d82b794f032cf1d4f7281ef9dfbcbc44a883f27f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81f29eb37553e5c700e17db99141d3c549600b55630a71be81b7c03b6c3abb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f29eb37553e5c700e17db99141d3c549600b55630a71be81b7c03b6c3abb6b->enter($__internal_81f29eb37553e5c700e17db99141d3c549600b55630a71be81b7c03b6c3abb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_81f29eb37553e5c700e17db99141d3c549600b55630a71be81b7c03b6c3abb6b->leave($__internal_81f29eb37553e5c700e17db99141d3c549600b55630a71be81b7c03b6c3abb6b_prof);

        
        $__internal_2d887e4775a66cf73d9d11d82b794f032cf1d4f7281ef9dfbcbc44a883f27f61->leave($__internal_2d887e4775a66cf73d9d11d82b794f032cf1d4f7281ef9dfbcbc44a883f27f61_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
