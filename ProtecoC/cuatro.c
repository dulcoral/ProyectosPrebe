#include <stdio.h>
#include <stdin.h>
#include <dirent.h>

int32_t main(){
 DIR *dir; //flujo
 struct dirent *entry;
 int32_t i;
 long offset;
 
 dir = opendir("/usr");
 puts("Comienza desde esl primer objeto");
 for(i=0; entry=readdir(dir);i++){
    printf("%4d %s\n",i,entry->d_name);
    if(i==5){
       offset = telldir(dir);
    
    }
 puts("Comienza desde el cuarto objeto");
 seekdir(dir,offset);
 
 for(i=1; entry = readdir(dir); i++){
      printf("%4d %s\n",i,entry->d_name);
    if(i==5){
       offset = telldir(dir);
 
 }
 printf("\n");
 
 rewinddir(dir);
 puts("Desde el inicio");
 for(i=1; entry = readdir(dir);i++){
    printf("%4d %s \n" ,i,entry ->d_name);
 }
 printf("\n");
 
 closedir(dir);
 return 0;


}
