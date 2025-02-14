<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Portfolio</title>
</head>

<body class="bg-slate-900 text-gray-200">

        <!--header-->
    <?php include('./components/header.php'); ?>


    <main class="mx-auto max-w-screen-lg min-h-20">

        <!--hero-->
        <?php include('./components/hero.php'); ?>

        <!--Projetos-->
        <section class=" space-y-3 py-6">
            <h2 class="text-2xl font-bold">Projetos</h2>

            <?php include('./components/projects.php');?>
         
        </section>
    </main>

    <footer class=" mx-auto max-w-screen-lg min-h-20">

        <div class="border-t border-gray-600 pt-5 text-gray-300 px-8">©Copyright <?=date('Y')?>. Construído pelo Sam ;)</div>

    </footer>





</body>

</html>