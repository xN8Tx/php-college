#include <stdio.h>
#include <locale.h>
#include <encrypt.h>
#include <checksum.h>

int main() {
    setlocale(LC_ALL, "Rus");

    char s[] = "Скажи друг и проходи";

    encrypt(s);
    printf("Зашифровано в '%s' \n", s);
    printf("Контрольная сумма в '%i' \n", checksum(s));

    encrypt(s);
    printf("Расшифровано в '%s' \n", s);
    printf("Контрольная сумма в '%i' \n", checksum(s));

    return 0;
}
