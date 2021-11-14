## Php site

### Description

- a simple php site student details are posted to a server then after some validation the data is stored in a mysql database after which you are redirected to the homepage with details of the students in students table populated in a html table.

### build

- html
- css
- php
- mysql

### Configuration

- head on to the config folder
- open file connect.php

```sql
$conn = mysqli_connect('domain','username','password','dbName');

```

where:

1. domain -> localhost
2. username -> your mysql username you setup in the accounts profile
3. password -> your password
4. dbName -> database name
