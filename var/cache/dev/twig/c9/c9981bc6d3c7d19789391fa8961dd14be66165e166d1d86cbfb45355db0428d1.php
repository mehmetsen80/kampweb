<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cf1a14c51a75538c6c96af5c1211fb1291e08a5d707153fa4d5cf2970789ccd0 extends Twig_Template
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
        $__internal_54fe43a2935aa50ae737d4d9574312e6629d01d508e30f068ab0d855ca92fa9c = $this->env->getExtension("native_profiler");
        $__internal_54fe43a2935aa50ae737d4d9574312e6629d01d508e30f068ab0d855ca92fa9c->enter($__internal_54fe43a2935aa50ae737d4d9574312e6629d01d508e30f068ab0d855ca92fa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_54fe43a2935aa50ae737d4d9574312e6629d01d508e30f068ab0d855ca92fa9c->leave($__internal_54fe43a2935aa50ae737d4d9574312e6629d01d508e30f068ab0d855ca92fa9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
