SELECT * FROM products_db.products;
/*INSERT INTO products (name, kind, price) VALUES
	('bread', '1', 10),
	('grape', 'kg', 60),
	('milk', '1', 15),
	('cookies', 'kg', 55),
	('cucumbers', 'kg', 45);*/

/*get products which cost more than 50*/
SELECT * FROM products WHERE price > 50;

/*delete*/
DELETE FROM products WHERE kind != 1;

/*quantity and average price*/
SELECT
	COUNT(*),
	AVG(price) AS priceAvg
FROM products;

/*writing to a table*/
INSERT products_1 SELECT * FROM products WHERE MOD(id, 2) != 0;
