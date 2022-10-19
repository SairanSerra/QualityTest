# Empresa Quality
Teste para desenvolvedor FullStack!

# Respostas do teste

1) B.
2) E.
3) D.
4) D.
5) 9 dias.
6) Para conseguir atravessar o rio e levar tudo, primeiramente ele levaria a galinha, retornar, pegava o saco de milho e levaria para o outro lado, pegaria a galinha, levaria de volta junto a raposa, levaria a raposa, depois, voltava buscar a galinha.
7)C </br>
8)A </br>
9A)C </br>
9B)N </br>
9C)O </br>
9D)X </br>
10A)2 </br>
10B)62 </br>
10C)18 </br>
10D)5 </br>

# Parte II

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

