<?php 
    get_header();
    the_post();
?>
<section class="mt-8">
    <section class="mt-8">
        <p class="mx-10 mr-6 text-blanc md:text-2xl mb-10 xl:mx-32 md:mx-10  2xl:mx-52 2xl:my-20 ">
            <?php the_field("title_section");?>
        </p>
        <p class="mx-10 mr-6 text-blanc md:text-2xl mb-10 xl:mx-32 md:mx-10  2xl:mx-52 2xl:my-20 ">
            <?php the_field("title_p1");?>
        </p>
        <p class="mx-10 mr-6 text-blanc md:text-2xl mb-10 xl:mx-32 md:mx-10  2xl:mx-52 2xl:my-20 ">
            <?php the_field("title_p2");?>
        </p>
        <p class="mx-10 mr-6 text-blanc md:text-2xl mb-10 xl:mx-32 md:mx-10  2xl:mx-52 2xl:my-20 ">
            <?php the_field("title_name");?>
        </p>
    </section>
</section>
<section class="bg-vert md:h-[56rem] pt-5 pb-5 ">
    <video controls class="justify-center m-auto my-auto md:h-[50rem]">
  <source src="<?php the_field("video_jeux")?>" type="video/mp4">
  Your browser does not support the video tag.
</video>
</section>
<!-- la partie comment fonction le jeux -->
<section class="xl:mx-32 md:mx-10  2xl:mx-52">
    <div class="flex items-center m-10 md:gap-32 gap-16 text-justify flex-col lg:flex-row ">
        <p class="md:text-2xl sm:text-sm "> <?php the_field("p_desc1")?></p>
        <img src="<?php the_field("img1")?>" class="md:w-[5rem] w-[10rem] lg:w-[30rem] xl:w-[50rem]">
    </div>
    <div class="flex items-center m-10 md:gap-32 gap-16 text-justify flex-col lg:flex-row">
        <p class="md:text-2xl text-justify sm:text-xs"> <?php the_field("p_desc2")?></p>
        <img src="<?php the_field("img2")?>" class="md:w-[5rem] w-[10rem] lg:w-[30rem] xl:w-[50rem]">
    </div>
</section>
<!-- la partie personnage -->
<section class="md:my-10 mx-auto  md:py-8 xl:mx-32 md:mx-10 2xl:mx-52">
    <h2 class="flex md:text-8xl font-jolly justify-center pt-10 text-5xl pb-10"><?php the_field("characters")?></h2>
    <div class="mx-auto bg-vert md:pb-8 pb-2  ">
        <section class="flex justify-between items-center gap-10 pb-5 ">
          <img src="<?php the_field("character1_img")?>" alt="Image initiale" id="image" class="md:w-[2rem] w-[2rem] lg:w-[5rem]">
          <div>
          <h2 class="md:text-3xl xl:text-5xl font-bold  sm:text-left text-xl mt-5 md:mt-0" id="title"><?php the_field("character1")?>
          </h2>
          <p class="md:text-xl xl:text-2xl  sm:text-left text-sm mt-5" id="text"><?php the_field("character1_desc")?> </p>
          </div>
        </section>
        <section class="flex justify-between items-center gap-10 pb-5">
          <img src="<?php the_field("character2_img")?>" alt="Image initiale" id="image" class="md:w-[2rem] w-[2rem] lg:w-[5rem]">
          <div>
          <h2 class="md:text-3xl xl:text-5xl font-bold  sm:text-left text-xl mt-5 md:mt-0" id="title"><?php the_field("character2")?>
          </h2>
          <p class="md:text-xl xl:text-2xl  sm:text-left text-sm mt-5" id="text"><?php the_field("character2_desc")?> </p>
          </div>
        </section>
        <section class="flex justify-between items-center gap-10 pb-5">
          <img src="<?php the_field("character3_img")?>" alt="Image initiale" id="image" class="md:w-[2rem] w-[2rem] lg:w-[5rem]">
          <div>
          <h2 class="md:text-3xl xl:text-5xl font-bold  sm:text-left text-xl mt-5 md:mt-0" id="title"><?php the_field("character3")?>
          </h2>
          <p class="md:text-xl xl:text-2xl  sm:text-left text-sm mt-5" id="text"><?php the_field("character3_desc")?> </p>
          </div>
        </section>
        <section class="flex justify-between items-center gap-10 pb-5">
          <img src="<?php the_field("character4_img")?>" alt="Image initiale" id="image" class="md:w-[2rem] w-[2rem] lg:w-[5rem]">
          <div>
          <h2 class="md:text-3xl xl:text-5xl font-bold  sm:text-left text-xl mt-5 md:mt-0" id="title"><?php the_field("character4")?>
          </h2>
          <p class="md:text-xl xl:text-2xl  sm:text-left text-sm mt-5" id="text"><?php the_field("character4_desc")?> </p>
          </div>
        </section>
        <section class="flex justify-between items-center gap-10 pb-5">
          <img src="<?php the_field("character5_img")?>" alt="Image initiale" id="image" class="md:w-[2rem] w-[2rem] lg:w-[5rem]">
          <div>
          <h2 class="md:text-3xl xl:text-5xl font-bold  sm:text-left text-xl mt-5 md:mt-0" id="title"><?php the_field("character5")?>
          </h2>
          <p class="md:text-xl xl:text-2xl  sm:text-left text-sm mt-5" id="text"><?php the_field("character5_desc")?> </p>
          </div>
        </section>
    </div>
  </section>
