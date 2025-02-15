<html>
 <head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="./assets/style/contact.css">

 </head> 
 <body>
 <?php require 'sidbar.php'; ?>
<div class="container">
 <div class="row">   
<div class="col-md-6">    
<h6 >contact me</h6>
<p> Email:<a href="mailto:malakshcs98@gmail.com">malakshcs98@gmail.com</a></p>
<p>Phone:<a href="tel:+776371467">+776371467</a></p>
<p>Address: Amman, Ajloun, Jordan</p>
</div>
<div class="col-md-6">
<h6>Follow Me on Linkedin:</h6>
<ul>
<li><a href="https://www.linkedin.com/in/malak-shwayat-a725b0215?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app

">LinkedIn</a></li> 
</ul>
<div>
</div>

</div>


<div class="contact-form">
        <h2>Send me a Message</h2>
        <form action="contactmalak.php" method="post">
            <input type="text" name="name" placeholder="Full Name" required><br>
            <input type="email" name="email" placeholder="Email Address" required><br>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea><br>
            <button type="submit">Send</button>
        </form>
</div>
 </body>  
</html>