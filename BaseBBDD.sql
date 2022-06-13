create database uplay;
use uplay;
create table if not exists Employee(
	ID BIGINT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255),
	category VARCHAR(255),
    PRIMARY KEY (ID)
);

INSERT Employee(name,Category) VALUES ("James", "Category_Admin");
INSERT Employee(name,Category) VALUES ("Michael","Category_Lead");
INSERT Employee(name,Category) VALUES ("Antoine","Category_Junior");