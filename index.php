
<?php include ("inc/top.inc"); ?>

<body>

    <?php include ("inc/nav.inc"); ?>


    <!-- Top Section -->
    <section id="first">
        <div class="container">

            <h1>Final Portfolio</h1>

            <div class="content">
            <p>CSC 174 Advanced Front-end Web Development</p>
            <a id="detail" href="#second">More Details</a>
                

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">
            <header>
            <h1>Lerong Wang</h1>
            </header>
            <div class="content">
            <article>
                  <div class="intro">          
                  <h2>Education</h2> 
                  <p> 
                    I am currently a senior at University of Rochester, double majoring in Math and Psychology. I am an aspiring data scientist. 
                  </p>
                  </div>
                  
                  <div class="rochester">                  
                  <h2>University of Rochester</h2>  
                  <img src="images/ur.jpg" alt="ur"> 
                  <p> 
                  The University of Rochester (commonly referred to as U of R or UR) is a private, nonsectarian, research university in Rochester, New York. The university grants undergraduate and graduate degrees, including doctoral and professional degrees. The university has six schools and various interdisciplinary programs.                   
                  </p>
                  </div>

                  <div class="data">
                  <h2>About Data Science</h2>
                  <p>                 
                    Data science, also known as data-driven science, is an interdisciplinary field about scientific processes and systems to extract knowledge or insights from data in various forms, either structured or unstructured, which is a continuation of some of the data analysis fields such as statistics, machine learning, data mining, and predictive analytics, similar to Knowledge Discovery in Databases (KDD).
                  </p>
                  </div>
            </article>

            <aside>
                 <h3>Courses I am taking</h3>
                 <p>
                    Double majoring in mathematics and psychology, I also took some computer science courses. I took Italian as my humanity cluster.
                 </p>

                 <ul>
                   <li>CSC 174</li>
                   <li>CSC 262</li>
                   <li>PSY 181</li>
                   <li>WRT 275</li>
                   <li>CSP 264</li>
                 </ul>
              
            </aside>               

            </div><!-- .content -->

       </div><!-- .container -->

    </section>


<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>
