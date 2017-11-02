SELECT p.id, p.name
  FROM products p
    JOIN order_details od on p.id = od.product_id
