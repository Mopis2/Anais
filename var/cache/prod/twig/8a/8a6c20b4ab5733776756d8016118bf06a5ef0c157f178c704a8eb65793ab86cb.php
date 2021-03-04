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

/* @PrestaShop/Admin/Improve/Design/Theme/import.html.twig */
class __TwigTemplate_f10465b3aa782489db436e3a7b31da2b5d7ef44afa6661d6b4f9efa440de3516 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'import_theme_form_rest' => [$this, 'block_import_theme_form_rest'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig", 27)->unwrap();
        // line 29
        $context["layoutTitle"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme & Logo", [], "Admin.Navigation.Menu") . " > ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme", [], "Admin.Design.Feature"));
        // line 30
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_import"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new theme", [], "Admin.Design.Feature"), "icon" => "add"], "export" => ["href" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_themes_export_current"), "desc" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export current theme", [], "Admin.Design.Feature"), "icon" => "cloud_download"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        // line 44
        echo "  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importThemeForm"] ?? null), 'errors');
        echo "
      ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importThemeForm"] ?? null), 'form_start');
        echo "
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-10\">
            <div class=\"card\">
              <h3 class=\"card-header\">
                <i class=\"material-icons\">file_copy</i>
                ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import from your computer", [], "Admin.Design.Feature"), "html", null, true);
        echo "
              </h3>
              <div class=\"card-block row\">
                <div class=\"card-text\">
                  ";
        // line 57
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["importThemeForm"] ?? null), "import_from_computer", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Zip file", [], "Admin.Design.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Browse your computer files and select the Zip file for your new theme.", [], "Admin.Design.Help")]);
        // line 60
        echo "
                </div>
              </div>
              <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                  <button class=\"btn btn-primary\">
                    <i class=\"material-icons\">cloud_upload</i>
                    ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-xl-10\">
            <div class=\"card\">
              <h3 class=\"card-header\">
                <i class=\"material-icons\">file_copy</i>
                ";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import from the web", [], "Admin.Design.Feature"), "html", null, true);
        echo "
              </h3>
              <div class=\"card-block row\">
                <div class=\"card-text\">
                  ";
        // line 82
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["importThemeForm"] ?? null), "import_from_web", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Archive URL", [], "Admin.Design.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Indicate the complete URL to an online Zip file that contains your new theme. For instance, \"http://example.com/files/theme.zip\".", [], "Admin.Design.Help")]);
        // line 85
        echo "
                </div>
              </div>
              <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                  <button class=\"btn btn-primary\">
                    <i class=\"material-icons\">cloud_upload</i>
                    ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-xl-10\">
            <div class=\"card\">
              <h3 class=\"card-header\">
                <i class=\"material-icons\">file_copy</i>
                ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import from FTP", [], "Admin.Design.Feature"), "html", null, true);
        echo "
              </h3>
              <div class=\"card-block row\">
                <div class=\"card-text\">
                  ";
        // line 107
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["importThemeForm"] ?? null), "import_from_ftp", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the archive", [], "Admin.Design.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This selector lists the Zip files that you uploaded in the '/themes' folder.", [], "Admin.Design.Help")]);
        // line 110
        echo "
                </div>
              </div>
              <div class=\"card-footer\">
                <div class=\"d-flex justify-content-end\">
                  <button class=\"btn btn-primary\">
                    <i class=\"material-icons\">cloud_upload</i>
                    ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 125
        $this->displayBlock('import_theme_form_rest', $context, $blocks);
        // line 128
        echo "
      ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importThemeForm"] ?? null), 'form_end');
        echo "
    </div>
  </div>
";
    }

    // line 125
    public function block_import_theme_form_rest($context, array $blocks = [])
    {
        // line 126
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importThemeForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 126,  173 => 125,  165 => 129,  162 => 128,  160 => 125,  149 => 117,  140 => 110,  138 => 107,  131 => 103,  117 => 92,  108 => 85,  106 => 82,  99 => 78,  85 => 67,  76 => 60,  74 => 57,  67 => 53,  58 => 47,  54 => 46,  50 => 44,  47 => 43,  42 => 26,  40 => 30,  38 => 29,  36 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/import.html.twig", "C:\\wamp64\\www\\anais\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Theme\\import.html.twig");
    }
}
