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
        return array (  53 => 7,  86 => 21,  49 => 6,  174 => 62,  170 => 14,  167 => 13,  23 => 1,  169 => 56,  161 => 54,  126 => 70,  99 => 32,  69 => 20,  40 => 15,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 63,  160 => 11,  109 => 41,  103 => 56,  82 => 24,  65 => 30,  38 => 6,  158 => 58,  150 => 49,  144 => 50,  142 => 50,  129 => 40,  125 => 44,  117 => 42,  112 => 60,  87 => 49,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 29,  76 => 13,  72 => 14,  68 => 12,  27 => 4,  91 => 23,  84 => 19,  94 => 39,  88 => 22,  79 => 24,  59 => 10,  21 => 2,  44 => 4,  31 => 8,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 53,  154 => 51,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 64,  114 => 43,  104 => 36,  100 => 27,  78 => 24,  75 => 23,  71 => 21,  58 => 12,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 17,  46 => 9,  22 => 2,  163 => 63,  155 => 50,  152 => 6,  149 => 5,  145 => 46,  139 => 44,  131 => 72,  123 => 47,  120 => 38,  115 => 29,  106 => 57,  101 => 55,  96 => 21,  83 => 20,  80 => 24,  74 => 22,  66 => 11,  55 => 23,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  37 => 5,  35 => 10,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 10,  153 => 54,  151 => 52,  143 => 45,  138 => 47,  136 => 50,  133 => 41,  130 => 47,  122 => 37,  119 => 36,  116 => 62,  111 => 38,  108 => 37,  102 => 30,  98 => 54,  95 => 33,  92 => 51,  89 => 50,  85 => 24,  81 => 19,  73 => 16,  64 => 17,  60 => 23,  57 => 13,  54 => 12,  51 => 22,  48 => 9,  45 => 8,  42 => 7,  39 => 3,  36 => 5,  33 => 4,  30 => 3,);
    }
}
