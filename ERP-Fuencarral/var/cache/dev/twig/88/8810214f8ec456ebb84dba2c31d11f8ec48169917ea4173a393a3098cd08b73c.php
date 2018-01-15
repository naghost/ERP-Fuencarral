<?php

/* InventarioBundle:Default:index.html.twig */
class __TwigTemplate_4fc28e3b76fc676691808765edd21db59bbfe3cdb0ade72cd862528aa57d920c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InventarioBundle:Default:base.html.twig", "InventarioBundle:Default:index.html.twig", 1);
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
        $__internal_73045c4cc12b47d1f5420ee645907d040b03fe8f07cd3217ac3f39b6cae3773d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73045c4cc12b47d1f5420ee645907d040b03fe8f07cd3217ac3f39b6cae3773d->enter($__internal_73045c4cc12b47d1f5420ee645907d040b03fe8f07cd3217ac3f39b6cae3773d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:index.html.twig"));

        $__internal_8ef04bac818e7c1ee641676a9d4b1eb174b35dbe871197c1d9832d707b3f9570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef04bac818e7c1ee641676a9d4b1eb174b35dbe871197c1d9832d707b3f9570->enter($__internal_8ef04bac818e7c1ee641676a9d4b1eb174b35dbe871197c1d9832d707b3f9570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73045c4cc12b47d1f5420ee645907d040b03fe8f07cd3217ac3f39b6cae3773d->leave($__internal_73045c4cc12b47d1f5420ee645907d040b03fe8f07cd3217ac3f39b6cae3773d_prof);

        
        $__internal_8ef04bac818e7c1ee641676a9d4b1eb174b35dbe871197c1d9832d707b3f9570->leave($__internal_8ef04bac818e7c1ee641676a9d4b1eb174b35dbe871197c1d9832d707b3f9570_prof);

    }

    // line 2
    public function block_Aplicacion($context, array $blocks = array())
    {
        $__internal_a45fc0b96fc9f3f843d6dc4e1bd47028dcca44708a5ef633e7427e1ea20c54af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45fc0b96fc9f3f843d6dc4e1bd47028dcca44708a5ef633e7427e1ea20c54af->enter($__internal_a45fc0b96fc9f3f843d6dc4e1bd47028dcca44708a5ef633e7427e1ea20c54af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        $__internal_5b69adf2ddc63f5c25ba255383cd8b602a6433705dde4010e51d892d7cae5724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b69adf2ddc63f5c25ba255383cd8b602a6433705dde4010e51d892d7cae5724->enter($__internal_5b69adf2ddc63f5c25ba255383cd8b602a6433705dde4010e51d892d7cae5724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        // line 3
        echo "   <form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Crear nuevo producto</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre Producto</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"textinput\" placeholder=\"Nombre de producto\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Password input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"precio\">Precio</label>
  <div class=\"col-md-4\">
    <input id=\"precio\" name=\"precio\" placeholder=\"Precio\" class=\"form-control input-md\" required=\"\" type=\"password\">
    
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"material\">Es un material</label>
  <div class=\"col-md-4\">
  <div class=\"checkbox\">
    <label for=\"material-0\">
      <input name=\"material\" id=\"material-0\" value=\"1\" type=\"checkbox\">
      Material
    </label>
\t</div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"pos\">Se vende en el punto de venta</label>
  <div class=\"col-md-4\">
  <div class=\"checkbox\">
    <label for=\"pos-0\">
      <input name=\"pos\" id=\"pos-0\" value=\"1\" type=\"checkbox\">
      Punto de venta
    </label>
\t</div>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Almacen</label>
  <div class=\"col-md-4\">
    <select id=\"selectbasic\" name=\"selectbasic\" class=\"form-control\">
      <option value=\"1\">Almacen 1</option>
      <option value=\"2\">Almacen 2</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"cantidad\">Cantidad</label>  
  <div class=\"col-md-4\">
  <input id=\"cantidad\" name=\"cantidad\" placeholder=\"Cantidad\" class=\"form-control input-md\" type=\"text\">
    
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Enviar\"></label>
  <div class=\"col-md-4\">
    <button id=\"Enviar\" name=\"Enviar\" class=\"btn btn-primary\">Crear Producto</button>
  </div>
</div>

</fieldset>
</form>
";
        
        $__internal_5b69adf2ddc63f5c25ba255383cd8b602a6433705dde4010e51d892d7cae5724->leave($__internal_5b69adf2ddc63f5c25ba255383cd8b602a6433705dde4010e51d892d7cae5724_prof);

        
        $__internal_a45fc0b96fc9f3f843d6dc4e1bd47028dcca44708a5ef633e7427e1ea20c54af->leave($__internal_a45fc0b96fc9f3f843d6dc4e1bd47028dcca44708a5ef633e7427e1ea20c54af_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:Default:index.html.twig";
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
<legend>Crear nuevo producto</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre Producto</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"textinput\" placeholder=\"Nombre de producto\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
  </div>
</div>

<!-- Password input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"precio\">Precio</label>
  <div class=\"col-md-4\">
    <input id=\"precio\" name=\"precio\" placeholder=\"Precio\" class=\"form-control input-md\" required=\"\" type=\"password\">
    
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"material\">Es un material</label>
  <div class=\"col-md-4\">
  <div class=\"checkbox\">
    <label for=\"material-0\">
      <input name=\"material\" id=\"material-0\" value=\"1\" type=\"checkbox\">
      Material
    </label>
\t</div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"pos\">Se vende en el punto de venta</label>
  <div class=\"col-md-4\">
  <div class=\"checkbox\">
    <label for=\"pos-0\">
      <input name=\"pos\" id=\"pos-0\" value=\"1\" type=\"checkbox\">
      Punto de venta
    </label>
\t</div>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Almacen</label>
  <div class=\"col-md-4\">
    <select id=\"selectbasic\" name=\"selectbasic\" class=\"form-control\">
      <option value=\"1\">Almacen 1</option>
      <option value=\"2\">Almacen 2</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"cantidad\">Cantidad</label>  
  <div class=\"col-md-4\">
  <input id=\"cantidad\" name=\"cantidad\" placeholder=\"Cantidad\" class=\"form-control input-md\" type=\"text\">
    
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Enviar\"></label>
  <div class=\"col-md-4\">
    <button id=\"Enviar\" name=\"Enviar\" class=\"btn btn-primary\">Crear Producto</button>
  </div>
</div>

</fieldset>
</form>
{% endblock %}
", "InventarioBundle:Default:index.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/src/InventarioBundle/Resources/views/Default/index.html.twig");
    }
}
