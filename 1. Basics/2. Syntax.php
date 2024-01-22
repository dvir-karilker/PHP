<?php

// PHP Comments are written using:
//  "//" - For a Single Line

// "/*" and "*/" - 
        /* For
           Multi
           Line
           Comments */


/* PHP Scripts starts with "<?php" and ends with "?>" : 
<?php
// PHP code goes here
?>
*/


// At the end of each line of PHP executable code, you should add a semi-colon (" ; ").



// PHP can be written Before, Inside and After your HTML Code.
// For Example:

/* 
1. Inside -
          <!DOCTYPE html>
          <html>
          <body>
                    <?php echo "Hello Friend!"; ?>
          </body>
          </html>


2. Before -
          <?php
               echo "Hello Friend";
          ?>
          <!DOCTYPE html>
          <html>
          <body> 
          .......



3. After - 
          <!DOCTYPE html>
          <html>
          <body>
          </body>
          </html>
<?php echo "Hello Friend!"; ?>
*/

/*
The Differences Are:
1. Before - PHP Code/Scripts before the HTML code will be sent to the browser before any HTML content, potentially affecting the page layout.
2. Inside - The PHP Code/Scripts will be part of the rendered content.
3. After - Writing the PHP after the HTML body won't display it visually, but it may cause issues as headers might have already been sent to the browser.
*/


// In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
// For example all these "echo" statments will perform the same:
ECHO "Hello World!";
echo "Hello World!";
EcHo "Hello World!";

// BUT! Variables are case-sensitive!
// For example, $color is not the same as $COLOR (we will learn about Variables in unit 3 under "1. Basics/3. Variables&Data_Types.php").


?>
