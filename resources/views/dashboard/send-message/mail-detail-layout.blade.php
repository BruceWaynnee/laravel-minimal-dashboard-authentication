<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title> Laravel 8.x Test Sending Email From Dashboard </title>

</head>

<body>
    <!-- a preview message body content that is used to as an layout to send to gmail -->
    <div class="message-preview-body-content-wrapper">
        <h2>Hi This Is A Test Sending Message From Laravel 8.x Dashboard Form</h2>
        <hr>
        <p>My Name Is:    {{ $details['name'] }}</p>
        <p>My Email Is:   {{ $details['email'] }}</p>
        <p>My Contact is: {{ $details['contact'] }}</p>
        <p>Message :      {{ $details['message'] }}</p>
        <hr>
        <p>Thank You!</p>
    </div>
</body>

</html>
