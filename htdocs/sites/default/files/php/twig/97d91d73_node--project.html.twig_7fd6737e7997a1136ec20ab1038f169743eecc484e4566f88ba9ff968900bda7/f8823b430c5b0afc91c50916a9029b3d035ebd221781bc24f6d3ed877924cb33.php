<?php

/* themes/bootstrap/templates/node/node--project.html.twig */
class __TwigTemplate_20f02433c59f8e54435af724cfe746418d519baa7b073c81c2f3857de7771f4b extends Twig_Template
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
        $tags = array("set" => 66, "if" => 77, "for" => 119);
        $filters = array("clean_class" => 68);
        $functions = array("attach_library" => 79);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
                array('attach_library')
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

        // line 66
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 68
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (($this->getAttribute(        // line 69
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 70
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 72
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 6 => "clearfix");
        // line 76
        echo "
";
        // line 77
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full")) {
            // line 78
            echo "
  ";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("bio_theme/magnific"), "html", null, true));
            echo "

  <article id=\"node-";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["nid"]) ? $context["nid"] : null), "html", null, true));
            echo "\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <div class=\"project-inner container\">
    <div class=\"project-top\">
      <div class=\"project-top-inner\">
        <div class=\"twelve columns project-top-left\">
          <div class=\"section-heading\">
            <h2>Specs</h2>
          </div>
          <div class=\"project-logo\">
            <img src=\"";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\">
          </div>
          <div class=\"drupal-version\">
            ";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_version", array()), "html", null, true));
            echo "
          </div>
          <div class=\"tools\">
            ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tools", array()), "html", null, true));
            echo "
          </div>
        </div>
        <div class=\"twelve columns project-top-right\">
          <div class=\"section-heading\">
            <h2>Summary</h2>
          </div>
          ";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "
          <div class=\"project-link\">
            <a href=\"";
            // line 105
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true));
            echo "\" class=\"btn faa-parent animated-hover\" title=\"This link will open in a new window.\" target=\"_blank\">Go to Site <i class=\"fa fa-chevron-circle-right faa-pulse\"></i></a>
          </div>
        </div>
        <div class=\"clearfix\"></div>
      </div>
    </div>

    <div class=\"project-divider divider section-heading\">
      <h2>Gallery</h2>
    </div>

    <div class=\"project-gallery\">
      <div class=\"project-gallery-inner\">
        <div class=\"section section-gallery\">
          ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 120
                echo "          <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "image_full", array()), "html", null, true));
                echo "\" class=\"zoom grayscale-hover gallery-item-wrapper\">
            <div class=\"gallery-item\">
              <div class=\"gallery-item-inner\">
                <img src=\"";
                // line 123
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "image_thumbnail", array()), "html", null, true));
                echo "\" class=\"gallery-image\">
                <div class=\"gallery-item-link\"><a href=\"";
                // line 124
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "url", array()), "html", null, true));
                echo "\" target=\"_blank\"><i class=\"fa fa-camera\"></i> View Example</a></div>
                <div class=\"gallery-item-caption\">
                  <div class=\"gallery-item-caption-inner\">
                    ";
                // line 127
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true));
                echo "
                  </div>
                </div>
              </div>
              <div class=\"gallery-item-fix-margin\"></div>
            </div>
          </a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "        </div>
      </div>
    </div>
    </div>
  </article>

";
        }
        // line 142
        echo "
