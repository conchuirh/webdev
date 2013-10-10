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

##Most used tags

Beside the tags discussed above these are the tags you will use the most

####Header Tags
    <h1></h1>
    <h2></h2>
    ....
    <h6></h6>
These tags are like headings of a article or titles, the text inside the tags will become large and bold.
As the number after the h increases the size of the text will decrease, meaning 1 is the largest header and 
6 is the smallest header

####Paragraph tag
    <p></p>
This tag is used for plain text. A paragraph of text

####Image tag
    <img src="">
This is a self closing tag, the path to the image file is specified between the quotes for the src(source)

####Lists

There are two kinds of lists, unordered
    
    <ul>
      <li>First</li>
      <li>Second</li>
    </ul>
This creates a bullet point list

The second kind is ordered list which creates a numbered list
    
    <ol>
      <li>First</li>
      <li>Second</li>
    </ol>
In both lists the "li" tag stands for list item and is used to add items to a list.

####DIV and SPAN
    <div>This goes up top</div>
    <div>This goes<span> down low</span></div>
The "div" tag is used to divide the page into parts, while the span tag is used to wrap around content for easier styling using CSS

####Tables
    <table>
      <thead>
        <tr>
          <th>Day</th>
          <th>Year</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jan 2.</td>
          <td>1994</td>
        </tr>
      </tbody>
    </table>

Tables are made up of two distinct parts like a html document, the head and body called thead and tbody respectively.
The "tr" tag make a row and the "th" and "td" tags make columns in the head and body.

CSS
------
Cascading Style Sheets (CSS) is used to style HTML. CSS is made up of attributes that can be assigned values that will modify HTML.
For example text has the attribute "font-size" that can be assigned a pixel size value like a normal text editor, so for 12 point font it would be "font-size: 12px"

CSS can be used in three ways, Inline, in "style tags" within the head of a page, or in a external css file

####Inline
Inline styling works by inserting the style into the opening tag of an HTML element.

    <p style="font-size: 24px">This is text.</p>
This will create a paragraph with text size 24 pixels.


JavaScript
------