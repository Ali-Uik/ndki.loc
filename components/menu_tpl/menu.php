<li class="menu-item-has-dropdown">
    <a href="#">
        <?= $category['description'] ?>
    </a>
    <?php if(isset($category['child'])): ?>
    <ul>
        <li><a href="#"><?= $this->getMenuHtml($category['child'])?></a></li>
    </ul>
    <?php endif;?>
</li>