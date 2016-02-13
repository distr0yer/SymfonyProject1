<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1d0aa74e27cb873e2fa02476f3feb736b278bab544437613c09a9e7d5d4c5917 extends Twig_Template
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
        $__internal_697725027663f947bbdbe56eaf6b035c338422ea7676bf89c6a8366d9d5c184f = $this->env->getExtension("native_profiler");
        $__internal_697725027663f947bbdbe56eaf6b035c338422ea7676bf89c6a8366d9d5c184f->enter($__internal_697725027663f947bbdbe56eaf6b035c338422ea7676bf89c6a8366d9d5c184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_697725027663f947bbdbe56eaf6b035c338422ea7676bf89c6a8366d9d5c184f->leave($__internal_697725027663f947bbdbe56eaf6b035c338422ea7676bf89c6a8366d9d5c184f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
