<?php

/* ::landing.html.twig */
class __TwigTemplate_05d8bc93216fd9be8c8cb78ff3391cacfd2d9cfa776b40aed95ebdf96e80fcbb extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <title>KampWeB - Kamp Management Software</title>
    <meta name=\"keywords\" content=\"Camping, camp. kamp. kamp management software\" />
    <meta name=\"description\" content=\"NAU - Kamp Management Software\">
    <meta name=\"author\" content=\"mburakergenc\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Bootstrap Core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Roboto:300,400,500,700\">
    <link rel=\"stylesheet\" type=\"text/css\" href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">


<!-- Navigation -->
<nav class=\"navbar navbar-default\">

    <div class=\"container\" style=\"max-width: 1050px;\">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand page-scroll\" href=\"#page-top\">KampWeb</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"active hidden\">
                    <a href=\"#page-top\">Home</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#services\">Modules</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#features-flat\">Features</a>
                </li>
                <li>
                    <a class=\"page-scroll\" href=\"#footer\">Contact</a>
                </li>
                ";
        // line 68
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 69
            echo "                    <li>
                        <a class=\"page-scroll\" href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("dashboard");
            echo "\">Dashboard</a>
                    </li>
                ";
        } else {
            // line 73
            echo "                <li>
                    <a class=\"page-scroll\" href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Sign Up</a>
                </li>
                ";
        }
        // line 77
        echo "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Hero Content -->
<header id=\"hero\">
    <div class=\"container\">
        <div class=\"intro-text\">
            <div class=\"intro-heading\">We provide you <b>beautiful</b> and increadibly <b>easy</b> camping solution.</div>
            <a href=\"#services\" class=\"page-scroll btn btn-xl mr30 btn-primary\">Learn More</a>
            <a href=\"#contact\" class=\"page-scroll btn btn-xl btn-wire\">Contact Us</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <h2 class=\"section-heading\">Modules</h2>
                <h3 class=\"section-subheading text-muted\">Check out useful modules.</h3>
            </div>
        </div>
        <div class=\"row text-center\">
            <div class=\"col-xs-6 col-sm-4 mb50\">
                    <span class=\"fa-stack fa-4x hidden\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                    </span>
                <div class=\"service-icon\"> <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/icons/1-lg.png"), "html", null, true);
        echo "\" title=\"service icon\"> </div>
                <h4 class=\"service-heading\">E-Commerce</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-xs-6 col-sm-4 mb50\">
                <div class=\"service-icon\"> <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/icons/2-lg.png"), "html", null, true);
        echo "\" title=\"service icon\"> </div>
                    <span class=\"fa-stack fa-4x hidden\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-laptop fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Responsive Design</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-xs-6 col-sm-4 mb50\">
                <div class=\"service-icon\"> <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/icons/3-lg.png"), "html", null, true);
        echo "\" title=\"service icon\"> </div>
                    <span class=\"fa-stack fa-4x hidden\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-lock fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Web Security</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>

            <div class=\"col-xs-6 col-sm-4 mb50\">
                    <span class=\"fa-stack fa-4x hidden\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
                    </span>
                <div class=\"service-icon\"> <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/icons/4-lg.png"), "html", null, true);
        echo "\" title=\"service icon\"> </div>
                <h4 class=\"service-heading\">E-Commerce</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-xs-6 col-sm-4 mb50\">
                <div class=\"service-icon\"> <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/icons/5-lg.png"), "html", null, true);
        echo "\" title=\"service icon\"> </div>
                    <span class=\"fa-stack fa-4x hidden\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-laptop fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Responsive Design</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class=\"col-xs-6 col-sm-4 mb50\">
                <div class=\"service-icon\"> <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/icons/6-lg.png"), "html", null, true);
        echo "\" title=\"service icon\"> </div>
                    <span class=\"fa-stack fa-4x hidden\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-lock fa-stack-1x fa-inverse\"></i>
                    </span>
                <h4 class=\"service-heading\">Web Security</h4>
                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Flat Features Section -->
