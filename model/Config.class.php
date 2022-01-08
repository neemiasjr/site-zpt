<?php

Class Config{

  // Variáveis com informaçõs do Site.
  const SITE_URL = "",
        SITE_HOME = "",
        SITE_NOME = "Loja ZPT Digital - Desafio",
        SITE_EMAIL_ADM = "neemias.jr@gmail.com";

  //Informações Databases
  const DB_HOST = "localhost",
        DB_USER = "zptuser",
        DB_PASS = "",
        DB_NAME = "lojazpt";
  //const DB_PREFIX = ""

  //Info do client php Mailer
  const EMAIL_HOST = "smtp.gmail.com",
        EMAIL_USER = "neemias.jr@gmail.com",
        EMAIL_NOME = "Loja Zpt Digital",
        EMAIL_SENHA = "123456",
        EMAIL_PORTA = 587,
        EMAIL_SMTPAUTH = true,
        EMAIL_SMTSECURE =  "tls",
        EMAIL_COPIA = "lojazptneemias@gmail.com";
}



?>