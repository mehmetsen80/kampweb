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
        $__internal_b173220615383e758854a8bf97fdc7381c033afb406ef98d62a549d17aad3621 = $this->env->getExtension("native_profiler");
        $__internal_b173220615383e758854a8bf97fdc7381c033afb406ef98d62a549d17aad3621->enter($__internal_b173220615383e758854a8bf97fdc7381c033afb406ef98d62a549d17aad3621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b173220615383e758854a8bf97fdc7381c033afb406ef98d62a549d17aad3621->leave($__internal_b173220615383e758854a8bf97fdc7381c033afb406ef98d62a549d17aad3621_prof);

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