<section id=\"features-flat\" class=\"bg-light\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-12 col-md-6 text-center\">
                <h2 class=\"section-heading mt70\">World Class Developers</h2>
                <h3 class=\"section-subheading text-muted mb30\">This is basically like more advanced lorem ipsum.</h3>
                <p class=\"text-muted mb50\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                <a href=\"#services\" class=\"page-scroll btn btn-xl mr30 btn-primary pv15\">Learn More</a>
                <a href=\"#contact\" class=\"page-scroll btn btn-xl btn-danger pv15\">Contact Us</a>

            </div>
            <div class=\"hidden-sm hidden-xs col-md-6\">
                <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/features/flat_feature1.png"), "html", null, true);
        echo "\" title=\"iMac Image\" class=\"img-responsive pull-right\">
            </div>
        </div>

    </div>
</section>

<!-- Flat Features Section -->
<section id=\"features-flat\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"hidden-sm hidden-xs col-md-6\">
                <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/features/flat_feature2.png"), "html", null, true);
        echo "\" title=\"iMac Image\" class=\"img-responsive pull-left\">
            </div>
            <div class=\"col-sm-12 col-md-6 text-center\">
                <h2 class=\"section-heading mt70\">Mobile First Solutions</h2>
                <h3 class=\"section-subheading text-muted mb30\">This is basically like more advanced lorem ipsum.</h3>
                <p class=\"text-muted mb50\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                <a href=\"#services\" class=\"page-scroll btn btn-xl mr30 btn-primary pv15\">Learn More</a>
                <a href=\"#contact\" class=\"page-scroll btn btn-xl btn-danger pv15\">Contact Us</a>

            </div>
        </div>

    </div>
</section>

<!-- Features Section -->
<section id=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading hidden\">We're great at the little things</h2>
                <h2 class=\"section-heading\">We're here to help you succeed</h2>
                <h3 class=\"section-subheading text-muted mbn\">Our in house team can build the features and solutions you need.</h3>


            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-6\">
            </div>
            <div class=\"col-md-12 hidden\">
                <!-- <img src=\"img/features/1.png\" title=\"iMac Image\" class=\"img-responsive pull-right mtn30\"> -->
            </div>
        </div>

    </div>
</section>

<!-- Contact Section -->
<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">Get your free trial and explore the possibilities!</h2>
            </div>
        </div>
        <form name=\"sentMessage\" id=\"contactForm\" class=\"mw800 center-block clearfix\" novalidate>
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Your Name *\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                <p class=\"help-block text-danger\"></p>
            </div>
            <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" placeholder=\"Your Email *\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                <p class=\"help-block text-danger\"></p>
            </div>
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-xl btn-block btn-wire\">Subscribe</button>
            </div>
        </form>
        <p> By subscribing you agree to our terms and conditions. </p>

    </div>
</section>

<!-- Footer -->
<footer id=\"footer\">
    <div class=\"container mw850\">
        <div class=\"row\">
            <div class=\"col-md-6 text-left\">
                <span class=\"copyright text-muted\">Copyright &copy; <b>KampWeb</b> 2016</span>
            </div>
            <div class=\"col-md-6 text-right\">
                <ul class=\"list-inline social-buttons\">
                    <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-4 hidden\">
                <ul class=\"list-inline quicklinks\">
                    <li><a href=\"#\">Privacy Policy</a>
                    </li>
                    <li><a href=\"#\">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- About Section (timeline/hidden) -->
