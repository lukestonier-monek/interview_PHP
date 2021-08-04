# Requirements
You should have installed already in VS code extensions that will allow the example to run.
- PHP Server (Right click a php file to start server)
- Postman (Use postman to send the requests, an example will request will be provided)

# Prerequisite
Ensure the example backend is running correctly using the test request button in the example page (Right click 'testServer.php' and serve with PHP)

# Task Overview
Your task is to complete a user storage system.
The application must be able to add new users, view current users and update details for a user.
The UserService class currently fetches all users and supports adding new users
Saved users cant have users at the same postcode

# Extra Information
- The PHP api should be RESTfull.
- You can create as many PHP classes as you wish.
- All request/response data should be JSON.

# Example Request
METHOD: POST
URL: http://localhost:3000/php/add-user.php
BODY:
{
    "name": "Luke Stonier",
    "age": 23,
    "postCode": "ST7 2DF"
}