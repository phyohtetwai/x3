<?php

/* partials/file.html */
class __TwigTemplate_db49246ef100488bf387c704be915976dc53fe33439588b93ef0ac7e41b020dc extends Twig_Template
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
        echo "
";
        // line 3
        $context["image_page"] = call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('setpath')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink"), (isset($context["rootpath"]) ? $context["rootpath"] : null))), "html"));
        // line 4
        $context["preview_image_url"] = ((isset($context["assetspath"]) ? $context["assetspath"] : null) . call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->env, (isset($context["preview_image"]) ? $context["preview_image"] : null), ".")));
        // line 5
        $context["image_ratio"] = (($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "height") / $this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "width")) * 100);
        // line 6
        $context["date"] = $this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), "date_taken", array(), "array");
        // line 7
        echo "


";
        // line 11
        if ((((isset($context["parent"]) ? $context["parent"] : null) && $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "images")) && (call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "images"))) > 1))) {
            // line 12
            echo "\t";
            $context["parent_images"] = call_user_func_array($this->env->getFunction('sortby')->getCallable(), array($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "images"), $this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "sortby"), ((($this->getAttribute($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "gallery"), "sort") == "desc")) ? (true) : (false))));
            // line 13
            echo "


\t";
            // line 16
            $context["siblings"] = call_user_func_array($this->env->getFunction('get_sibling_landing_pages')->getCallable(), array((isset($context["parent_images"]) ? $context["parent_images"] : null), (isset($context["myimage"]) ? $context["myimage"] : null)));
            // line 17
            echo "

\t";
            // line 19
            if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["siblings"]) ? $context["siblings"] : null))))) {
                // line 20
                echo "\t<div class=\"pagenav pagenav-static\">

\t\t";
                // line 23
                echo "\t\t";
                $context["url"] = (("../" . call_user_func_array($this->env->getFunction('getSibling')->getCallable(), array(call_user_func_array($this->env->getFilter('removeExtension')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 0, array(), "array"), "file_name")))))) . "/");
                // line 24
                echo "\t\t\t<a href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\" class=\"pagenav-link pagenav-prev\"><span class=\"pagenav-text\">";
                echo (($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 0, array(), "array", false, true), "title", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 0, array(), "array", false, true), "title"), $this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 0, array(), "array"), "name")))) : ($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 0, array(), "array"), "name")));
                echo "</span></a>

\t\t";
                // line 27
                echo "\t\t";
                $context["url"] = (("../" . call_user_func_array($this->env->getFunction('getSibling')->getCallable(), array(call_user_func_array($this->env->getFilter('removeExtension')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 1, array(), "array"), "file_name")))))) . "/");
                // line 28
                echo "\t\t<a href=\"";
                echo (isset($context["url"]) ? $context["url"] : null);
                echo "\" class=\"pagenav-link pagenav-next\"><span class=\"pagenav-text\">";
                echo (($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 1, array(), "array", false, true), "title", array(), "any", true, true)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 1, array(), "array", false, true), "title"), $this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 1, array(), "array"), "name")))) : ($this->getAttribute($this->getAttribute((isset($context["siblings"]) ? $context["siblings"] : null), 1, array(), "array"), "name")));
                echo "</span></a>
\t</div>
\t";
            }
        }
        // line 32
        echo "

";
        // line 35
        $context["fotomoto"] = "";
        // line 36
        $context["fotomoto_collection"] = "";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins"), "fotomoto"), "enabled") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins"), "fotomoto"), "store_id")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins"), "fotomoto"), "enabled_page"))) {
            // line 38
            echo "\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins"), "fotomoto"), "buy_button")) {
                // line 39
                echo "\t\t";
                $context["fotomoto"] = " file-fotomoto file-fotomoto-buybutton";
                // line 40
                echo "\t";
            } else {
                // line 41
                echo "\t\t";
                $context["fotomoto"] = " file-fotomoto";
                // line 42
                echo "\t";
            }
            // line 43
            echo "\t";
            if (call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins"), "fotomoto"), "collection")))) {
                // line 44
                echo "\t\t";
                $context["fotomoto_collection"] = ((" data-fotomoto-collection=\"" . call_user_func_array($this->env->getFilter('trim')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "plugins"), "fotomoto"), "collection")))) . "\"");
                // line 45
                echo "\t";
            }
        }
        // line 47
        echo "
