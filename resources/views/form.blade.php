<!DOCTYPE html>
<html>
<head>
    <title>Send Notification</title>
</head>
<body>
    <form method="POST" action="/notification">
        @csrf
        <div>
            <label for="message">Message:</label><br>
            <input type="text" id="message" name="message">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>
