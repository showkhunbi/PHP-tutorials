<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="./contact form files/style.css">
</head>

<body>
    <div class="container">
        <h1>Get in touch</h1>
        <p>please fill the fields</p>
        <form action="./contact form files/contact.php" method="post">
            <input type="text" name="name" placeholder="Full name" class="text">
            <input type="email" name="email" placeholder="Email" class="email">
            <input type="text" name="subject" placeholder="subject" class="subject">
            <textarea name="message" id="" placeholder="Message"></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>