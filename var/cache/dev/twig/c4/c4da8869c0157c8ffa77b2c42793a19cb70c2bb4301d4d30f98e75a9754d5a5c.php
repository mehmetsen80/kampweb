<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_329803b048c7f705ed9de633aa71e71b16f35dbf27a3773d386940c1b014df81 extends Twig_Template
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
        $__internal_456c5f87f3367f1a1e0824e51b667fff4f49ff385bb23bbcb6a6b85575254dd4 = $this->env->getExtension("native_profiler");
        $__internal_456c5f87f3367f1a1e0824e51b667fff4f49ff385bb23bbcb6a6b85575254dd4->enter($__internal_456c5f87f3367f1a1e0824e51b667fff4f49ff385bb23bbcb6a6b85575254dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_456c5f87f3367f1a1e0824e51b667fff4f49ff385bb23bbcb6a6b85575254dd4->leave($__internal_456c5f87f3367f1a1e0824e51b667fff4f49ff385bb23bbcb6a6b85575254dd4_prof);

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
