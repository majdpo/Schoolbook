CREATE DATABASE schoolbook;
USE schoolbook;
CREATE TABLE post (
                         id INT NOT NULL AUTO_INCREMENT,
                         auteur VARCHAR(50),
                         title VARCHAR(50),
                         bericht VARCHAR(256),
                        datepost varchar(20),
                        imageSize decimal,
                        imageNewName varchar(256),
                         PRIMARY KEY (id)
);

USE schoolbook;
ALTER TABLE post
    ADD like NUMERIC;

USE schoolbook;
CREATE TABLE comments (

                      id INT NOT NULL ,

                      comment VARCHAR(512),

                      commentnumber numeric(4) auto_increment,

                      PRIMARY KEY (commentnumber)
);