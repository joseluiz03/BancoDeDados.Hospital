# BancoDeDados.Hospital
## Integrantes:
- FELIPE BEZERRA FARIAS n°13
- FRANCISCO EMERSON MARQUES ARAUJO n°16
- GABRIEL LIMA SOARES OLIVEIRA n°21
- GUSTAVO HENRIQUE PEREIRA ARAUJO n°24
- JOSE LUIZ SOARES COSTA n°26
- JOSUE SOARES TORRES NETO n°27
- YGOR JOSE DE SOUZA RODRIGUES n°42


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
### Imagem do front-cadastro Paciente:
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/58a33654-be53-4a9c-b144-dcdfeaa4355d)
### Imagem do front-cadastro Medico:
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/d6f3e965-76c7-46ee-bc1e-a98b6833cf6f)

### Dados armazenados do cliente:
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/7553094f-9a4a-41a9-b40c-6da2a2f50cb4)

``` sql
SELECT * FROM paciente;
```
###  Resultado da pesquisa(no caso, seria a parte aonde o médico entrava fazia login e seria exibido tais informações):
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/5b053248-50d5-4fb4-aef2-a32ee3328f65)
``` sql
SELECT * FROM medico;;
```
### Informações sobre o responsável do cliente:
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/cf7ec94d-7c40-4610-b44c-e2db1fecb5f0)
``` sql
SELECT * FROM responsavel;
```

### Resultado da consulta sobre os pacientes femininos:
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/aee517af-f484-413c-9a81-72a9f8e20720)
```sql
SELECT * FROM paciente WHERE genero == "Feminino";
```
### Resultado da consulta sobre os pacientes masculinos:
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/7870a82b-a51e-4c48-b408-25a6890a39b8)
```sql
SELECT * FROM paciente WHERE genero == "Masculino";
```
### Especialidades do Médico:
![image](https://github.com/joseluiz03/BancoDeDados.Hospital/assets/117037138/8e4f0340-1864-4ddc-b3ad-9e1691f29f6b)
```sql
SELECT nome, ESPECIALIDADE, PACIENTE FROM medico
WHERE especialidade = "Bipolaridade";
```































