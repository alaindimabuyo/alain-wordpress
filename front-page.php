<?php get_header(); ?>
        <div id="banner">
            <h1>Alain Coding</h1>
            <h3>I am a designer and developer</h3>
        </div>

        <main>
            <a href="<?php echo site_url('/blog') ?>">
                <h2 class="section-heading">All Blogs</h2>
            </a>
            
              <section>

                <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_per_page' => 2,
                );

                $blogposts = new WP_Query($args);

                while($blogposts->have_posts()){
                    $blogposts->the_post();
                


                ?>
                <div class="card-container">
                <div class="card">
                    <div class="card-image">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"" alt="Card Image">
                        </a>
                    </div>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title();?></h3>
                    <a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30) ?>
                    </p>
                    <a href="<?php the_permalink()?>" class="btn-readmore">Read More</a>
                </div>
                </div>
                <?php
                    }

                wp_reset_query(); ?>
            </section>

            

            <h2 class="section-heading"> All Projects</h2>
            <section>
            <?php 
                $args = array(
                    'post_type' => 'project',
                    'post_per_page' => 2,
                );

                $projects = new WP_Query($args);

                while($projects->have_posts()){
                    $projects->the_post();
                


                ?>
                 <div class="card-container">
                <div class="card">
                    <div class="card-image">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"" alt="Card Image">
                        </a>
                    </div>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title();?></h3>
                    <a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30) ?>
                    </p>
                    <a href="<?php the_permalink()?>" class="btn-readmore">Read More</a>
                </div>
                </div>
                <?php
                    }

                wp_reset_query(); ?>
            </section>

            <h2 class="section-heading">
                Source Code
            </h2>
            <section id="section-source">
                <p>Lorem ipsum keme keme keme 48 years planggana ng klapeypey-klapeypey effem intonses jowa doonek na ng Gino kasi boyband shonga boyband bokot sangkatuts chapter bakit ng keme keme wiz nakakalurky planggana pamin kabog sa bakit at nang sa ganders valaj shokot bokot sangkatuts kasi na ang intonses na boyband ano 48 years chipipay nakakalurky wiz fayatollah kumenis jowabelles bakit jowabelles majubis at tungril boyband shonga juts antibiotic buya mabaho kasi na ang warla jutay nang shonget shongaers ng cheapangga shonga-shonga at bakit na ang cheapangga ng thunder at bakit ano sa pranella kasi borta sa kabog kirara kemerloo ma-kyonget ang nang daki sangkatuts intonses otoko keme keme na nakakalurky at wasok guash ugmas oblation at ang buya krung-krung.</p>
                <a href="#" class="btn-readmore">Github Profile </a>
            </section>

<?php get_footer(); ?>