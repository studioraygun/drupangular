<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_f39b64d1f5902f2a8c0c591d7c4fedfdc92e2a2320830a1c4d2717e09816e924 extends Twig_Template
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
        // line 59
        echo "  <header class=\"content-header clearfix\">
    <div class=\"layout-container\">
      ";
        // line 61
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 62
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 63
            echo "        <h1 class=\"page-title\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 65
        echo "      ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
      ";
        // line 66
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 67
            echo "        ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null), "html", null, true);
            echo "
      ";
        }
        // line 69
        echo "    </div>
  </header>

  <div class=\"layout-container\">
    ";
        // line 73
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 74
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null), "html", null, true);
            echo "</div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "

    <main class=\"page-content clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 81
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "
      ";
        // line 82
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 83
            echo "        <div class=\"help\">
          ";
            // line 84
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 87
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 88
            echo "        <ul class=\"action-links\">
          ";
            // line 89
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "
        </ul>
      ";
        }
        // line 92
        echo "      ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
    </main>

  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 92,  93 => 89,  90 => 88,  87 => 87,  81 => 84,  78 => 83,  76 => 82,  72 => 81,  65 => 77,  62 => 76,  56 => 74,  54 => 73,  48 => 69,  42 => 67,  40 => 66,  35 => 65,  29 => 63,  27 => 62,  23 => 61,  19 => 59,);
    }
}
