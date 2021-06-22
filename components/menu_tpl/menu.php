<li>
    <a href="">
        <?= $category['description'] ?>
    </a>
    <?php if(isset($category['child'])): ?>
        <ul>
            <?= $this->getMenuHtml($category['child'])?>
        </ul>
    <?php endif;?>
</li>