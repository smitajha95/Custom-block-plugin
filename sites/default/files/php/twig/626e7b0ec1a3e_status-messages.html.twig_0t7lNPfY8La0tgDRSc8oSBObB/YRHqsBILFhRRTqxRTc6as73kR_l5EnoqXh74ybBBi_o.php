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

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_5db09657ad3ebd264f97d2a18b705467644f98824603c75969fd208e4a50065a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 23, "if" => 24, "for" => 27, "set" => 29];
        $filters = ["escape" => 25, "without" => 34, "length" => 41, "first" => 48];
        $functions = ["attach_library" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'without', 'length', 'first'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo "<div data-drupal-messages>
  ";
        // line 23
        $this->displayBlock('messages', $context, $blocks);
        // line 60
        echo "</div>
";
    }

    // line 23
    public function block_messages($context, array $blocks = [])
    {
        // line 24
        echo "    ";
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 25
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bartik/messages"), "html", null, true);
            echo "
      <div class=\"messages__wrapper layout-container\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 28
                echo "          ";
                // line 29
                $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(                // line 31
$context["type"]))];
                // line 34
                echo "          <div role=\"contentinfo\" aria-label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
                echo ">
            ";
                // line 35
                if (($context["type"] == "error")) {
                    // line 36
                    echo "            <div role=\"alert\">
              ";
                }
                // line 38
                echo "              ";
                if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                    // line 39
                    echo "                <h2 class=\"visually-hidden\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                    echo "</h2>
              ";
                }
                // line 41
                echo "              ";
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 42
                    echo "                <ul class=\"messages__list\">
                  ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 44
                        echo "                    <li class=\"messages__item\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                        echo "</li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                </ul>
              ";
                } else {
                    // line 48
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                    echo "
              ";
                }
                // line 50
                echo "              ";
                if (($context["type"] == "error")) {
                    // line 51
                    echo "            </div>
            ";
                }
                // line 53
                echo "          </div>
          ";
                // line 55
                echo "          ";
                $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
                // line 56
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </div>
    ";
        }
        // line 59
        echo "  ";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  157 => 57,  151 => 56,  148 => 55,  145 => 53,  141 => 51,  138 => 50,  132 => 48,  128 => 46,  119 => 44,  115 => 43,  112 => 42,  109 => 41,  103 => 39,  100 => 38,  96 => 36,  94 => 35,  87 => 34,  85 => 31,  84 => 29,  82 => 28,  78 => 27,  72 => 25,  69 => 24,  66 => 23,  61 => 60,  59 => 23,  56 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 */
#}
<div data-drupal-messages>
  {% block messages %}
    {% if message_list is not empty %}
      {{ attach_library('bartik/messages') }}
      <div class=\"messages__wrapper layout-container\">
        {% for type, messages in message_list %}
          {%
            set classes = [
            'messages',
            'messages--' ~ type,
          ]
          %}
          <div role=\"contentinfo\" aria-label=\"{{ status_headings[type] }}\"{{ attributes.addClass(classes)|without('role', 'aria-label') }}>
            {% if type == 'error' %}
            <div role=\"alert\">
              {% endif %}
              {% if status_headings[type] %}
                <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
              {% endif %}
              {% if messages|length > 1 %}
                <ul class=\"messages__list\">
                  {% for message in messages %}
                    <li class=\"messages__item\">{{ message }}</li>
                  {% endfor %}
                </ul>
              {% else %}
                {{ messages|first }}
              {% endif %}
              {% if type == 'error' %}
            </div>
            {% endif %}
          </div>
          {# Remove type specific classes. #}
          {% set attributes = attributes.removeClass(classes) %}
        {% endfor %}
      </div>
    {% endif %}
  {% endblock messages %}
</div>
", "core/themes/bartik/templates/status-messages.html.twig", "C:\\xampp\\htdocs\\drupal8_custom_block_assignment\\core\\themes\\bartik\\templates\\status-messages.html.twig");
    }
}
