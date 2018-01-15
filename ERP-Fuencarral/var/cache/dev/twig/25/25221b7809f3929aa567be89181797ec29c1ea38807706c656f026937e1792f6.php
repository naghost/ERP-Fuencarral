<?php

/* InventarioBundle:Default:ver.html.twig */
class __TwigTemplate_534dd73e0e977e1c645863f6950c65aae2d910b05495f544d580fefdf925a9a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InventarioBundle:Default:base.html.twig", "InventarioBundle:Default:ver.html.twig", 1);
        $this->blocks = array(
            'Aplicacion' => array($this, 'block_Aplicacion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InventarioBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efd494e0fd4164b08de86597b6178902a953fed348f767e384bcab47a5b0d35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd494e0fd4164b08de86597b6178902a953fed348f767e384bcab47a5b0d35e->enter($__internal_efd494e0fd4164b08de86597b6178902a953fed348f767e384bcab47a5b0d35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:ver.html.twig"));

        $__internal_0c8a8149d548b4bb311e0c17ee34fc71764ccc24850d0caa9d28a78a0db0d691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8a8149d548b4bb311e0c17ee34fc71764ccc24850d0caa9d28a78a0db0d691->enter($__internal_0c8a8149d548b4bb311e0c17ee34fc71764ccc24850d0caa9d28a78a0db0d691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:ver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efd494e0fd4164b08de86597b6178902a953fed348f767e384bcab47a5b0d35e->leave($__internal_efd494e0fd4164b08de86597b6178902a953fed348f767e384bcab47a5b0d35e_prof);

        
        $__internal_0c8a8149d548b4bb311e0c17ee34fc71764ccc24850d0caa9d28a78a0db0d691->leave($__internal_0c8a8149d548b4bb311e0c17ee34fc71764ccc24850d0caa9d28a78a0db0d691_prof);

    }

    // line 3
    public function block_Aplicacion($context, array $blocks = array())
    {
        $__internal_f27ec380ead645e6f900b393dadecf82e1ca99a6bf1aff112a8c16953142d616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27ec380ead645e6f900b393dadecf82e1ca99a6bf1aff112a8c16953142d616->enter($__internal_f27ec380ead645e6f900b393dadecf82e1ca99a6bf1aff112a8c16953142d616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        $__internal_e53cd7115e8a05d3e5d99b846bbe719fc21f40396f382ad250a7a6c216453921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53cd7115e8a05d3e5d99b846bbe719fc21f40396f382ad250a7a6c216453921->enter($__internal_e53cd7115e8a05d3e5d99b846bbe719fc21f40396f382ad250a7a6c216453921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        // line 4
        echo "<button class=\"btn btn-classic\">crear</button>
<h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class=\"table\">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-cog\"></span>
        </a>
        <a href=\"#\">
          <span class=\"glyphicon glyphicon-trash\"></span>
        </a>

    </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-cog\"></span>
        </a>
        <a href=\"#\">
          <span class=\"glyphicon glyphicon-trash\"></span>
        </a>
        
    </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-cog\"></span>
        </a>
        <a href=\"#\">
          <span class=\"glyphicon glyphicon-trash\"></span>
        </a>
        
    </td>
      </tr>
    </tbody>
  </table>
 ";
        
        $__internal_e53cd7115e8a05d3e5d99b846bbe719fc21f40396f382ad250a7a6c216453921->leave($__internal_e53cd7115e8a05d3e5d99b846bbe719fc21f40396f382ad250a7a6c216453921_prof);

        
        $__internal_f27ec380ead645e6f900b393dadecf82e1ca99a6bf1aff112a8c16953142d616->leave($__internal_f27ec380ead645e6f900b393dadecf82e1ca99a6bf1aff112a8c16953142d616_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:Default:ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'InventarioBundle:Default:base.html.twig' %}

{% block Aplicacion %}
<button class=\"btn btn-classic\">crear</button>
<h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class=\"table\">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-cog\"></span>
        </a>
        <a href=\"#\">
          <span class=\"glyphicon glyphicon-trash\"></span>
        </a>

    </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-cog\"></span>
        </a>
        <a href=\"#\">
          <span class=\"glyphicon glyphicon-trash\"></span>
        </a>
        
    </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><a href=\"#\">
          <span class=\"glyphicon glyphicon-cog\"></span>
        </a>
        <a href=\"#\">
          <span class=\"glyphicon glyphicon-trash\"></span>
        </a>
        
    </td>
      </tr>
    </tbody>
  </table>
 {% endblock %}", "InventarioBundle:Default:ver.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/src/InventarioBundle/Resources/views/Default/ver.html.twig");
    }
}
