
            <footer>
                <div id="left-footer">
                    <h3>Quick Links</h3>
                    <p>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                        </ul>
                    </p>
                </div>

                <div id="right-footer">
                    <h3>Follow me on </h3>
                    <div id="social-media-footer">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <label>This website is developed by Alain</label>
                </div>
            </footer>
        </main>
        <?php wp_footer() ?>
    </body>
</html>

<?php if(!is_front_page()) {?>
            </main>
        <?php } ?>