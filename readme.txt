When porting to other web server: 

1: Ensure that an appropriate PHP server is running alongside apache. Originally developed on XAMPP 8.2.4
2: check permissions for files, images should be readable by anyone but other files should have the min
   permission to be functional. 
3: Check files menu.php and header.php to ensure that the directory values line up. May be different 
   on different server setups.