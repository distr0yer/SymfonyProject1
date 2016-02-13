<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3e276fa1a41b3d8f0ea412aea617d7f6735dd5c62a24162dfec3693320e80e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47676e6f72cdb6a4447677192b6bc04a1cff8fcef2319b0fd7528a35a2e5b721 = $this->env->getExtension("native_profiler");
        $__internal_47676e6f72cdb6a4447677192b6bc04a1cff8fcef2319b0fd7528a35a2e5b721->enter($__internal_47676e6f72cdb6a4447677192b6bc04a1cff8fcef2319b0fd7528a35a2e5b721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47676e6f72cdb6a4447677192b6bc04a1cff8fcef2319b0fd7528a35a2e5b721->leave($__internal_47676e6f72cdb6a4447677192b6bc04a1cff8fcef2319b0fd7528a35a2e5b721_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89ee86fcd2997150e273fe8d918f53fa3a5d674fd960cf9f86c97c3a7e992a49 = $this->env->getExtension("native_profiler");
        $__internal_89ee86fcd2997150e273fe8d918f53fa3a5d674fd960cf9f86c97c3a7e992a49->enter($__internal_89ee86fcd2997150e273fe8d918f53fa3a5d674fd960cf9f86c97c3a7e992a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89ee86fcd2997150e273fe8d918f53fa3a5d674fd960cf9f86c97c3a7e992a49->leave($__internal_89ee86fcd2997150e273fe8d918f53fa3a5d674fd960cf9f86c97c3a7e992a49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cbcbcc6c3ecb017afc8fcb6d6feed5cd2d7a753d08e9bb0636d21c4d49b6992 = $this->env->getExtension("native_profiler");
        $__internal_4cbcbcc6c3ecb017afc8fcb6d6feed5cd2d7a753d08e9bb0636d21c4d49b6992->enter($__internal_4cbcbcc6c3ecb017afc8fcb6d6feed5cd2d7a753d08e9bb0636d21c4d49b6992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4cbcbcc6c3ecb017afc8fcb6d6feed5cd2d7a753d08e9bb0636d21c4d49b6992->leave($__internal_4cbcbcc6c3ecb017afc8fcb6d6feed5cd2d7a753d08e9bb0636d21c4d49b6992_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_30621762c8e0735f929e22650e2d50baf8427f74b9d0bc76345fa2c8bee1f75d = $this->env->getExtension("native_profiler");
        $__internal_30621762c8e0735f929e22650e2d50baf8427f74b9d0bc76345fa2c8bee1f75d->enter($__internal_30621762c8e0735f929e22650e2d50baf8427f74b9d0bc76345fa2c8bee1f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_30621762c8e0735f929e22650e2d50baf8427f74b9d0bc76345fa2c8bee1f75d->leave($__internal_30621762c8e0735f929e22650e2d50baf8427f74b9d0bc76345fa2c8bee1f75d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
