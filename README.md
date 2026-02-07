# Simple Web Login
This project is a very simple web application that demonstrates user registration and login using HTML forms and a MySQL database. The example site is titled “Noone’s Web Page” and shows how to store user details in a registration table and authenticate them through a basic login form.
​

# Project Overview
Provides a login page where existing users can enter their email and password.
​

Includes a registration page for new users, linked from the login page.
​

Stores registration details (first name, last name, gender, email, password, phone number) in a MySQL database via phpMyAdmin.
​

After a successful login, users are redirected to a simple welcome page with the message “Welcome to Noone’s Website”.
​

# Main Pages
**login.html**

Fields: Email Address, Password.

Button: “login”.

Link: “Don’t have an account? Register” which navigates to the registration page.
​

**register.html**

Fields: First Name, Last Name, Gender (Male/Female/Others), Email, Password, Phone Number.

Button: “Submit” to send the data to the backend and store it in MySQL.
​

**welcome.html**

Displays: “Welcome to Noone’s Website”.

Shown after the user logs in with valid credentials.
​

**Database**
Uses MySQL with phpMyAdmin to manage the database.
​

Example database name: rajaindh.

Example table: registration.

**Typical columns in registration table:**

id (primary key)

firstName

lastName

gender

email

password

number (phone number)
​

**Workflow**
User opens the login page (login.html).

If they are a new user, they click Register and are redirected to the registration form (register.html).
​

After filling in the form and clicking Submit, their details are inserted into the MySQL registration table.
​

The user can then return to the login page, enter the registered email and password, and submit the form.
​

On successful validation, the app redirects the user to welcome.html.
​
