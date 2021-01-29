Простинькая админка для магазина
--------------------------------
Логин: tynyanyi@mail.ru
Пароль: 123

Базу для админки использую SQLite

SQLite table
----------------
Создание таблицы products:
```sql
CREATE TABLE products
(
    product_id int PRIMARY KEY NOT NULL,
    name text,
    seo_link text,
    img text,
    qnt int,
    price float
);
CREATE UNIQUE INDEX products_product_id_uindex ON products (product_id);
```
Добавляем тестовый товар:

```sql
INSERT INTO products (product_id, name, seo_link, img, qnt, price)
  VALUES
    (1, 'cap', 'cap', 'cap.png', '12', '15'),
    (2, 'jacket', 'jacket', 'jacket.png', '4', '320'),
    (3, 'cap red', 'cap_red', 'cap.png', '10', '16'),
    (4, 'tshirt', 'tshirt', 'tshirt.png', '5', '150'),
    (5, 'tshirt green', 'tshirt-green', 'tshirt.png', '2', '115'),
    (6, 'cap red', 'cap_red', 'cap.png', '10', '16'),
    (7, 'tshirt yellow', 'tshirt-yellow', 'tshirt.png', '1', '215'),
    (8, 'jacket', 'jacket', 'jacket.png', '2', '320'),
    (9, 'tshirt blue', 'tshirt-blue', 'tshirt.png', '5', '157'),
    (10, 'cap red', 'cap_red', 'cap.png', '10', '16'),
    (11, 'tshirt green', 'tshirt-green', 'tshirt.png', '12', '15'),
    (12, 'addidas paint', 'addidas-paint', 'adidas.png', '2', '300'),
    (13, 'addidas', 'addidas', 'adidas.png', '4', '300'),
    (14, 'addidas paint', 'addidas-paint', 'adidas.png', '6', '320'),
    (15, 'jacket', 'jacket', 'jacket.png', '5', '220'),
    (16, 'addidas paint', 'addidas-paint', 'adidas.png', '3', '330'),
    (17, 'jacket', 'jacket', 'jacket.png', '2', '320'),
    (18, 'cap red', 'cap_red', 'cap.png', '10', '16'),
    (19, 'jacket', 'jacket', 'jacket.png', '5', '300');
```

Создание таблицы с заказами
```sql
  CREATE TABLE orders
  (
      order_id int PRIMARY KEY AUTOINCREMENT,
      order_date datetime DEFAULT current_timestamp NOT NULL,
      custommer_name text,
      custommer_email text,
      due_date datetime,
      balance float,
      amount float
  );
  CREATE UNIQUE INDEX orders_order_id_uindex ON orders (order_id); 
  
```
```sql
INSERT INTO orders (order_id, custommer_name, custommer_email, due_date, balance, amount) VALUES
  (5, 'Sofia Nixon', 'nixon@mail.ru', datetime('now') , 0, 3234.5);
```

