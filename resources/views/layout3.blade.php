<div class="messageContainer">
    <div id="mainContainer">
        <p>Hello! I am a helper bot, I am here to provide assistance!</p>
        <div class="inputContainer">
            <input type="text" id="userMessage" placeholder="Type your message...">
            <button id="sendMessage">Send</button>
        </div>
    </div>
</div>

<script>
    document.getElementById('sendMessage').addEventListener('click', function() {
        var userMessage = document.getElementById('userMessage');
        var message = userMessage.value;
        if (message.trim() !== '') {
            console.log('Message sent:', message);
            userMessage.value = '';
        }
    });

    document.getElementById('userMessage').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            document.getElementById('sendMessage').click();
        }
    });
</script>


