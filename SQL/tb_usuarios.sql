CREATE TABLE usuarios(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    cargo varchar(100) NOT NULL,
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP DEFAULT NOW() ON UPDATE NOW()
);