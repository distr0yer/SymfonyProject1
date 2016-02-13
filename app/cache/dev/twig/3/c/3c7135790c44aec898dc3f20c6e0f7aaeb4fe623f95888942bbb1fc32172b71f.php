<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_3c7135790c44aec898dc3f20c6e0f7aaeb4fe623f95888942bbb1fc32172b71f extends Twig_Template
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
        $__internal_9a4940cbbb7aa98e3a2ce3e2dcda7c8766da6211fb791e244a51381a29154196 = $this->env->getExtension("native_profiler");
        $__internal_9a4940cbbb7aa98e3a2ce3e2dcda7c8766da6211fb791e244a51381a29154196->enter($__internal_9a4940cbbb7aa98e3a2ce3e2dcda7c8766da6211fb791e244a51381a29154196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4940cbbb7aa98e3a2ce3e2dcda7c8766da6211fb791e244a51381a29154196->leave($__internal_9a4940cbbb7aa98e3a2ce3e2dcda7c8766da6211fb791e244a51381a29154196_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec2915512ca79510b4bfb99b995cc2ce1d8f91c54d377d550154fa499fc0fbc4 = $this->env->getExtension("native_profiler");
        $__internal_ec2915512ca79510b4bfb99b995cc2ce1d8f91c54d377d550154fa499fc0fbc4->enter($__internal_ec2915512ca79510b4bfb99b995cc2ce1d8f91c54d377d550154fa499fc0fbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ec2915512ca79510b4bfb99b995cc2ce1d8f91c54d377d550154fa499fc0fbc4->leave($__internal_ec2915512ca79510b4bfb99b995cc2ce1d8f91c54d377d550154fa499fc0fbc4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_266590e928df9be7e23ba9357b6680c8577521b1ef40c69b61f47609fcb503e3 = $this->env->getExtension("native_profiler");
        $__internal_266590e928df9be7e23ba9357b6680c8577521b1ef40c69b61f47609fcb503e3->enter($__internal_266590e928df9be7e23ba9357b6680c8577521b1ef40c69b61f47609fcb503e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_266590e928df9be7e23ba9357b6680c8577521b1ef40c69b61f47609fcb503e3->leave($__internal_266590e928df9be7e23ba9357b6680c8577521b1ef40c69b61f47609fcb503e3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7bea3ad8e50d78afbdfafcd7cc087b2c04d9e124bcd27bc68e7d8ca554626d6 = $this->env->getExtension("native_profiler");
        $__internal_d7bea3ad8e50d78afbdfafcd7cc087b2c04d9e124bcd27bc68e7d8ca554626d6->enter($__internal_d7bea3ad8e50d78afbdfafcd7cc087b2c04d9e124bcd27bc68e7d8ca554626d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d7bea3ad8e50d78afbdfafcd7cc087b2c04d9e124bcd27bc68e7d8ca554626d6->leave($__internal_d7bea3ad8e50d78afbdfafcd7cc087b2c04d9e124bcd27bc68e7d8ca554626d6_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ee468d2398e0e2ce5dcc79a71cca0f8d7dd27b805ffc9a0ff80bf753e1ba710b = $this->env->getExtension("native_profiler");
        $__internal_ee468d2398e0e2ce5dcc79a71cca0f8d7dd27b805ffc9a0ff80bf753e1ba710b->enter($__internal_ee468d2398e0e2ce5dcc79a71cca0f8d7dd27b805ffc9a0ff80bf753e1ba710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ee468d2398e0e2ce5dcc79a71cca0f8d7dd27b805ffc9a0ff80bf753e1ba710b->leave($__internal_ee468d2398e0e2ce5dcc79a71cca0f8d7dd27b805ffc9a0ff80bf753e1ba710b_prof);

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
