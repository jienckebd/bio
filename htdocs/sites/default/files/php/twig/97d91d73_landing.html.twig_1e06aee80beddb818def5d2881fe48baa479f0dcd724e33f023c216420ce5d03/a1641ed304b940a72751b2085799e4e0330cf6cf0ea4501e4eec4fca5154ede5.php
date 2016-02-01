<?php

/* themes/bootstrap/templates/site/landing.html.twig */
class __TwigTemplate_548b6d3bde9debca34e2b3a52645bbb424eb16ae3d6e0621837fba9607cc60c9 extends Twig_Template
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
        $tags = array("for" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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
        echo "<section id=\"landing-project\">

  <div id=\"landing-snippet-heading\" class=\"section-heading\">
    <h2>
      <span class=\"glyphicon glyphicon-cloud\" aria-hidden=\"true\"></span> My Projects
    </h2>
  </div>

  <div id=\"landing-project-inner\">
    <div id=\"landing-slideshow\" class=\"cycle-slideshow\"
      data-cycle-timeout=\"6000\"
      data-cycle-speed=\"1000\"
      data-cycle-log=\"false\"
      data-cycle-slides=\"> .cycle-slide\"
      data-cycle-swipe=\"true\"
      data-cycle-swipe-fx=\"scrollHorz\"
      data-cycle-pause-on-hover=\"true\"

    >
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 21
            echo "      <div class=\"cycle-slide\" style=\"background-image: url(";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "hero", array()), "html", null, true));
            echo ");\">
        <div class=\"slide-caption container\">
          <div class=\"slide-caption-inner\">
            <div class=\"slide-caption-front slide-caption-side\">
              <div class=\"slide-logo\"><img src=\"";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "logo", array()), "html", null, true));
            echo "\"></div>
              <div class=\"slide-caption-body\">";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "description", array()), "html", null, true));
            echo "</div>
              <div class=\"slide-legal\">";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "legal", array()), "html", null, true));
            echo "</div>
              <div class=\"slide-button\"><a class=\"btn btn-default faa-parent animated-hover\" href=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "path", array()), "html", null, true));
            echo "\">Project Info <i class=\"fa fa-info-circle faa-pulse\"></i></a><a class=\"btn btn-default faa-parent animated-hover\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
            echo "\" target=\"_blank\" title=\"This link will open in a new window.\">Go to Site <i class=\"fa fa-chevron-circle-right faa-pulse\"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    <div class=\"cycle-pager\"></div>
  </div>
</section>

