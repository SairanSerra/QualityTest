# Empresa Quality
Teste para desenvolvedor FullStack para a empresa Quality

#Respostas do teste

1) B.
2) E.
3) D.
4) D.
5) 9 dias.
6) Para conseguir atravessar o rio e levar tudo, primeiramente ele levaria a galinha, retonava, pegava o saco de milho e levaria para o outro lado, pegaria a galinha, levaria de volta junto a raposa, levaria a raposa, depois, voltava buscar a galinha.
7)
8)A
9A) C
9B)
9C)O
9D)
10A)2
10B)62
10C)18
10D)5

#Parte II

A)SELECT TALH_CODIGO
    FROM TALHAO
    WHERE TALH_CODIGO_PROP = 20
      AND TALH_SAFRA = 2021
    ORDER BY TALH_CODIGO
    
B)SELECT ISNULL(SUM(PROP_AREA),0) AS Soma_Total
    FROM PROPRIEDADE_AGRICOLA
SELECT TALH_CODIGO
    FROM TALHAO
    WHERE TALH_PROP > 15
      AND TALH_SAFRA = 2022
      AND TALH_CODIGO_PROP = 5
    ORDER BY TALH_CODIGO

C)SELECT COUNT(TALH_CODIGO) AS Quantidade_Talhao
    FROM TALHAO
    WHERE TALH_SAFRA = 2020
    
D)SELECT COUNT(TALH_CODIGO) AS Quantidade_2021
    FROM TALHAO
    WHERE TALH_CODIGO_PROP = 10
      AND TALH_SAFRA = 2021
      
  
# Parte III

Para visualizar o funcionamento da aplicação acesse: http://qualitytestoficial.herokuapp.com/client </br>
O código para validação se encontra na branch master