<section id=\"about\" class=\"hidden\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">About</h2>
                <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <ul class=\"timeline\">
                    <li>
                        <div class=\"timeline-image\">
                            <img class=\"img-responsive img-circle\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/about/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>2009-2011</h4>
                                <h4 class=\"subheading\">Our Humble Beginnings</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <img class=\"img-responsive img-circle\" src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/about/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>March 2011</h4>
                                <h4 class=\"subheading\">An Agency is Born</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=\"timeline-image\">
                            <img class=\"img-responsive img-circle\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/about/3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>December 2012</h4>
                                <h4 class=\"subheading\">Transition to Full Service</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <img class=\"img-circle img-responsive\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/about/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>July 2014</h4>
                                <h4 class=\"subheading\">Phase Two Expansion</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class=\"timeline-inverted\">
                        <div class=\"timeline-image\">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section (hidden) -->
<section id=\"team\" class=\"bg-light hidden\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">The Team You Need</h2>
                <h3 class=\"section-subheading text-muted\">Lorem amet ipsum dolor sit consectetur.</h3>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/team/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <ul class=\"list-inline social-buttons\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                    </ul>
                    <h4>Kay Garland</h4>
                    <p class=\"text-muted\">Lead Designer</p>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/team/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <h4>Larry Parker</h4>
                    <p class=\"text-muted\">Lead Marketer</p>
                    <ul class=\"list-inline social-buttons\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/team/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <h4>Diana Pertersen</h4>
                    <p class=\"text-muted\">Lead Developer</p>
                    <ul class=\"list-inline social-buttons\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<!--Call to Action Section (hidden) -->
<section id=\"call-to-action\" class=\"hidden\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">Portfolio</h2>
                <h3 class=\"section-subheading text-muted\">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive\" src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/portfolio/roundicons-free.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <p>
                            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href=\"#\">exampleDomain.com</a>, or you can purchase the 1500 icon set <a href=\"#\">here</a>.</p>
                        <ul class=\"list-inline\">
                            <li>Date: July 2014</li>
                            <li>Client: Round Icons</li>
                            <li>Category: Graphic Design</li>
                        </ul>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <h2>Project Heading</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/portfolio/startup-framework-preview.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p><a href=\"#\">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                        <p>You can preview Startup Framework <a href=\"#\">here</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/portfolio/treehouse-preview.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Treehouse is a free PSD web template built by <a href=\"#\">Example Person</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"#\">exampleDomain.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal4\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/portfolio/golden-preview.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href=\"#\">Example Person</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"#\">exampleDomain.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal5\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/portfolio/escape-preview.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Escape is a free PSD web template built by <a href=\"#\">Example Person</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"#\">exampleDomain.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 6 -->
<div class=\"portfolio-modal modal fade\" id=\"portfolioModal6\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class=\"item-intro text-muted\">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class=\"img-responsive img-centered\" src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/portfolio/dreams-preview.png"), "html", null, true);
        echo "\" alt=\"\">
                        <p>Dreams is a free PSD web template built by <a href=\"#\">Example Person</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                        <p>You can download the PSD template in this portfolio sample item at <a href=\"#\">SampleDomain.com</a>.</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<!-- <script src=\"js/vendor/jquery.js\"></script> -- Local Version -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

<!-- Bootstrap Core JavaScript -->
<!-- <script src=\"js/vendor/bootstrap.min.js\"></script> -- Local Version -->
<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>

