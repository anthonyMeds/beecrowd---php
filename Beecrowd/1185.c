#include <stdio.h> 

int main () {
    double m[12][12];
    double soma = 0;
    int i, j, contagem;
    char operacao;

    scanf("%s", &operacao);

    for (i = 0; i < 12; i++)
    {
       for (j = 0; j < 12; j++) 
       {
            scanf("%lf", &m[i][j]);
       }
    }

     for (i = 0; i <=10 ; i++)
    {
       for (j = 0; j <= 10 - i; j++) 
       {
            soma += m[i][j];
       }
    }
    
     if (operacao == 'M') {
        double media = soma / contagem;
        printf("%.1lf\n", media);
    } else {
        printf("%.1lf\n", soma);
    }


    return 0;




}