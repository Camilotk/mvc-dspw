create table jogadores ( 
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(255), 
    posicao VARCHAR(255), 
    overall INT, 
    PRIMARY KEY (id)
);

create table times (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    PRIMARY KEY (id)
);

ALTER TABLE jogadores ADD id_time INT NOT NULL AFTER posicao;