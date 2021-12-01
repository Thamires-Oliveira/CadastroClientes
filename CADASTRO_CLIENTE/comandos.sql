CREATE DATABASE cadastro_cliente;

USE cadastro_cliente;

CREATE TABLE cliente(
codigoEmpresa int(11) AUTO_INCREMENT PRIMARY KEY,   
nome_cliente varchar(30),
razaoSocial varchar(50),
CNPJ varchar(20) ,
UF char(2),    
cidade varchar(30),
telefone_1 varchar(15),
telefone_2 varchar(15),
telefone_3 varchar(15),
celular_1 varchar(15),
whatsapp_1 boolean ,   
celular_2 varchar(15),
whatsapp_2 boolean ,  
email varchar(35),
OBS text);

INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ADRIANO SILVA",
"ADRIANO OPTICAS ME",
"12.234.123/0001-12",
"MG",
"BELO HORIZONTE",
"(35) 3333-1111",
"",
"",
"(35) 95226-3333",
1,
"",
0,
"ADRIANO_SILVA@HOTMAIL.COM",
"TEM COSTUME DE ENVIAR POR TRANSPORTADORA"
);




INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ANGALDO SOARES",
"MUNDO DA VISAO LTDA ME",
"19.234.145/0001-12",
"BA",
"SALVADOR",
"(75) 3223-12217",
"",
"",
"(75) 98886-3333",
1,
"(75) 95226-3883",
1,
"MUNDODAVISAO@GMAIL.COM",
""
);



INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ELIZANGELA",
"SOL OPTICA LTDA",
"15.554.123/0001-71",
"RN",
"MOSSORO",
"(95) 3563-1111",
"",
"",
"(95) 95226-3373",
0,
"",
0,
"ELIZANGELA123@YAHOO.COM.BR",
"ENVIA PELA BRASSPRESS"
);


INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"GONCALVES",
"MUNDO DOS OCULOS LTDA ME",
"11.234.1111/0002-22",
"SP",
"GUARULHOS",
"(11) 4443-1441",
"",
"",
"(11) 95226-3333",
1,
"(11) 95276-6683",
1,
"GONCALVESDIAS@HOTMAIL.COM",
""
);
INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"JACIARA",
"",
"",
"MG",
"TRES CORACOES",
"(34) 2222-2222",
"",
"",
"(34) 95226-3333",
0,
"",
0,
"",
""
);

INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ADRIANO SILVA",
"ADRIANO OPTICAS ME",
"12.234.123/0001-12",
"MG",
"BELO HORIZONTE",
"(35) 3333-1111",
"",
"",
"(35) 95226-3333",
1,
"",
0,
"ADRIANO_SILVA@HOTMAIL.COM",
"TEM COSTUME DE ENVIAR POR TRANSPORTADORA"
);




INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ANGALDO SOARES",
"MUNDO DA VISAO LTDA ME",
"19.234.145/0001-12",
"BA",
"SALVADOR",
"(75) 3223-12217",
"",
"",
"(75) 98886-3333",
1,
"(75) 95226-3883",
1,
"MUNDODAVISAO@GMAIL.COM",
""
);



INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ELIZANGELA",
"SOL OPTICA LTDA",
"15.554.123/0001-71",
"RN",
"MOSSORO",
"(95) 3563-1111",
"",
"",
"(95) 95226-3373",
0,
"",
0,
"ELIZANGELA123@YAHOO.COM.BR",
"ENVIA PELA BRASSPRESS"
);


INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"GONCALVES",
"MUNDO DOS OCULOS LTDA ME",
"11.234.1111/0002-22",
"SP",
"GUARULHOS",
"(11) 4443-1441",
"",
"",
"(11) 95226-3333",
1,
"(11) 95276-6683",
1,
"GONCALVESDIAS@HOTMAIL.COM",
""
);
INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"JACIARA",
"",
"",
"MG",
"TRES CORACOES",
"(34) 2222-2222",
"",
"",
"(34) 95226-3333",
0,
"",
0,
"",
""
);

INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ADRIANO SILVA",
"ADRIANO OPTICAS ME",
"12.234.123/0001-12",
"MG",
"BELO HORIZONTE",
"(35) 3333-1111",
"",
"",
"(35) 95226-3333",
1,
"",
0,
"ADRIANO_SILVA@HOTMAIL.COM",
"TEM COSTUME DE ENVIAR POR TRANSPORTADORA"
);




INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ANGALDO SOARES",
"MUNDO DA VISAO LTDA ME",
"19.234.145/0001-12",
"BA",
"SALVADOR",
"(75) 3223-12217",
"",
"",
"(75) 98886-3333",
1,
"(75) 95226-3883",
1,
"MUNDODAVISAO@GMAIL.COM",
""
);



INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ELIZANGELA",
"SOL OPTICA LTDA",
"15.554.123/0001-71",
"RN",
"MOSSORO",
"(95) 3563-1111",
"",
"",
"(95) 95226-3373",
0,
"",
0,
"ELIZANGELA123@YAHOO.COM.BR",
"ENVIA PELA BRASSPRESS"
);


INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"GONCALVES",
"MUNDO DOS OCULOS LTDA ME",
"11.234.1111/0002-22",
"SP",
"GUARULHOS",
"(11) 4443-1441",
"",
"",
"(11) 95226-3333",
1,
"(11) 95276-6683",
1,
"GONCALVESDIAS@HOTMAIL.COM",
""
);
INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"JACIARA",
"",
"",
"MG",
"TRES CORACOES",
"(34) 2222-2222",
"",
"",
"(34) 95226-3333",
0,
"",
0,
"",
""
);

INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ADRIANO SILVA",
"ADRIANO OPTICAS ME",
"12.234.123/0001-12",
"MG",
"BELO HORIZONTE",
"(35) 3333-1111",
"",
"",
"(35) 95226-3333",
1,
"",
0,
"ADRIANO_SILVA@HOTMAIL.COM",
"TEM COSTUME DE ENVIAR POR TRANSPORTADORA"
);




INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ANGALDO SOARES",
"MUNDO DA VISAO LTDA ME",
"19.234.145/0001-12",
"BA",
"SALVADOR",
"(75) 3223-12217",
"",
"",
"(75) 98886-3333",
1,
"(75) 95226-3883",
1,
"MUNDODAVISAO@GMAIL.COM",
""
);



INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"ELIZANGELA",
"SOL OPTICA LTDA",
"15.554.123/0001-71",
"RN",
"MOSSORO",
"(95) 3563-1111",
"",
"",
"(95) 95226-3373",
0,
"",
0,
"ELIZANGELA123@YAHOO.COM.BR",
"ENVIA PELA BRASSPRESS"
);


INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"GONCALVES",
"MUNDO DOS OCULOS LTDA ME",
"11.234.1111/0002-22",
"SP",
"GUARULHOS",
"(11) 4443-1441",
"",
"",
"(11) 95226-3333",
1,
"(11) 95276-6683",
1,
"GONCALVESDIAS@HOTMAIL.COM",
""
);
INSERT INTO cliente(
nome_cliente,
razaoSocial,
CNPJ,
UF,
cidade,
telefone_1,
telefone_2,
telefone_3,
celular_1,
whatsapp_1,
celular_2,
whatsapp_2,
email,
OBS)
VALUES(
"JACIARA",
"",
"",
"MG",
"TRES CORACOES",
"(34) 2222-2222",
"",
"",
"(34) 95226-3333",
0,
"",
0,
"",
""
);
