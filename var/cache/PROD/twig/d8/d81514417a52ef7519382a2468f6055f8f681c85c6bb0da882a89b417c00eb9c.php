<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_10e275a667c99508caaf9321ade8a1b0d5856b7354b5ae765ffcced9dbbb4354 extends Twig_Template
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
        $__internal_6dc139fd8793dd9b57fe536993f44358fbdd26a483595eff2ae1ebc0e12fc002 = $this->env->getExtension("native_profiler");
        $__internal_6dc139fd8793dd9b57fe536993f44358fbdd26a483595eff2ae1ebc0e12fc002->enter($__internal_6dc139fd8793dd9b57fe536993f44358fbdd26a483595eff2ae1ebc0e12fc002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6dc139fd8793dd9b57fe536993f44358fbdd26a483595eff2ae1ebc0e12fc002->leave($__internal_6dc139fd8793dd9b57fe536993f44358fbdd26a483595eff2ae1ebc0e12fc002_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
