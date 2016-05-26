<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6a43df48b759e8a72607a1cbefc67885a855a559a44d91d2db1d5848d429566a extends Twig_Template
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
        $__internal_55869bbe0f572047eebea1f610fb9bb24a72108b9655e62672d67d14c8e7de23 = $this->env->getExtension("native_profiler");
        $__internal_55869bbe0f572047eebea1f610fb9bb24a72108b9655e62672d67d14c8e7de23->enter($__internal_55869bbe0f572047eebea1f610fb9bb24a72108b9655e62672d67d14c8e7de23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_55869bbe0f572047eebea1f610fb9bb24a72108b9655e62672d67d14c8e7de23->leave($__internal_55869bbe0f572047eebea1f610fb9bb24a72108b9655e62672d67d14c8e7de23_prof);

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
