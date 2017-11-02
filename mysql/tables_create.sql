CREATE DATABASE module1 COLLATE utf8_general_ci;

CREATE TABLE table1(
    id INT UNSIGNED NOT NULL DEFAULT 0 COMMENT 'код товара',
    name VARCHAR(50) NOT NULL DEFAULT '' COMMENT 'Название товара',
    price FLOAT NOT NULL DEFAULT 0 COMMENT 'Цена товара'
);

DESCRIBE table1;
--Cоздание таблици на основе запроса
CREATE TABLE table2 COMMENT 'результат запроса'
  SELECT user,host,password
      FROM mysql.user;

--Cоздание таблици по образцу
CREATE TABLE table3 LIKE table2;

--Создание временной таблици
CREATE TEMPORARY TABLE table4 COMMENT 'Временная таблица результат запроса'
  SELECT user
  FROM module1.table2;