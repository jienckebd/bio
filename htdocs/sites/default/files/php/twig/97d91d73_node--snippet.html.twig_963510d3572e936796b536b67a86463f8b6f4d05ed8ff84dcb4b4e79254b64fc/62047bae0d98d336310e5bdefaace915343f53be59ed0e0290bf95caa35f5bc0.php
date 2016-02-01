<?php

/* themes/bootstrap/templates/node/node--snippet.html.twig */
class __TwigTemplate_cb0b396259959d4f6c1bb935aa910b60e3ce5e7425df2410e69928491614adb0 extends Twig_Template
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
        $tags = array("set" => 66, "if" => 77, "for" => 108);
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
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("bio_theme/prism"), "html", null, true));
            echo "

  <article";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">

    <div class=\"container snippet-inner\">

    <div class=\"snippet-top\">
      <div class=\"snippet-top-inner\">

        <div class=\"twelve columns\">

          <div class=\"snippet-box\">
            <div class=\"section-heading\">
              <h2>Specs</h2>
            </div>
            <div class=\"snippet-spec version\">
              ";
            // line 95
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_version", array()), "html", null, true));
            echo "
            </div>
            <div class=\"snippet-spec tools\">
              ";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tools", array()), "html", null, true));
            echo "
            </div>
            <div class=\"snippet-spec created field\">
              <div class=\"field-label\">Created</div>
              ";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
            echo "
            </div>

            <div class=\"snippet-parts field\">
              <div class=\"field-label\">Sections</div>
              <ol>
              ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["code_parts"]) ? $context["code_parts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["code_part"]) {
                // line 109
                echo "              <li><a href=\"#code-wrapper-";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "key", array()), "html", null, true));
                echo "-summary\" class=\"scroll-link\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "section_name", array()), "html", null, true));
                echo "</a></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code_part'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "              </ol>
            </div>

          </div>

        </div>

        <div class=\"twelve columns\">

          <div class=\"snippet-box\">
            <div class=\"section-heading\">
              <h2>Summary</h2>
            </div>
            <div class=\"snippet-description\">
            ";
            // line 125
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "
            </div>

            <div class=\"snippet-refs field\">
              <div class=\"field-label\">References</div>
              <ol>
              ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refs"]) ? $context["refs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ref"]) {
                // line 132
                echo "              <li>
                <a href=\"";
                // line 133
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["ref"], "uri", array()), "html", null, true));
                echo "\" target=\"_blank\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["ref"], "title", array()), "html", null, true));
                echo "</a>
                <div class=\"ref-uri\">";
                // line 134
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["ref"], "uri", array()), "html", null, true));
                echo "</div>
              </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ref'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "              </ol>
            </div>

          </div>

        </div>
        <div class=\"clearfix\"></div>
      </div>
    </div>
    <div class=\"snippet-divider divider section-heading\">
      <h2>Source</h2>
    </div>
    <div class=\"snippet-code\">
      <div class=\"snippet-code-inner\">

      ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["code_parts"]) ? $context["code_parts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["code_part"]) {
                // line 153
                echo "      <div class=\"code-part\">
        <a href=\"#code-wrapper-";
                // line 154
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "key", array()), "html", null, true));
                echo "-code\" class=\"scroll-link\">
          <div id=\"code-wrapper-";
                // line 155
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "key", array()), "html", null, true));
                echo "-summary\" class=\"code-summary\">
            <div class=\"section-name\"><h2>";
                // line 156
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ($this->getAttribute($context["code_part"], "key", array()) + 1), "html", null, true));
                echo ". ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "section_name", array()), "html", null, true));
                echo "</h2></div>
            <div class=\"file-name\"><label>File name:</label> ";
                // line 157
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "file_name", array()), "html", null, true));
                echo "</div>

            ";
                // line 159
                if ($this->getAttribute($context["code_part"], "file_path", array())) {
                    // line 160
                    echo "            <div class=\"file-path\"><label>File path:</label> MODULE_PATH/";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "file_path", array()), "html", null, true));
                    echo "</div>
            ";
                }
                // line 162
                echo "
            ";
                // line 163
                if ($this->getAttribute($context["code_part"], "description", array())) {
                    // line 164
                    echo "            <div class=\"description\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "description", array()), "html", null, true));
                    echo "</div>
            ";
                }
                // line 166
                echo "
          </div>
        </a>
        <div id=\"code-wrapper-";
                // line 169
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "key", array()), "html", null, true));
                echo "-code\" class=\"code-wrapper\">
