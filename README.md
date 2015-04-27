# LoginModule
This is a login module for the mini cms  you can find here : https://github.com/DL02/mycms

## Important
Please read __entirely__ this readme and follow **carefully** the setting steps to be sure
everything works fine for you. 

##About this module
You'll find here, the .php and .js files to add or to replace in the original _mycms_ 
and  a .sql file for your database.
This module is dedicated exclusively to secure login to the administration part of 
the site. Authorized users must be added directly into the database.
In this module I kind of break the mvc model of the website to avoid modifying too much file
from the cms and to simplify installation.


### Setting Steps :
1. Get the mini cms from : https://github.com/DL02/mycms
2. Install the database
3. Clone or download all the file from this _login module_
4. Add to the cms root the directory called authentification with DbAuth.php file.
5. Merge my ajax directory with yours **or** add to the ajax directory the files:
    * deconnexion.php 
    * login.js
6. Merge my config directory with yours **or** replace the function.php file from your 
cms by mine
7. Merge the view directory **or** replace your top.inc.php file situated in view-admin-
layout by mine
8. Replace your admin.php file by mine.
9. In php my admin or any software you use for your database, import the users.sql file 
in your database.  
10. You can now test the login on the site with the test user:
    * username: marcel
    * password: marcel

##Warning
When you get this module it comes with the test user. **Before using this module for your website** 
be sure to **delete the test user** and add a personal authorized one in your database rescpecting
this:

1. Add a new user 
2. Choose a username.
3. Choose a password and choose **sha1** encryption before validating.
    * if you forget this, _the module won't work_ as it's _designed for sha1 encryption only_
    
##Ressources
To create this module I got help from this website : http://www.grafikart.fr/

