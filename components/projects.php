<?php

$project_portifolio = [
    [
        'color' => 'bg-blue-700',
        'style' => 'rounded',
        'padding' => 'py-1 px-2',
        'font' => 'font-semibold',
        'name' => 'PHP',
    ],

    [
        'color' => 'bg-violet-500',
        'style' => 'rounded',
        'padding' => 'py-1 px-2',
        'font' => 'font-semibold',
        'name' => 'HTML',
    ],

    [
        'color' => 'bg-green-600',
        'style' => 'rounded',
        'padding' => 'py-1 px-2',
        'font' => 'font-semibold',
        'name' => 'CSS',
    ],

];


?>


<div class="bg-slate-800 rounded-lg p-3 flex items-center" id="Projects">

    <div class=" w-1/5"><img class="h-28 py-1 px-2" src="img/icon_project1.png" alt="project one icon"></div>
    <div class=" w-4/5 space-y-3">

        <div class="flex gap-3 justify-between">

            <h3 class="font-semibold text-xl hover:text-blue-300"> <a href="https://github.com/AraujoSam/Portfolio1.0/tree/master" target="_blank">📈Portfólio</a><span class="text-xs text-gray-400 italic"> (finalizado)</span></h3>

            <div>
                <?php foreach ($project_portifolio as $item): ?>
                    <span class="<?= $item['color'] ?> <?= $item['style'] ?> <?= $item['padding'] ?>  <?= $item['font'] ?>"><?= $item['name'] ?></span>
                <?php endforeach; ?>


            </div>

        </div>

        <p class="leading-6">
            Este é o meu portfólio pessoal, onde apresento um pouco sobre mim, minhas habilidades e projetos desenvolvidos.
            O site foi criado para servir como uma vitrine do meu trabalho como desenvolvedor web, destacando minha experiência com PHP e Laravel.

        </p>


    </div>

</div>