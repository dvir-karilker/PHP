<?php

// PHP Comments are written using:
//  "//" - For a Single Line

/* "/*" - For
          Multi
          Line
          Comments */


/* PHP Scripts starts with "<?php" and ends with "?>" : 
<?php
// PHP code goes here
?>
*/


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


// PHP

