function darkMode() {
    var element = document.body;
    var content = document.getElementById("DarkModetext");
   
    element.className = "dark-mode";
    content.innerText = "Dark Mode is ON";
  }
  function lightMode() {
    var element = document.body;
    var content = document.getElementById("DarkModetext");
    
    element.className = "light-mode";
    content.innerText = "Dark Mode is OFF";
  }
  function blueMode() {
    var element = document.body;
    var content = document.getElementById("DarkModetext");

    element.className = "blue-mode";
    content.innerText = "Blue Mode is ON";
  }