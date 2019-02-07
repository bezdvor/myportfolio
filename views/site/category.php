<section>
    <div class="row headRow">
        <div class="col-2">
            <a href="/">
                <ul style="margin-bottom: -3px; margin-top: -5px;">
                    <li class="headerMainItem">
                        <a href="/"><i class="fas fa-home" style="font-size: 4rem; color: #F26101"></i></a>
                    </li>
                </ul>
            </a>
        </div>
        <div class="col-10 no-gutters">
            <ul class="headerList">
                <?php foreach ($categories as $categoryItem) { ?>
                    <li class="headerItem"><a
                                href="/<?= $categoryItem['id']; ?>"><?= $categoryItem['name']; ?></a>
                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
    <div class="w-100 headBackLine"></div>
    <div class="row">
        <div class="col-sm-12">
            <!--                <pre>-->
            <!--                    --><?//= var_dump($designList); ?>
            <!--                </pre>-->
            <?php foreach ($designList as $design): ?>
                <div class="desCard">
                    <div class="imgWrap"><img class="imgnews" src="<?= $design['img']; ?>"
                                              alt="<?= $design['title']; ?>"></div>
                    <div class="destextbody">
                        <h3 class="destitle"><?= $design['title']; ?></h3>
                        <p class="destext"><?= $design['descr']; ?></p>
                    </div>
                    <div class="centerWrap"><a class="myBtn" href="/design/<?= $design['id']; ?>">Подробнее…</a></div>
                </div>

            <?php endforeach; ?>
        </div>
</section>
