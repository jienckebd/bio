<?php

/* themes/bootstrap/templates/site/footer.html.twig */
class __TwigTemplate_b15d301758519a477b204d5752d77fdab059d4abf12ab9ad0f89293f4b594ff9 extends Twig_Template
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
        echo "<footer id=\"footer\">
  <div class=\"container\">
    <div id=\"footer-name-menu\" class=\"row\">
      <div id=\"footer-menu\" class=\"col-md-9\">
        <div id=\"footer-menu-inner\">
          <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/project\">Projects</a></li>
            <li><a href=\"/snippet\">Snippets</a></li>
          </ul>
        </div>
      </div>
      <div id=\"footer-name-title\" class=\"col-md-3\">
        <div id=\"footer-name\">Bryan Jiencke</div>
        <div id=\"footer-title\">Drupal Developer</div>
      </div>
    </div>
    <div id=\"footer-copyright\" class=\"row\">
      <div id=\"footer-copyright-inner\">
        &copy; Bryan Jiencke 2016
      </div>
    </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/site/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <footer id="footer">*/
/*   <div class="container">*/
/*     <div id="footer-name-menu" class="row">*/
/*       <div id="footer-menu" class="col-md-9">*/
/*         <div id="footer-menu-inner">*/
/*           <ul>*/
/*             <li><a href="/">Home</a></li>*/
/*             <li><a href="/project">Projects</a></li>*/
/*             <li><a href="/snippet">Snippets</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <div id="footer-name-title" class="col-md-3">*/
/*         <div id="footer-name">Bryan Jiencke</div>*/
/*         <div id="footer-title">Drupal Developer</div>*/
/*       </div>*/
/*     </div>*/
/*     <div id="footer-copyright" class="row">*/
/*       <div id="footer-copyright-inner">*/
/*         &copy; Bryan Jiencke 2016*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
/* */
