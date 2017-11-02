--Средний доход на клиента/сотрудника
SELECT * , round(avg(amount), 2)
  FROM payments
GROUP BY customer_id;
--Получиение списокв заказчиков который внесли оплату
SELECT c.customer_id, p.id, p.amount
  FROM customers C
  JOIN payments p ON p.customer_id = c.id

SELECT c.id, p.customer_id, avg(p.amount) , w.id
  FROM customers c
    JOIN payments p ON w.id = c.worker_id
      RIGHT JOIN workers w ON w.id = c.worker_id
        GROUP BY w.worker_id
