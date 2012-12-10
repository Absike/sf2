<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_07bdd1173b16425432275c59a157c8be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  188 => 69,  164 => 63,  134 => 54,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  238 => 97,  228 => 89,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  182 => 69,  148 => 52,  140 => 49,  135 => 47,  128 => 45,  110 => 42,  113 => 40,  90 => 24,  62 => 16,  56 => 13,  53 => 7,  86 => 29,  49 => 13,  174 => 67,  170 => 14,  167 => 64,  23 => 1,  169 => 56,  161 => 54,  126 => 43,  99 => 32,  69 => 20,  40 => 15,  301 => 100,  295 => 133,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 81,  204 => 71,  198 => 74,  185 => 68,  183 => 60,  177 => 63,  160 => 11,  109 => 41,  103 => 56,  82 => 24,  65 => 30,  38 => 5,  158 => 56,  150 => 49,  144 => 50,  142 => 50,  129 => 40,  125 => 44,  117 => 42,  112 => 60,  87 => 34,  67 => 23,  61 => 16,  47 => 9,  105 => 31,  93 => 31,  76 => 13,  72 => 22,  68 => 20,  27 => 3,  91 => 35,  84 => 33,  94 => 25,  88 => 22,  79 => 24,  59 => 13,  21 => 2,  44 => 8,  31 => 8,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 53,  154 => 54,  147 => 58,  132 => 48,  127 => 52,  121 => 45,  118 => 64,  114 => 43,  104 => 39,  100 => 35,  78 => 24,  75 => 23,  71 => 21,  58 => 14,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 24,  63 => 17,  46 => 12,  22 => 2,  163 => 63,  155 => 50,  152 => 6,  149 => 5,  145 => 46,  139 => 44,  131 => 46,  123 => 47,  120 => 50,  115 => 29,  106 => 57,  101 => 29,  96 => 21,  83 => 28,  80 => 32,  74 => 22,  66 => 19,  55 => 23,  52 => 14,  50 => 10,  43 => 8,  41 => 7,  37 => 5,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 71,  171 => 66,  165 => 60,  162 => 57,  157 => 10,  153 => 62,  151 => 53,  143 => 45,  138 => 55,  136 => 50,  133 => 41,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 38,  108 => 41,  102 => 30,  98 => 54,  95 => 36,  92 => 51,  89 => 29,  85 => 24,  81 => 21,  73 => 16,  64 => 17,  60 => 16,  57 => 13,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 3,  36 => 5,  33 => 4,  30 => 3,);
    }
}
