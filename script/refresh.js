function refreshTweets() {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Set up the HTTP request
    xhr.open('GET', '../View/Aff_Tweet.php', true);

    // handle the response
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // update section in selector
        var tweetSection = document.querySelector('html');
        tweetSection.innerHTML = xhr.responseText;
      }
    };

    // Send the HTTP request
    xhr.send();
  }

  //every X seconds
  setInterval(refreshTweets, 1000);