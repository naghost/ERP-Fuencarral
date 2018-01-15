<?php

/* InventarioBundle:Default:proveedor.html.twig */
class __TwigTemplate_45a78dec758ca9ced49ba86dd16f6813ae8bc149dae03952a7fb0bd363390607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InventarioBundle:Default:base.html.twig", "InventarioBundle:Default:proveedor.html.twig", 1);
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
        $__internal_ea1493b9473d01e398cfb4ab4c8950ab1515d700c17f3ceb95dd1d5d3b51ad32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1493b9473d01e398cfb4ab4c8950ab1515d700c17f3ceb95dd1d5d3b51ad32->enter($__internal_ea1493b9473d01e398cfb4ab4c8950ab1515d700c17f3ceb95dd1d5d3b51ad32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:proveedor.html.twig"));

        $__internal_fa7f19d44a24bd8fffd1b93632aa84289ef079d22174b4c7519b04fe6f1a5331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7f19d44a24bd8fffd1b93632aa84289ef079d22174b4c7519b04fe6f1a5331->enter($__internal_fa7f19d44a24bd8fffd1b93632aa84289ef079d22174b4c7519b04fe6f1a5331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:proveedor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea1493b9473d01e398cfb4ab4c8950ab1515d700c17f3ceb95dd1d5d3b51ad32->leave($__internal_ea1493b9473d01e398cfb4ab4c8950ab1515d700c17f3ceb95dd1d5d3b51ad32_prof);

        
        $__internal_fa7f19d44a24bd8fffd1b93632aa84289ef079d22174b4c7519b04fe6f1a5331->leave($__internal_fa7f19d44a24bd8fffd1b93632aa84289ef079d22174b4c7519b04fe6f1a5331_prof);

    }

    // line 2
    public function block_Aplicacion($context, array $blocks = array())
    {
        $__internal_fa514083d8d6ed22fccd8dcfdd8a7bf1e91b82a9e79e7c4a60c9fcee6c4e713e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa514083d8d6ed22fccd8dcfdd8a7bf1e91b82a9e79e7c4a60c9fcee6c4e713e->enter($__internal_fa514083d8d6ed22fccd8dcfdd8a7bf1e91b82a9e79e7c4a60c9fcee6c4e713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        $__internal_bbfdcbb2e9e6ede77e2b5a6780134b6210181d96b1b75a395384cc13e8f973eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfdcbb2e9e6ede77e2b5a6780134b6210181d96b1b75a395384cc13e8f973eb->enter($__internal_bbfdcbb2e9e6ede77e2b5a6780134b6210181d96b1b75a395384cc13e8f973eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        // line 3
        echo "<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre proveedor</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"textinput\" placeholder=\"Nombre proveedor\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"numero\">Numero</label>  
  <div class=\"col-md-4\">
  <input id=\"numero\" name=\"numero\" placeholder=\"Numero\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"direccion\">Direccion</label>  
  <div class=\"col-md-4\">
  <input id=\"direccion\" name=\"direccion\" placeholder=\"Direccion\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>
  <div class=\"col-md-4\">
    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Añadir proveedor</button>
  </div>
</div>

</fieldset>
</form>
";
        
        $__internal_bbfdcbb2e9e6ede77e2b5a6780134b6210181d96b1b75a395384cc13e8f973eb->leave($__internal_bbfdcbb2e9e6ede77e2b5a6780134b6210181d96b1b75a395384cc13e8f973eb_prof);

        
        $__internal_fa514083d8d6ed22fccd8dcfdd8a7bf1e91b82a9e79e7c4a60c9fcee6c4e713e->leave($__internal_fa514083d8d6ed22fccd8dcfdd8a7bf1e91b82a9e79e7c4a60c9fcee6c4e713e_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:Default:proveedor.html.twig";
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
        return new Twig_Source("{% extends 'InventarioBundle:Default:base.html.twig' %}
{% block Aplicacion %}
<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre proveedor</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"textinput\" placeholder=\"Nombre proveedor\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"numero\">Numero</label>  
  <div class=\"col-md-4\">
  <input id=\"numero\" name=\"numero\" placeholder=\"Numero\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"direccion\">Direccion</label>  
  <div class=\"col-md-4\">
  <input id=\"direccion\" name=\"direccion\" placeholder=\"Direccion\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>
  <div class=\"col-md-4\">
    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Añadir proveedor</button>
  </div>
</div>

</fieldset>
</form>
{% endblock %}", "InventarioBundle:Default:proveedor.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/src/InventarioBundle/Resources/views/Default/proveedor.html.twig");
    }
}
