#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>

main(int argc,char **argv[]){
   int fd;
   char *c;
   /*
   S_IRUSR activa el bit de lectura para el propietario
   S_IWUSR Activa el bit de escritura para el propietario
   S_IROTH Activa el bit de lectura para todos los usuarios
   S_IWOTH Activa el bit de escritura para todos los usuarios
   S_IRGRP
   S_IWGRP
   */
   
   fd=open("salida2.txt",0_WRONLY|0_CREAT,S_IRUSR|S_IWUSR);
   
   scanf("%s",&c);
   printf("El tamanio de los caracteres es de %d\n",sizeof(c));
   
   write(fd,&c,sizeof(c));
   close(fd);
};
