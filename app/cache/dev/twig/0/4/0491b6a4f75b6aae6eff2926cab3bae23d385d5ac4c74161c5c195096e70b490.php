<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_0491b6a4f75b6aae6eff2926cab3bae23d385d5ac4c74161c5c195096e70b490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51b1d9dd3b36efee944a5e3c84583e5c6522591689a16f49baaad74a6c485b92 = $this->env->getExtension("native_profiler");
        $__internal_51b1d9dd3b36efee944a5e3c84583e5c6522591689a16f49baaad74a6c485b92->enter($__internal_51b1d9dd3b36efee944a5e3c84583e5c6522591689a16f49baaad74a6c485b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b1d9dd3b36efee944a5e3c84583e5c6522591689a16f49baaad74a6c485b92->leave($__internal_51b1d9dd3b36efee944a5e3c84583e5c6522591689a16f49baaad74a6c485b92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8e59d0ea4321d423270ee92c0da6098f5804aec611cba020f7491211b0cbc4a = $this->env->getExtension("native_profiler");
        $__internal_c8e59d0ea4321d423270ee92c0da6098f5804aec611cba020f7491211b0cbc4a->enter($__internal_c8e59d0ea4321d423270ee92c0da6098f5804aec611cba020f7491211b0cbc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c8e59d0ea4321d423270ee92c0da6098f5804aec611cba020f7491211b0cbc4a->leave($__internal_c8e59d0ea4321d423270ee92c0da6098f5804aec611cba020f7491211b0cbc4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c13b6255a6b6d18c360096c551d4aa99393bc4443a33d344179ea2d10e72fe79 = $this->env->getExtension("native_profiler");
        $__internal_c13b6255a6b6d18c360096c551d4aa99393bc4443a33d344179ea2d10e72fe79->enter($__internal_c13b6255a6b6d18c360096c551d4aa99393bc4443a33d344179ea2d10e72fe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c13b6255a6b6d18c360096c551d4aa99393bc4443a33d344179ea2d10e72fe79->leave($__internal_c13b6255a6b6d18c360096c551d4aa99393bc4443a33d344179ea2d10e72fe79_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_db4ea4d1ebf0f7f637239b728ec5fe29431e1e6ae782744ba7634180b0d346c8 = $this->env->getExtension("native_profiler");
        $__internal_db4ea4d1ebf0f7f637239b728ec5fe29431e1e6ae782744ba7634180b0d346c8->enter($__internal_db4ea4d1ebf0f7f637239b728ec5fe29431e1e6ae782744ba7634180b0d346c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_db4ea4d1ebf0f7f637239b728ec5fe29431e1e6ae782744ba7634180b0d346c8->leave($__internal_db4ea4d1ebf0f7f637239b728ec5fe29431e1e6ae782744ba7634180b0d346c8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_91ed88e5d68c9bb8b89bc1f2043f58ecb9094442500c57a4e783a8c8b064711c = $this->env->getExtension("native_profiler");
        $__internal_91ed88e5d68c9bb8b89bc1f2043f58ecb9094442500c57a4e783a8c8b064711c->enter($__internal_91ed88e5d68c9bb8b89bc1f2043f58ecb9094442500c57a4e783a8c8b064711c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_91ed88e5d68c9bb8b89bc1f2043f58ecb9094442500c57a4e783a8c8b064711c->leave($__internal_91ed88e5d68c9bb8b89bc1f2043f58ecb9094442500c57a4e783a8c8b064711c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
