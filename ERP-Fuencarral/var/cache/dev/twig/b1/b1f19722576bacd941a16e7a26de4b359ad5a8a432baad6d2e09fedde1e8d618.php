<?php

/* ::base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'MenuLateral' => array($this, 'block_MenuLateral'),
            'Aplicacion' => array($this, 'block_Aplicacion'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_904950514a2843c2d7b3608c28318aef3c12aaae26c99b9cd54f54a8a6fe68db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904950514a2843c2d7b3608c28318aef3c12aaae26c99b9cd54f54a8a6fe68db->enter($__internal_904950514a2843c2d7b3608c28318aef3c12aaae26c99b9cd54f54a8a6fe68db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b5bddbf33c34cf00d3acc60330caae2b1d43cabeb058aed61c9aa81f1c6e1c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bddbf33c34cf00d3acc60330caae2b1d43cabeb058aed61c9aa81f1c6e1c69->enter($__internal_b5bddbf33c34cf00d3acc60330caae2b1d43cabeb058aed61c9aa81f1c6e1c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t<nav class=\"navbar navbar-inverse\">
\t  <div class=\"container-fluid\">
\t    <div class=\"navbar-header\">
\t      <a class=\"navbar-brand\" href=\"#\"> <span class=\"glyphicon glyphicon-cog\" style=\"color:#00A7FF;\"></span><span class=\"glyphicon glyphicon-cog\" style=\"font-size: 10px; color:#FF9E0F;\"></span> ERP-Fuencarral</a>
\t    </div>
\t    <ul class=\"nav navbar-nav\">
\t      <li class=\"active\"><a href=\"hola\">Inventario</a></li>
\t      <li><a href=\"#\">Page 1</a></li>
\t      <li><a href=\"#\">Page 2</a></li>
\t      <li><a href=\"#\">Page 3</a></li>
\t    </ul>
\t  </div>
\t</nav>
\t<div class=\"container-fluid\">

\t\t<div class=\"col-md-2 col-lg-2 col-xs-2 col-sm-2\">
<div class=\"panel panel-default\" style=\"border-left:0px; border-top:0px; border-bottom:0px; border-radius:0px;\">
 \t\t\t";
        // line 28
        $this->displayBlock('MenuLateral', $context, $blocks);
        // line 29
        echo "</div>
\t\t</div>
\t\t<div class=\"col-md-10 col-lg-10 col-xs-10 col-sm-2\">
       \t\t ";
        // line 32
        $this->displayBlock('Aplicacion', $context, $blocks);
        // line 33
        echo "       \t\t </div>
\t</div>
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
\t<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.css"), "html", null, true);
        echo "\"></script>
    \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    </body>
</html>
";
        
        $__internal_904950514a2843c2d7b3608c28318aef3c12aaae26c99b9cd54f54a8a6fe68db->leave($__internal_904950514a2843c2d7b3608c28318aef3c12aaae26c99b9cd54f54a8a6fe68db_prof);

        
        $__internal_b5bddbf33c34cf00d3acc60330caae2b1d43cabeb058aed61c9aa81f1c6e1c69->leave($__internal_b5bddbf33c34cf00d3acc60330caae2b1d43cabeb058aed61c9aa81f1c6e1c69_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_bdab564ffc5373b9c489d8d9cf2f4c5b5507d7f8c15a8faca05f2b2f4ca4e5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdab564ffc5373b9c489d8d9cf2f4c5b5507d7f8c15a8faca05f2b2f4ca4e5dc->enter($__internal_bdab564ffc5373b9c489d8d9cf2f4c5b5507d7f8c15a8faca05f2b2f4ca4e5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_91b38ca2ac4cc24216a309e209a4dc04a2551a57bd8d4a736964c885f19600a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b38ca2ac4cc24216a309e209a4dc04a2551a57bd8d4a736964c885f19600a0->enter($__internal_91b38ca2ac4cc24216a309e209a4dc04a2551a57bd8d4a736964c885f19600a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo "Titulo Vacio";
        
        $__internal_91b38ca2ac4cc24216a309e209a4dc04a2551a57bd8d4a736964c885f19600a0->leave($__internal_91b38ca2ac4cc24216a309e209a4dc04a2551a57bd8d4a736964c885f19600a0_prof);

        
        $__internal_bdab564ffc5373b9c489d8d9cf2f4c5b5507d7f8c15a8faca05f2b2f4ca4e5dc->leave($__internal_bdab564ffc5373b9c489d8d9cf2f4c5b5507d7f8c15a8faca05f2b2f4ca4e5dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d90d9f457b9a1049f38cc68ff25f6f7a757111e6b933871e4262366ab6881828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90d9f457b9a1049f38cc68ff25f6f7a757111e6b933871e4262366ab6881828->enter($__internal_d90d9f457b9a1049f38cc68ff25f6f7a757111e6b933871e4262366ab6881828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_968bdd3bdb5e4d5211144d0cd5af605c0457fe433b44ff0ac03c11d7dadcc11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968bdd3bdb5e4d5211144d0cd5af605c0457fe433b44ff0ac03c11d7dadcc11b->enter($__internal_968bdd3bdb5e4d5211144d0cd5af605c0457fe433b44ff0ac03c11d7dadcc11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_968bdd3bdb5e4d5211144d0cd5af605c0457fe433b44ff0ac03c11d7dadcc11b->leave($__internal_968bdd3bdb5e4d5211144d0cd5af605c0457fe433b44ff0ac03c11d7dadcc11b_prof);

        
        $__internal_d90d9f457b9a1049f38cc68ff25f6f7a757111e6b933871e4262366ab6881828->leave($__internal_d90d9f457b9a1049f38cc68ff25f6f7a757111e6b933871e4262366ab6881828_prof);

    }

    // line 28
    public function block_MenuLateral($context, array $blocks = array())
    {
        $__internal_1bb58b777ff0845e634c3c250380dd11523c5e7225b47edb09b7623b7044f7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb58b777ff0845e634c3c250380dd11523c5e7225b47edb09b7623b7044f7ac->enter($__internal_1bb58b777ff0845e634c3c250380dd11523c5e7225b47edb09b7623b7044f7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MenuLateral"));

        $__internal_902d14965d8d6980fdc1f101be08dfadda446e641768ab9179d9735692f6e13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902d14965d8d6980fdc1f101be08dfadda446e641768ab9179d9735692f6e13d->enter($__internal_902d14965d8d6980fdc1f101be08dfadda446e641768ab9179d9735692f6e13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MenuLateral"));

        
        $__internal_902d14965d8d6980fdc1f101be08dfadda446e641768ab9179d9735692f6e13d->leave($__internal_902d14965d8d6980fdc1f101be08dfadda446e641768ab9179d9735692f6e13d_prof);

        
        $__internal_1bb58b777ff0845e634c3c250380dd11523c5e7225b47edb09b7623b7044f7ac->leave($__internal_1bb58b777ff0845e634c3c250380dd11523c5e7225b47edb09b7623b7044f7ac_prof);

    }

    // line 32
    public function block_Aplicacion($context, array $blocks = array())
    {
        $__internal_0de7ea62ba35b307c789edbf5502b54008174f8888b1348304a103cb66b9c2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de7ea62ba35b307c789edbf5502b54008174f8888b1348304a103cb66b9c2e6->enter($__internal_0de7ea62ba35b307c789edbf5502b54008174f8888b1348304a103cb66b9c2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        $__internal_6f6bc721548a28e6a2ca24a19fc98d56cda2292b4c375d8628567c0e9649742d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6bc721548a28e6a2ca24a19fc98d56cda2292b4c375d8628567c0e9649742d->enter($__internal_6f6bc721548a28e6a2ca24a19fc98d56cda2292b4c375d8628567c0e9649742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Aplicacion"));

        
        $__internal_6f6bc721548a28e6a2ca24a19fc98d56cda2292b4c375d8628567c0e9649742d->leave($__internal_6f6bc721548a28e6a2ca24a19fc98d56cda2292b4c375d8628567c0e9649742d_prof);

        
        $__internal_0de7ea62ba35b307c789edbf5502b54008174f8888b1348304a103cb66b9c2e6->leave($__internal_0de7ea62ba35b307c789edbf5502b54008174f8888b1348304a103cb66b9c2e6_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7b6219ae3c1f5308f0fa8e0b7bceb4fdcbb83117a4e90af46c6fd8266c31c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b6219ae3c1f5308f0fa8e0b7bceb4fdcbb83117a4e90af46c6fd8266c31c14->enter($__internal_b7b6219ae3c1f5308f0fa8e0b7bceb4fdcbb83117a4e90af46c6fd8266c31c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_31b63b5a11647e80d01b066acda4ddc6e5961890661780f6048fddd2a045049a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b63b5a11647e80d01b066acda4ddc6e5961890661780f6048fddd2a045049a->enter($__internal_31b63b5a11647e80d01b066acda4ddc6e5961890661780f6048fddd2a045049a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_31b63b5a11647e80d01b066acda4ddc6e5961890661780f6048fddd2a045049a->leave($__internal_31b63b5a11647e80d01b066acda4ddc6e5961890661780f6048fddd2a045049a_prof);

        
        $__internal_b7b6219ae3c1f5308f0fa8e0b7bceb4fdcbb83117a4e90af46c6fd8266c31c14->leave($__internal_b7b6219ae3c1f5308f0fa8e0b7bceb4fdcbb83117a4e90af46c6fd8266c31c14_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 35,  155 => 32,  138 => 28,  121 => 6,  103 => 5,  88 => 37,  85 => 36,  83 => 35,  79 => 33,  77 => 32,  72 => 29,  70 => 28,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block titulo %}Titulo Vacio{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
\t<link rel=\"stylesheet\"  href=\"{{ asset('css/bootstrap.css') }}\" />
    </head>
    <body>
\t<nav class=\"navbar navbar-inverse\">
\t  <div class=\"container-fluid\">
\t    <div class=\"navbar-header\">
\t      <a class=\"navbar-brand\" href=\"#\"> <span class=\"glyphicon glyphicon-cog\" style=\"color:#00A7FF;\"></span><span class=\"glyphicon glyphicon-cog\" style=\"font-size: 10px; color:#FF9E0F;\"></span> ERP-Fuencarral</a>
\t    </div>
\t    <ul class=\"nav navbar-nav\">
\t      <li class=\"active\"><a href=\"hola\">Inventario</a></li>
\t      <li><a href=\"#\">Page 1</a></li>
\t      <li><a href=\"#\">Page 2</a></li>
\t      <li><a href=\"#\">Page 3</a></li>
\t    </ul>
\t  </div>
\t</nav>
\t<div class=\"container-fluid\">

\t\t<div class=\"col-md-2 col-lg-2 col-xs-2 col-sm-2\">
<div class=\"panel panel-default\" style=\"border-left:0px; border-top:0px; border-bottom:0px; border-radius:0px;\">
 \t\t\t{% block MenuLateral %}{% endblock %}
</div>
\t\t</div>
\t\t<div class=\"col-md-10 col-lg-10 col-xs-10 col-sm-2\">
       \t\t {% block Aplicacion %}{% endblock %}
       \t\t </div>
\t</div>
        {% block javascripts %}{% endblock %}

\t<script src=\"{{ asset('js/bootstrap.css') }}\"></script>
    \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    </body>
</html>
", "::base.html.twig", "/home/naghost/ERP/ERP-Fuencarral/ERP-Fuencarral/app/Resources/views/base.html.twig");
    }
}
