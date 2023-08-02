# User-Details-Form 
- video : https://github.com/Maxiatef/User-Details-Form/assets/93007990/57e54014-4a99-4aa4-8444-92a278044126
- MySQL-PHP <br>
- The User Details Form Project is a web application that allows users to fill out a form with their personal information, such as name, email, gender, and email subscription status. The project is built using HTML, CSS, SQL, PHP and serves as a simple example of form validation and data storage in a MySQL database.

## Features:
- User-Friendly Interface: The project provides a user-friendly interface where users can easily enter their details through input fields and select their gender and email subscription status using radio buttons and checkboxes.

- Form Validation: The application includes form validation to ensure that all required fields are filled before submitting the form. If any required field is left blank, the user will be prompted with an error message.

- Data Storage: Upon submission, the user data is stored in a MySQL database, ensuring that the information is safely retained for future reference.

- View User Details: The project includes a separate page to view the user details stored in the database. Users can access this page to see a table displaying the names, emails, genders, and email subscription status of all users who have submitted the form.

## How to use:
### Setting up the Database:
- Before using this application, make sure you have a MySQL database set up on your server or local environment. You will need the database name, username, and password to establish a connection.

### Database Configuration:
- Open the connect.php file in the project's root directory using a text editor or code editor.
- Locate line 28 in the file and replace "your_database_name_here" with the name of your MySQL database.

### Data Storage:
- The submitted user details will be stored in the MySQL database in the table named "users."
- The "users" table has columns for name, email, gender, and status.
- Once the data is successfully stored in the database, you will see the message "Form data submitted successfully!".


#### Note: 
- This application serves as a basic example of storing and retrieving user details using PHP and MySQL. It can be extended and customized according to specific project requirements. Always remember to ensure the security and integrity of the database when handling sensitive data.