<pre class=\"line-numbers\">
<code class=\"language-";
                // line 171
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "language", array()), "html", null, true));
                echo "\">
";
                // line 172
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["code_part"], "value", array()), "html", null, true));
                echo "
</code>
</pre>
        </div>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code_part'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "
      </div>
    </div>
    <div class=\"snippet-divider divider section-heading snippet-comment-divider\">
      <h2>Comments</h2>
    </div>
    <div class=\"snippet-comments\">
      <div class=\"snippet-comments-inner\">
        Placeholder: I'll extend node comments with ajax and other functionality here.
      </div>
    </div>

    </div>

  </article>

";
        }
        // line 195
        echo "
";
        // line 196
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "teaser")) {
            // line 197
            echo "
  <article";
            // line 198
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <div class=\"twenty-four columns\">
      <div class=\"node-link\">
       <a href=\"";
            // line 201
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
      </div>
    </div>
    <div class=\"sixteen columns\">
      <div class=\"snippet-description\">
        ";
            // line 206
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "
      </div>
    </div>
    <div class=\"eight columns\">
      <div class=\"tools\">
        ";
            // line 211
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tools", array()), "html", null, true));
            echo "
      </div>
    </div>
    <div class=\"snippet-drupal-version\">
      ";
            // line 215
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_version", array()), "html", null, true));
            echo "
    </div>
    <div class=\"snippet-created\">
      Created ";
            // line 218
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
            echo "
    </div>
  </article>

";
        }
        // line 223
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/node/node--snippet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 223,  316 => 218,  310 => 215,  303 => 211,  295 => 206,  285 => 201,  279 => 198,  276 => 197,  274 => 196,  271 => 195,  252 => 178,  240 => 172,  236 => 171,  231 => 169,  226 => 166,  220 => 164,  218 => 163,  215 => 162,  209 => 160,  207 => 159,  202 => 157,  196 => 156,  192 => 155,  188 => 154,  185 => 153,  181 => 152,  164 => 137,  155 => 134,  149 => 133,  146 => 132,  142 => 131,  133 => 125,  117 => 111,  106 => 109,  102 => 108,  93 => 102,  86 => 98,  80 => 95,  63 => 81,  58 => 79,  55 => 78,  53 => 77,  50 => 76,  48 => 72,  47 => 71,  46 => 70,  45 => 69,  44 => 68,  43 => 66,);
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
/*   {{ attach_library('bio_theme/prism') }}*/
/* */
/*   <article{{ attributes.addClass(classes) }}>*/
/* */
/*     <div class="container snippet-inner">*/
/* */
/*     <div class="snippet-top">*/
/*       <div class="snippet-top-inner">*/
/* */
/*         <div class="twelve columns">*/
/* */
/*           <div class="snippet-box">*/
/*             <div class="section-heading">*/
/*               <h2>Specs</h2>*/
/*             </div>*/
/*             <div class="snippet-spec version">*/
/*               {{ content.field_version }}*/
/*             </div>*/
/*             <div class="snippet-spec tools">*/
/*               {{ content.field_tools }}*/
/*             </div>*/
/*             <div class="snippet-spec created field">*/
/*               <div class="field-label">Created</div>*/
/*               {{ created }}*/
/*             </div>*/
/* */
/*             <div class="snippet-parts field">*/
/*               <div class="field-label">Sections</div>*/
/*               <ol>*/
/*               {% for code_part in code_parts %}*/
/*               <li><a href="#code-wrapper-{{ code_part.key }}-summary" class="scroll-link">{{ code_part.section_name }}</a></li>*/
/*               {% endfor %}*/
/*               </ol>*/
/*             </div>*/
/* */
/*           </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="twelve columns">*/
/* */
/*           <div class="snippet-box">*/
/*             <div class="section-heading">*/
/*               <h2>Summary</h2>*/
/*             </div>*/
/*             <div class="snippet-description">*/
/*             {{ content.body }}*/
/*             </div>*/
/* */
/*             <div class="snippet-refs field">*/
/*               <div class="field-label">References</div>*/
/*               <ol>*/
/*               {% for ref in refs %}*/
/*               <li>*/
/*                 <a href="{{ ref.uri }}" target="_blank">{{ ref.title }}</a>*/
/*                 <div class="ref-uri">{{ ref.uri }}</div>*/
/*               </li>*/
/*               {% endfor %}*/
/*               </ol>*/
/*             </div>*/
/* */
/*           </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="snippet-divider divider section-heading">*/
/*       <h2>Source</h2>*/
/*     </div>*/
/*     <div class="snippet-code">*/
/*       <div class="snippet-code-inner">*/
/* */
/*       {% for code_part in code_parts %}*/
/*       <div class="code-part">*/
/*         <a href="#code-wrapper-{{ code_part.key }}-code" class="scroll-link">*/
/*           <div id="code-wrapper-{{ code_part.key }}-summary" class="code-summary">*/
/*             <div class="section-name"><h2>{{ code_part.key + 1 }}. {{ code_part.section_name }}</h2></div>*/
/*             <div class="file-name"><label>File name:</label> {{ code_part.file_name }}</div>*/
/* */
/*             {% if code_part.file_path %}*/
/*             <div class="file-path"><label>File path:</label> MODULE_PATH/{{ code_part.file_path }}</div>*/
/*             {% endif %}*/
/* */
/*             {% if code_part.description %}*/
/*             <div class="description">{{ code_part.description }}</div>*/
/*             {% endif %}*/
/* */
/*           </div>*/
/*         </a>*/
/*         <div id="code-wrapper-{{ code_part.key }}-code" class="code-wrapper">*/
/* <pre class="line-numbers">*/
/* <code class="language-{{ code_part.language }}">*/
/* {{ code_part.value }}*/
/* </code>*/
/* </pre>*/
/*         </div>*/
/*       </div>*/
/*       {% endfor %}*/
/* */
/*       </div>*/
/*     </div>*/
/*     <div class="snippet-divider divider section-heading snippet-comment-divider">*/
/*       <h2>Comments</h2>*/
/*     </div>*/
/*     <div class="snippet-comments">*/
/*       <div class="snippet-comments-inner">*/
/*         Placeholder: I'll extend node comments with ajax and other functionality here.*/
/*       </div>*/
/*     </div>*/
/* */
/*     </div>*/
/* */
/*   </article>*/
/* */
/* {% endif %}*/
/* */
/* {% if view_mode == 'teaser' %}*/
/* */
/*   <article{{ attributes.addClass(classes) }}>*/
/*     <div class="twenty-four columns">*/
/*       <div class="node-link">*/
/*        <a href="{{ url }}">{{ label }}</a>*/
/*       </div>*/
/*     </div>*/
/*     <div class="sixteen columns">*/
/*       <div class="snippet-description">*/
/*         {{ content.body }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="eight columns">*/
/*       <div class="tools">*/
/*         {{ content.field_tools }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="snippet-drupal-version">*/
/*       {{ content.field_version }}*/
/*     </div>*/
/*     <div class="snippet-created">*/
/*       Created {{ created }}*/
/*     </div>*/
/*   </article>*/
/* */
/* {% endif %}*/
/* */
/* */
/* */
