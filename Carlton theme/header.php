<html lang="fr">
<?php wp_head(); ?>
<body class="bg-noir text-blanc">
    <header class="bg-fond bg-no-repeat 2xl:h-[80rem] bg-cover md:h-[40rem] h-[20rem]">
        <div class="flex flex-col md:pt-52 pt-20 items-center justify-center font-JLodger gap-5 bg-norepeat">
            <h1  class="text-xl md:text-5xl 2xl:text-8xl "><?php the_field("title");?></h1>
            <a href="<?php the_field("title_btn");?>" class="bg-vert py-4  px-5  text-noir text-2xl bg-vert md:text-4xl 2xl:text-6xl">
            <?php the_field("btn");?>
        </a>
        </div>

    </header>