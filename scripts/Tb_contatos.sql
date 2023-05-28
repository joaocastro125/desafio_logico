-- estrutura do banco de dados 

CREATE TABLE Tb_contatos(
    id_contatos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    prazo TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    valor DECIMAL(2) NOT NULL ,
    data_inclusao TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    convenio_servico VARCHAR(255) NOT NULL,
    
);