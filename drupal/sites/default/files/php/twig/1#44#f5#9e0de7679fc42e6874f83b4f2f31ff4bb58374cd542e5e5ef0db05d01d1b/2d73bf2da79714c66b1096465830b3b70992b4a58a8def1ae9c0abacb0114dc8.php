<?php

/* core/themes/classy/templates/misc/status-messages.html.twig */
class __TwigTemplate_44f59e0de7679fc42e6874f83b4f2f31ff4bb58374cd542e5e5ef0db05d01d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 26
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            echo "  ";
            // line 29
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 31
$context["type"]));
            // line 34
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 35
            if (($context["type"] == "error")) {
                // line 36
                echo "      <div role=\"alert\">
    ";
            }
            // line 38
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 39
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 41
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 42
                echo "        <ul class=\"messages__list\">
          ";
                // line 43
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 44
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        </ul>
      ";
            } else {
                // line 48
                echo "        ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true);
                echo "
      ";
            }
            // line 50
            echo "    ";
            if (($context["type"] == "error")) {
                // line 51
                echo "      </div>
    ";
            }
            // line 53
            echo "  </div>
  ";
            // line 55
            echo "  ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 55,  93 => 53,  89 => 51,  86 => 50,  80 => 48,  76 => 46,  67 => 44,  63 => 43,  60 => 42,  57 => 41,  51 => 39,  48 => 38,  44 => 36,  42 => 35,  35 => 34,  33 => 31,  32 => 29,  30 => 28,  26 => 27,  20 => 26,);
    }
}
