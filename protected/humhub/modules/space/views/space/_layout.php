<?php
$space = $this->context->contentContainer;
?>
<div class="container space-layout-container">
    <div class="row">
        <div class="col-md-12">
            <?php echo humhub\modules\space\widgets\Header::widget(['space' => $space]); ?>

        </div>
    </div>
    <div class="row">
        <?php if (isset($this->context->hideSidebar) && $this->context->hideSidebar) : ?>
            <div class="col-md-12 layout-content-container">
                <?php echo $content; ?>
            </div>
        <?php else: ?>
            <div class="col-md-12 layout-sidebar-container">
                <?php
                
                echo \humhub\modules\space\widgets\Sidebar::widget(['space' => $space, 'widgets' => [
                        [\humhub\modules\space\modules\manage\widgets\PendingApprovals::className(), ['space' => $space], ['sortOrder' => 20]],
                        [\humhub\modules\space\widgets\Members::className(), ['space' => $space], ['sortOrder' => 30]]
                ]]);
                
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>
