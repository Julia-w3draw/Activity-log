# Activity-log



View WHO visited the web page  WHEN, FROM WHAT (hardware/platform).



Requires:

- access to the web server and PHP enabled hosting

- permissions on files and folders



On accessing index.php data from the Navigator object is sent via GET to the server (log.php file) where the php code writes by appending in the log.txt file. The logged data can be viewed by accessing show_log.php . The chosen directory structure is: in the domain/web page root folder you have, of course, index.php. Then the 3 files related to log are stored in ~/LOG/* .
	

The data chosen by me is: Date, Client IP,  Platform width, Platform height, Screen width, Screen height, Hostname, Platform, Browser name, Browser App Version, Browser language.


To view the output access in webbrowser 'yourProject'/LOG/show_log.php
