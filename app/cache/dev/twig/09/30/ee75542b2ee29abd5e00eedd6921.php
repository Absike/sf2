<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_0930ee75542b2ee29abd5e00eedd6921 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  176 => 61,  77 => 24,  188 => 67,  164 => 63,  134 => 54,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  238 => 97,  228 => 89,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  182 => 64,  148 => 58,  140 => 49,  135 => 47,  128 => 45,  110 => 42,  113 => 40,  90 => 28,  62 => 16,  56 => 13,  53 => 7,  86 => 29,  49 => 13,  174 => 67,  170 => 60,  167 => 64,  23 => 1,  169 => 56,  161 => 54,  126 => 43,  99 => 32,  69 => 20,  40 => 15,  301 => 100,  295 => 133,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 81,  204 => 71,  198 => 69,  185 => 68,  183 => 60,  177 => 63,  160 => 59,  109 => 41,  103 => 56,  82 => 24,  65 => 30,  38 => 7,  158 => 56,  150 => 49,  144 => 50,  142 => 50,  129 => 40,  125 => 44,  117 => 42,  112 => 60,  87 => 34,  67 => 23,  61 => 16,  47 => 11,  105 => 31,  93 => 31,  76 => 13,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 25,  88 => 22,  79 => 23,  59 => 13,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 53,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 64,  114 => 43,  104 => 35,  100 => 35,  78 => 24,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 63,  155 => 50,  152 => 6,  149 => 5,  145 => 57,  139 => 44,  131 => 46,  123 => 47,  120 => 50,  115 => 44,  106 => 57,  101 => 29,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 23,  52 => 14,  50 => 10,  43 => 8,  41 => 7,  37 => 5,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 57,  157 => 10,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 41,  130 => 53,  122 => 51,  119 => 45,  116 => 41,  111 => 38,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 51,  89 => 29,  85 => 24,  81 => 24,  73 => 16,  64 => 17,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
