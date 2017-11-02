-- Заказы с наибольним количество  товаров

SELECT order_id COUNT (order_amount) AS 'Количество продуктов'
  FROM order_details
  GROUP BY order_id
  GROUP BY order_amount DESC
  LIMIT 1;