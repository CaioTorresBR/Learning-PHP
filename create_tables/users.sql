# -- creating users table inside our database ---

CREATE TABLE users (
    # our database will automatically handle every id, incrementing the number when we add a new user
	id INT(11) NOT NULL AUTO_INCREMENT,
    
    # if the user tries to declare more than 30 characaters, it will be cut
    username VARCHAR(30) NOT NULL, 

     # passwords tend to be bigger in length, due to security reasons
    pwd VARCHAR(255) NOT NULL,

    # emails tend to be bigger as well
    email VARCHAR(100) NOT NULL, 

    # CURRENT_TIME will assign the current time in the server, in case this value is not previousy assigned
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME, 
    
    # Primary key is basically a way to define which column inside this table that has to be unique
    PRIMARY KEY (id) 
    );

