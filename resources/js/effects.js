

/*
 * Typing Animation
 */


if (document.getElementById("title") != null) {
    var title = "Lucas van Borkulo";
    var element = document.getElementById("title");

    for (var i = 0; i < title.length; i++) {
        (function (i, title) {
            setTimeout(function () {
                var nextChar = title.charAt(i);

                element.textContent += nextChar;
            }, i * 400);
        })(i, title);
    }
}