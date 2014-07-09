<?php

/* form_div_layout.html.twig */
class __TwigTemplate_10af347b9d9c13976705c7ea551d223609022fbe28483fd5cdacc306cd85268f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/offCanvas.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mine.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('form_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('date_widget', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('time_widget', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('number_widget', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('money_widget', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('url_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('search_widget', $context, $blocks);
        // line 200
        echo "
";
        // line 201
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('password_widget', $context, $blocks);
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('email_widget', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('button_widget', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 253
        echo "
";
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('form_label', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('button_label', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 286
        echo "
";
        // line 287
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('button_row', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        echo "
";
        // line 310
        echo "
";
        // line 311
        $this->displayBlock('form', $context, $blocks);
        // line 318
        echo "
";
        // line 319
        $this->displayBlock('form_start', $context, $blocks);
        // line 333
        echo "
";
        // line 334
        $this->displayBlock('form_end', $context, $blocks);
        // line 342
        echo "
";
        // line 343
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 348
        echo "
";
        // line 349
        $this->displayBlock('form_errors', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('form_rest', $context, $blocks);
        // line 370
        echo "
";
        // line 372
        echo "
";
        // line 373
        $this->displayBlock('form_rows', $context, $blocks);
        // line 380
        echo "
";
        // line 381
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 401
        echo "
";
        // line 402
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 417
        echo "
";
        // line 418
        $this->displayBlock('button_attributes', $context, $blocks);
    }

    // line 6
    public function block_form_widget($context, array $blocks = array())
    {
        // line 7
        ob_start();
        // line 8
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 9
            echo "        ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
    ";
        } else {
            // line 11
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 18
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 19
        echo "     <div class=\"form-group\">
    <input type=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" style=\"width:50%\" class=\"form-control\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 28
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) {
            // line 29
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 31
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 37
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 38
        ob_start();
        // line 39
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 40
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 46
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 47
        ob_start();
        // line 48
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 52
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 53
        ob_start();
        // line 54
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 55
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
        ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 74
        ob_start();
        // line 75
        echo "    ";
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) && (!(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices")))) && (!(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))))) {
            // line 76
            echo "        ";
            $context["required"] = false;
            // line 77
            echo "    ";
        }
        // line 78
        echo "    <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 79
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
            // line 80
            echo "            <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
        ";
        }
        // line 82
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 83
            echo "            ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 84
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            ";
            // line 85
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))))) {
                // line 86
                echo "                <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 88
            echo "        ";
        }
        // line 89
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 90
        echo "        ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
    </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 95
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 96
        ob_start();
        // line 97
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 98
            echo "        ";
            if (twig_test_iterable((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))) {
                // line 99
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["group_label"]) ? $context["group_label"] : $this->getContext($context, "group_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\">
                ";
                // line 100
                $context["options"] = (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice"));
                // line 101
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            </optgroup>
        ";
            } else {
                // line 104
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
        ";
            }
            // line 106
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 110
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 111
        ob_start();
        // line 112
        echo "    <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 116
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 117
        ob_start();
        // line 118
        echo "    <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 122
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 123
        ob_start();
        // line 124
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 127
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
            echo "
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
            echo "
            ";
            // line 130
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget');
            echo "
            ";
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget');
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 137
    public function block_date_widget($context, array $blocks = array())
    {
        // line 138
        ob_start();
        // line 139
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 140
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 142
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 143
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 144
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget'), "{{ month }}" =>             // line 145
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget'), "{{ day }}" =>             // line 146
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget')));
            // line 147
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 153
    public function block_time_widget($context, array $blocks = array())
    {
        // line 154
        ob_start();
        // line 155
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 156
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 158
            echo "        ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 159
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 160
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 161
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_number_widget($context, array $blocks = array())
    {
        // line 167
        ob_start();
        // line 168
        echo "    ";
        // line 169
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 170
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 175
        ob_start();
        // line 176
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 177
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 181
    public function block_money_widget($context, array $blocks = array())
    {
        // line 182
        ob_start();
        // line 183
        echo "    ";
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 187
    public function block_url_widget($context, array $blocks = array())
    {
        // line 188
        ob_start();
        // line 189
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 190
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 194
    public function block_search_widget($context, array $blocks = array())
    {
        // line 195
        ob_start();
        // line 196
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 197
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 201
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 202
        ob_start();
        // line 203
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 204
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 208
    public function block_password_widget($context, array $blocks = array())
    {
        // line 209
        ob_start();
        // line 210
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 211
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 215
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 216
        ob_start();
        // line 217
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 218
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 222
    public function block_email_widget($context, array $blocks = array())
    {
        // line 223
        ob_start();
        // line 224
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 225
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 229
    public function block_button_widget($context, array $blocks = array())
    {
        // line 230
        ob_start();
        // line 231
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 232
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 233
            echo "    ";
        }
        // line 234
        echo "     <div class=\"form-group\">
    <button type=\"";
        // line 235
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" class=\"btn btn-default\"  ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 240
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 241
        ob_start();
        // line 242
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 243
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 247
    public function block_reset_widget($context, array $blocks = array())
    {
        // line 248
        ob_start();
        // line 249
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 250
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 256
    public function block_form_label($context, array $blocks = array())
    {
        // line 257
        ob_start();
        // line 258
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 259
            echo "        ";
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 260
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 261
                echo "        ";
            }
            // line 262
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 263
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 264
                echo "        ";
            }
            // line 265
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 266
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                // line 267
                echo "        ";
            }
            // line 268
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 273
    public function block_button_label($context, array $blocks = array())
    {
    }

    // line 277
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 278
        ob_start();
        // line 279
        echo "    ";
        // line 283
        echo "    ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 287
    public function block_form_row($context, array $blocks = array())
    {
        // line 288
        ob_start();
        // line 289
        echo "    <div>
        ";
        // line 290
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 291
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 297
    public function block_button_row($context, array $blocks = array())
    {
        // line 298
        ob_start();
        // line 299
        echo "    <div>
        ";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 305
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 306
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
    }

    // line 311
    public function block_form($context, array $blocks = array())
    {
        // line 312
        ob_start();
        // line 313
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 314
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 315
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 319
    public function block_form_start($context, array $blocks = array())
    {
        // line 320
        ob_start();
        // line 321
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 322
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 323
            echo "        ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            // line 324
            echo "    ";
        } else {
            // line 325
            echo "        ";
            $context["form_method"] = "POST";
            // line 326
            echo "    ";
        }
        // line 327
        echo "    <form name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "name"), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 328
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 329
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 334
    public function block_form_end($context, array $blocks = array())
    {
        // line 335
        ob_start();
        // line 336
        echo "    ";
        if (((!array_key_exists("render_rest", $context)) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 337
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
    ";
        }
        // line 339
        echo "    </form>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 343
    public function block_form_enctype($context, array $blocks = array())
    {
        // line 344
        ob_start();
        // line 345
        echo "    ";
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 349
    public function block_form_errors($context, array $blocks = array())
    {
        // line 350
        ob_start();
        // line 351
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 352
            echo "    <ul>
        ";
            // line 353
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 354
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 356
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 361
    public function block_form_rest($context, array $blocks = array())
    {
        // line 362
        ob_start();
        // line 363
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 364
            echo "        ";
            if ((!$this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "rendered"))) {
                // line 365
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
                echo "
        ";
            }
            // line 367
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 373
    public function block_form_rows($context, array $blocks = array())
    {
        // line 374
        ob_start();
        // line 375
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 376
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 381
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 382
        ob_start();
        // line 383
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 384
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 385
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 386
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 387
        if ((isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length"))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length")), "html", null, true);
            echo "\"";
        }
        // line 388
        if ((isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern"))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern")), "html", null, true);
            echo "\"";
        }
        // line 389
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 390
            echo " ";
            // line 391
            if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), array(0 => "placeholder", 1 => "title"))) {
                // line 392
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif (((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")) === true)) {
                // line 394
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "\"";
            } elseif ((!((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")) === false))) {
                // line 396
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 402
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 403
        ob_start();
        // line 404
        if ((!twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 405
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 406
            echo " ";
            // line 407
            if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), array(0 => "placeholder", 1 => "title"))) {
                // line 408
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif (((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")) === true)) {
                // line 410
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "\"";
            } elseif ((!((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")) === false))) {
                // line 412
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 418
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 419
        ob_start();
        // line 420
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 421
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 422
            echo " ";
            // line 423
            if (twig_in_filter((isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), array(0 => "placeholder", 1 => "title"))) {
                // line 424
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif (((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")) === true)) {
                // line 426
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "\"";
            } elseif ((!((isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")) === false))) {
                // line 428
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1430 => 428,  1424 => 426,  1418 => 424,  1416 => 423,  1414 => 422,  1410 => 421,  1401 => 420,  1399 => 419,  1396 => 418,  1383 => 412,  1377 => 410,  1371 => 408,  1369 => 407,  1367 => 406,  1363 => 405,  1357 => 404,  1355 => 403,  1352 => 402,  1339 => 396,  1333 => 394,  1327 => 392,  1325 => 391,  1323 => 390,  1319 => 389,  1313 => 388,  1307 => 387,  1303 => 386,  1299 => 385,  1295 => 384,  1289 => 383,  1287 => 382,  1284 => 381,  1272 => 376,  1267 => 375,  1265 => 374,  1262 => 373,  1253 => 367,  1247 => 365,  1244 => 364,  1239 => 363,  1237 => 362,  1234 => 361,  1227 => 356,  1218 => 354,  1214 => 353,  1211 => 352,  1208 => 351,  1206 => 350,  1203 => 349,  1195 => 345,  1193 => 344,  1190 => 343,  1184 => 339,  1178 => 337,  1175 => 336,  1173 => 335,  1170 => 334,  1161 => 329,  1159 => 328,  1134 => 327,  1131 => 326,  1128 => 325,  1125 => 324,  1122 => 323,  1119 => 322,  1116 => 321,  1114 => 320,  1111 => 319,  1104 => 315,  1100 => 314,  1095 => 313,  1093 => 312,  1090 => 311,  1083 => 306,  1080 => 305,  1072 => 300,  1069 => 299,  1067 => 298,  1064 => 297,  1056 => 292,  1052 => 291,  1048 => 290,  1045 => 289,  1043 => 288,  1040 => 287,  1032 => 283,  1030 => 279,  1028 => 278,  1025 => 277,  1020 => 273,  998 => 268,  995 => 267,  992 => 266,  989 => 265,  986 => 264,  983 => 263,  980 => 262,  977 => 261,  974 => 260,  971 => 259,  968 => 258,  966 => 257,  963 => 256,  955 => 250,  952 => 249,  950 => 248,  947 => 247,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  919 => 235,  916 => 234,  913 => 233,  910 => 232,  907 => 231,  905 => 230,  902 => 229,  894 => 225,  891 => 224,  889 => 223,  886 => 222,  878 => 218,  875 => 217,  873 => 216,  870 => 215,  862 => 211,  859 => 210,  857 => 209,  854 => 208,  846 => 204,  843 => 203,  841 => 202,  838 => 201,  830 => 197,  827 => 196,  825 => 195,  822 => 194,  814 => 190,  811 => 189,  809 => 188,  806 => 187,  798 => 183,  796 => 182,  793 => 181,  785 => 177,  782 => 176,  780 => 175,  777 => 174,  769 => 170,  766 => 169,  764 => 168,  762 => 167,  759 => 166,  752 => 161,  742 => 160,  737 => 159,  734 => 158,  728 => 156,  725 => 155,  723 => 154,  720 => 153,  712 => 147,  710 => 146,  709 => 145,  708 => 144,  707 => 143,  702 => 142,  696 => 140,  693 => 139,  691 => 138,  688 => 137,  679 => 131,  675 => 130,  671 => 129,  667 => 128,  662 => 127,  656 => 125,  653 => 124,  651 => 123,  648 => 122,  632 => 118,  630 => 117,  627 => 116,  611 => 112,  609 => 111,  606 => 110,  589 => 106,  577 => 104,  570 => 101,  568 => 100,  563 => 99,  560 => 98,  542 => 97,  540 => 96,  537 => 95,  528 => 90,  525 => 89,  522 => 88,  516 => 86,  514 => 85,  509 => 84,  506 => 83,  503 => 82,  493 => 80,  491 => 79,  483 => 78,  480 => 77,  477 => 76,  474 => 75,  472 => 74,  469 => 73,  463 => 69,  455 => 67,  450 => 66,  446 => 65,  441 => 64,  439 => 63,  436 => 62,  427 => 57,  421 => 55,  418 => 54,  416 => 53,  413 => 52,  403 => 48,  401 => 47,  398 => 46,  390 => 42,  387 => 41,  384 => 40,  381 => 39,  379 => 38,  376 => 37,  368 => 32,  363 => 31,  357 => 29,  355 => 28,  350 => 27,  348 => 26,  345 => 25,  329 => 20,  326 => 19,  323 => 18,  321 => 17,  318 => 16,  309 => 11,  303 => 9,  300 => 8,  298 => 7,  295 => 6,  291 => 418,  288 => 417,  286 => 402,  283 => 401,  281 => 381,  278 => 380,  276 => 373,  273 => 372,  270 => 370,  268 => 361,  265 => 360,  263 => 349,  260 => 348,  258 => 343,  255 => 342,  253 => 334,  250 => 333,  248 => 319,  245 => 318,  243 => 311,  240 => 310,  237 => 308,  235 => 305,  232 => 304,  230 => 297,  227 => 296,  225 => 287,  222 => 286,  220 => 277,  217 => 276,  214 => 274,  212 => 273,  209 => 272,  207 => 256,  204 => 255,  201 => 253,  199 => 247,  196 => 246,  194 => 240,  191 => 239,  189 => 229,  186 => 228,  184 => 222,  181 => 221,  179 => 215,  176 => 214,  174 => 208,  171 => 207,  169 => 201,  166 => 200,  164 => 194,  161 => 193,  159 => 187,  156 => 186,  154 => 181,  151 => 180,  149 => 174,  146 => 173,  144 => 166,  141 => 165,  139 => 153,  136 => 152,  134 => 137,  131 => 136,  129 => 122,  126 => 121,  124 => 116,  121 => 115,  119 => 110,  116 => 109,  114 => 95,  111 => 94,  109 => 73,  106 => 72,  101 => 61,  99 => 52,  96 => 51,  94 => 46,  91 => 45,  89 => 37,  86 => 36,  79 => 16,  76 => 15,  74 => 6,  71 => 5,  66 => 2,  61 => 1,  108 => 33,  104 => 62,  102 => 30,  90 => 27,  87 => 26,  84 => 25,  81 => 24,  67 => 16,  62 => 14,  56 => 12,  33 => 4,  30 => 3,  52 => 13,  48 => 11,  43 => 9,  37 => 7,  26 => 3,  19 => 1,  98 => 29,  93 => 28,  80 => 41,  46 => 10,  44 => 9,  40 => 8,  36 => 5,  32 => 6,  27 => 4,  22 => 2,  58 => 14,  55 => 12,  53 => 11,  50 => 10,  34 => 4,  31 => 5,  88 => 6,  82 => 25,  78 => 40,  72 => 18,  68 => 20,  64 => 11,  59 => 13,  54 => 15,  47 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 4,);
    }
}
