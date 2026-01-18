# Login-Logout-System
This project demonstrates a basic user authentication system using HTML, CSS, and PHP without connecting to any database. The system allows a user to log in with a valid username and password, access a protected dashboard, and securely log out using PHP sessions.
_______________________________________________________________________________________________________________

🔹 Login Page

The project begins with a Login form where the user must enter:

💠Username

💠Password

After clicking the Login button, the form data is submitted to PHP for validation.
If the username and password match the predefined credentials, the user is successfully logged in. Otherwise, an error message is displayed:

Invalid Username or Password
__________________________________________________________________________________________________________________

🔹 Session-Based Authentication

Once the credentials are verified, PHP creates a session for that logged-in user. Sessions are used to maintain login state so the user remains logged in across pages.
____________________________________________________________________________________________________________________

🔹 Dashboard Page  

After successful login, the user is redirected to a Dashboard page.
This page displays a welcome message such as:

Welcome, [username]! You have successfully logged in.

The Dashboard page is protected, meaning it cannot be accessed without login. If someone tries to open it directly without authentication, PHP redirects them back to the login page.
_______________________________________________________________________________________________________________________

🔹 Logout Functionality

The Dashboard includes a Logout button.
When the user clicks Logout:

💠The session is destroyed

💠The user is redirected to the Login page

💠Access to the Dashboard is no longer allowed without re-login
__________________________________________________________________________________________________________________________
<img width="1920" height="1080" alt="Screenshot (209)" src="https://github.com/user-attachments/assets/023792cf-0cd9-445a-9e46-c9f701e34d6c" />

<img width="1920" height="1080" alt="Screenshot (210)" src="https://github.com/user-attachments/assets/62ce0aa1-2a2a-4c16-a6b8-d508f2613e34" />


