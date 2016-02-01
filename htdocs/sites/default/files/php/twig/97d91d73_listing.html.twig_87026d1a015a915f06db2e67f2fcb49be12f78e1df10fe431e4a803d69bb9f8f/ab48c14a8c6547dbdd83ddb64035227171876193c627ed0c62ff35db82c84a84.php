<?php

/* themes/bootstrap/templates/site/listing.html.twig */
class __TwigTemplate_3f00a537d08b92c9b74c41dd4f6a179a83554159a4869c800d7fde4914acc398 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"listing\" class=\"listing-type-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true));
        echo "\">
  <div class=\"container listing-inner\">
    <div id=\"contact-subtitle\" class=\"subtitle\">
      ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true));
        echo "
      <div class=\"arrow-wrapper arrow-blue-wrapper arrow-subtitle-wrapper\">
        <div class=\"arrow\"></div>
      </div>
    </div>
    <div class=\"six columns listing-facets\">
      ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_facets"]) ? $context["view_facets"] : null), "html", null, true));
        echo "
    </div>
    <div class=\"eighteen columns listing-body\">
      ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_body"]) ? $context["view_body"] : null), "html", null, true));
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/site/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  59 => 10,  50 => 4,  43 => 1,);
    }
}
/* <div id="listing" class="listing-type-{{ type }}">*/
/*   <div class="container listing-inner">*/
/*     <div id="contact-subtitle" class="subtitle">*/
/*       {{ subtitle }}*/
/*       <div class="arrow-wrapper arrow-blue-wrapper arrow-subtitle-wrapper">*/
/*         <div class="arrow"></div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="six columns listing-facets">*/
/*       {{ view_facets }}*/
/*     </div>*/
/*     <div class="eighteen columns listing-body">*/
/*       {{ view_body }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