";
        // line 49
        $context["data_exif"] = "";
        // line 50
        $context["meta"] = "";
        // line 51
        $context["data_geo"] = "";
        // line 52
        if ($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif")) {
            // line 53
            echo "
\t";
            // line 55
            echo "\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup"), "caption"), "exif")) {
                // line 56
                echo "\t\t";
                $context["exif_items"] = call_user_func_array($this->env->getFilter('split')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup"), "caption"), "exif_items"), ","));
                // line 57
                echo "\t\t";
                if ((call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, (isset($context["exif_items"]) ? $context["exif_items"] : null))) > 0)) {
                    // line 58
                    echo "
\t\t\t";
                    // line 59
                    $context["exif_array"] = array();
                    // line 60
                    echo "\t\t\t";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["exif_items"]) ? $context["exif_items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                        if ($this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), (isset($context["key"]) ? $context["key"] : null), array(), "array")) {
                            // line 61
                            echo "\t\t    ";
                            $context["exif_array"] = call_user_func_array($this->env->getFilter('merge')->getCallable(), array((isset($context["exif_array"]) ? $context["exif_array"] : null), array((isset($context["key"]) ? $context["key"] : null) => $this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), (isset($context["key"]) ? $context["key"] : null), array(), "array"))));
                            // line 62
                            echo "\t\t    ";
                            $context["meta"] = ((((((((isset($context["meta"]) ? $context["meta"] : null) . "<div class=\"row file-exif-") . (isset($context["key"]) ? $context["key"] : null)) . "\"><div class=\"small-6 columns file-exif-key\"><span>") . call_user_func_array($this->env->getFilter('replace')->getCallable(), array(call_user_func_array($this->env->getFilter('title')->getCallable(), array($this->env, (isset($context["key"]) ? $context["key"] : null))), array("_" => " ")))) . "</span></div><div class=\"small-6 columns file-exif-value styled\">") . $this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), (isset($context["key"]) ? $context["key"] : null), array(), "array")) . "</div></div>");
                            // line 63
                            echo "\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "\t\t\t";
                    if (call_user_func_array($this->env->getFilter('length')->getCallable(), array($this->env, (isset($context["exif_array"]) ? $context["exif_array"] : null)))) {
                        $context["data_exif"] = ((" data-exif=\"" . call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('json_encode')->getCallable(), array((isset($context["exif_array"]) ? $context["exif_array"] : null))), "html_attr"))) . "\"");
                    }
                    // line 65
                    echo "
\t\t";
                }
                // line 67
                echo "\t";
            }
            // line 68
            echo "
\t";
            // line 70
            echo "\t";
            if (($this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), "latitude") && $this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), "longitude"))) {
                // line 71
                echo "\t\t";
                $context["geo"] = (($this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), "latitude") . ",") . $this->getAttribute($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "exif"), "longitude"));
                // line 72
                echo "\t\t";
                $context["map_embed_src"] = (("https://www.google.com/maps/embed/v1/place?q=" . (isset($context["geo"]) ? $context["geo"] : null)) . "&amp;key=AIzaSyDRp6xla9SxUmTBu6l_kprhjjI9e5-EVZk");
                // line 73
                echo "\t\t";
                $context["map_link_src"] = ("https://www.google.com/maps/search/?api=1&query=" . (isset($context["geo"]) ? $context["geo"] : null));
                // line 74
                echo "\t\t";
                // line 75
                echo "\t\t";
                $context["map_embed_button_item"] = (((("<button data-href=\"" . (isset($context["map_link_src"]) ? $context["map_link_src"] : null)) . "\" data-embed-modal=\"") . (isset($context["map_embed_src"]) ? $context["map_embed_src"] : null)) . "\" class=\"button small button-map\" data-lang=\"map\"></button>");
                // line 76
                echo "\t\t";
                $context["map_button_popup"] = (((("<a href=\"" . (isset($context["map_link_src"]) ? $context["map_link_src"] : null)) . "\" data-embed-modal=\"") . (isset($context["map_embed_src"]) ? $context["map_embed_src"] : null)) . "\" class=\"button small button-map\" target=\"_blank\" data-lang=\"map\"></a>");
                // line 77
                echo "\t\t";
                $context["map_link_popup"] = (((("<a href=\"" . (isset($context["map_link_src"]) ? $context["map_link_src"] : null)) . "\" data-embed-modal=\"") . (isset($context["map_embed_src"]) ? $context["map_embed_src"] : null)) . "\" class=\"link-map\" target=\"_blank\" data-lang=\"map\"></a>");
                // line 78
                echo "\t\t";
                $context["map_button"] = (("<a href=\"" . (isset($context["map_link_src"]) ? $context["map_link_src"] : null)) . "\" class=\"button small button-map\" target=\"_blank\" data-lang=\"map\"></a>");
                // line 79
                echo "\t\t";
                $context["map_link"] = (("<a href=\"" . (isset($context["map_link_src"]) ? $context["map_link_src"] : null)) . "\" class=\"link-map\" target=\"_blank\" data-lang=\"map\"></a>");
                // line 80
                echo "\t\t";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "popup"), "caption"), "map")) {
                    $context["data_geo"] = ((" data-geo=\"" . (isset($context["geo"]) ? $context["geo"] : null)) . "\"");
                }
                // line 81
                echo "\t";
            }
        }
        // line 83
        echo "
