CREATE TABLE supplier
(
supplier_id int IDENTITY(1,1) PRIMARY KEY,
supplier_firstName varchar(250) NOT NULL,
supplier_lastName varchar(250) NOT NULL,
supplier_phone varchar(50) NOT NULL,
supplier_address varchar(500) NULL,
supplier_email varchar(100) NOT NULL,
supplier_username varchar(250) NOT NULL,
supplier_pass varchar(250) NOT NULL,
joiningTimeAndDate date Null
)

