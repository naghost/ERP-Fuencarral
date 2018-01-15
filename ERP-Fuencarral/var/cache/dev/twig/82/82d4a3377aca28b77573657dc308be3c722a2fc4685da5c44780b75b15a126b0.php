<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
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
        $__internal_8f52c0f6b5a675f7f4900efe22a5346c33886d6675e96ec25fb527e3c5d0c264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f52c0f6b5a675f7f4900efe22a5346c33886d6675e96ec25fb527e3c5d0c264->enter($__internal_8f52c0f6b5a675f7f4900efe22a5346c33886d6675e96ec25fb527e3c5d0c264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_892044d1d66df21c8d4f40c4fbd3455b96980fe5a991d6d1bcd7153c2b5c748c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892044d1d66df21c8d4f40c4fbd3455b96980fe5a991d6d1bcd7153c2b5c748c->enter($__internal_892044d1d66df21c8d4f40c4fbd3455b96980fe5a991d6d1bcd7153c2b5c748c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f52c0f6b5a675f7f4900efe22a5346c33886d6675e96ec25fb527e3c5d0c264->leave($__internal_8f52c0f6b5a675f7f4900efe22a5346c33886d6675e96ec25fb527e3c5d0c264_prof);

        
        $__internal_892044d1d66df21c8d4f40c4fbd3455b96980fe5a991d6d1bcd7153c2b5c748c->leave($__internal_892044d1d66df21c8d4f40c4fbd3455b96980fe5a991d6d1bcd7153c2b5c748c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db52aaec83e87302f37d58ee8f0eacb83f67196aa73be511e5b51abd3456d25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db52aaec83e87302f37d58ee8f0eacb83f67196aa73be511e5b51abd3456d25c->enter($__internal_db52aaec83e87302f37d58ee8f0eacb83f67196aa73be511e5b51abd3456d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c8a2263a68b4186d8462b9ab821b5998b731686fa3a82f6423b7cab39efc9820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a2263a68b4186d8462b9ab821b5998b731686fa3a82f6423b7cab39efc9820->enter($__internal_c8a2263a68b4186d8462b9ab821b5998b731686fa3a82f6423b7cab39efc9820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8a2263a68b4186d8462b9ab821b5998b731686fa3a82f6423b7cab39efc9820->leave($__internal_c8a2263a68b4186d8462b9ab821b5998b731686fa3a82f6423b7cab39efc9820_prof);

        
        $__internal_db52aaec83e87302f37d58ee8f0eacb83f67196aa73be511e5b51abd3456d25c->leave($__internal_db52aaec83e87302f37d58ee8f0eacb83f67196aa73be511e5b51abd3456d25c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63030c2ee32ab02c8b77138a60e6c9b8438554c8690e9adc706b77006ee0bb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63030c2ee32ab02c8b77138a60e6c9b8438554c8690e9adc706b77006ee0bb17->enter($__internal_63030c2ee32ab02c8b77138a60e6c9b8438554c8690e9adc706b77006ee0bb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_827399500a37f451da1ce788647dd593a1e28aaf1fadb8043532e3e39eb0f3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827399500a37f451da1ce788647dd593a1e28aaf1fadb8043532e3e39eb0f3ee->enter($__internal_827399500a37f451da1ce788647dd593a1e28aaf1fadb8043532e3e39eb0f3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_827399500a37f451da1ce788647dd593a1e28aaf1fadb8043532e3e39eb0f3ee->leave($__internal_827399500a37f451da1ce788647dd593a1e28aaf1fadb8043532e3e39eb0f3ee_prof);

        
        $__internal_63030c2ee32ab02c8b77138a60e6c9b8438554c8690e9adc706b77006ee0bb17->leave($__internal_63030c2ee32ab02c8b77138a60e6c9b8438554c8690e9adc706b77006ee0bb17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b112917e50cc19a8eff09da8c9bdd3c051bab08f55f5e8c35ecc310126aad215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b112917e50cc19a8eff09da8c9bdd3c051bab08f55f5e8c35ecc310126aad215->enter($__internal_b112917e50cc19a8eff09da8c9bdd3c051bab08f55f5e8c35ecc310126aad215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_341cf30f16e193c5d67b92056f2b30e2ec3c4b372c3d65ae852011bac8af8de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341cf30f16e193c5d67b92056f2b30e2ec3c4b372c3d65ae852011bac8af8de8->enter($__internal_341cf30f16e193c5d67b92056f2b30e2ec3c4b372c3d65ae852011bac8af8de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_341cf30f16e193c5d67b92056f2b30e2ec3c4b372c3d65ae852011bac8af8de8->leave($__internal_341cf30f16e193c5d67b92056f2b30e2ec3c4b372c3d65ae852011bac8af8de8_prof);

        
        $__internal_b112917e50cc19a8eff09da8c9bdd3c051bab08f55f5e8c35ecc310126aad215->leave($__internal_b112917e50cc19a8eff09da8c9bdd3c051bab08f55f5e8c35ecc310126aad215_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\nacho\\parte_horas\\ERP-Fuencarral\\ERP-Fuencarral\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
