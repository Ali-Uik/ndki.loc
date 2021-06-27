<li class="menu-item-has-dropdown">
    <a href="<?= \yii\helpers\Url::to(['category/view','id'=>$category['id'] ])?>">
        <?= $category['description'] ?>
    </a>
    <?php if(isset($category['child'])): ?>
    <ul>
        <a href="#"><?= $this->getMenuHtml($category['child'])?></a>
    </ul>
    <?php endif;?>
</li>