document.addEventListener("DOMContentLoaded", function(event) {
    var thumbnailElement = document.getElementById("smart_thumbnail");

    thumbnailElement.addEventListener("click", function() {

        // Grab the reference to the image element on my dom using its ID
        var thumbnailElement = document.getElementById("smart_thumbnail");

        if (thumbnailElement.className == "") {
            // write here the code that will execute if the image is big
            thumbnailElement.classList += "small smallimage";
        }
        else{
            thumbnailElement.className = "";
        }
        
        
      });


       /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://http-3-239-116-238.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
});





































//  This project will guide you to make your own website about a topic of your choice -->
// Subject = ?  -->
// Directory = /var/www/html
// My Page
{/* <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>

    </main>
    <footer>
        
    </footer>
</body>
</html> */}