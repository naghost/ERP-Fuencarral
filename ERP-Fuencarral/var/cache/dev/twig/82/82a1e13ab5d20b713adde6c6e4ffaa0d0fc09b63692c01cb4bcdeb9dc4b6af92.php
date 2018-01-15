<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
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
        $__internal_84812b119ae551269c0a690706b6612bbd0b199c1fec1bed756a0da2917108e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84812b119ae551269c0a690706b6612bbd0b199c1fec1bed756a0da2917108e8->enter($__internal_84812b119ae551269c0a690706b6612bbd0b199c1fec1bed756a0da2917108e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f4182b40ab3ebe7da73419b335508d65149f4e6fd800b632626aea56880ed616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4182b40ab3ebe7da73419b335508d65149f4e6fd800b632626aea56880ed616->enter($__internal_f4182b40ab3ebe7da73419b335508d65149f4e6fd800b632626aea56880ed616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84812b119ae551269c0a690706b6612bbd0b199c1fec1bed756a0da2917108e8->leave($__internal_84812b119ae551269c0a690706b6612bbd0b199c1fec1bed756a0da2917108e8_prof);

        
        $__internal_f4182b40ab3ebe7da73419b335508d65149f4e6fd800b632626aea56880ed616->leave($__internal_f4182b40ab3ebe7da73419b335508d65149f4e6fd800b632626aea56880ed616_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffa8ad4480a1d98eca81f6ec958dab81a262a0cdd21045fea88591e820a4cd43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa8ad4480a1d98eca81f6ec958dab81a262a0cdd21045fea88591e820a4cd43->enter($__internal_ffa8ad4480a1d98eca81f6ec958dab81a262a0cdd21045fea88591e820a4cd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4262f9659470af38257966e1a2e22d5c8ff1b4804e72618f364ca9a18ac96b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4262f9659470af38257966e1a2e22d5c8ff1b4804e72618f364ca9a18ac96b56->enter($__internal_4262f9659470af38257966e1a2e22d5c8ff1b4804e72618f364ca9a18ac96b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4262f9659470af38257966e1a2e22d5c8ff1b4804e72618f364ca9a18ac96b56->leave($__internal_4262f9659470af38257966e1a2e22d5c8ff1b4804e72618f364ca9a18ac96b56_prof);

        
        $__internal_ffa8ad4480a1d98eca81f6ec958dab81a262a0cdd21045fea88591e820a4cd43->leave($__internal_ffa8ad4480a1d98eca81f6ec958dab81a262a0cdd21045fea88591e820a4cd43_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b9a1c2368c6849232475d7df3425ea6f0325cdc4b1e6e5823c33844670ed46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9a1c2368c6849232475d7df3425ea6f0325cdc4b1e6e5823c33844670ed46b->enter($__internal_1b9a1c2368c6849232475d7df3425ea6f0325cdc4b1e6e5823c33844670ed46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b36895aec18cf34529a5f6d308664c4cd9fc4839b39b8a96f9a5ad353620bfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36895aec18cf34529a5f6d308664c4cd9fc4839b39b8a96f9a5ad353620bfcd->enter($__internal_b36895aec18cf34529a5f6d308664c4cd9fc4839b39b8a96f9a5ad353620bfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b36895aec18cf34529a5f6d308664c4cd9fc4839b39b8a96f9a5ad353620bfcd->leave($__internal_b36895aec18cf34529a5f6d308664c4cd9fc4839b39b8a96f9a5ad353620bfcd_prof);

        
        $__internal_1b9a1c2368c6849232475d7df3425ea6f0325cdc4b1e6e5823c33844670ed46b->leave($__internal_1b9a1c2368c6849232475d7df3425ea6f0325cdc4b1e6e5823c33844670ed46b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23bfb04600e30bb847af247186f47c5f4a35aedddbbd9400c2d11215b705b03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bfb04600e30bb847af247186f47c5f4a35aedddbbd9400c2d11215b705b03f->enter($__internal_23bfb04600e30bb847af247186f47c5f4a35aedddbbd9400c2d11215b705b03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5a7eda706bd7219060a1344af00d81d3bf98974b28832ec1937d5470ff271fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a7eda706bd7219060a1344af00d81d3bf98974b28832ec1937d5470ff271fb->enter($__internal_e5a7eda706bd7219060a1344af00d81d3bf98974b28832ec1937d5470ff271fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e5a7eda706bd7219060a1344af00d81d3bf98974b28832ec1937d5470ff271fb->leave($__internal_e5a7eda706bd7219060a1344af00d81d3bf98974b28832ec1937d5470ff271fb_prof);

        
        $__internal_23bfb04600e30bb847af247186f47c5f4a35aedddbbd9400c2d11215b705b03f->leave($__internal_23bfb04600e30bb847af247186f47c5f4a35aedddbbd9400c2d11215b705b03f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\nacho\\parte_horas\\ERP-Fuencarral\\ERP-Fuencarral\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
