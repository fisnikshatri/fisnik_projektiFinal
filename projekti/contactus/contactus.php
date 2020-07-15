<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0"/>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <div class="contact-form">
           <form action="contactform.php" method="post" class="contact-form">
           <div class="one">
           <h1>Contact Us</h1>
           <label for="">Emri dhe Mbiemri</label>
           <input id="name" type="text" name="name">

            <label for="">Email</label>
            <input id="mail" type="text" name="email">
    
            <label for="">Subject</label>
            <input type="text" name="subject">

            <label for="">Mesazhi</label>
            <textarea></textarea>

            <button type="submit" name="submit">Send</button>
            </form>
           </div>
       </div>
    </body>
</html>