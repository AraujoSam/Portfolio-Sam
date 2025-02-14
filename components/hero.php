<?php
$items = [

    [
        'href' => 'https://www.linkedin.com/in/samuel-araujo-3210261b6?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app',
        'src' => 'img\linkedin.png',
        'alt' => 'linkedIn logo'
    ],

    [
        'href' => 'https://github.com/AraujoSam',
        'src' => 'img\github.png',
        'alt' => 'Github logo',
    ]

]

?>

<section class="flex gap-x-3">
    <!--título e descrição-->
    <div class="w-2/3">

        <h1 class="text-3xl font-bold">Olá, meu nome é Samuel</h1>
        <p class="text-xl leading-7 pt-6">Sou desenvolvedor web com experiência em PHP e Laravel, atuando no desenvolvimento e manutenção de sistemas.
            Tenho familiaridade com código legado e boas práticas para garantir estabilidade e eficiência.
            Atualmente, estou aprimorando minhas habilidades com novos estudos e tecnologias, sempre buscando agregar valor aos projetos em que atuo.
        </p>
        <p>
            <!--Links social media-->
        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($items as $item): ?>
                <li><a href="<?= $item['href'] ?>" target="_blank"><img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"></a></li>
            <?php endforeach; ?>
        </ul>
        </p>
    </div>

    <!--avatar image-->
    <div class="w-1/3 flex items-center justify-center">
        <div><img src="img/avatar.svg" alt="Avatar icon" class="h-60 -mt-6 hover:animate-pulse"></div>

    </div>
</section>