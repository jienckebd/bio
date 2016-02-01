<?php

/* themes/bootstrap/templates/site/header.html.twig */
class __TwigTemplate_69302a961e75ebb51bb52bc6bb10c71a3419213a1f45e8d06ce137a06b89798d extends Twig_Template
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
        echo "<header>

  <div id=\"header-inner\">

    <div id=\"header-fixed\" class=\"header-main\">
      <div class=\"container\">
        <div id=\"header-drupal\" class=\"col-md-1\">
          <div id=\"header-drupal-inner\">
            <img src=\"/themes/bootstrap/img/logo/drupal.png\" />
          </div>
        </div>
        <div id=\"header-logo\" class=\"col-md-4\">
          <div id=\"header-logo-inner\">
            <div id=\"header-logo-name\">Bryan Jiencke</div>
          </div>
        </div>
        <div id=\"header-menu\" class=\"col-md-7\">
          <div id=\"header-menu-inner\">
            <div id=\"header-icons\">
              <a id=\"header-icon-contact\" href=\"/contact\">
                <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span>
              </a>
              <a id=\"header-icon-top\" class=\"scroll-link\" href=\"#top\">
                <span class=\"glyphicon glyphicon-triangle-top\" aria-hidden=\"true\"></span>
              </a>
              <a id=\"header-icon-search\" href=\"\">
                <span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <div id=\"header-hidden-search\">
              ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_form"]) ? $context["search_form"] : null), "html", null, true));
        echo "
            </div>

            <navigation id=\"main\" class=\"header-search-menu-active\">
              ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true));
        echo "
            </navigation>
          </div>
        </div>
      </div>
    </div>

    <div class=\"container\">

      <div id=\"header-secondary\" class=\"row\">
        <div id=\"header-secondary-inner\">
          <div id=\"header-secondary-left\">
            <div id=\"header-lang\">
              <a href=\"\" id=\"header-lang-us\"><img src=\"/themes/bootstrap/img/flags/en.png\"></a>
              <a href=\"\" id=\"header-lang-es\"><img src=\"/themes/bootstrap/img/flags/es.png\"></a>
              <a href=\"\" id=\"header-lang-de\"><img src=\"/themes/bootstrap/img/flags/de.png\"></a>
            </div>
          </div>
          <div id=\"header-secondary-right\">
            <div id=\"header-secondary-links\">
              <a href=\"/about\">About Me</a>
              <a href=\"/contact\">Contact</a>
            </div>
            <div id=\"header-secondary-search\">
              ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_form"]) ? $context["search_form"] : null), "html", null, true));
        echo "
            </div>
          </div>
        </div>
      </div>

      <div id=\"header-primary\" class=\"row header-main\">
        <div id=\"header-drupal\" class=\"col-md-1\">
          <div id=\"header-drupal-inner\">
            <img src=\"/themes/bootstrap/img/logo/drupal.png\" />
          </div>
        </div>
        <div id=\"header-logo\" class=\"col-md-4\">
          <div id=\"header-logo-inner\">
            <div id=\"header-logo-name\">Bryan Jiencke</div>
            <div id=\"header-logo-title\">Drupal Developer</div>
          </div>
        </div>
        <div id=\"header-menu\" class=\"col-md-7\">
          <div id=\"header-menu-inner\">
            <navigation id=\"main\">
              ";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true));
        echo "
            </navigation>
          </div>
        </div>
      </div>

    </div>

  </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/site/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 80,  109 => 59,  82 => 35,  75 => 31,  43 => 1,);
    }
}
/* <header>*/
/* */
/*   <div id="header-inner">*/
/* */
/*     <div id="header-fixed" class="header-main">*/
/*       <div class="container">*/
/*         <div id="header-drupal" class="col-md-1">*/
/*           <div id="header-drupal-inner">*/
/*             <img src="/themes/bootstrap/img/logo/drupal.png" />*/
/*           </div>*/
/*         </div>*/
/*         <div id="header-logo" class="col-md-4">*/
/*           <div id="header-logo-inner">*/
/*             <div id="header-logo-name">Bryan Jiencke</div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="header-menu" class="col-md-7">*/
/*           <div id="header-menu-inner">*/
/*             <div id="header-icons">*/
/*               <a id="header-icon-contact" href="/contact">*/
/*                 <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a id="header-icon-top" class="scroll-link" href="#top">*/
/*                 <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a id="header-icon-search" href="">*/
/*                 <span class="glyphicon glyphicon-search" aria-hidden="true"></span>*/
/*               </a>*/
/*             </div>*/
/*             <div id="header-hidden-search">*/
/*               {{ search_form }}*/
/*             </div>*/
/* */
/*             <navigation id="main" class="header-search-menu-active">*/
/*               {{ menu }}*/
/*             </navigation>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/* */
/*       <div id="header-secondary" class="row">*/
/*         <div id="header-secondary-inner">*/
/*           <div id="header-secondary-left">*/
/*             <div id="header-lang">*/
/*               <a href="" id="header-lang-us"><img src="/themes/bootstrap/img/flags/en.png"></a>*/
/*               <a href="" id="header-lang-es"><img src="/themes/bootstrap/img/flags/es.png"></a>*/
/*               <a href="" id="header-lang-de"><img src="/themes/bootstrap/img/flags/de.png"></a>*/
/*             </div>*/
/*           </div>*/
/*           <div id="header-secondary-right">*/
/*             <div id="header-secondary-links">*/
/*               <a href="/about">About Me</a>*/
/*               <a href="/contact">Contact</a>*/
/*             </div>*/
/*             <div id="header-secondary-search">*/
/*               {{ search_form }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div id="header-primary" class="row header-main">*/
/*         <div id="header-drupal" class="col-md-1">*/
/*           <div id="header-drupal-inner">*/
/*             <img src="/themes/bootstrap/img/logo/drupal.png" />*/
/*           </div>*/
/*         </div>*/
/*         <div id="header-logo" class="col-md-4">*/
/*           <div id="header-logo-inner">*/
/*             <div id="header-logo-name">Bryan Jiencke</div>*/
/*             <div id="header-logo-title">Drupal Developer</div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="header-menu" class="col-md-7">*/
/*           <div id="header-menu-inner">*/
/*             <navigation id="main">*/
/*               {{ menu }}*/
/*             </navigation>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* </header>*/
/* */
