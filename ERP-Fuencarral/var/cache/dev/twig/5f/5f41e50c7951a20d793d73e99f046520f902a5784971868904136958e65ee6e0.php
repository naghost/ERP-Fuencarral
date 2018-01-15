<?php

/* InventarioBundle:Default:almacen.html.twig */
class __TwigTemplate_2254cff5aef848b5a8e785a6bfc02f4a5e6bc9f608d4b9a06cec832a9a08e5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("InventarioBundle:Default:base.html.twig", "InventarioBundle:Default:almacen.html.twig", 1);
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
        $__internal_75a6386f8cfdd2b9ca2b2dbb50dcbb2bb898adc61842d17637a58e3126cc6b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a6386f8cfdd2b9ca2b2dbb50dcbb2bb898adc61842d17637a58e3126cc6b50->enter($__internal_75a6386f8cfdd2b9ca2b2dbb50dcbb2bb898adc61842d17637a58e3126cc6b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:almacen.html.twig"));

        $__internal_dd695f816203d8bfe51cd065d0891e42bdb4b47a50d2e54404f71163927cc30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd695f816203d8bfe51cd065d0891e42bdb4b47a50d2e54404f71163927cc30d->enter($__internal_dd695f816203d8bfe51cd065d0891e42bdb4b47a50d2e54404f71163927cc30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Default:almacen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75a6386f8cfdd2b9ca2b2dbb50dcbb2bb898adc61842d17637a58e3126cc6b50->leave($__internal_75a6386f8cfdd2b9ca2b2dbb50dcbb2bb898adc61842d17637a58e3126cc6b50_prof);

        
        $__internal_dd695f816203d8bfe51cd065d0891e42bdb4b47a50d2e54404f71163927cc30d->leave($__internal_dd695f816203d8bfe51cd065d0891e42bdb4b47a50d2e54404f71163927cc30d_prof);

    }

    // line 2
    public function block_Aplicacion($context, array $blocks = array())
    {
        $__internal_61ce1deff2f7eb0935eeb61b3cb32b060ce62459a45c36a05dcff141b32b657b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ce1deff2f7eb0935eeb61b3cb32b060ce62459a45c36a05dcff141b32b657b->enter($__internal_61ce1deff2f7eb0935eeb61b3cb32b060ce62459a45c36a05dcff141b32b657b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        $__internal_aacd57a41d07cebdf46417c18620a74a02ca3e61f8b7e477abc5b1cd89bb031e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacd57a41d07cebdf46417c18620a74a02ca3e61f8b7e477abc5b1cd89bb031e->enter($__internal_aacd57a41d07cebdf46417c18620a74a02ca3e61f8b7e477abc5b1cd89bb031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        // line 3
        echo " <form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Añadir almacen</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre almacen</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"textinput\" placeholder=\"Nombre almacen\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
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
    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Añadir almacen</button>
  </div>
</div>

</fieldset>
</form>

";
        
        $__internal_aacd57a41d07cebdf46417c18620a74a02ca3e61f8b7e477abc5b1cd89bb031e->leave($__internal_aacd57a41d07cebdf46417c18620a74a02ca3e61f8b7e477abc5b1cd89bb031e_prof);

        
        $__internal_61ce1deff2f7eb0935eeb61b3cb32b060ce62459a45c36a05dcff141b32b657b->leave($__internal_61ce1deff2f7eb0935eeb61b3cb32b060ce62459a45c36a05dcff141b32b657b_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:Default:almacen.html.twig";
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
<legend>Añadir almacen</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre almacen</label>  
  <div class=\"col-md-4\">
  <input id=\"textinput\" name=\"textinput\" placeholder=\"Nombre almacen\" class=\"form-control input-md\" required=\"\" type=\"text\">
    
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
    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Añadir almacen</button>
  </div>
</div>

</fieldset>
</form>

{% endblock %}", "InventarioBundle:Default:almacen.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/src/InventarioBundle/Resources/views/Default/almacen.html.twig");
    }
}
