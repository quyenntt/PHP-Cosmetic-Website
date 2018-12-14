Create database sell_cosmetics1;
use sell_cosmetics1;
CREATE TABLE users 
(
   id INT AUTO_INCREMENT,
   user_name VARCHAR(255),
   password_user VARCHAR(255),
   your_name VARCHAR(100),
   email VARCHAR(100),
   phone INT,
   address VARCHAR(250),
   city VARCHAR (100),
   state VARCHAR(100),
   u_role varchar(45),
   PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

select * from users;



/*quan ly thong tin khach hang mua hang*/
/*quan ly thong tin khach hang mua hang*/

CREATE TABLE categories
(
   id INT AUTO_INCREMENT,
   name_categories VARCHAR(255),
   PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


SELECT * FROM categories;

CREATE TABLE product
(
   id INT AUTO_INCREMENT,
   id_categories INT,
   name_product VARCHAR(255),
   imaage VARCHAR(255),
   description VARCHAR(255),
   dates DATE,
   price FLOAT,
   quantity FLOAT,
   PRIMARY KEY (id),
   FOREIGN KEY (id_categories) REFERENCES categories (id)
   
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
SELECT * FROM  product WHERE id= 1 LIMIT 1;
SELECT * FROM product
           ORDER BY dates DESC 
                 LIMIT 3;
SELECT * FROM product;
CREATE TABLE image
(
   id INT AUTO_INCREMENT,
   imagge VARCHAR(250),
   PRIMARY KEY (id)
);
INSERT INTO image(imagge)
VALUES 
	('../image/sl1.jpg'),
    ('../image/sl5.jpg'),
    ('../image/sl7.jpg');

SELECT * FROM image;

CREATE TABLE orders
(
   id INT AUTO_INCREMENT,
   id_user INT,
   date_orders DATE,
   fee FLOAT,
   PRIMARY KEY (id),
   FOREIGN KEY (id_user) REFERENCES users (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

select * from orders;
  
CREATE TABLE order_detail
(
   id_product INT,
   id_orders INT,
   quantity_product FLOAT,
   PRIMARY KEY (id_product, id_orders),
   FOREIGN KEY (id_product) REFERENCES  product (id),
   FOREIGN KEY (id_orders) REFERENCES  orders (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
  select * from order_detail;


CREATE TABLE comments
(
   id INT AUTO_INCREMENT,
   id_user INT,
   subjects VARCHAR(255),
   content VARCHAR(255),
   PRIMARY KEY (id),
   FOREIGN KEY (id_user) REFERENCES  users (id)
   
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

SELECT * FROM comments;

CREATE TABLE news
(
id INT AUTO_INCREMENT,
   id_image INT,
   content_news VARCHAR(255),
   PRIMARY KEY (id),
   FOREIGN KEY (id_image) REFERENCES  image (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
