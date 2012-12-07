<?php

/* EnsJobeetBundle:Job:new.html.twig */
class __TwigTemplate_b5bbf466ff53567b16b11c05e38604af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "  <!-- original template code goes here -->
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 58,  146 => 51,  140 => 50,  134 => 49,  126 => 47,  110 => 43,  90 => 38,  77 => 35,  176 => 62,  173 => 64,  169 => 14,  166 => 13,  156 => 10,  148 => 5,  97 => 53,  86 => 37,  40 => 15,  23 => 1,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 41,  103 => 34,  82 => 24,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 50,  142 => 50,  129 => 45,  125 => 69,  117 => 63,  112 => 42,  87 => 28,  67 => 19,  61 => 16,  47 => 9,  105 => 56,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  27 => 4,  91 => 50,  84 => 19,  94 => 39,  88 => 49,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 8,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 69,  172 => 67,  159 => 11,  154 => 59,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 45,  114 => 44,  104 => 36,  100 => 54,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 55,  152 => 49,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 61,  106 => 42,  101 => 33,  96 => 21,  83 => 18,  80 => 36,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 21,  43 => 8,  41 => 7,  37 => 5,  35 => 10,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 6,  143 => 54,  138 => 47,  136 => 50,  133 => 43,  130 => 48,  122 => 46,  119 => 36,  116 => 35,  111 => 59,  108 => 37,  102 => 41,  98 => 40,  95 => 33,  92 => 28,  89 => 19,  85 => 24,  81 => 25,  73 => 34,  64 => 29,  60 => 23,  57 => 14,  54 => 22,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
