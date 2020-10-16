<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\install-master/themes/coba_theme/layouts/index.htm */
class __TwigTemplate_af9b4471e03901bcfab39e93f13b4aad0dc0a6f6717277b19e72d088ec3cf921 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"TemplateMo\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

    <title>Lava Landing Page HTML Template</title>
<!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.css");
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/templatemo-lava.css");
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl-carousel.css");
        echo "\">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"index.html\" class=\"logo\">
                            Lava
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#welcome\" class=\"menu-item\">Home</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#about\" class=\"menu-item\">About</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#testimonials\" class=\"menu-item\">Testimonials</a>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:;\">Drop Down</a>
                                <ul>
                                    <li><a href=\"\" class=\"menu-item\">About Us</a></li>
                                    <li><a href=\"\" class=\"menu-item\">Features</a></li>
                                    <li><a href=\"\" class=\"menu-item\">FAQ's</a></li>
                                    <li><a href=\"\" class=\"menu-item\">Blog</a></li>
                                </ul>
                            </li>
                            <li class=\"scroll-to-section\"><a href=\"#contact-us\" class=\"menu-item\">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class=\"welcome-area\" id=\"welcome\">

        <!-- ***** Header Text Start ***** -->
        <div class=\"header-text\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"left-text col-lg-6 col-md-12 col-sm-12 col-xs-12\"
                        data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                        <h1>Simple App that we <em>CREATE</em></h1>
                        <p>Lava <a href=\"#\">HTML landing page</a> template is provided by <a href=\"#\">TemplateMo</a>.
                           You can modify and use it for your commercial websites for free of charge. This template is last updated on 29 Oct 2019.</p> 
                        <a href=\"#about\" class=\"main-button-slider\">KNOW US BETTER</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\"
                    data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                    <div class=\"features-item\">
                        <div class=\"features-icon\">
                            <h2>01</h2>
                            <img src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/features-icon-1.png");
        echo "\" alt=\"\">
                            <h4>Trend Analysis</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href=\"#testimonials\" class=\"main-button\">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\"
                    data-scroll-reveal=\"enter bottom move 30px over 0.6s after 0.4s\">
                    <div class=\"features-item\">
                        <div class=\"features-icon\">
                            <h2>02</h2>
                            <img src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/features-icon-2.png");
        echo "\" alt=\"\">
                            <h4>Site Optimization</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href=\"#testimonials\" class=\"main-button\">
                                Discover More
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\"
                    data-scroll-reveal=\"enter right move 30px over 0.6s after 0.4s\">
                    <div class=\"features-item\">
                        <div class=\"features-icon\">
                            <h2>03</h2>
                            <img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/features-icon-3.png");
        echo "\" alt=\"\">
                            <h4>Email Design</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href=\"#testimonials\" class=\"main-button\">
                                More Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class=\"left-image-decor\"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class=\"section\" id=\"promotion\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big\"
                    data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                    <img src=\"";
        // line 165
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left-image.png");
        echo "\" class=\"rounded img-fluid d-block mx-auto\" alt=\"App\">
                </div>
                <div class=\"right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix\">
                    <ul>
                        <li data-scroll-reveal=\"enter right move 30px over 0.6s after 0.4s\">
                            <img src=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about-icon-01.png");
        echo "\" alt=\"\">
                            <div class=\"text\">
                                <h4>Vestibulum pulvinar rhoncus</h4>
                                <p>Please do not redistribute this template ZIP file for a download purpose. You may <a
                                rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">contact</a> us for
                            additional licensing of our template or to get a PSD file.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal=\"enter right move 30px over 0.6s after 0.5s\">
                            <img src=\"assets/images/about-icon-02.png\" alt=\"\">
                            <div class=\"text\">
                                <h4>Sed blandit quam in velit</h4>
                                <p>You can <a rel=\"nofollow\"
                                        href=\"https://templatemo.com/tm-540-lava-landing-page\">download Lava
                                        Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci
                                    magna consequat ligula.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal=\"enter right move 30px over 0.6s after 0.6s\">
                            <img src=\"assets/images/about-icon-03.png\" alt=\"\">
                            <div class=\"text\">
                                <h4>Aenean faucibus venenatis</h4>
                                <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue
                                    maximus porta. Curabitur tristique lacus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class=\"right-image-decor\"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class=\"section\" id=\"testimonials\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"center-heading\">
                        <h2>What They Think <em>About Us</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                    </div>
                </div>
                <div class=\"col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big\"
                    data-scroll-reveal=\"enter left move 30px over 0.6s after 0.1s\">
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"";
        // line 221
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-author-1.png");
        echo "\" alt=\"Author One\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>Jonathan Smart</h4>
                                <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                    urna elit in mauris.”</p>
                                <span>Besta CTO</span>
                            </div>
                        </div>
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"";
        // line 239
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-author-1.png");
        echo "\" alt=\"Second Author\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>Martino Tino</h4>
                                <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                    interdum, rhoncus leo.”</p>
                                <span>Web Analyst</span>
                            </div>
                        </div>
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-author-1.png");
        echo "\" alt=\"Author Third\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>George Tasa</h4>
                                <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.”</p>
                                <span>System Admin</span>
                            </div>
                        </div>
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"";
        // line 273
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/testimonial-author-1.png");
        echo "\" alt=\"Fourth Author\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>Sir James</h4>
                                <p>\"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.\"</p>
                                <span>New Villager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer id=\"contact-us\">
        <div class=\"container\">
            <div class=\"footer-content\">
                <div class=\"row\">
                    <!-- ***** Contact Form Start ***** -->
                    <div class=\"col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"contact-form\">
                            <form id=\"contact\" action=\"\" method=\"post\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-sm-12\">
                                        <fieldset>
                                            <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Full Name\" required=\"\"
                                                style=\"background-color: rgba(250,250,250,0.3);\">
                                        </fieldset>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <fieldset>
                                            <input name=\"email\" type=\"text\" id=\"email\" placeholder=\"E-Mail Address\"
                                                required=\"\" style=\"background-color: rgba(250,250,250,0.3);\">
                                        </fieldset>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <fieldset>
                                            <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Your Message\"
                                                required=\"\" style=\"background-color: rgba(250,250,250,0.3);\"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <fieldset>
                                            <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class=\"right-content col-lg-6 col-md-12 col-sm-12\">
                        <h2>More About <em>Lava</em></h2>
                        <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                            Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                            <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">contact</a> page
                            for more detail.</p>
                        <ul class=\"social\">
                            <li><a href=\"https://fb.com/templatemo\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"sub-footer\">
                        <p>Copyright &copy; 2020 Lava Landing Page

                        | Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-2.1.0.min.js");
        echo "\"></script>

    <!-- Bootstrap -->
    <script src=\"";
        // line 368
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.js");
        echo "\"></script>
    <script src=\"";
        // line 369
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>

    <!-- Plugins -->
    <script src=\"";
        // line 372
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl-carousel.js");
        echo "\"></script>
    <script src=\"";
        // line 373
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scrollreveal.min.js");
        echo "\"></script>
    <script src=\"";
        // line 374
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/waypoints.min.js");
        echo "\"></script>
    <script src=\"";
        // line 375
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.counterup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 376
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imgfix.min.js");
        echo "\"></script>

    <!-- Global Init -->
    <script src=\"";
        // line 379
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\install-master/themes/coba_theme/layouts/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 379,  499 => 376,  495 => 375,  491 => 374,  487 => 373,  483 => 372,  477 => 369,  473 => 368,  467 => 365,  372 => 273,  353 => 257,  332 => 239,  311 => 221,  257 => 170,  249 => 165,  224 => 143,  207 => 129,  190 => 115,  100 => 28,  95 => 26,  90 => 24,  85 => 22,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"TemplateMo\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">

    <title>Lava Landing Page HTML Template</title>
