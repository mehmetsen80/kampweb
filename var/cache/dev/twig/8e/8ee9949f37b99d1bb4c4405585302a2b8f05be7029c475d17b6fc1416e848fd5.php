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
        $__internal_cfd326fb5cb0ae4f9d12e40cbca3b2bce89f931aa4dafefc74301545dc7e5100 = $this->env->getExtension("native_profiler");
        $__internal_cfd326fb5cb0ae4f9d12e40cbca3b2bce89f931aa4dafefc74301545dc7e5100->enter($__internal_cfd326fb5cb0ae4f9d12e40cbca3b2bce89f931aa4dafefc74301545dc7e5100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_cfd326fb5cb0ae4f9d12e40cbca3b2bce89f931aa4dafefc74301545dc7e5100->leave($__internal_cfd326fb5cb0ae4f9d12e40cbca3b2bce89f931aa4dafefc74301545dc7e5100_prof);

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
