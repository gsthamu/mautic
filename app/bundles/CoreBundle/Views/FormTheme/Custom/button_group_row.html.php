<?php
$hasErrors     = count($form->vars['errors']);
$feedbackClass = ('POST' == $app->getRequest()->getMethod() && !empty($hasErrors)) ? ' has-error' : '';

?>
<div class="row">
    <div class="form-group col-xs-12 <?php echo $feedbackClass; ?>">
        <?php echo $view['form']->label($form, $label); ?>
        <div class="choice-wrapper">
            <?php echo $view['form']->widget($form); ?>
            <?php echo $view['form']->errors($form); ?>
        </div>
    </div>
</div>
