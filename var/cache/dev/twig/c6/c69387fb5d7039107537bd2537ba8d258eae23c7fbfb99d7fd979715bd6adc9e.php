<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd830645f71324f88b43cf6cabe738ce8f814076abc97ae9190fe72295822a34 extends Twig_Template
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
        $__internal_98f4e7af751b159e25c201ad0039beb792e6f4549d5e90e8707e06e8d9911a40 = $this->env->getExtension("native_profiler");
        $__internal_98f4e7af751b159e25c201ad0039beb792e6f4549d5e90e8707e06e8d9911a40->enter($__internal_98f4e7af751b159e25c201ad0039beb792e6f4549d5e90e8707e06e8d9911a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_98f4e7af751b159e25c201ad0039beb792e6f4549d5e90e8707e06e8d9911a40->leave($__internal_98f4e7af751b159e25c201ad0039beb792e6f4549d5e90e8707e06e8d9911a40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
