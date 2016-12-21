       <?php include ("inc/top.inc"); ?>
 
    <body>
       <?php include ("inc/nav.inc"); ?>
        <center>
            <h1>Portfolio Page</h1>
            <h3>CSC 174 Advanced Front-end Web Development</h3>
            <br><br>
        </center>


        <ul class="thumbs">
            <li><a href="#thumb1" class="thumbnail" style="background-image: url('images/lab6.png')" >
                <h4>New York City</h4><span class="description">Lab6 CSS Architecture</span></a>
            </li>
            <li>
                <a href="#thumb2" class="thumbnail" style="background-image: url('images/lab7.png')"><h4>Pets</h4><span class="description">Lab7 Web Fonts</span></a>
            </li>
            <li>
                <a href="#thumb3" class="thumbnail" style="background-image: url('images/lab9.png')"><h4>Scuba Diving</h4><span class="description">Lab9 Principles of Page Design</span></a>
            </li>
            <li>
                <a href="#thumb4" class="thumbnail" style="background-image: url('images/lab11.png')"><h4>Wordpress Site</h4><span class="description">Lab11 Wordpress</span></a>
            </li>
            <li>
                <a href="#thumb5" class="thumbnail" style="background-image: url('images/project1.png')"><h4>Regional Food</h4><span class="description">Group Project1</span></a>
            </li>
            <li>
                <a href="#thumb6" class="thumbnail" style="background-image: url('images/project2.png')"><h4>New York Rangers</h4><span class="description">Group Project2</span></a>
            </li>

        </ul>

        <div class="portfolio-content">
            <div id="thumb1">
                <div class="media"><img src="images/lab6.png"/></div>
                <h1>Lab6</h1>
                <p>Your job is to replicate the comps as closely as possible using your own CSS. You must use a CSS strategy to name and organize your CSS rules.</p>
                <a href="http://www.urcsc170.org/lwang/lab06/" class="button">Learn More</a>
            </div>

            <div id="thumb2">
                <div class="media"><img src="images/lab7.png"/></div>
                <h1>Lab7</h1>
                <p>Your task is to replace all the fonts in the webpage.</p>
                <a href="http://www.urcsc170.org/lwang/lab07/" class="button">Learn More</a>
            </div>
            <div id="thumb3"> 
                <div class="media"><img src="images/lab9.png"/></div>
                <h1>Lab9</h1>
                <p>The purpose of this lab assignment is to work as a team of two to build a professionally styled single-paged (scrolly) website that follows the principles of good page design.</p>
                <a href="http://www.urcsc170.org/lwang/lab09/" class="button">Learn More</a>
            </div>

            <div id="thumb4">
                <div class="media"><img src="images/lab11.png"/></div>
                <h1>Lab11</h1>
                <p>The purpose of this lab assignment is to practice installing and using a popular Content Management System, Wordpress, and transferring it from a local development environment to a production web server.</p>
                <a href="http://www.urcsc174.org/lwang55/lab11/" class="button">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="images/project1.png"/></div>
                <h1>Project1</h1>
                <p>This team project pulls together the following skill sets that will be evaluated and graded based on content management, use of PHP includes, use of JavaScript, use and customization of a framework, and use of a team repository.</p>
                <a href="http://www.urcsc170.org/mlakis/project01/" class="button">Learn More</a>
            </div>

            <div id="thumb6">
                <div class="media"><img src="images/project2.png"/></div>
                <h1>Project2</h1>
                <p>This project requires each Project 1 team to work as a supplier for another team.</p>
                <a href="http://www.urcsc170.org/mlakis/project02/" class="button">Learn More</a>
            </div>        

        </div>

          

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/portfolio.jquery.js"></script>

        <script>
            $(document).ready(function() {
                $('.thumbs').portfolio({
                    cols: 3,
                    transition: 'slideDown'
                });
            });
        </script>   

    </body>
</html>
