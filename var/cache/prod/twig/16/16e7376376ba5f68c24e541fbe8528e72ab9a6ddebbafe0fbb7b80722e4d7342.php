<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_3f4a58aab4924fa59549f633d49d245237ef05a09d7df98a458b64b524f1b426 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["ats"] = $this->getAttribute(($context["module"] ?? null), "attributes", []);
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         [$this->getAttribute(        // line 29
($context["ats"] ?? null), "name", []), $this->getAttribute(($context["ats"] ?? null), "displayName", []), $this->getAttribute(($context["ats"] ?? null), "nbRates", []), $this->getAttribute(($context["ats"] ?? null), "starsRate", []), $this->getAttribute(($context["ats"] ?? null), "img", []), ((($this->getAttribute(        // line 30
($context["ats"] ?? null), "serviceUrl", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? null), "serviceUrl", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? null), "serviceUrl", [])) : (false)), $this->getAttribute(        // line 31
($context["ats"] ?? null), "version", []), $this->getAttribute(($context["ats"] ?? null), "cover", []), ((($this->getAttribute(        // line 32
($context["ats"] ?? null), "additionalDescription", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? null), "additionalDescription", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? null), "additionalDescription", [])) : (false)), ((($this->getAttribute(        // line 33
($context["ats"] ?? null), "fullDescription", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? null), "fullDescription", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? null), "fullDescription", [])) : (false)), ((($this->getAttribute(        // line 34
($context["ats"] ?? null), "changeLog", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? null), "changeLog", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? null), "changeLog", [])) : (false)), ((($this->getAttribute(        // line 35
($context["ats"] ?? null), "customer_benefits", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? null), "customer_benefits", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? null), "customer_benefits", [])) : (false)), ((($this->getAttribute(        // line 36
($context["ats"] ?? null), "demo_video", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? null), "demo_video", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? null), "demo_video", [])) : (false)), $this->getAttribute(        // line 37
($context["ats"] ?? null), "author", []), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", $this->getAttribute(        // line 38
($context["ats"] ?? null), "features", []), ((($this->getAttribute(        // line 39
($context["ats"] ?? null), "badges", [], "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["ats"] ?? null), "badges", [])) > 0))) ? ($this->getAttribute(($context["ats"] ?? null), "badges", [])) : (false))];
        // line 41
        echo "<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      ";
        // line 45
        if ((($context["nbRates"] ?? null) > 0)) {
            // line 46
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, ($context["starsRate"] ?? null), "html", null, true);
            echo "\">
          (
          ";
            // line 48
            echo twig_escape_filter($this->env, ($context["nbRates"] ?? null), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 52
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 55
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "<br>
            <small class=\"version small-text\">
              ";
        // line 57
        if (((isset($context["serviceUrl"]) || array_key_exists("serviceUrl", $context)) && (twig_length_filter($this->env, ($context["serviceUrl"] ?? null)) > 0))) {
            // line 58
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", ["%author%" => ($context["author"] ?? null)], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% by %author%", ["%version%" => ($context["version"] ?? null), "%author%" => ($context["author"] ?? null)], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 62
        echo "            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"";
        // line 74
        if ($this->getAttribute(($context["cover"] ?? null), "big", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cover"] ?? null), "big", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["notFoundImg"] ?? null), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          ";
        // line 79
        echo "          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-";
        // line 81
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 83
        if (($context["additionalDescription"] ?? null)) {
            // line 84
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 85
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional information", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 88
        echo "            ";
        if (($context["customerBenefits"] ?? null)) {
            // line 89
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 90
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Benefits", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 93
        echo "            ";
        if (($context["features"] ?? null)) {
            // line 94
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 95
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 98
        echo "            ";
        if (($context["demoVideo"] ?? null)) {
            // line 99
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 100
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Demo video", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 103
        echo "            ";
        if (($context["changeLog"] ?? null)) {
            // line 104
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 105
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changelog", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 108
        echo "            ";
        // line 109
        echo "          </ul>
        </nav>
        <div class=\"tab-content\">
          ";
        // line 113
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 115
        if (($context["fullDescription"] ?? null)) {
            // line 116
            echo "                ";
            echo ($context["fullDescription"] ?? null);
            echo "
              ";
        } else {
            // line 118
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No description found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 120
        echo "            </p>
          </div>

          <div id=\"additional-";
        // line 123
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 125
        if (($context["additionalDescription"] ?? null)) {
            // line 126
            echo "                ";
            echo ($context["additionalDescription"] ?? null);
            echo "
              ";
        } else {
            // line 128
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No additional description provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 130
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 133
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 135
        if (($context["features"] ?? null)) {
            // line 136
            echo "                ";
            echo ($context["features"] ?? null);
            echo "
              ";
        } else {
            // line 138
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No feature list provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 140
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 143
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 145
        if (($context["customerBenefits"] ?? null)) {
            // line 146
            echo "                ";
            echo ($context["customerBenefits"] ?? null);
            echo "
              ";
        } else {
            // line 148
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No customer benefits notes found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 150
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 153
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 155
        if (($context["demoVideo"] ?? null)) {
            // line 156
            echo "                ";
            echo $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getYoutubeLink(($context["demoVideo"] ?? null));
            echo "
              ";
        } else {
            // line 158
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No demonstration video found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 160
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 163
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 164
        if (($context["changeLog"] ?? null)) {
            // line 165
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast(($context["changeLog"] ?? null))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 167
                echo "                  <li>
                    <b>";
                // line 168
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 170
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "              </ul>
            ";
        } else {
            // line 176
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 178
        echo "          </div>
          ";
        // line 180
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          ";
        // line 187
        if ((($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "url_active", []) == "buy") && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "price", []), "raw", []) != "0.00"))) {
            // line 188
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "price", []), "displayPrice", []), "html", null, true);
            echo "
          ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 189
($context["module"] ?? null), "attributes", []), "url_active", []) != "buy")) {
            // line 190
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Free", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
          ";
        }
        // line 192
        echo "        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 197
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "img", []), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", []), "html", null, true);
            echo "\"/>
            ";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", []), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "        </div>
        <div class=\"float-right module-action\">
          ";
        // line 202
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 202)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null), "level" => ($context["level"] ?? null)]));
        // line 203
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 203,  434 => 202,  430 => 200,  422 => 198,  415 => 197,  411 => 196,  405 => 192,  399 => 190,  397 => 189,  392 => 188,  390 => 187,  381 => 180,  378 => 178,  372 => 176,  368 => 174,  361 => 172,  352 => 170,  348 => 169,  344 => 168,  341 => 167,  337 => 166,  334 => 165,  332 => 164,  328 => 163,  323 => 160,  317 => 158,  311 => 156,  309 => 155,  304 => 153,  299 => 150,  293 => 148,  287 => 146,  285 => 145,  280 => 143,  275 => 140,  269 => 138,  263 => 136,  261 => 135,  256 => 133,  251 => 130,  245 => 128,  239 => 126,  237 => 125,  232 => 123,  227 => 120,  221 => 118,  215 => 116,  213 => 115,  207 => 113,  202 => 109,  200 => 108,  192 => 105,  189 => 104,  186 => 103,  178 => 100,  175 => 99,  172 => 98,  164 => 95,  161 => 94,  158 => 93,  150 => 90,  147 => 89,  144 => 88,  136 => 85,  133 => 84,  131 => 83,  124 => 81,  120 => 79,  109 => 74,  95 => 62,  89 => 60,  83 => 58,  81 => 57,  76 => 55,  69 => 53,  66 => 52,  59 => 48,  53 => 46,  51 => 45,  45 => 41,  43 => 39,  42 => 38,  41 => 37,  40 => 36,  39 => 35,  38 => 34,  37 => 33,  36 => 32,  35 => 31,  34 => 30,  33 => 29,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", "C:\\wamp64\\www\\anais\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_read_more_content.html.twig");
    }
}
