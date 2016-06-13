<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b2d5e8c1f8c35023ea2d67dbd26f951081d58cd4a96db73a650cdbde4f1920a2 extends Twig_Template
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
        $__internal_a57d390f072898a29bdf0e8670b8cd264f4e3bd1df187e538b8dbfb3d0e58e81 = $this->env->getExtension("native_profiler");
        $__internal_a57d390f072898a29bdf0e8670b8cd264f4e3bd1df187e538b8dbfb3d0e58e81->enter($__internal_a57d390f072898a29bdf0e8670b8cd264f4e3bd1df187e538b8dbfb3d0e58e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a57d390f072898a29bdf0e8670b8cd264f4e3bd1df187e538b8dbfb3d0e58e81->leave($__internal_a57d390f072898a29bdf0e8670b8cd264f4e3bd1df187e538b8dbfb3d0e58e81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
