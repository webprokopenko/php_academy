--Создание ключа
CREATE TABLE table5(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  name VARCHAR(50) NOT NULL,
  price FLOAT NOT NULL,
  PRIMARY KEY (id)
);
--Создание индекса
CREATE INDEX ixName on table5 (name);
CREATE INDEX isPrice ON table5 (price);

--Удаление индекса
DROP INDEX isPrice ON table5;

--Создание индекса при создание таблици
DROP TABLE IF EXISTS table5;
CREATE TABLE table5(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  code CHAR(4) NOT NULL DEFAULT 'AAAA',
  name VARCHAR(50) NOT NULL,
  price FLOAT NOT NULL,
  CONSTRAINT pkId PRIMARY KEY (id),
  CONSTRAINT ixCode UNIQUE KEY (code),
  INDEX ixName (name),
  INDEX ixPrice (price)
);

CREATE TABLE table5_child(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  code CHAR(4) NOT NULL DEFAULT 'AAAA',
  quo FLOAT NOT NULL DEFAULT 0,
  CONSTRAINT pkID PRIMARY KEY (id),
  INDEX (code),
  CONSTRAINT fkTable5Code  FOREIGN KEY (code)
    REFERENCES table5 (code)
);
--Добавление товара
INSERT INTO table5 (code,name,price) VALUES ('ZZZK','test',16.1);

--Приход товара
INSERT INTO table5_child (code,quo) VALUE ('ZZZS', 10);

CREATE TABLE parent (
  id INT UNSIGNED NOT NULL ,
  PRIMARY  KEY (id)
) ENGINE=INNODB;

CREATE TABLE child(
  id INT,
  parent_id INT UNSIGNED NOT NULL,
  INDEX par_ind (parent_id),
  FOREIGN KEY (parent_id) REFERENCES parent (id)
  ON DELETE CASCADE
) ENGINE=INNODB;
--Вставка из другой таблици
INSERT INTO table5 (name,price)
  SELECT user, 123 as price
    FROM mysql.user;

--Вставка данных из файла
LOAD DATA
  INFILE 'D:/mysql/m/data.txt'
  INTO TABLE table5
  FIELDS TERMINATED BY '\t,'
  LINES TERMINATED BY '\r\n'


DELETE FROM table5
  WHERE id=3;

--Удаление последней записи
DELETE FROM table5
  ORDER BY id DESC
LIMIT 1;

UPDATE table5
  SET
    name = CONCAT(name, ' *'),
    price = price * 2
WHERE id BETWEEN 1 AND 6;

SELECT code AS TEST1, name AS TEST2
  FROM table5;

SELECT *
  FROM table5
  ORDER BY price DESC;

SELECT *
  FROM table5
  ORDER BY 2 DESC;

SELECT *
  FROM table5
  ORDER BY name
    LIMIT 2,3;

SELECT * FROM module3.customers
  WHERE phone = 212555741;

SELECT * FROM module3.orders
  WHERE date BETWEEN '2003-01-01 00:00:00' AND '2016-01-06 00:00:00';

SELECT * FROM module3.products
  WHERE description LIKE '%replica%';

SELECT * FROM module3.products
  WHERE  product_line_id IN(1,3,7);

SELECT * FROM module3.products
	WHERE product_line_id =1 or product_line_id=3 or product_line_id = 7;

SELECT * FROM module3.products
	WHERE product_line_id =1 or product_line_id=3 or product_line_id = 7
    ORDER BY price

SELECT * FROM module3.products
  WHERE name REGEXP '';


CREATE FULLTEXT INDEX ixFullText on module3.products (name,description);

--Поиск в режиме естественного языка
SELECT *
  FROM module3.products
  WHERE MATCH (name, description)
  AGAINST ('steer' IN NATURAL LANGUAGE MODE);

--Поиск в языке логического значения
SELECT *
  FROM module3.products
  WHERE MATCH (name, description)
  AGAINST ('steer' IN BOOLEAN MODE);