<!-- la partie Soundcrack -->
<section class="m-10 xl:mx-32 md:mx-10 2xl:mx-52">
    <h3 class="text-4xl mb-3"><?php the_field("soundtrack")?></h3>
    <div class="flex gap-8">
        <p class="md:text-2xl text-sm 2xl:text-3xl md:mt-11 mt-5"><?php the_field("soundtrack_p1")?>
        </p>
        <p class="md:text-2xl text-sm 2xl:text-3xl md:mt-11 mt-5"><?php the_field("soundtrack_p2")?>
        </p>
    </div>
</section>
<!-- la partie FAQ -->
<section class="bg-vert">
    <h3 class="flex md:text-8xl font-jolly justify-center pt-10 text-5xl"><?php the_field("faq")?></h3>
    <div class="flex flex-wrap  justify-center  m-10  lg:mx-32 ">
        <div class="bg-blanc gap-9 text-vert md:w-96 w-64 px-5 py-4 mb-10 md:mx-6 mx-2 ">
            <h4 class="md:text-2xl text-noir font-semibold mb-8  "><?php the_field("faq_title1")?></h4>
            <p class="md:text-2xl"><?php the_field("faq_asw1")?></p>
        </div>
        <div class="bg-blanc text-vert md:w-96 w-64 px-5 py-4 mb-10 md:mx-6 mx-2">
            <h4 class="md:text-2xl text-noir font-semibold mb-8 "><?php the_field("faq_title2")?></h4>
            <p class="md:text-2xl"><?php the_field("faq_asw2")?></p>
        </div>
        <div class="bg-blanc text-vert md:w-96 w-64 px-5 py-4 mb-10 md:mx-6 mx-2">
            <h4 class="md:text-2xl text-noir font-semibold mb-8 "><?php the_field("faq_title3")?></h4>
            <p class="md:text-2xl"><?php the_field("faq_asw3")?></p>
        </div>
        <div class="bg-blanc text-vert md:w-96 w-64 px-5 py-4 mb-10 md:mx-6 mx-2">
            <h4 class="md:text-2xl text-noir font-semibold mb-8 "><?php the_field("faq_title4")?></h4>
            <p class="md:text-2xl"><?php the_field("faq_asw4")?></p>
        </div>
    </div>
</section>
<?php get_footer(); ?>