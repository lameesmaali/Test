<? 
echo "hello mu " ; 
echo "hi";

>




gcc ma.c -o a.out -fopenmp -std=c99
./a.out




gcc pm.c -o a.out -lpthread -lm -std=c99
./a.out