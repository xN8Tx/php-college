main: checksum.o encrypt.o main.o
	gcc main.o encrypt.o checksum.o -o main

encrypt.o: encrypt.c encrypt.h
	gcc -c encrypt.c

checksum.o: checksum.c checksum.h
	gcc -c checksum.c

main.o: main.c encrypt.h
	gcc -c main.c
