<?php get_header(); 

    while(have_posts()){
        the_post();

    ?>
            <h2 class="page-heading"><?php the_title()?></h2>
            <div>
                <section id="blogpost">
                    <div class="card">
                        <div class="card-meta-blogpost">
                            Posted by Admin on 01/01/2020 in 
                            <a href="#">Alain</a>
                        </div>
                       
                        <div class="card-introduction">
                            <h3>The introduction</h3>
                            <p>Lorem Ipsum DOlor amast</p>
                        </div>

                     
                    </div>
                      
                </section>
            </div>

            <div class="pagination">
                <a href="#">Prev</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">Next</a>
            </div>

            

          
            <aside id="sidebar">
                <h3>Sidebar Heading</h3>
                <p>Lorem</p>
            </aside>
          

<?php } ?>
            <?php get_footer(); ?>