<section id=\"landing-picture-bio\" class=\"row\">
  <div id=\"landing-picture-bio\" class=\"container\">
    <div id=\"landing-picture\" class=\"col-md-6\">
      <div id=\"landing-picture-inner\">
        <img src=\"/themes/bootstrap/img/me.jpg\" />
      </div>
    </div>
    <div id=\"landing-bio\" class=\"col-md-6\">
      <div id=\"landing-bio-inner\">
        <div id=\"landing-bio-copy\">
          <p>
            I'm a Drupal developer with experience in versions 6, 7, and 8 located in Massachusetts. I can work with both back end/functionality and front end/design, but most of my experience is in building functionality.
          </p>
          <p>
            As a front end developer, I've designed with multiple responsive grid systems, Sass, jQuery, and front end frameworks. This site was designed on <a href=\"https://www.drupal.org/drupal-8.0\">Drupal 8</a> using Bootstrap and Sass. Any design I build is fully responsive to work on any device.
          </p>
          <p>
            As a back end developer, I've learned the best ways to use all of Drupal's APIs, from Entity API to Batch API, in versions 6, 7, and 8.
          </p>
        </div>
        <div id=\"landing-bio-employee\">
          I'm currently an employee of <a href=\"http://beta.milespartnership.com/\" target=\"_blank\">Miles Marketing<br><img src=\"/themes/bootstrap/img/logo/miles.png\"></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id=\"landing-snippet\">
  <div id=\"landing-snippet-heading\" class=\"section-heading\">
    <h2>
      <span class=\"glyphicon glyphicon-object-align-bottom\" aria-hidden=\"true\"></span> Snippets
    </h2>
  </div>
  <div id=\"landing-snippet-inner\" class=\"container\">
    ";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_snippet"]) ? $context["view_snippet"] : null), "html", null, true));
        echo "
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/site/landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 74,  102 => 34,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  68 => 21,  64 => 20,  43 => 1,);
    }
}
/* <section id="landing-project">*/
/* */
/*   <div id="landing-snippet-heading" class="section-heading">*/
/*     <h2>*/
/*       <span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> My Projects*/
/*     </h2>*/
/*   </div>*/
/* */
/*   <div id="landing-project-inner">*/
/*     <div id="landing-slideshow" class="cycle-slideshow"*/
/*       data-cycle-timeout="6000"*/
/*       data-cycle-speed="1000"*/
/*       data-cycle-log="false"*/
/*       data-cycle-slides="> .cycle-slide"*/
/*       data-cycle-swipe="true"*/
/*       data-cycle-swipe-fx="scrollHorz"*/
/*       data-cycle-pause-on-hover="true"*/
/* */
/*     >*/
/*     {% for slide in slides %}*/
/*       <div class="cycle-slide" style="background-image: url({{ slide.hero }});">*/
/*         <div class="slide-caption container">*/
/*           <div class="slide-caption-inner">*/
/*             <div class="slide-caption-front slide-caption-side">*/
/*               <div class="slide-logo"><img src="{{ slide.logo }}"></div>*/
/*               <div class="slide-caption-body">{{ slide.description }}</div>*/
/*               <div class="slide-legal">{{ slide.legal }}</div>*/
/*               <div class="slide-button"><a class="btn btn-default faa-parent animated-hover" href="{{ slide.path }}">Project Info <i class="fa fa-info-circle faa-pulse"></i></a><a class="btn btn-default faa-parent animated-hover" href="{{ slide.url }}" target="_blank" title="This link will open in a new window.">Go to Site <i class="fa fa-chevron-circle-right faa-pulse"></i></a></div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/* */
/*     <div class="cycle-pager"></div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="landing-picture-bio" class="row">*/
/*   <div id="landing-picture-bio" class="container">*/
/*     <div id="landing-picture" class="col-md-6">*/
/*       <div id="landing-picture-inner">*/
/*         <img src="/themes/bootstrap/img/me.jpg" />*/
/*       </div>*/
/*     </div>*/
/*     <div id="landing-bio" class="col-md-6">*/
/*       <div id="landing-bio-inner">*/
/*         <div id="landing-bio-copy">*/
/*           <p>*/
/*             I'm a Drupal developer with experience in versions 6, 7, and 8 located in Massachusetts. I can work with both back end/functionality and front end/design, but most of my experience is in building functionality.*/
/*           </p>*/
/*           <p>*/
/*             As a front end developer, I've designed with multiple responsive grid systems, Sass, jQuery, and front end frameworks. This site was designed on <a href="https://www.drupal.org/drupal-8.0">Drupal 8</a> using Bootstrap and Sass. Any design I build is fully responsive to work on any device.*/
/*           </p>*/
/*           <p>*/
/*             As a back end developer, I've learned the best ways to use all of Drupal's APIs, from Entity API to Batch API, in versions 6, 7, and 8.*/
/*           </p>*/
/*         </div>*/
/*         <div id="landing-bio-employee">*/
/*           I'm currently an employee of <a href="http://beta.milespartnership.com/" target="_blank">Miles Marketing<br><img src="/themes/bootstrap/img/logo/miles.png"></a></div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="landing-snippet">*/
/*   <div id="landing-snippet-heading" class="section-heading">*/
/*     <h2>*/
/*       <span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span> Snippets*/
/*     </h2>*/
/*   </div>*/
/*   <div id="landing-snippet-inner" class="container">*/
/*     {{ view_snippet }}*/
/*   </div>*/
/* </section>*/
/* */
