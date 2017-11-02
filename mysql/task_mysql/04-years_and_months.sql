-- Платежи по месяцам и годам
-- Для начала определим как получить группы записей по месяцам и годам.
-- Год (Year) Месяц( MONTH)
SELECT MONTH(payment_date) AS Месяц, YEAR(payment_date) as Год
  FROM payments GROUP BY YEAR(payment_date), MONTH(payment_date);

SELECT c.last_name, c.first_name, SUM(p.amount) as 'Сумма платежей', YEAR(p.payment_date) as 'Год', MONTH(p.payment_date) as 'Месяц'
  FROM customers c JOIN payments p ON c.id = p.customer_id
  WHERE c.id = 103
  GROUP BY YEAR(p.payment_date), MONTH (p.payment_date);