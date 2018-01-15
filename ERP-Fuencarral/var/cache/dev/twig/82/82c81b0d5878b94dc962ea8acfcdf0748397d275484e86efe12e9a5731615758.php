<?php

/* ParteHorasBundle:Partehoras:nuevo.html.twig */
class __TwigTemplate_6c1840eac1d708a3b26494dc5b267038a31153ea6e07ad5c174d46281b3090ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef6baff38aeb7efda0bd80a8e2d9ea6a923de9886c9d52bc18ec32a64d0acc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6baff38aeb7efda0bd80a8e2d9ea6a923de9886c9d52bc18ec32a64d0acc20->enter($__internal_ef6baff38aeb7efda0bd80a8e2d9ea6a923de9886c9d52bc18ec32a64d0acc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParteHorasBundle:Partehoras:nuevo.html.twig"));

        $__internal_38e5af551bd23efaeac0fb7c212475dcf11b971c7085f90dd881c80a71e3ae95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e5af551bd23efaeac0fb7c212475dcf11b971c7085f90dd881c80a71e3ae95->enter($__internal_38e5af551bd23efaeac0fb7c212475dcf11b971c7085f90dd881c80a71e3ae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParteHorasBundle:Partehoras:nuevo.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        
        $__internal_ef6baff38aeb7efda0bd80a8e2d9ea6a923de9886c9d52bc18ec32a64d0acc20->leave($__internal_ef6baff38aeb7efda0bd80a8e2d9ea6a923de9886c9d52bc18ec32a64d0acc20_prof);

        
        $__internal_38e5af551bd23efaeac0fb7c212475dcf11b971c7085f90dd881c80a71e3ae95->leave($__internal_38e5af551bd23efaeac0fb7c212475dcf11b971c7085f90dd881c80a71e3ae95_prof);

    }

    public function getTemplateName()
    {
        return "ParteHorasBundle:Partehoras:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{form(form)}}", "ParteHorasBundle:Partehoras:nuevo.html.twig", "C:\\Users\\nacho\\parte_horas\\ERP-Fuencarral\\ERP-Fuencarral\\src\\ParteHorasBundle/Resources/views/Partehoras/nuevo.html.twig");
    }
}
