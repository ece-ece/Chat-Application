# Chat-App
This project is a basic chat application developed by me and my friends.We use XAMPP because XAMPP provides the Apache web server and MySQL database. Also provided is PhpMyadmin which gives a GUI tool for managing your MySQL databases.
A WebSocket is a persistent connection between a client and server so we decided to use websocket.
You can change theme and password.Also you can delete your account.And you can see changes in database.

To Use Websocket:
- php -q php-socket.php
- php -S 0.0.0.0:8000 index2.php

The parameter in the first command means quite and php runs the socket silently.Your terminal will be frozen after the first command, so either a second command
use terminal or type php -q php-socket.php&. The & sign makes it run in the background.

The second command allows you to run index2.php on port 8000.

### index.php
![image](https://user-images.githubusercontent.com/81179702/124590670-15df8c80-de64-11eb-91c4-77374cb9b3f3.png)

### Tables are posts and signup.
![image](https://user-images.githubusercontent.com/81179702/124589242-6f46bc00-de62-11eb-9c1f-6e1cde79304f.png)

### Chat Example 
![image](https://user-images.githubusercontent.com/81179702/124590443-d1ec8780-de63-11eb-8cad-398bb28ff357.png)

### Datase in posts table
![image](https://user-images.githubusercontent.com/81179702/124589809-1297d100-de63-11eb-964e-6a1643e25b4c.png)









