<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <textarea name="feedback" cols="50" rows="10" placeholder="Feedback" required></textarea><br><br>
        <button type="submit">Submit feedback</button>
    </form>

    <?php

    if (isset($_POST['feedback'])) {
        $name = $_POST["name"];
        $to = $_POST["email"];
        $feedback = $_POST["feedback"];

        $subject = "Thank you for your feedback!";
        $body = "Thank you, $name! Here's what we got from you.\n" . $feedback;
        if(!mail($to, $subject, wordwrap($body,70)))
        {
            echo "Failed to send mail to " . $to;
        }

        $adminemail = "admin@company.com";
        $subject = "Feedback from $name";
        $body = "Received feedback from $name\n\nemail address: $to\n\nFeedback: $feedback";
        if(!mail($adminemail, $subject, wordwrap($body,70)))
        {
            echo "Failed to send mail to admin: " . $adminemail;
        }
    }

    ?>
</body>
</html>