CREATE DATABASE stopbullying;
USE stopbullying;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255),
    role ENUM('aluno','admin') NOT NULL DEFAULT 'aluno'
);

CREATE TABLE denuncias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    texto TEXT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO users (nome, email, senha, role)
VALUES 
('Admin Principal', 'admin@stop.com', SHA2('123456',256), 'admin'),
('João Silva', 'joao@stop.com', SHA2('senha123',256), 'aluno'),
('Maria Souza', 'maria@stop.com', SHA2('teste2025',256), 'aluno');
