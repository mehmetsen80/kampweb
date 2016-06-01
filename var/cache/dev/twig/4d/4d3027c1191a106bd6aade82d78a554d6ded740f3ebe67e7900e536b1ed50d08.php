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
        $__internal_475d8bdc9b696a72ccc2a3e230f170241b12d776f68d14f8f525435421b5259e = $this->env->getExtension("native_profiler");
        $__internal_475d8bdc9b696a72ccc2a3e230f170241b12d776f68d14f8f525435421b5259e->enter($__internal_475d8bdc9b696a72ccc2a3e230f170241b12d776f68d14f8f525435421b5259e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_475d8bdc9b696a72ccc2a3e230f170241b12d776f68d14f8f525435421b5259e->leave($__internal_475d8bdc9b696a72ccc2a3e230f170241b12d776f68d14f8f525435421b5259e_prof);

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
