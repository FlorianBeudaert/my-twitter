function checkLength() {
    var maxLength = 140;
    var currentLength = document.getElementById("tweets").value.length;

    if (currentLength > maxLength) {
        document.getElementById("tweets").value = document.getElementById("tweets").value.substring(0, maxLength);
        currentLength = maxLength;
    }

    var remainingChars = maxLength - currentLength;
    document.getElementById("charCount").innerHTML = remainingChars;
}