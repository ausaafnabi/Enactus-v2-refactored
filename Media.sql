DROP TABLE IF EXISTS
    media;
CREATE TABLE media(
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    publisherName VARCHAR(128) NOT NULL,
    title VARCHAR(200) NOT NULL,
    imageLink VARCHAR(300),
    summary TEXT NOT NULL,
    publicationDate DATE NOT NULL,
    PRIMARY KEY(id) 
);



# DETAILS OF CONNECTING To INFINITY FREE SERVER
#define("DB_DSN","mysql:host=sql213.epizy.com;dbname=epiz_25857839_enactusAryabhatta");
#define("DB_USERNAME", "epiz_25857839");
#define("DB_PASSWORD","H5AhZ0gO7b");
#define("CLASS_PATH","classes");
