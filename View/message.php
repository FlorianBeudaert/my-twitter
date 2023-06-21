<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Messages</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <?php include './Header.php'?>
</head>
<body class="bg-gray-100">
  <div class="container mx-auto flex justify-center items-center h-screen">
    <div class="chat w-80 h-[400px] rounded-lg shadow-lg bg-white">
      <div class="chat-header flex items-center justify-between px-4 py-2 bg-gray-200 rounded-t-lg">
        <h3 class="text-lg font-medium">Chat</h3>
        
        <div class="flex justify-between">
          <button class="bg-orange-500 text-white hover:bg-orange-600 focus:outline-none rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20">
              <path d="M5 10h10" stroke="currentColor" stroke-width="2"/>
            </svg>
          </button>
          <div class="mr-1"></div>
          <button class="bg-red-500 text-white hover:bg-red-600 focus:outline-none rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 stroke-current stroke-2" viewBox="0 0 20 20">
              <path d="M5.5 5.5l9 9M5.5 14.5l9-9"/>
            </svg>
          </button>
        </div>
                
      </div>
      <div class="chat-history h-full overflow-y-auto px-4 py-2">
        <!-- Messages go here -->
      </div>
      <div class="chat-message flex items-center px-4 py-2">
        <input class="flex-1 mr-2.5 p-2 rounded-full border border-gray-200 focus:outline-none" type="text" placeholder="Type your message...">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 focus:outline-none">Send</button>
      </div>
    </div>
  </div>
  <script src="../script/message.js"></script>
</body>

</html>