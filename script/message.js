const chatHistory = document.querySelector('.chat-history');
const messageInput = document.querySelector('.chat-message input[type="text"]');
const sendButton = document.querySelector('.chat-message button');

sendButton.addEventListener('click', () => {
  const message = messageInput.value;
  if (message !== '') {
    const messageElement = document.createElement('div');
    messageElement.textContent = message;
    messageElement.classList.add('chat-message-sent');
    const timeElement = document.createElement('span');
    timeElement.textContent = ' - ' + new Date().toLocaleTimeString();
    messageElement.appendChild(timeElement);
    chatHistory.appendChild(messageElement);
    messageInput.value = '';
  }
});

messageInput.addEventListener('keydown', (event) => {
  if (event.key === 'Enter') {
    sendButton.click();
  }
});