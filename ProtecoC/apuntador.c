#include <stdio.h>

void imprime_str(char* str){
     printf ("%s\n",str);

}

int main (int argc,char **argv){
    char *cadena = "hola,mundo!";
    void (*foo)(char*); //tipo de dato funcion, id del apuntador, tipo de dato que recibe la funcion
    
    foo = &imprime_str;
    
    foo (cadena);
    return 0;
}