";
        // line 143
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "teaser")) {
            // line 144
            echo "
  <article";
            // line 145
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <div class=\"version\">";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true));
            echo "</div>
    <div class=\"twelve columns project-left\">
      <div class=\"node-link\">
       <a href=\"";
            // line 149
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
      </div>
      <div class=\"project-description\">
        ";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "
      </div>
      <div class=\"logo-bar\">
        <div class=\"logo\">
        <img src=\"";
            // line 156
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\">
        </div>
        <div class=\"buttons\">
          <a class=\"btn\" href=\"";
            // line 159
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">Project Info</a>
          <a class=\"btn\" href=\"";
            // line 160
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true));
            echo "\" target=\"_blank\" title=\"This link will open in a new window.\">View Site</a>
        </div>
      </div>
    </div>
    <div class=\"twelve columns project-right\">
      <div class=\"project-slideshow\">
        <div class=\"cycle-slideshow\"
      data-cycle-timeout=\"6000\"
      data-cycle-log=\"false\"
      data-cycle-slides=\"> .cycle-slide\"
      data-cycle-swipe=\"true\"
      data-cycle-swipe-fx=\"scrollHorz\"
      data-cycle-pause-on-hover=\"true\"

    >
        ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 176
                echo "        <div class=\"cycle-slide\" style=\"background-image: url(";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "image_thumbnail", array()), "html", null, true));
                echo ");\">
          <div class=\"slide-caption\">
            <div class=\"slide-caption-title\">";
                // line 178
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true));
                echo "</div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "        <div class=\"cycle-prev\"><i class=\"fa fa-chevron-circle-left\"></i></div>
        <div class=\"cycle-next\"><i class=\"fa fa-chevron-circle-right\"></i></div>
        <div class=\"cycle-pager\"></div>
      </div>
      </div>
    </div>
  </article>

