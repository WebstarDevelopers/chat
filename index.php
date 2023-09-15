<!DOCTYPE html>
<html>
<head>
    <title>Real-Time Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .chat-container {
            width: 400px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #chat-box {
            height: 300px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }

        #message {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 0 0 8px 8px;
            border-top: none;
        }

        #send {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        #send:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div id="chat-box"></div>
        <input type="text" id="message" placeholder="Type your message">
        <button id="send">Send</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
