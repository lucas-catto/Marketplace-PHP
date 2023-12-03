
CREATE DATABASE Marketplace;
USE             Marketplace;

CREATE TABLE Usuarios (
    UsuarioId            INT PRIMARY KEY AUTO_INCREMENT,
    UsuarioLogin         VARCHAR(255),
    UsuarioSenha         TEXT,
    UsuarioStripeAccount VARCHAR(255)
);

CREATE TABLE Produtos (
    ProdutoId            INT PRIMARY KEY AUTO_INCREMENT,
    ProdutoNome          VARCHAR(255),
    ProdutoDescricao     TEXT,
    ProdutoPreco         VARCHAR(255),
    
    UsuarioId            INT
);
