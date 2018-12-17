<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:FormTheme:form_simple.html.php');

?>
<?php
$view['slots']->start('primaryFormContent');
/** @var \MauticPlugin\MauticRecommenderBundle\Entity\Recommender $recommender */
$recommender = $entity;
?>
<div class="row">
    <div class="col-md-4">
        <?php echo $view['form']->row($form['name']); ?>
    </div>
    <div class="col-md-4">
        <?php echo $view['form']->row($form['template']); ?>
    </div>
    <div class="col-md-4">
        <?php echo $view['form']->row($form['filter']); ?>
        <?php echo $view['form']->row($form['filters']); ?>
    </div>
</div>

<div class="ide">
    <?php echo $view['form']->rest($form); ?>
</div>


<?php $view['slots']->stop(); ?>

