DROP DATABASE IF EXISTS fluxo_caixa;
CREATE DATABASE fluxo_caixa;
USE fluxo_caixa;

CREATE TABLE fluxo_caixa (
    id INT NOT NULL AUTO_INCREMENT,
    data DATE NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    historico VARCHAR(150) NOT NULL,
    cheque VARCHAR(3) NOT NULL,
    PRIMARY KEY (id)
);