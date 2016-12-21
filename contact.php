
<?php include "inc/top.inc"; ?>

<body>
<?php include "inc/nav.inc"; ?>
    <section id="third">
<h1>Contact Form</h1>

    <body>       
    <form class="form" method="post" action="database-write.php" name="contact" onsubmit="return(validate());">

    <div class="name">
        <label for="name"> Name: </label>
        <input type="text" name="name" id="name">
    </div>

    <div class="email">
        <label for="Email"> Email: </label>
        <input type="text" name="email" id="email">
    </div>

    <div class="phone">

        <label for="phone"> Phone:</label> 
        <input type="text" name="phone" id="phone">
    </div>

    <div class="message">
         <label for="phone"> Message:</label> 
        <textarea name="text" id="message", placeholder="Write something to us" /></textarea>
    </div>
    <p class = "text">
    <input type="submit" value="Send">  
    </p>
    </form>
    <br>
    <a href="index.php">Back to the Index</a>   
    </section>
        <script type="text/javascript">
        function validate() {
            if(document.myForm.name.value == "") {
                alert("Please provide your name!");
                document.myForm.name.focus();
                return false;
            }

            if(document.myForm.email.value == "") {
                alert("Please provide your Email!");
                document.myForm.email.focus();
                return false;
            }

            validateEmail();

            if(document.myForm.phone.value == "" || isNaN( document.myForm.phone.value ) || document.myForm.phone.value.length != 10) {
                alert("Please provide a valid 10-digit phone number!");
                document.myForm.phone.focus();
                return false;
            }
        }
        </script>
        <script type="text/javascript">
        function validateEmail() {
            var emailID = document.myForm.email.value;
            atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");

            if (atpos < 1 || ( dotpos - atpos < 2 )) {
                alert("Please enter correct email ID!")
                document.myForm.email.focus();
                return false;
            }
            return(true);
        }
        </script>

    </head>

   </body>
</html>
</body>
</html>