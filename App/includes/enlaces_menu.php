<ul>
    <li>
        <a href="<?=$_ENV['RUTA']?><?= $linkInicio ?>" title="<?= $menuInicio ?>">
            <img src="<?=$_ENV['RUTA']?>/assets/img/system/home-solid.svg" alt="<?= $menuInicio ?>" title="<?= $menuInicio ?>">
            <?= $menuInicio ?>
        </a>
    </li>

    <li><a href="<?=$_ENV['RUTA']?><?= $linkQuienesSomos ?>" title="<?= $menuQuienesSomos ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/person.svg" alt="<?= $menuQuienesSomos ?>" title="<?= $menuQuienesSomos ?>"><?= $menuQuienesSomos ?></a></li>

    <li><a href="<?=$_ENV['RUTA']?><?= $linkRestaurador ?>" title="<?= $menuRestaurador ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/furniture.svg" alt="<?= $menuRestaurador ?>" title="<?= $menuRestaurador ?>"><?= $menuRestaurador ?></a></li>

    <li>
        <a href="<?=$_ENV['RUTA']?><?= $linkPintor ?>" title="<?= $menuPintor ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/paint-brush-32-filled.svg" alt="<?= $menuPintor ?>" title="<?= $menuPintor ?>"><?= $menuPintor ?></a>
        <ul class="sublista">
            <li><a href="<?=$_ENV['RUTA']?><?= $linkPintorPisos ?>" title="<?= $menuPintorPisos ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/paint-brush-32-filled.svg" alt="<?= $menuPintor ?>" title="<?= $menuPintor ?>"><?= $menuPintorPisos ?></a></li>

            <li><a href="<?=$_ENV['RUTA']?><?= $linkPintorBalcones ?>" title="<?= $menuPintorBalcones ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/paint-brush-32-filled.svg" alt="<?= $menuPintor ?>" title="<?= $menuPintor ?>"><?= $menuPintorBalcones ?></a></li>
            
            <li><a href="<?=$_ENV['RUTA']?><?= $linkPintorHumedad ?>" title="<?= $menuPintorHumedad ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/paint-brush-32-filled.svg" alt="<?= $menuPintor ?>" title="<?= $menuPintor ?>"><?= $menuPintorHumedad ?></a></li>
        </ul>
    </li>

    <li><a href="<?=$_ENV['RUTA']?><?= $linkExpertise ?>" title="<?= $menuExpertise ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/house-check-fill.svg" alt="<?= $menuPintor ?>" title="<?= $menuPintor ?>"><?= $menuExpertise ?></a></li>

    <li><a href="<?=$_ENV['RUTA']?><?= $linkContacto ?>" title="<?= $menuContacto ?>"><img src="<?=$_ENV['RUTA']?>/assets/img/system/telephone-in-solid.svg" alt="<?= $menuPintor ?>" title="<?= $menuPintor ?>"><?= $menuContacto ?></a></li>
</ul>
