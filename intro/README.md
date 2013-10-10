Intro to HTML, CSS, and JavaScript
======


HTML(HyperText Markup Language)
------
HTML is a markup language used to format almost all websites. HTML provides the base for the design of a website.

HTML consists of tags that modify the content within the opening and closing tag. 
An example

    <p>I am text on a screen</p>
The letter p surrounded by angle brackets is the opening tag and the tag with the forward slash is the closing tag.
Most tags follow this format with the exception being the p is replaced with the name of the desired tag.

Some tags, referred to as self-closing tags, do not require a closing tag and do not wrap around content
For example, an image

    <img src="http:www.pictures.com/mysupercoolpicture1337">

This tag loads an image in the browser, the "src" is called an attribute and in this case can be set to the path of any image

Now lets look at a complete basic HTML file

    <!DOCTYPE html>
    <html>
      <head>
        <title>This appears in the tab</title>
      </head>
      <body>
        <h1>This is my first website</h1>
        <p>How does this look?</p>
      </body>
    </html>
    
Every HTML file will have 4 important parts:

--"!DOCTYPE html" always comes before the "html" tag. This tells the browser what version of HTML our site is using.

--"html" This tag specifies where our html will be written. Can be thought of as the bindign of a book, the opening tag
is the front cover and the closing tag is the back cover.

--"head" This tag covers the HTML that will run before the page loads the viewable content, 
used to load dependencies and place image and title in the tab on a browser

--"body" is the tag that covers the content that will load in the view of the browser
