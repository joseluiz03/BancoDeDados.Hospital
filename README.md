# BancoDeDados.Hospital

### 🠖 Exemplificação de imagem do *CONCEITO* do Banco de Dados (hosp):
![Texto alternativo da imagem](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/116982553/dfea2e29-fe65-4a7a-a005-7c08d36ef6b4)



### 🠖 Conceito convertido para lógico(MER):
![Lógico_hosp](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/116982553/bb8ad1e8-5406-426b-90da-780ab7e515a2)

### 🠖 Código em Sql:
```sql
CREATE TABLE Paciente (
    DIAGNOSTICO VARCHAR(100),
    MEDICAMENTO VARCHAR(30),
    GENERO VARCHAR(100),
    DATA_NASC VARCHAR(8),
    RESPONSAVEL VARCHAR(50),
    NUM_CADASTRO VARCHAR(20) PRIMARY KEY,
    NOME VARCHAR(50)
);

CREATE TABLE Responsavel (
    TELEFONE VARCHAR(11),
    fk_CPF_CPF_PK VARCHAR(100),
    ENDERECO VARCHAR(100),
    NOME VARCHAR(30)
);

CREATE TABLE Medico (
    CRM VARCHAR(6) PRIMARY KEY,
    PACIENTE VARCHAR(100),
    CPF VARCHAR(11),
    ESPECIALIDADE VARCHAR(100),
    NOME VARCHAR(30),
    TELEFONE VARCHAR(11)
);

CREATE TABLE CPF (
    CPF_PK VARCHAR(100) NOT NULL,
    NUM_CADAST_PACENTE VARCHAR(6),
    PRIMARY KEY (CPF_PK, NUM_CADAST_PACENTE)
);

CREATE TABLE Consulta (
    fk_Paciente_NUM_CADASTRO VARCHAR(20),
    fk_Medico_CRM VARCHAR(6)
);
 
ALTER TABLE Responsavel ADD CONSTRAINT FK_Responsavel_1
    FOREIGN KEY (fk_CPF_CPF_PK)
    REFERENCES CPF (CPF_PK)
    ON DELETE SET NULL;
 
ALTER TABLE Consulta ADD CONSTRAINT FK_Consulta_1
    FOREIGN KEY (fk_Paciente_NUM_CADASTRO)
    REFERENCES Paciente (NUM_CADASTRO)
    ON DELETE RESTRICT;
 
ALTER TABLE Consulta ADD CONSTRAINT FK_Consulta_2
    FOREIGN KEY (fk_Medico_CRM)
    REFERENCES Medico (CRM)
    ON DELETE RESTRICT;
```
### 🠖 Imagem front do site:
    ![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/116982553/dd120d12-9225-422f-9d71-13b968f788a6)

