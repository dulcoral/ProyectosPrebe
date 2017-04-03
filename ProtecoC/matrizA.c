#include <stdio.h>
#include <stdlib.h>

int main(){
    int **matriz;
    
    matriz = (int**)calloc (3,sizeof (int*));
    if (matriz == NULL)
    {
        printf("No se puede reservar la memoria.\n");
        exit (-1);
    }
    
    for(int i = 0; i < 3; i++){
       if(( matriz [i] = (int*) calloc (3, sizeof (int)) )== NULL)
       { printf ("No se puede reservar la memoria. \n");
         exit (-1);
       }
    }
    
    for (int i=0; i < 3; i++)
    {
       for (int j=0; j<3; j++)
        {
            matriz[i][j]= i+1;
        }
    
    }
    
     for (int i=0; i < 3; i++)
    {
       for (int j=0; j<3; j++)
        {
            printf("%d\t",matriz [i][j]);   
        }
    printf("\n");
    }
    
   for(int i = 0; i < 3; i++)
      free (matriz[i]);
      
   free(matriz);
      
 return 0;


}
