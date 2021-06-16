# Requirements
You shaould have installed already in VS code 2 extensions that will allow the example to run.
- Live Server (Botton right of VS code 'Go Live' button to start server)
- PHP Server (Right click a php file to start server)

# Prerequisite
Ensure you can view the [example view](http://127.0.0.1:5500/frontend/exampleView.html)  
Ensure the example backend is running correctly using the test request button in the example page

# Task Overview
Your task is to complete the user register system that has been started based on the example
The application must be able to add new users, view current users and update details for a user using asynchronous programming. The page can **not** reload to fetch data.

Once functionality is complete, use CSS to change the layout to be better suited for mobile (The example will not show this)

# Task Breakdown
Using the register details form in the [index file](http://127.0.0.1:5500/frontend/index.html) use PHP to add the details to the database.  
  
Users can be either a Monek user or a non Monek user, When the Monek User checkbox is selected 2 extra fields should appear below to be filled out, and hidden again once unchecked. You should use the provided User + MonekUser classes provided.  
(There are errors in the classes that need to be corrected before they will function correctly)  
The monek specific details should **not** be sent to the server if the checkbox is unticked

A list of registered users will appear under the 'Registered Users' section, the template for the list items is below, you can decide how you wish to implement this.

```html
<button class="list-group-item" type="button" data-bs-toggle="modal" data-bs-target="#userModal" data-bs-whatever="{USER ID}">
    <strong>{NAME}</strong>
    <p>{USER TYPE}</p>
</button>
```

Each list item can be clicked to open a modal where details of the user can be viewed and updated in the database, the click event is already setup.

# Extra Information
- The PHP api should be RESTfull.
- You can create as many PHP classes as you wish.
- Validation is not required.
- Injection attacks should be prevented.
- The database has been setup and you will recieve details on how to connect.
- The table is NOT complete, and you will need to finish it yourself.
- All response data should be JSON.

Your controllers will use the code below in order to interface with the database
```python
<?php
    header('Access-Control-Allow-Origin: *');
    require_once('./SQL.php');
    SQL::Connect();

    /* YOUR CODE HERE */
?>
```

To use the SQL class we have two methods, both methods take in a string SQL query and will return a corresponding result or null if no result is available.  
(If you get an error from these methods todo with connection, please let a member of the team know)
- GetResult - Returns a single stdClass result from the DB
- GetResults - Returns an array of stdClass results from the DB
  
# DB access
You can access the database here: [PHPMyAdmin](https://www.phpmyadmin.co/sql.php?db=sql4415051&table=Users&pos=0)
- Host: sql4.freesqldatabase.com
- Database name: sql4415051
- Database user: sql4415051
- Database password: DpGlFGBfdq
- Port number: 3306