<?php

/* SensioDistributionBundle::Configurator/form.html.twig */
class __TwigTemplate_7d394b1f21eb7a820d5f7dc8c39e3fe94a9a71a4b3dc786afa1366057e95d36d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle::Configurator/form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85ce1320f23892d061927a6b5e55819e043e637a3ce6e460e9001a2394270b13 = $this->env->getExtension("native_profiler");
        $__internal_85ce1320f23892d061927a6b5e55819e043e637a3ce6e460e9001a2394270b13->enter($__internal_85ce1320f23892d061927a6b5e55819e043e637a3ce6e460e9001a2394270b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85ce1320f23892d061927a6b5e55819e043e637a3ce6e460e9001a2394270b13->leave($__internal_85ce1320f23892d061927a6b5e55819e043e637a3ce6e460e9001a2394270b13_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_39a520faf32546526b7310dfe2db77420987a8b6bcc0619e004d34ef121a099a = $this->env->getExtension("native_profiler");
        $__internal_39a520faf32546526b7310dfe2db77420987a8b6bcc0619e004d34ef121a099a->enter($__internal_39a520faf32546526b7310dfe2db77420987a8b6bcc0619e004d34ef121a099a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_39a520faf32546526b7310dfe2db77420987a8b6bcc0619e004d34ef121a099a->leave($__internal_39a520faf32546526b7310dfe2db77420987a8b6bcc0619e004d34ef121a099a_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e9bf9473b15405ae1f04e75a7205261c02a39c19796e92f6b28eca59b32a71de = $this->env->getExtension("native_profiler");
        $__internal_e9bf9473b15405ae1f04e75a7205261c02a39c19796e92f6b28eca59b32a71de->enter($__internal_e9bf9473b15405ae1f04e75a7205261c02a39c19796e92f6b28eca59b32a71de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e9bf9473b15405ae1f04e75a7205261c02a39c19796e92f6b28eca59b32a71de->leave($__internal_e9bf9473b15405ae1f04e75a7205261c02a39c19796e92f6b28eca59b32a71de_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d8db9f8e48379eea7fc296ae0dc171d693063f77380fc13449fe0a4acfea602f = $this->env->getExtension("native_profiler");
        $__internal_d8db9f8e48379eea7fc296ae0dc171d693063f77380fc13449fe0a4acfea602f->enter($__internal_d8db9f8e48379eea7fc296ae0dc171d693063f77380fc13449fe0a4acfea602f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_d8db9f8e48379eea7fc296ae0dc171d693063f77380fc13449fe0a4acfea602f->leave($__internal_d8db9f8e48379eea7fc296ae0dc171d693063f77380fc13449fe0a4acfea602f_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
