<!DOCTYPE html>
<html>
<head>
    <title>Send Notification</title>
    <style>
      body {
        background-color: #f2f2f2;
        margin: 20px;
      }
      * {
        font-family: Arial, Helvetica, sans-serif;
      }
      label {
        margin: 20px;
        font-size: 22px;
      }
      textarea {
        margin: 20px;
        width: 500px;
        height: 6em;
        font-size: 20px;
      }
    .submit-btn {
      margin-left: 426px;
      width: 100px;
      height: 50px;
      font-size: 20px;
      text-transform: uppercase;
    }
  </style>
  
</head>
<body>
    <form method="POST" action="/notification">
        @csrf
        <div>
            <label for="message">Enter notification message:</label><br>
            <textarea id="message" name="message"></textarea>
        </div>
        <div>
            <input class="submit-btn" type="submit" value="Send">
        </div>
    </form>
</body>
</html>
