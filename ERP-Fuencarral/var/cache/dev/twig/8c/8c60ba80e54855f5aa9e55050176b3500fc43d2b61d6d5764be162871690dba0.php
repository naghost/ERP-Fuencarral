<?php

/* InventarioBundle:Default:base.html.twig */
class __TwigTemplate_2fe16995884a9a308daf7f0c366813b22a965dd87ed7097b96ac41eea62590ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "InventarioBundle:Default:base.html.twig", 1);
        $this->blocks = array(
            'MenuLateral' => array($this, 'block_MenuLateral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7370c739380b855f33170a0ffef0c66706a48902f2e9b9476e80d5f227b1244a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7370c739380b855f33170a0ffef0c66706a48902f2e9b9476e80d5f227b1244a->enter($__internal_7370c739380b855f33170a0ffef0c66706a48902f2e9b9476e80d5f227b1244a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:base.html.twig"));

        $__internal_fcca7b0a8ba1207110e6d4d371e9799335d0da83684e48d28b98aea03e9772e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcca7b0a8ba1207110e6d4d371e9799335d0da83684e48d28b98aea03e9772e1->enter($__internal_fcca7b0a8ba1207110e6d4d371e9799335d0da83684e48d28b98aea03e9772e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7370c739380b855f33170a0ffef0c66706a48902f2e9b9476e80d5f227b1244a->leave($__internal_7370c739380b855f33170a0ffef0c66706a48902f2e9b9476e80d5f227b1244a_prof);

        
        $__internal_fcca7b0a8ba1207110e6d4d371e9799335d0da83684e48d28b98aea03e9772e1->leave($__internal_fcca7b0a8ba1207110e6d4d371e9799335d0da83684e48d28b98aea03e9772e1_prof);

    }

    // line 2
    public function block_MenuLateral($context, array $blocks = array())
    {
        $__internal_2f23aa61f1994fe8bfb536eaf7243973d1ea2b53341abafde8f8d6d4e4443a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f23aa61f1994fe8bfb536eaf7243973d1ea2b53341abafde8f8d6d4e4443a14->enter($__internal_2f23aa61f1994fe8bfb536eaf7243973d1ea2b53341abafde8f8d6d4e4443a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MenuLateral"));

        $__internal_cd54e131b7138f26987592c838a8237d7bc716a2da6b88e3337653bf32fbfe4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd54e131b7138f26987592c838a8237d7bc716a2da6b88e3337653bf32fbfe4d->enter($__internal_cd54e131b7138f26987592c838a8237d7bc716a2da6b88e3337653bf32fbfe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MenuLateral"));

        // line 3
        echo "\t<div class=\"panel-body\"><a href=\"/Inventario/Producto\">Productos</a></div>
\t<div class=\"panel-body\"><a href=\"/Inventario/Almacen\">Almacenes</a></div>
\t<div class=\"panel-body\"><a href=\"/Inventario/Proveedor\">Proveedores</a></div>
<div class=\"panel-body\"></div>
";
        
        $__internal_cd54e131b7138f26987592c838a8237d7bc716a2da6b88e3337653bf32fbfe4d->leave($__internal_cd54e131b7138f26987592c838a8237d7bc716a2da6b88e3337653bf32fbfe4d_prof);

        
        $__internal_2f23aa61f1994fe8bfb536eaf7243973d1ea2b53341abafde8f8d6d4e4443a14->leave($__internal_2f23aa61f1994fe8bfb536eaf7243973d1ea2b53341abafde8f8d6d4e4443a14_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block MenuLateral %}
\t<div class=\"panel-body\"><a href=\"/Inventario/Producto\">Productos</a></div>
\t<div class=\"panel-body\"><a href=\"/Inventario/Almacen\">Almacenes</a></div>
\t<div class=\"panel-body\"><a href=\"/Inventario/Proveedor\">Proveedores</a></div>
<div class=\"panel-body\"></div>
{% endblock %}", "InventarioBundle:Default:base.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/src/InventarioBundle/Resources/views/Default/base.html.twig");
    }
}
