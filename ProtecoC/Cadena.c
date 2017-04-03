#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void ingresacadena (void **cadenas);
void ordenar (void **cadenas);
void modificar (void **cadenas);
void borrar (void **cadenas);

int main(){
	int opcion;
	void **cadenas;
	cadenas=(void**) calloc (10,sizeof(char*));

	ingresacadena(cadenas);
	do{
		printf("Puedes realizar las siguientes acciones: \n");
		printf("1.Listar cadenas\n");
		printf("2.Ordenas cadenas\n");
		printf("3.Modificar cadenas\n");
		printf("4.Borrar cadenas\n");
		printf("5.Salir\n");
		printf("Ingresa la opción que desees realizar:");
		scanf("%d",&opcion);

		switch (opcion){
			case 1:
				for (int i = 0; i < 10; i++)
				{
					printf("Cadena numero %d: %s\n",i , (char *)cadenas[i] );
				}
				break;
			case 2:
				ordenar(cadenas);
				for (int i = 0; i < 10; i++)
				{
					printf("%s\n", (char *)cadenas[i] );
				}	
				break;
			case 3:
				modificar(cadenas);
				break;
			case 4:
				borrar(cadenas);
				break;
			case 5:
				printf("bye!");
				break;
			default:
				printf("Opcion invalida\n");

		}
	}while(opcion != 5);
	for (int i = 0; i < 10; i++)
		free (cadenas[i]);
	free(cadenas);

	return 0;
}

void ingresacadena (void **cadenas) {


	for (int i = 0; i < 10; i++){
		char cadena[100];
		printf("Ingresa la cadena numero %d : ", i+1 );
		gets(cadena);
        cadenas[i] = (void*) calloc(strlen(cadena),sizeof(char));
        strcpy ((char *)cadenas [i], cadena);

	}


}

void ordenar (void **cadenas){

	for (int i = 1; i < 10; i++){
		int j=i;
		while(j>0 && (strcmp((char *)cadenas[j-1],(char *)cadenas[j])>0)){

			void *temporal=cadenas[j];
			cadenas[j]=cadenas[j-1];
			cadenas[j-1]=temporal;
			j=j-1;
		}
	}

}


void borrar (void **cadenas){
	int n;
	printf("Que cadena quieres borrar?\n");

		for (int i = 0; i < 10; i++)
			printf("%i. %s\n",i+1,(char *)cadenas[i] );
		printf("\n\nIngresa el numero: ");
		scanf("%d",&n);

		free (cadenas[n-1]);
		cadenas[n-1]=NULL;

		printf("Cadena borrada:\n");
		for (int i = 0; i < 10; i++)
		{
			if (cadenas[i]!=NULL)
			{
				printf("%i. %s\n",i+1, (char *)cadenas[i] );
			}
			
		}
}

void modificar (void **cadenas){
	int n;
	printf("Que cadena quieres modificar?\n");
	for (int i = 0; i < 10; i++)
	{
		printf("%i. %s\n",i+1, (char *)cadenas[i] );
	}
	printf("\n\nIngresa el numero: ");
	scanf("%d",&n);

	free (cadenas[n-1]);
	cadenas[n-1]=NULL;

	char mod[100];
	printf("Ingresa el nuevo contenido:\n");
	scanf("%s",mod);
	cadenas[n-1] = (void*) calloc(strlen(mod),sizeof(char));
    strcpy ((char *)cadenas [n-1], mod);

    printf("Cadena modificada:\n");
    for (int i = 0; i < 10; i++)
	{
		printf("%i. %s\n",i+1,(char *)cadenas[i] );
	}
}

