SELECT payment_date, sum(amount)
  FROM payments
    GROUP BY payment_date;


SELECT
  DAY (payment_date) AS 'День',
  MONTH (payment_date) AS 'Месяц',
  YEAR  (payment_date) AS 'Год',
  SUM(amount) AS 'Сумма'
    FROM payments
  GROUP BY payment_date
  ORDER BY Год, Месяц, День