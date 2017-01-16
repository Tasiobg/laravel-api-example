A basic RESTful API example I build using Laravel 5.3

Files added or changed in this project:

- routes/api.php
- app/Http/Controllers/EmployeeController.php
- app/Models/Employee.php
- app/Enums/ResponseStatusEnum.php

Database used:
- https://github.com/datacharmer/test_db
- https://dev.mysql.com/doc/employee/en/sakila-structure.html (diagram)

Example request and responses:  
GET http://myappname.app/api/employee/10011  
Response: {"status":"success","data":{"emp_no":10011,"birth_date":"1953-11-07","first_name":"Mary","last_name":"Sluis","gender":"F","hire_date":"1990-01-22"}}