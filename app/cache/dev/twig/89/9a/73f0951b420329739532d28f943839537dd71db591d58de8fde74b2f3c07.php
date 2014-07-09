<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_899a73f0951b420329739532d28f943839537dd71db591d58de8fde74b2f3c07 extends Twig_Template
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
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  70 => 26,  42 => 12,  24 => 2,  20 => 1,  1430 => 428,  1424 => 426,  1418 => 424,  1416 => 423,  1414 => 422,  1410 => 421,  1401 => 420,  1399 => 419,  1396 => 418,  1383 => 412,  1377 => 410,  1371 => 408,  1369 => 407,  1367 => 406,  1363 => 405,  1357 => 404,  1355 => 403,  1352 => 402,  1339 => 396,  1333 => 394,  1327 => 392,  1325 => 391,  1323 => 390,  1319 => 389,  1313 => 388,  1307 => 387,  1303 => 386,  1299 => 385,  1295 => 384,  1289 => 383,  1287 => 382,  1284 => 381,  1272 => 376,  1267 => 375,  1265 => 374,  1262 => 373,  1253 => 367,  1247 => 365,  1244 => 364,  1239 => 363,  1237 => 362,  1234 => 361,  1227 => 356,  1218 => 354,  1214 => 353,  1211 => 352,  1208 => 351,  1206 => 350,  1203 => 349,  1195 => 345,  1193 => 344,  1190 => 343,  1184 => 339,  1178 => 337,  1175 => 336,  1173 => 335,  1170 => 334,  1161 => 329,  1159 => 328,  1134 => 327,  1131 => 326,  1128 => 325,  1125 => 324,  1122 => 323,  1119 => 322,  1116 => 321,  1114 => 320,  1111 => 319,  1104 => 315,  1100 => 314,  1095 => 313,  1093 => 312,  1090 => 311,  1083 => 306,  1080 => 305,  1072 => 300,  1069 => 299,  1067 => 298,  1064 => 297,  1056 => 292,  1052 => 291,  1048 => 290,  1045 => 289,  1043 => 288,  1040 => 287,  1032 => 283,  1030 => 279,  1028 => 278,  1025 => 277,  1020 => 273,  998 => 268,  995 => 267,  992 => 266,  989 => 265,  986 => 264,  983 => 263,  980 => 262,  977 => 261,  974 => 260,  971 => 259,  968 => 258,  966 => 257,  963 => 256,  955 => 250,  952 => 249,  950 => 248,  947 => 247,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  919 => 235,  916 => 234,  913 => 233,  910 => 232,  907 => 231,  905 => 230,  902 => 229,  894 => 225,  891 => 224,  889 => 223,  886 => 222,  878 => 218,  875 => 217,  873 => 216,  870 => 215,  862 => 211,  859 => 210,  857 => 209,  854 => 208,  846 => 204,  843 => 203,  841 => 202,  838 => 201,  830 => 197,  827 => 196,  825 => 195,  822 => 194,  814 => 190,  811 => 189,  809 => 188,  806 => 187,  798 => 183,  796 => 182,  793 => 181,  785 => 177,  782 => 176,  780 => 175,  777 => 174,  769 => 170,  766 => 169,  764 => 168,  762 => 167,  759 => 166,  752 => 161,  742 => 160,  737 => 159,  734 => 158,  728 => 156,  725 => 155,  723 => 154,  720 => 153,  712 => 147,  710 => 146,  709 => 145,  708 => 144,  707 => 143,  702 => 142,  696 => 140,  693 => 139,  691 => 138,  688 => 137,  679 => 131,  675 => 130,  671 => 129,  667 => 128,  662 => 127,  656 => 125,  653 => 124,  651 => 123,  648 => 122,  632 => 118,  630 => 117,  627 => 116,  611 => 112,  609 => 111,  606 => 110,  589 => 106,  577 => 104,  570 => 101,  568 => 100,  563 => 99,  560 => 98,  542 => 97,  540 => 96,  537 => 95,  528 => 90,  525 => 89,  522 => 88,  516 => 86,  514 => 85,  509 => 84,  506 => 83,  503 => 82,  493 => 80,  491 => 79,  483 => 78,  480 => 77,  477 => 76,  474 => 75,  472 => 74,  469 => 73,  463 => 69,  455 => 67,  450 => 66,  446 => 65,  441 => 64,  439 => 63,  436 => 62,  427 => 57,  421 => 55,  418 => 54,  416 => 53,  413 => 52,  403 => 48,  401 => 47,  398 => 46,  390 => 42,  387 => 41,  384 => 40,  381 => 39,  379 => 38,  376 => 37,  368 => 32,  363 => 31,  357 => 29,  355 => 28,  350 => 27,  348 => 26,  345 => 25,  329 => 20,  326 => 19,  323 => 18,  321 => 17,  318 => 16,  309 => 11,  303 => 9,  300 => 8,  298 => 7,  295 => 6,  291 => 418,  288 => 417,  286 => 402,  283 => 401,  281 => 381,  278 => 380,  276 => 373,  273 => 372,  270 => 370,  268 => 361,  265 => 360,  263 => 349,  260 => 348,  258 => 343,  255 => 342,  253 => 334,  250 => 333,  248 => 319,  245 => 318,  243 => 311,  240 => 310,  237 => 308,  235 => 305,  232 => 304,  230 => 297,  227 => 296,  225 => 287,  222 => 286,  220 => 277,  217 => 276,  214 => 274,  212 => 273,  209 => 272,  207 => 256,  204 => 255,  201 => 253,  199 => 247,  196 => 246,  194 => 240,  191 => 239,  189 => 229,  186 => 228,  184 => 222,  181 => 221,  179 => 215,  176 => 214,  174 => 208,  171 => 207,  169 => 201,  166 => 200,  164 => 194,  161 => 193,  159 => 187,  156 => 186,  154 => 181,  151 => 180,  149 => 174,  146 => 173,  144 => 166,  141 => 165,  139 => 153,  136 => 152,  134 => 137,  131 => 136,  129 => 122,  126 => 121,  124 => 116,  121 => 115,  119 => 110,  116 => 109,  114 => 95,  111 => 94,  109 => 73,  106 => 72,  101 => 61,  99 => 52,  96 => 51,  94 => 46,  91 => 35,  89 => 37,  86 => 36,  79 => 29,  76 => 15,  74 => 6,  71 => 5,  66 => 25,  61 => 1,  108 => 33,  104 => 62,  102 => 30,  90 => 27,  87 => 26,  84 => 25,  81 => 24,  67 => 16,  62 => 24,  56 => 12,  33 => 4,  30 => 5,  52 => 13,  48 => 11,  43 => 9,  37 => 7,  26 => 3,  19 => 1,  98 => 29,  93 => 28,  80 => 41,  46 => 14,  44 => 9,  40 => 8,  36 => 5,  32 => 6,  27 => 4,  22 => 2,  58 => 14,  55 => 12,  53 => 11,  50 => 15,  34 => 4,  31 => 3,  88 => 6,  82 => 25,  78 => 40,  72 => 18,  68 => 20,  64 => 11,  59 => 13,  54 => 15,  47 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 4,);
    }
}
