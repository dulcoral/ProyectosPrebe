#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>

main(int argc,char **argv[]){
int fd,fd2;
char c;

fd = open("salida.txt",0_RDONLY);
fd2 = open("destino.txt,0_WRONLY|0_CREAT,S_IRUSR|S_IWUSR);

if(fd!=-1){
   while(read(fd,&c,sizeof(c)!=0)){
       write(fd2,&c,sizeof(c));
   }
 close(fd);
close(fd2);

fd2=open("Destino.txt,0_RDONLY);
while(red(fd2,&c,sizeof(c)!=0)){
   printf("%c",c);
}
close(fd2);
}
else{
  printf("	El archivo no existe");
  
  }


}
