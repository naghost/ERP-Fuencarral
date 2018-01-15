<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_8fa3289db80bd2a6a119c4383d1164baa7aaad3d81effe42d3748caea7769309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa3289db80bd2a6a119c4383d1164baa7aaad3d81effe42d3748caea7769309->enter($__internal_8fa3289db80bd2a6a119c4383d1164baa7aaad3d81effe42d3748caea7769309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_41ee056f329caf14525212ce25c67e7a4847990049dce3d6d20ee4bbd3937169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ee056f329caf14525212ce25c67e7a4847990049dce3d6d20ee4bbd3937169->enter($__internal_41ee056f329caf14525212ce25c67e7a4847990049dce3d6d20ee4bbd3937169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa3289db80bd2a6a119c4383d1164baa7aaad3d81effe42d3748caea7769309->leave($__internal_8fa3289db80bd2a6a119c4383d1164baa7aaad3d81effe42d3748caea7769309_prof);

        
        $__internal_41ee056f329caf14525212ce25c67e7a4847990049dce3d6d20ee4bbd3937169->leave($__internal_41ee056f329caf14525212ce25c67e7a4847990049dce3d6d20ee4bbd3937169_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ca1088eb84f1b7587895a6670f32b1feaf5ab464a71624777ffedf2bd0824fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca1088eb84f1b7587895a6670f32b1feaf5ab464a71624777ffedf2bd0824fa->enter($__internal_7ca1088eb84f1b7587895a6670f32b1feaf5ab464a71624777ffedf2bd0824fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b153a294008ee84133f465a0baa511a0a34869e667e6551b812affed94afffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b153a294008ee84133f465a0baa511a0a34869e667e6551b812affed94afffac->enter($__internal_b153a294008ee84133f465a0baa511a0a34869e667e6551b812affed94afffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b153a294008ee84133f465a0baa511a0a34869e667e6551b812affed94afffac->leave($__internal_b153a294008ee84133f465a0baa511a0a34869e667e6551b812affed94afffac_prof);

        
        $__internal_7ca1088eb84f1b7587895a6670f32b1feaf5ab464a71624777ffedf2bd0824fa->leave($__internal_7ca1088eb84f1b7587895a6670f32b1feaf5ab464a71624777ffedf2bd0824fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b33063d9cdf988f44b65ff67ee66a60b4ac7d66124d6198f3bde53c00fd31ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33063d9cdf988f44b65ff67ee66a60b4ac7d66124d6198f3bde53c00fd31ddb->enter($__internal_b33063d9cdf988f44b65ff67ee66a60b4ac7d66124d6198f3bde53c00fd31ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec1f3bff3ca77ef17b013d5308b2f5c231c158aa1e58c51c0abd0dadfb1c479c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1f3bff3ca77ef17b013d5308b2f5c231c158aa1e58c51c0abd0dadfb1c479c->enter($__internal_ec1f3bff3ca77ef17b013d5308b2f5c231c158aa1e58c51c0abd0dadfb1c479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec1f3bff3ca77ef17b013d5308b2f5c231c158aa1e58c51c0abd0dadfb1c479c->leave($__internal_ec1f3bff3ca77ef17b013d5308b2f5c231c158aa1e58c51c0abd0dadfb1c479c_prof);

        
        $__internal_b33063d9cdf988f44b65ff67ee66a60b4ac7d66124d6198f3bde53c00fd31ddb->leave($__internal_b33063d9cdf988f44b65ff67ee66a60b4ac7d66124d6198f3bde53c00fd31ddb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b5c52c5ded3568fb20cae23e1662285db8c3f4ce668e0e27b7f9f4d711decd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5c52c5ded3568fb20cae23e1662285db8c3f4ce668e0e27b7f9f4d711decd5->enter($__internal_3b5c52c5ded3568fb20cae23e1662285db8c3f4ce668e0e27b7f9f4d711decd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d553c266981abfbd2eaa554956ea9246effb5278e9b1750acf7238bd8fe05cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d553c266981abfbd2eaa554956ea9246effb5278e9b1750acf7238bd8fe05cc->enter($__internal_7d553c266981abfbd2eaa554956ea9246effb5278e9b1750acf7238bd8fe05cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d553c266981abfbd2eaa554956ea9246effb5278e9b1750acf7238bd8fe05cc->leave($__internal_7d553c266981abfbd2eaa554956ea9246effb5278e9b1750acf7238bd8fe05cc_prof);

        
        $__internal_3b5c52c5ded3568fb20cae23e1662285db8c3f4ce668e0e27b7f9f4d711decd5->leave($__internal_3b5c52c5ded3568fb20cae23e1662285db8c3f4ce668e0e27b7f9f4d711decd5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