<!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/bootstrap.min.css' | theme}}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/font-awesome.css' | theme }}\">

    <link rel=\"stylesheet\" href=\"{{ 'assets/css/templatemo-lava.css' | theme }}\">

    <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl-carousel.css' | theme }}\">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"index.html\" class=\"logo\">
                            Lava
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <li class=\"scroll-to-section\"><a href=\"#welcome\" class=\"menu-item\">Home</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#about\" class=\"menu-item\">About</a></li>
                            <li class=\"scroll-to-section\"><a href=\"#testimonials\" class=\"menu-item\">Testimonials</a>
                            </li>
                            <li class=\"submenu\">
                                <a href=\"javascript:;\">Drop Down</a>
                                <ul>
                                    <li><a href=\"\" class=\"menu-item\">About Us</a></li>
                                    <li><a href=\"\" class=\"menu-item\">Features</a></li>
                                    <li><a href=\"\" class=\"menu-item\">FAQ's</a></li>
                                    <li><a href=\"\" class=\"menu-item\">Blog</a></li>
                                </ul>
                            </li>
                            <li class=\"scroll-to-section\"><a href=\"#contact-us\" class=\"menu-item\">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class=\"welcome-area\" id=\"welcome\">

        <!-- ***** Header Text Start ***** -->
        <div class=\"header-text\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"left-text col-lg-6 col-md-12 col-sm-12 col-xs-12\"
                        data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                        <h1>Simple App that we <em>CREATE</em></h1>
                        <p>Lava <a href=\"#\">HTML landing page</a> template is provided by <a href=\"#\">TemplateMo</a>.
                           You can modify and use it for your commercial websites for free of charge. This template is last updated on 29 Oct 2019.</p> 
                        <a href=\"#about\" class=\"main-button-slider\">KNOW US BETTER</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\"
                    data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                    <div class=\"features-item\">
                        <div class=\"features-icon\">
                            <h2>01</h2>
                            <img src=\"{{ 'assets/images/features-icon-1.png' | theme }}\" alt=\"\">
                            <h4>Trend Analysis</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href=\"#testimonials\" class=\"main-button\">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\"
                    data-scroll-reveal=\"enter bottom move 30px over 0.6s after 0.4s\">
                    <div class=\"features-item\">
                        <div class=\"features-icon\">
                            <h2>02</h2>
                            <img src=\"{{ 'assets/images/features-icon-2.png' | theme }}\" alt=\"\">
                            <h4>Site Optimization</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href=\"#testimonials\" class=\"main-button\">
                                Discover More
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12\"
                    data-scroll-reveal=\"enter right move 30px over 0.6s after 0.4s\">
                    <div class=\"features-item\">
                        <div class=\"features-icon\">
                            <h2>03</h2>
                            <img src=\"{{ 'assets/images/features-icon-3.png' | theme }}\" alt=\"\">
                            <h4>Email Design</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href=\"#testimonials\" class=\"main-button\">
                                More Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class=\"left-image-decor\"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class=\"section\" id=\"promotion\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big\"
                    data-scroll-reveal=\"enter left move 30px over 0.6s after 0.4s\">
                    <img src=\"{{ 'assets/images/left-image.png' | theme }}\" class=\"rounded img-fluid d-block mx-auto\" alt=\"App\">
                </div>
                <div class=\"right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix\">
                    <ul>
                        <li data-scroll-reveal=\"enter right move 30px over 0.6s after 0.4s\">
                            <img src=\"{{ 'assets/images/about-icon-01.png' | theme }}\" alt=\"\">
                            <div class=\"text\">
                                <h4>Vestibulum pulvinar rhoncus</h4>
                                <p>Please do not redistribute this template ZIP file for a download purpose. You may <a
                                rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">contact</a> us for
                            additional licensing of our template or to get a PSD file.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal=\"enter right move 30px over 0.6s after 0.5s\">
                            <img src=\"assets/images/about-icon-02.png\" alt=\"\">
                            <div class=\"text\">
                                <h4>Sed blandit quam in velit</h4>
                                <p>You can <a rel=\"nofollow\"
                                        href=\"https://templatemo.com/tm-540-lava-landing-page\">download Lava
                                        Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci
                                    magna consequat ligula.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal=\"enter right move 30px over 0.6s after 0.6s\">
                            <img src=\"assets/images/about-icon-03.png\" alt=\"\">
                            <div class=\"text\">
                                <h4>Aenean faucibus venenatis</h4>
                                <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue
                                    maximus porta. Curabitur tristique lacus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class=\"right-image-decor\"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class=\"section\" id=\"testimonials\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2\">
                    <div class=\"center-heading\">
                        <h2>What They Think <em>About Us</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                    </div>
                </div>
                <div class=\"col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big\"
                    data-scroll-reveal=\"enter left move 30px over 0.6s after 0.1s\">
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"{{ 'assets/images/testimonial-author-1.png' | theme }}\" alt=\"Author One\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>Jonathan Smart</h4>
                                <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus
                                    urna elit in mauris.”</p>
                                <span>Besta CTO</span>
                            </div>
                        </div>
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"{{ 'assets/images/testimonial-author-1.png' | theme }}\" alt=\"Second Author\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>Martino Tino</h4>
                                <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est
                                    interdum, rhoncus leo.”</p>
                                <span>Web Analyst</span>
                            </div>
                        </div>
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"{{ 'assets/images/testimonial-author-1.png' | theme }}\" alt=\"Author Third\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>George Tasa</h4>
                                <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.”</p>
                                <span>System Admin</span>
                            </div>
                        </div>
                        <div class=\"item service-item\">
                            <div class=\"author\">
                                <i><img src=\"{{ 'assets/images/testimonial-author-1.png' | theme }}\" alt=\"Fourth Author\"></i>
                            </div>
                            <div class=\"testimonial-content\">
                                <ul class=\"stars\">
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                    <li><i class=\"fa fa-star\"></i></li>
                                </ul>
                                <h4>Sir James</h4>
                                <p>\"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor,
                                    congue a fringilla sed, maximus et urna.\"</p>
                                <span>New Villager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer id=\"contact-us\">
        <div class=\"container\">
            <div class=\"footer-content\">
                <div class=\"row\">
                    <!-- ***** Contact Form Start ***** -->
                    <div class=\"col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"contact-form\">
                            <form id=\"contact\" action=\"\" method=\"post\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 col-sm-12\">
                                        <fieldset>
                                            <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"Full Name\" required=\"\"
                                                style=\"background-color: rgba(250,250,250,0.3);\">
                                        </fieldset>
                                    </div>
                                    <div class=\"col-md-6 col-sm-12\">
                                        <fieldset>
                                            <input name=\"email\" type=\"text\" id=\"email\" placeholder=\"E-Mail Address\"
                                                required=\"\" style=\"background-color: rgba(250,250,250,0.3);\">
                                        </fieldset>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <fieldset>
                                            <textarea name=\"message\" rows=\"6\" id=\"message\" placeholder=\"Your Message\"
                                                required=\"\" style=\"background-color: rgba(250,250,250,0.3);\"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <fieldset>
                                            <button type=\"submit\" id=\"form-submit\" class=\"main-button\">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class=\"right-content col-lg-6 col-md-12 col-sm-12\">
                        <h2>More About <em>Lava</em></h2>
                        <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                            Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                            <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">contact</a> page
                            for more detail.</p>
                        <ul class=\"social\">
                            <li><a href=\"https://fb.com/templatemo\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"sub-footer\">
                        <p>Copyright &copy; 2020 Lava Landing Page

                        | Designed by <a rel=\"nofollow\" href=\"https://templatemo.com\">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"{{ 'assets/js/jquery-2.1.0.min.js' | theme }}\"></script>

    <!-- Bootstrap -->
    <script src=\"{{ 'assets/js/popper.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/bootstrap.min.js' | theme }}\"></script>

    <!-- Plugins -->
    <script src=\"{{ 'assets/js/owl-carousel.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/scrollreveal.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/waypoints.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.counterup.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/imgfix.min.js' | theme }}\"></script>

    <!-- Global Init -->
    <script src=\"{{ 'assets/js/custom.js' | theme }}\"></script>

</body>
</html>", "C:\\xampp\\htdocs\\install-master/themes/coba_theme/layouts/index.htm", "");
    }
}
