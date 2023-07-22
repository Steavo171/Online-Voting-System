# Online Voting System

Online Voting System is a web-based application designed to facilitate electronic voting processes for various purposes, such as elections, surveys, or polls.
# Technologies Used 
    Frontend : HTML , CSS 
    Backend : PHP
    Database : MySQL 
# Installation

1. Install XAMPP or WAMPP.

2. Open XAMPP Control panal and start [apache] and [mysql] .

3. Download project from github( https://github.com/Steavo171/Online-Voting-System.git).

    OR follow gitbash commands <br>

    ```bash
        cd C:\\xampp\htdocs\
        git clone https://github.com/Steavo171/Online-Voting-System.git
        
    ```

4. Extract files in C:\xampp\htdocs.

5. Open link localhost/phpmyadmin

6. Click on new at side navbar.

7. Give a database name as (votingsystem) hit on create button.

8. Create a table named userdata containing a total of 8 attributes.

9. Attributes : id (int 11)[PRIMARY KEY] ; username varchar(100); mobile varchar(20) ; password varchar(100) ; photo varchar(100) ; standard enum('candidate','voter') ; status int(11) ; votes int(11).

10. NOTE - Here , the password field is not encrypted , it is in plain text format.

11. After creating table , open any browser and visit http://localhost/voting/index.php to get started.
