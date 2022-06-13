create database uplay;
use uplay;
create table if not exists Category(
	ID BIGINT NOT NULL AUTO_INCREMENT,
	category VARCHAR(255),
    PRIMARY KEY (ID)
);

create table if not exists Employee(
	ID BIGINT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
	category BIGINT,
    PRIMARY KEY (ID),
    FOREIGN KEY (category) REFERENCES Category(ID)
);

INSERT Category(category) VALUES ("Category_Admin");
INSERT Category(category) VALUES ("Category_Manager");
INSERT Category(category) VALUES ("Category_Lead");
INSERT Category(category) VALUES ("Category_Senior");
INSERT Category(category) VALUES ("Category_Junior");

INSERT INTO Employee(name,Category) (SELECT "James", id FROM Category WHERE category LIKE "Category_Admin");
INSERT INTO Employee(name,Category) (SELECT "Michael",id FROM Category WHERE category LIKE "Category_Lead");
INSERT INTO Employee(name,Category) (SELECT "Antoine", id FROM Category WHERE category LIKE"Category_Junior");
