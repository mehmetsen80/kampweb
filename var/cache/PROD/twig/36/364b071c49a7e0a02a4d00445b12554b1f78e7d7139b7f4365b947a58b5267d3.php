<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_66f2832d96cd91478ef6e6f0aa5550fd0eb6ad786bb1eaa6542c5546ebd9c608 extends Twig_Template
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
        $__internal_c1c97a7a46667ac0a38e1dacf5bf1e17ef1e57d49fd4e9cb11d3ab1d4b857823 = $this->env->getExtension("native_profiler");
        $__internal_c1c97a7a46667ac0a38e1dacf5bf1e17ef1e57d49fd4e9cb11d3ab1d4b857823->enter($__internal_c1c97a7a46667ac0a38e1dacf5bf1e17ef1e57d49fd4e9cb11d3ab1d4b857823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c1c97a7a46667ac0a38e1dacf5bf1e17ef1e57d49fd4e9cb11d3ab1d4b857823->leave($__internal_c1c97a7a46667ac0a38e1dacf5bf1e17ef1e57d49fd4e9cb11d3ab1d4b857823_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
