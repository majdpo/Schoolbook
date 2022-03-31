
DROP DATABASE IF EXISTS schoolbook;

CREATE DATABASE schoolbook;

USE schoolbook;



DROP TABLE IF EXISTS post;

CREATE TABLE post (

                         id INT NOT NULL AUTO_INCREMENT,

                         auteur VARCHAR(50),

                         title VARCHAR(50),

                         bericht VARCHAR(256),

                        datepost varchar(20),

                         PRIMARY KEY (id)
);

USE schoolbook;
ALTER TABLE post
    ADD like NUMERIC;

    /*ADD imageNewName VARCHAR(256);

    ADD imageSize numeric(10);


    */

USE schoolbook;

CREATE TABLE comments (

                      id INT NOT NULL ,

                      comment VARCHAR(512),

                      commentnumber numeric(4),

                      PRIMARY KEY (id)
);