<!-- Contact Form JavaScript -->
<script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/vendor/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/contact_me.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "::landing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  736 => 628,  730 => 625,  726 => 624,  702 => 603,  672 => 576,  642 => 549,  612 => 522,  582 => 495,  547 => 463,  490 => 409,  472 => 394,  454 => 379,  414 => 342,  397 => 328,  380 => 314,  363 => 300,  251 => 191,  235 => 178,  206 => 152,  194 => 143,  186 => 138,  169 => 124,  157 => 115,  149 => 110,  114 => 77,  108 => 74,  105 => 73,  99 => 70,  96 => 69,  94 => 68,  40 => 17,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <title>KampWeB - Kamp Management Software</title>*/
/*     <meta name="keywords" content="Camping, camp. kamp. kamp management software" />*/
/*     <meta name="description" content="NAU - Kamp Management Software">*/
/*     <meta name="author" content="mburakergenc">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>*/
/*     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">*/
/*     <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'>*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body id="page-top" class="index">*/
/* */
/* */
/* <!-- Navigation -->*/
/* <nav class="navbar navbar-default">*/
/* */
/*     <div class="container" style="max-width: 1050px;">*/
/* */
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header page-scroll">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand page-scroll" href="#page-top">KampWeb</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="active hidden">*/
/*                     <a href="#page-top">Home</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#services">Modules</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#features-flat">Features</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="page-scroll" href="#footer">Contact</a>*/
/*                 </li>*/
/*                 {% if app.user %}*/
/*                     <li>*/
/*                         <a class="page-scroll" href="{{ path('dashboard') }}">Dashboard</a>*/
/*                     </li>*/
/*                 {% else %}*/
/*                 <li>*/
/*                     <a class="page-scroll" href="{{ path('register') }}">Sign Up</a>*/
/*                 </li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*         <!-- /.navbar-collapse -->*/
/*     </div>*/
/*     <!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* <!-- Hero Content -->*/
/* <header id="hero">*/
/*     <div class="container">*/
/*         <div class="intro-text">*/
/*             <div class="intro-heading">We provide you <b>beautiful</b> and increadibly <b>easy</b> camping solution.</div>*/
/*             <a href="#services" class="page-scroll btn btn-xl mr30 btn-primary">Learn More</a>*/
/*             <a href="#contact" class="page-scroll btn btn-xl btn-wire">Contact Us</a>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
/* <!-- Services Section -->*/
/* <section id="services">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12 text-center">*/
/*                 <h2 class="section-heading">Modules</h2>*/
/*                 <h3 class="section-subheading text-muted">Check out useful modules.</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row text-center">*/
/*             <div class="col-xs-6 col-sm-4 mb50">*/
/*                     <span class="fa-stack fa-4x hidden">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <div class="service-icon"> <img src="{{ asset('assets/img/icons/1-lg.png') }}" title="service icon"> </div>*/
/*                 <h4 class="service-heading">E-Commerce</h4>*/
/*                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*             </div>*/
/*             <div class="col-xs-6 col-sm-4 mb50">*/
/*                 <div class="service-icon"> <img src="{{ asset('assets/img/icons/2-lg.png') }}" title="service icon"> </div>*/
/*                     <span class="fa-stack fa-4x hidden">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <h4 class="service-heading">Responsive Design</h4>*/
/*                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*             </div>*/
/*             <div class="col-xs-6 col-sm-4 mb50">*/
/*                 <div class="service-icon"> <img src="{{ asset('assets/img/icons/3-lg.png') }}" title="service icon"> </div>*/
/*                     <span class="fa-stack fa-4x hidden">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-lock fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <h4 class="service-heading">Web Security</h4>*/
/*                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*             </div>*/
/* */
/*             <div class="col-xs-6 col-sm-4 mb50">*/
/*                     <span class="fa-stack fa-4x hidden">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <div class="service-icon"> <img src="{{ asset('assets/img/icons/4-lg.png') }}" title="service icon"> </div>*/
/*                 <h4 class="service-heading">E-Commerce</h4>*/
/*                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*             </div>*/
/*             <div class="col-xs-6 col-sm-4 mb50">*/
/*                 <div class="service-icon"> <img src="{{ asset('assets/img/icons/5-lg.png') }}" title="service icon"> </div>*/
/*                     <span class="fa-stack fa-4x hidden">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <h4 class="service-heading">Responsive Design</h4>*/
/*                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*             </div>*/
/*             <div class="col-xs-6 col-sm-4 mb50">*/
/*                 <div class="service-icon"> <img src="{{ asset('assets/img/icons/6-lg.png') }}" title="service icon"> </div>*/
/*                     <span class="fa-stack fa-4x hidden">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-lock fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 <h4 class="service-heading">Web Security</h4>*/
/*                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- Flat Features Section -->*/
/* <section id="features-flat" class="bg-light">*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-12 col-md-6 text-center">*/
/*                 <h2 class="section-heading mt70">World Class Developers</h2>*/
/*                 <h3 class="section-subheading text-muted mb30">This is basically like more advanced lorem ipsum.</h3>*/
/*                 <p class="text-muted mb50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>*/
/*                 <a href="#services" class="page-scroll btn btn-xl mr30 btn-primary pv15">Learn More</a>*/
/*                 <a href="#contact" class="page-scroll btn btn-xl btn-danger pv15">Contact Us</a>*/
/* */
/*             </div>*/
/*             <div class="hidden-sm hidden-xs col-md-6">*/
/*                 <img src="{{ asset('assets/img/features/flat_feature1.png') }}" title="iMac Image" class="img-responsive pull-right">*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </section>*/
/* */
/* <!-- Flat Features Section -->*/
/* <section id="features-flat">*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="hidden-sm hidden-xs col-md-6">*/
/*                 <img src="{{ asset('assets/img/features/flat_feature2.png') }}" title="iMac Image" class="img-responsive pull-left">*/
/*             </div>*/
/*             <div class="col-sm-12 col-md-6 text-center">*/
/*                 <h2 class="section-heading mt70">Mobile First Solutions</h2>*/
/*                 <h3 class="section-subheading text-muted mb30">This is basically like more advanced lorem ipsum.</h3>*/
/*                 <p class="text-muted mb50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>*/
/*                 <a href="#services" class="page-scroll btn btn-xl mr30 btn-primary pv15">Learn More</a>*/
/*                 <a href="#contact" class="page-scroll btn btn-xl btn-danger pv15">Contact Us</a>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </section>*/
/* */
/* <!-- Features Section -->*/
/* <section id="features">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading hidden">We're great at the little things</h2>*/
/*                 <h2 class="section-heading">We're here to help you succeed</h2>*/
/*                 <h3 class="section-subheading text-muted mbn">Our in house team can build the features and solutions you need.</h3>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-6">*/
/*             </div>*/
/*             <div class="col-md-12 hidden">*/
/*                 <!-- <img src="img/features/1.png" title="iMac Image" class="img-responsive pull-right mtn30"> -->*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </section>*/
/* */
/* <!-- Contact Section -->*/
/* <section id="contact">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">Get your free trial and explore the possibilities!</h2>*/
/*             </div>*/
/*         </div>*/
/*         <form name="sentMessage" id="contactForm" class="mw800 center-block clearfix" novalidate>*/
/*             <div class="form-group">*/
/*                 <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">*/
/*                 <p class="help-block text-danger"></p>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">*/
/*                 <p class="help-block text-danger"></p>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <button type="submit" class="btn btn-xl btn-block btn-wire">Subscribe</button>*/
/*             </div>*/
/*         </form>*/
/*         <p> By subscribing you agree to our terms and conditions. </p>*/
/* */
/*     </div>*/
/* </section>*/
/* */
/* <!-- Footer -->*/
/* <footer id="footer">*/
/*     <div class="container mw850">*/
/*         <div class="row">*/
/*             <div class="col-md-6 text-left">*/
/*                 <span class="copyright text-muted">Copyright &copy; <b>KampWeb</b> 2016</span>*/
/*             </div>*/
/*             <div class="col-md-6 text-right">*/
/*                 <ul class="list-inline social-buttons">*/
/*                     <li><a href="#"><i class="fa fa-twitter"></i></a>*/
/*                     </li>*/
/*                     <li><a href="#"><i class="fa fa-facebook"></i></a>*/
/*                     </li>*/
/*                     <li><a href="#"><i class="fa fa-linkedin"></i></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-4 hidden">*/
/*                 <ul class="list-inline quicklinks">*/
/*                     <li><a href="#">Privacy Policy</a>*/
/*                     </li>*/
/*                     <li><a href="#">Terms of Use</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* */
/* */
/* <!-- About Section (timeline/hidden) -->*/
/* <section id="about" class="hidden">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">About</h2>*/
/*                 <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <ul class="timeline">*/
/*                     <li>*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-responsive img-circle" src="{{ asset('assets/img/about/1.jpg') }}" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                                 <h4>2009-2011</h4>*/
/*                                 <h4 class="subheading">Our Humble Beginnings</h4>*/
/*                             </div>*/
/*                             <div class="timeline-body">*/
/*                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="timeline-inverted">*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-responsive img-circle" src="{{ asset('assets/img/about/2.jpg') }}" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                                 <h4>March 2011</h4>*/
/*                                 <h4 class="subheading">An Agency is Born</h4>*/
/*                             </div>*/
/*                             <div class="timeline-body">*/
/*                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li>*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-responsive img-circle" src="{{ asset('assets/img/about/3.jpg') }}" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                                 <h4>December 2012</h4>*/
/*                                 <h4 class="subheading">Transition to Full Service</h4>*/
/*                             </div>*/
/*                             <div class="timeline-body">*/
/*                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="timeline-inverted">*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-circle img-responsive" src="{{ asset('assets/img/about/4.jpg') }}" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                                 <h4>July 2014</h4>*/
/*                                 <h4 class="subheading">Phase Two Expansion</h4>*/
/*                             </div>*/
/*                             <div class="timeline-body">*/
/*                                 <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="timeline-inverted">*/
/*                         <div class="timeline-image">*/
/*                             <h4>Be Part*/
/*                                 <br>Of Our*/
/*                                 <br>Story!</h4>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!-- Team Section (hidden) -->*/
/* <section id="team" class="bg-light hidden">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">The Team You Need</h2>*/
/*                 <h3 class="section-subheading text-muted">Lorem amet ipsum dolor sit consectetur.</h3>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-4">*/
/*                 <div class="team-member">*/
/*                     <img src="{{ asset('assets/img/team/1.jpg') }}" class="img-responsive" alt="">*/
/*                     <ul class="list-inline social-buttons">*/
/*                         <li><a href="#"><i class="fa fa-twitter"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-facebook"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-linkedin"></i></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <h4>Kay Garland</h4>*/
/*                     <p class="text-muted">Lead Designer</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <div class="team-member">*/
/*                     <img src="{{ asset('assets/img/team/2.jpg') }}" class="img-responsive" alt="">*/
/*                     <h4>Larry Parker</h4>*/
/*                     <p class="text-muted">Lead Marketer</p>*/
/*                     <ul class="list-inline social-buttons">*/
/*                         <li><a href="#"><i class="fa fa-twitter"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-facebook"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-linkedin"></i></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <div class="team-member">*/
/*                     <img src="{{ asset('assets/img/team/3.jpg') }}" class="img-responsive" alt="">*/
/*                     <h4>Diana Pertersen</h4>*/
/*                     <p class="text-muted">Lead Developer</p>*/
/*                     <ul class="list-inline social-buttons">*/
/*                         <li><a href="#"><i class="fa fa-twitter"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-facebook"></i></a>*/
/*                         </li>*/
/*                         <li><a href="#"><i class="fa fa-linkedin"></i></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                 <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!--Call to Action Section (hidden) -->*/
/* <section id="call-to-action" class="hidden">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">Portfolio</h2>*/
/*                 <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* */
/* <!-- Portfolio Modals -->*/
/* <!-- Use the modals below to showcase details about your portfolio projects! -->*/
/* */
/* <!-- Portfolio Modal 1 -->*/
/* <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <div class="modal-body">*/
/*                         <!-- Project Details Go Here -->*/
/*                         <h2>Project Name</h2>*/
/*                         <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>*/
/*                         <img class="img-responsive" src="{{ asset('assets/img/portfolio/roundicons-free.png') }}" alt="">*/
/*                         <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>*/
/*                         <p>*/
/*                             <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="#">exampleDomain.com</a>, or you can purchase the 1500 icon set <a href="#">here</a>.</p>*/
/*                         <ul class="list-inline">*/
/*                             <li>Date: July 2014</li>*/
/*                             <li>Client: Round Icons</li>*/
/*                             <li>Category: Graphic Design</li>*/
/*                         </ul>*/
/*                         <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Portfolio Modal 2 -->*/
/* <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <div class="modal-body">*/
/*                         <h2>Project Heading</h2>*/
/*                         <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>*/
/*                         <img class="img-responsive img-centered" src="{{ asset('assets/img/portfolio/startup-framework-preview.png') }}" alt="">*/
/*                         <p><a href="#">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>*/
/*                         <p>You can preview Startup Framework <a href="#">here</a>.</p>*/
/*                         <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Portfolio Modal 3 -->*/
/* <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <div class="modal-body">*/
/*                         <!-- Project Details Go Here -->*/
/*                         <h2>Project Name</h2>*/
/*                         <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>*/
/*                         <img class="img-responsive img-centered" src="{{ asset('assets/img/portfolio/treehouse-preview.png') }}" alt="">*/
/*                         <p>Treehouse is a free PSD web template built by <a href="#">Example Person</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>*/
/*                         <p>You can download the PSD template in this portfolio sample item at <a href="#">exampleDomain.com</a>.</p>*/
/*                         <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Portfolio Modal 4 -->*/
/* <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <div class="modal-body">*/
/*                         <!-- Project Details Go Here -->*/
/*                         <h2>Project Name</h2>*/
/*                         <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>*/
/*                         <img class="img-responsive img-centered" src="{{ asset('assets/img/portfolio/golden-preview.png') }}" alt="">*/
/*                         <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="#">Example Person</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>*/
/*                         <p>You can download the PSD template in this portfolio sample item at <a href="#">exampleDomain.com</a>.</p>*/
/*                         <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Portfolio Modal 5 -->*/
/* <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <div class="modal-body">*/
/*                         <!-- Project Details Go Here -->*/
/*                         <h2>Project Name</h2>*/
/*                         <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>*/
/*                         <img class="img-responsive img-centered" src="{{ asset('assets/img/portfolio/escape-preview.png') }}" alt="">*/
/*                         <p>Escape is a free PSD web template built by <a href="#">Example Person</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>*/
/*                         <p>You can download the PSD template in this portfolio sample item at <a href="#">exampleDomain.com</a>.</p>*/
/*                         <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- Portfolio Modal 6 -->*/
/* <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">*/
/*     <div class="modal-content">*/
/*         <div class="close-modal" data-dismiss="modal">*/
/*             <div class="lr">*/
/*                 <div class="rl">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2">*/
/*                     <div class="modal-body">*/
/*                         <!-- Project Details Go Here -->*/
/*                         <h2>Project Name</h2>*/
/*                         <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>*/
/*                         <img class="img-responsive img-centered" src="{{ asset('assets/img/portfolio/dreams-preview.png') }}" alt="">*/
/*                         <p>Dreams is a free PSD web template built by <a href="#">Example Person</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>*/
/*                         <p>You can download the PSD template in this portfolio sample item at <a href="#">SampleDomain.com</a>.</p>*/
/*                         <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <!-- jQuery -->*/
/* <!-- <script src="js/vendor/jquery.js"></script> -- Local Version -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/* <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* */
/* <!-- Bootstrap Core JavaScript -->*/
/* <!-- <script src="js/vendor/bootstrap.min.js"></script> -- Local Version -->*/
/* <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>*/
/* */
/* <!-- Contact Form JavaScript -->*/
/* <script src="{{ asset('assets/js/vendor/jqBootstrapValidation.js') }}"></script>*/
/* <script src="{{ asset('assets/js/contact_me.js') }}"></script>*/
/* */
/* <!-- Custom Theme JavaScript -->*/
/* <script src="{{ asset('assets/js/main.js') }}"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
