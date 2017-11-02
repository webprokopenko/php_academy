-- Количество сотрудников и количество заказчиков для каждого офиса

--Количество сотрудников на каждый офис
SELECT of.id AS 'Код офиса' , COUNT(w.id) as 'Кол-во сотрудников'
  FROM offices of JOIN workers w ON of.id = w.office_id
  GROUP BY of.id;

SELECT of.id AS 'Код офиса', COUNT(DISTINCT w.id)  as 'Кол-во сотрудников', COUNT(c.id) AS 'Кол-во клиентов'
  FROM offices of
  JOIN workers w ON of.id = w.office_id
    LEFT JOIN customers c ON c.worker_id = w.id
      GROUP BY of.id;


