-- drop
DROP TABLE IF EXISTS classmates;


-- create
CREATE TABLE classmates (
                            id INTEGER PRIMARY KEY AUTO_INCREMENT,
                            name TEXT NOT NULL,
                            age INTEGER NOT NULL,
                            address TEXT NOT NULL
);

-- insert
INSERT INTO classmates (name, age, address) VALUES ('Александр', 18, 'РФ, Москва');
INSERT INTO classmates (name, age, address) VALUES ('Алексей', 30, 'РФ, Москва');
INSERT INTO classmates (name, age, address) VALUES ('Владимир', 35, 'РФ, Москва');
INSERT INTO classmates (name, age, address) VALUES ('Роман', 40, 'РБ, Минск');
INSERT INTO classmates (name, age, address) VALUES ('Кирилл', 25, 'РФ, Краснодар');
INSERT INTO classmates (name, age, address) VALUES ('Ксения', 28, 'РФ, Москва');
INSERT INTO classmates (name, age, address) VALUES ('Екатерина', 20, 'РФ, Москва');
INSERT INTO classmates (name, age, address) VALUES ('Оксана', 26, 'РФ, Екатеринбург');
INSERT INTO classmates (name, age, address) VALUES ('Петр', 26, 'РФ, Вологда');
INSERT INTO classmates (name, age, address) VALUES ('Мария', 31, 'РФ, Пенза');


-- fetch
SELECT name FROM classmates WHERE address LIKE '%Москва%' and age >= 18 and age < 30;