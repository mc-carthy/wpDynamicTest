<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_To_Wordpress
 */

?>

<?php wp_footer(); ?>

    <!-- Signup -->
    <section id="signup" data-type="background" data-speed="6">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>
                        Are you ready to take your coding skills to the 
                        <strong>
                            next level
                        </strong>
                        ?
                    </h2>
                    <p>
                        <a href="#" class="btn btn-success btn-lg btn-block">
                            Yes, sign me up!
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container">
            <div class="col-sm-3">
                <p>
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="Bootstrap To Wordpress"/>
                </p>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">Resources</a>
                        </li>
                        <li>
                            <a href="">Contact</a>
                        </li>
                        <li class="signup-link">
                            <a href="">Sign up now</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <p class="pull-right">
                    &copy; 2017 Brad Hussey
                </p>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="my-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="my-modal-label">
                        <i class="fa fa-envelope"></i> Subscribe to our mailing list.
                    </h4>
                </div>
                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best selling courses, <em>for free!</em></p>
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label for="subscribe-name" class="sr-only">Your first name</label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your First Name"/>
                        </div>
                        <div class="form-group">
                            <label for="subscribe-email" class="sr-only">Your email address</label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="Your Email Address"/>
                        </div>
                        <input type="submit" class="btn btn-danger" value="Subscribe!"/>
                        <hr/>
                        <p>
                            <small>
                                By providing your email you consent to receiving occasional promotional emails &amp; newsletters.
                                <br/>
                                No spam. Just good stuff. We respect your privacy &amp; you can unsubscribe at any time.
                            </small>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/main.js"></script>

</body>
</html>
