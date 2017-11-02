-- ТОП-3 платежа
SELECT * FROM payments ORDER BY amount DESC LIMIT 3;
--Минимальные 3 платежа
SELECT * FROM payments ORDER BY amount ASC LIMIT 3;