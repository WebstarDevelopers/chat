// script.js
document.addEventListener("DOMContentLoaded", function () {
    const chatBox = document.getElementById("chat-box");
    const messageInput = document.getElementById("message");
    const sendButton = document.getElementById("send");

    sendButton.addEventListener("click", function () {
        const message = messageInput.value;
        if (message.trim() !== "") {
            sendMessage(message);
            messageInput.value = "";
        }
    });

    function sendMessage(message) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "chat.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                chatBox.innerHTML += xhr.responseText;
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        };
        xhr.send("message=" + message);
    }

    function loadChat() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "load_chat.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                chatBox.innerHTML = xhr.responseText;
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        };
        xhr.send();
    }

    // Load chat initially and refresh it every second
    loadChat();
    setInterval(loadChat, 1000);
});
