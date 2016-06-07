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
        $__internal_96995b4c86dbc501adf29712f5262c347e14f62fb85336e130fae2a83e7fd5ce = $this->env->getExtension("native_profiler");
        $__internal_96995b4c86dbc501adf29712f5262c347e14f62fb85336e130fae2a83e7fd5ce->enter($__internal_96995b4c86dbc501adf29712f5262c347e14f62fb85336e130fae2a83e7fd5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_96995b4c86dbc501adf29712f5262c347e14f62fb85336e130fae2a83e7fd5ce->leave($__internal_96995b4c86dbc501adf29712f5262c347e14f62fb85336e130fae2a83e7fd5ce_prof);

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
