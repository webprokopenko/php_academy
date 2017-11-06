--Месяц год масимальная сумма платежей

SELECT
  DAY(payment_date) AS День,
  MONTH(payment_date) AS Месяц,
  YEAR(payment_date) AS Год,
  MAX(amount)
  FROM payments
  GROUP BY Год