";
        }
        // line 191
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/node/node--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 191,  246 => 182,  236 => 178,  230 => 176,  226 => 175,  208 => 160,  204 => 159,  198 => 156,  191 => 152,  183 => 149,  177 => 146,  173 => 145,  170 => 144,  168 => 143,  165 => 142,  156 => 135,  142 => 127,  136 => 124,  132 => 123,  125 => 120,  121 => 119,  104 => 105,  99 => 103,  89 => 96,  83 => 93,  77 => 90,  63 => 81,  58 => 79,  55 => 78,  53 => 77,  50 => 76,  48 => 72,  47 => 71,  46 => 70,  45 => 69,  44 => 68,  43 => 66,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a node.*/
/*  **/
/*  * Available variables:*/
/*  * - node: Full node entity.*/
/*  *   - id: The node ID.*/
/*  *   - bundle: The type of the node, for example, "page" or "article".*/
/*  *   - authorid: The user ID of the node author.*/
/*  *   - createdtime: Formatted creation date. Preprocess functions can*/
/*  *     reformat it by calling format_date() with the desired parameters on*/
/*  *     $variables['node']->getCreatedTime().*/
/*  * - label: The title of the node.*/
/*  * - content: All node items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - author_picture: The node author user entity, rendered using the "compact"*/
/*  *   view mode.*/
/*  * - metadata: Metadata for this node.*/
/*  * - date: Themed creation date field.*/
/*  * - author_name: Themed author name field.*/
/*  * - url: Direct URL of the current node.*/
/*  * - display_submitted: Whether submission information should be displayed.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - node: The current template type (also known as a "theming hook").*/
/*  *   - node--type-[type]: The current node type. For example, if the node is an*/
/*  *     "Article" it would result in "node--type-article". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/*  *     teaser would result in: "node--view-mode-teaser", and*/
/*  *     full: "node--view-mode-full".*/
/*  *   The following are controlled through the node publishing options.*/
/*  *   - node--promoted: Appears on nodes promoted to the front page.*/
/*  *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/*  *     teaser listings.*/
/*  *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/*  *     admins.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main*/
/*  *   content tag that appears in the template.*/
/*  * - author_attributes: Same as attributes, except applied to the author of*/
/*  *   the node tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/*  * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/*  * - readmore: Flag for more state. Will be true if the teaser content of the*/
/*  *   node cannot hold the main body content.*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_node()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'node',*/
/*     'node--type-' ~ node.bundle|clean_class,*/
/*     node.isPromoted() ? 'node--promoted',*/
/*     node.isSticky() ? 'node--sticky',*/
/*     not node.isPublished() ? 'node--unpublished',*/
/*     view_mode ? 'node--view-mode-' ~ view_mode|clean_class,*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* */
/* {% if view_mode == 'full' %}*/
/* */
/*   {{ attach_library('bio_theme/magnific') }}*/
/* */
/*   <article id="node-{{ nid }}"{{ attributes.addClass(classes) }}>*/
/*     <div class="project-inner container">*/
/*     <div class="project-top">*/
/*       <div class="project-top-inner">*/
/*         <div class="twelve columns project-top-left">*/
/*           <div class="section-heading">*/
/*             <h2>Specs</h2>*/
/*           </div>*/
/*           <div class="project-logo">*/
/*             <img src="{{ logo }}">*/
/*           </div>*/
/*           <div class="drupal-version">*/
/*             {{ content.field_version }}*/
/*           </div>*/
/*           <div class="tools">*/
/*             {{ content.field_tools }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="twelve columns project-top-right">*/
/*           <div class="section-heading">*/
/*             <h2>Summary</h2>*/
/*           </div>*/
/*           {{ content.body }}*/
/*           <div class="project-link">*/
/*             <a href="{{ site_url }}" class="btn faa-parent animated-hover" title="This link will open in a new window." target="_blank">Go to Site <i class="fa fa-chevron-circle-right faa-pulse"></i></a>*/
/*           </div>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="project-divider divider section-heading">*/
/*       <h2>Gallery</h2>*/
/*     </div>*/
/* */
/*     <div class="project-gallery">*/
/*       <div class="project-gallery-inner">*/
/*         <div class="section section-gallery">*/
/*           {% for slide in slides %}*/
/*           <a href="{{ slide.image_full }}" class="zoom grayscale-hover gallery-item-wrapper">*/
/*             <div class="gallery-item">*/
/*               <div class="gallery-item-inner">*/
/*                 <img src="{{ slide.image_thumbnail }}" class="gallery-image">*/
/*                 <div class="gallery-item-link"><a href="{{ slide.url }}" target="_blank"><i class="fa fa-camera"></i> View Example</a></div>*/
/*                 <div class="gallery-item-caption">*/
/*                   <div class="gallery-item-caption-inner">*/
/*                     {{ slide.title }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="gallery-item-fix-margin"></div>*/
/*             </div>*/
/*           </a>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     </div>*/
/*   </article>*/
/* */
/* {% endif %}*/
/* */
/* {% if view_mode == 'teaser' %}*/
/* */
/*   <article{{ attributes.addClass(classes) }}>*/
/*     <div class="version">{{ version }}</div>*/
/*     <div class="twelve columns project-left">*/
/*       <div class="node-link">*/
/*        <a href="{{ url }}">{{ label }}</a>*/
/*       </div>*/
/*       <div class="project-description">*/
/*         {{ content.body }}*/
/*       </div>*/
/*       <div class="logo-bar">*/
/*         <div class="logo">*/
/*         <img src="{{ logo }}">*/
/*         </div>*/
/*         <div class="buttons">*/
/*           <a class="btn" href="{{ url }}">Project Info</a>*/
/*           <a class="btn" href="{{ site_url }}" target="_blank" title="This link will open in a new window.">View Site</a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="twelve columns project-right">*/
/*       <div class="project-slideshow">*/
/*         <div class="cycle-slideshow"*/
/*       data-cycle-timeout="6000"*/
/*       data-cycle-log="false"*/
/*       data-cycle-slides="> .cycle-slide"*/
/*       data-cycle-swipe="true"*/
/*       data-cycle-swipe-fx="scrollHorz"*/
/*       data-cycle-pause-on-hover="true"*/
/* */
/*     >*/
/*         {% for slide in slides %}*/
/*         <div class="cycle-slide" style="background-image: url({{ slide.image_thumbnail }});">*/
/*           <div class="slide-caption">*/
/*             <div class="slide-caption-title">{{ slide.title }}</div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*         <div class="cycle-prev"><i class="fa fa-chevron-circle-left"></i></div>*/
/*         <div class="cycle-next"><i class="fa fa-chevron-circle-right"></i></div>*/
/*         <div class="cycle-pager"></div>*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/*   </article>*/
/* */
/* {% endif %}*/
/* */
/* */
/* */
