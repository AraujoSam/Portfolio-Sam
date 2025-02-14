<?php
$items = [
    
    [
        'href' => 'https://github.com/AraujoSam',
        'texto' => 'Github'
    ],

    [
        'href' => 'https://www.linkedin.com/in/samuel-araujo-3210261b6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app',
        'texto' => 'LinkedIn'
    ],

]

?>


<header class=" text-white mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between ">

    <!--logo-->
    <div class="font-bold text-xl text-cyan-600">
        🎲 Meu Portfolio
    </div>


    <!--Links-->
    <div>
        <ul class="flex gap-x-3 font-medium ">
        <a href="#Projects" class="hover:underline">Projetos</a>

            <?php foreach ($items as $item): ?>

                <li>
                    <a href="<?= $item['href'] ?>" target="_blank" class="hover:underline"><?= $item['texto'] ?></a>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>


</header>