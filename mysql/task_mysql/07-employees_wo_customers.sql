--Сотрудники без клиентов
SELECT w.last_name AS 'Сотрудник', c.id AS 'Клиент'
  FROM workers w
    LEFT JOIN customers c ON w.id = c.worker_id
      WHERE c.worker_id IS NULL
