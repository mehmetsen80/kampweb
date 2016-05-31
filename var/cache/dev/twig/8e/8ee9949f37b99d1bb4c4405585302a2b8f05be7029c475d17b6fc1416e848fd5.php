<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5dab4a6a05952a4583bb390c8a906b5ec7ef4335a0214676eb31bd6d5bc008be extends Twig_Template
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
        $__internal_d239e48455e55272dbce81920c18f048fe34c9a16b00a405050ad97b9f080a1d = $this->env->getExtension("native_profiler");
        $__internal_d239e48455e55272dbce81920c18f048fe34c9a16b00a405050ad97b9f080a1d->enter($__internal_d239e48455e55272dbce81920c18f048fe34c9a16b00a405050ad97b9f080a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d239e48455e55272dbce81920c18f048fe34c9a16b00a405050ad97b9f080a1d->leave($__internal_d239e48455e55272dbce81920c18f048fe34c9a16b00a405050ad97b9f080a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