";
        // line 85
        if ((isset($context["geo"]) ? $context["geo"] : null)) {
            // line 86
            echo "\t";
            $context["page_title"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["page_title"]) ? $context["page_title"] : null), array("{latitude}" => $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "exif"), "latitude"), "{longitude}" => $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "exif"), "longitude"), "{map_embed_src}" => (isset($context["map_embed_src"]) ? $context["map_embed_src"] : null), "{map_link_src}" => (isset($context["map_link_src"]) ? $context["map_link_src"] : null), "{map_button_popup}" => (isset($context["map_button_popup"]) ? $context["map_button_popup"] : null), "{map_link_popup}" => (isset($context["map_link_popup"]) ? $context["map_link_popup"] : null), "{map_button}" => (isset($context["map_button"]) ? $context["map_button"] : null), "{map_link}" => (isset($context["map_link"]) ? $context["map_link"] : null))));
            // line 87
            echo "\t";
            if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["image_description"]) ? $context["image_description"] : null))))) {
                // line 88
                echo "\t\t";
                $context["image_description"] = call_user_func_array($this->env->getFilter('replace')->getCallable(), array((isset($context["image_description"]) ? $context["image_description"] : null), array("{latitude}" => $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "exif"), "latitude"), "{longitude}" => $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "exif"), "longitude"), "{map_embed_src}" => (isset($context["map_embed_src"]) ? $context["map_embed_src"] : null), "{map_link_src}" => (isset($context["map_link_src"]) ? $context["map_link_src"] : null), "{map_button_popup}" => (isset($context["map_button_popup"]) ? $context["map_button_popup"] : null), "{map_link_popup}" => (isset($context["map_link_popup"]) ? $context["map_link_popup"] : null), "{map_button}" => (isset($context["map_button"]) ? $context["map_button"] : null), "{map_link}" => (isset($context["map_link"]) ? $context["map_link"] : null))));
                // line 89
                echo "\t";
            }
        }
        // line 91
        echo "
";
        // line 93
        echo "<div class=\"module row file gallery";
        echo (isset($context["fotomoto"]) ? $context["fotomoto"] : null);
        echo "\"";
        echo (isset($context["fotomoto_collection"]) ? $context["fotomoto_collection"] : null);
        echo ">
  <div data-options=\"caption:\" class=\"images clearfix context small-12 medium-10 large-8 small-centered columns narrower text-center frame";
        // line 94
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popup"), "enabled") == true)) {
            echo " x3-hover-icon-primary";
        }
        echo "\">

  ";
        // line 97
        echo "  <h1 class=\"title\">";
        echo (isset($context["page_title"]) ? $context["page_title"] : null);
        echo "</h1>
  ";
        // line 98
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["image_description"]) ? $context["image_description"] : null))))) {
            echo "<h2 class=\"subheader\">";
            echo (isset($context["image_description"]) ? $context["image_description"] : null);
            echo "</h2>";
        }
        // line 99
        echo "  ";
        if ((!call_user_func_array($this->env->getTest('empty')->getCallable(), array((isset($context["date"]) ? $context["date"] : null))))) {
            echo "<h6 class=\"date\"><time itemprop=\"dateCreated\" datetime=\"";
            echo call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "c"));
            echo "\">";
            echo call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, (isset($context["date"]) ? $context["date"] : null), "d F Y"));
            echo "</time></h6>";
        }
        // line 100
        echo "
  ";
        // line 102
        echo "\t";
        // line 103
        echo "\t<a href=\"../\" class=\"file-back\"></a>

\t";
        // line 106
        echo "\t<div class=\"gallery\">
\t\t<a class=\"item img-link item-link";
        // line 107
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "popup"), "enabled") == true)) {
            echo " x3-popup";
        }
        echo "\"";
        echo (isset($context["data_exif"]) ? $context["data_exif"] : null);
        echo (isset($context["data_geo"]) ? $context["data_geo"] : null);
        echo " id=\"image-";
        echo call_user_func_array($this->env->getFilter('default')->getCallable(), array(call_user_func_array($this->env->getFilter('attribute_friendly')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug"))), "1"));
        echo "\" data-width=\"";
        echo $this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "width");
        echo "\" data-height=\"";
        echo $this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "height");
        echo "\" href=\"";
        echo (isset($context["image_page"]) ? $context["image_page"] : null);
        echo "\" data-image=\"";
        echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["preview_image_url"]) ? $context["preview_image_url"] : null)));
        echo "\" data-title=\"";
        echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html"));
        echo "\" data-description=\"";
        echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["image_description"]) ? $context["image_description"] : null), "html"));
        echo "\" data-date=\"";
        echo call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->env, ((array_key_exists("date", $context)) ? (call_user_func_array($this->env->getFilter('default')->getCallable(), array((isset($context["date"]) ? $context["date"] : null), $this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "date")))) : ($this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "date"))), "d F Y"));
        echo "\">
