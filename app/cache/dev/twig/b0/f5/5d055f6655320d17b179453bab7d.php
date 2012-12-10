<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_b0f55d055f6655320d17b179453bab7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
     
          <h1><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_homepage"), "html", null, true);
        echo "\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
          </a></h1>      
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job"), "html", null, true);
        echo "\">Post a Job</a>
              </div>
            </div>
 
            <div class=\"search\">
              <h2>Ask for a job</h2>
              <form action=\"\" method=\"get\">
                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <div class=\"help\">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 
      <div id=\"content\">
        ";
        // line 49
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 50
            echo "          <div class=\"flash_notice\">
            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 54
        echo " 
        ";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 56
            echo "          <div class=\"flash_error\">
            ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 60
        echo " 
        <div class=\"content\">
            ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\"><a href=\"\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"\">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        Jobeet - Your best job board
      ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "            ";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 62,  170 => 14,  167 => 13,  23 => 1,  169 => 56,  161 => 54,  126 => 70,  99 => 32,  69 => 20,  40 => 15,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 63,  160 => 11,  109 => 41,  103 => 56,  82 => 24,  65 => 30,  38 => 6,  158 => 58,  150 => 49,  144 => 50,  142 => 50,  129 => 40,  125 => 44,  117 => 42,  112 => 60,  87 => 49,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 29,  76 => 23,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 19,  94 => 39,  88 => 27,  79 => 24,  59 => 22,  21 => 2,  44 => 12,  31 => 8,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 53,  154 => 51,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 64,  114 => 43,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 21,  58 => 12,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 17,  46 => 7,  22 => 2,  163 => 63,  155 => 50,  152 => 6,  149 => 5,  145 => 46,  139 => 44,  131 => 72,  123 => 47,  120 => 38,  115 => 39,  106 => 57,  101 => 55,  96 => 21,  83 => 25,  80 => 24,  74 => 22,  66 => 15,  55 => 23,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  37 => 13,  35 => 10,  32 => 4,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 10,  153 => 54,  151 => 52,  143 => 45,  138 => 47,  136 => 50,  133 => 41,  130 => 47,  122 => 37,  119 => 36,  116 => 62,  111 => 38,  108 => 37,  102 => 30,  98 => 54,  95 => 33,  92 => 51,  89 => 50,  85 => 24,  81 => 25,  73 => 19,  64 => 17,  60 => 23,  57 => 13,  54 => 12,  51 => 22,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