\t\t\t<figure>
\t\t\t\t<div class=\"image-container\" style=\"padding-bottom:";
        // line 109
        echo (isset($context["image_ratio"]) ? $context["image_ratio"] : null);
        echo "%;\">
\t\t\t\t\t<img data-src=\"";
        // line 110
        echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, (isset($context["preview_image_url"]) ? $context["preview_image_url"] : null)));
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "settings"), "image_cachebuster")) ? (("?" . $this->getAttribute((isset($context["myimage"]) ? $context["myimage"] : null), "date"))) : (""));
        echo "\" alt=\"";
        echo call_user_func_array($this->env->getFilter('e')->getCallable(), array($this->env, call_user_func_array($this->env->getFilter('striptags')->getCallable(), array($this->env, (isset($context["page_title"]) ? $context["page_title"] : null)))));
        echo "\">
\t\t\t\t</div>
\t\t\t</figure>
\t\t</a>
\t</div>

\t";
        // line 117
        echo "\t";
        if ((isset($context["meta"]) ? $context["meta"] : null)) {
            echo "<div class=\"file-exif\">";
            echo (isset($context["meta"]) ? $context["meta"] : null);
            echo "</div>";
        }
        // line 118
        echo "
\t";
        // line 120
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "accounts"), "disqus_shortname") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "plugins"), "disqus"), "image"))) {
            // line 121
            echo "\t\t<hr>
\t\t";
            // line 122
            $this->env->loadTemplate("partials/module.disqus.html")->display($context);
            // line 123
            echo "\t";
        }
        // line 124
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/file.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 124,  343 => 123,  341 => 122,  338 => 121,  335 => 120,  332 => 118,  309 => 109,  276 => 103,  274 => 102,  271 => 100,  262 => 99,  256 => 98,  251 => 97,  244 => 94,  237 => 93,  234 => 91,  221 => 86,  219 => 85,  216 => 83,  207 => 80,  204 => 79,  201 => 78,  198 => 77,  195 => 76,  192 => 75,  190 => 74,  187 => 73,  184 => 72,  153 => 62,  144 => 60,  142 => 59,  139 => 58,  136 => 57,  133 => 56,  130 => 55,  127 => 53,  123 => 51,  121 => 50,  112 => 45,  106 => 43,  103 => 42,  100 => 41,  97 => 40,  81 => 32,  60 => 24,  51 => 19,  45 => 16,  40 => 13,  90 => 30,  74 => 25,  71 => 28,  69 => 23,  61 => 18,  56 => 17,  44 => 12,  36 => 10,  27 => 6,  383 => 145,  380 => 144,  369 => 138,  366 => 136,  364 => 135,  360 => 134,  356 => 133,  354 => 132,  348 => 128,  345 => 126,  340 => 125,  337 => 124,  334 => 122,  328 => 120,  325 => 117,  322 => 117,  316 => 115,  313 => 110,  310 => 112,  304 => 110,  301 => 109,  297 => 106,  291 => 103,  288 => 101,  283 => 107,  280 => 106,  278 => 97,  275 => 96,  272 => 94,  270 => 91,  258 => 88,  255 => 86,  247 => 81,  243 => 80,  230 => 89,  227 => 88,  224 => 87,  218 => 64,  215 => 63,  212 => 81,  205 => 59,  202 => 58,  199 => 57,  196 => 55,  182 => 53,  175 => 68,  172 => 67,  166 => 48,  163 => 64,  156 => 63,  150 => 61,  129 => 39,  126 => 37,  109 => 44,  92 => 29,  88 => 29,  85 => 35,  63 => 21,  53 => 20,  47 => 17,  32 => 8,  26 => 5,  24 => 4,  22 => 3,  189 => 54,  186 => 80,  183 => 79,  181 => 71,  178 => 70,  174 => 74,  171 => 73,  168 => 65,  164 => 69,  160 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 43,  143 => 60,  140 => 41,  134 => 40,  131 => 55,  128 => 53,  125 => 52,  122 => 50,  119 => 49,  116 => 47,  111 => 47,  108 => 46,  105 => 45,  102 => 32,  99 => 30,  96 => 32,  94 => 39,  91 => 38,  89 => 37,  87 => 36,  84 => 27,  80 => 24,  77 => 23,  73 => 28,  70 => 22,  68 => 27,  66 => 25,  64 => 20,  62 => 23,  59 => 21,  57 => 23,  54 => 18,  50 => 14,  46 => 16,  43 => 14,  41 => 13,  39 => 12,  37 => 12,  35 => 11,  33 => 9,  30 => 7,  28 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
