[![Actions Status](https://github.com/Alexey291/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Alexey291/php-project-45/actions) [![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=Alexey291_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=Alexey291_php-project-45)

## Описание

Реализован набор математических игр при помощи PHP. Пользователю необходимо ответить на 3 вопроса для победы.

- **brain-even** – является ли число четным 
- **brain-calc** – вычисление значения выражения
- **brain-gcd** – наибольший делитель
- **brain-progression** – пропущенное числе в прогрессии 
- **brain-prime** – определитель простого числа

- PHP >= 8.0
- Composer

## Установка и развертывание

1. Клонируйте репозиторий:
```bash
git clone https://github.com/Alexey291/php-project-45.git
cd php-project-45
```

2. Установите зависимости:
```bash
make install
```

3. Проверьте валидность composer.json (опционально):
```bash
make validate
```

4. Запустите игры:
```bash
make brain-even
make brain-calc
make brain-gcd
make brain-progression
make brain-prime
```

## Демонстрация

Примеры работы игр:

- [brain-even](https://asciinema.org/a/IlGu9DOSMGVdCGR2iyqjNvFfH)
- [brain-calc](https://asciinema.org/a/yOakCgqJW2L5xSXztYxjUdqui)
- [brain-gcd](https://asciinema.org/a/9s3kkmvJ1aY9W8bFXOhma7haF)
- [brain-progression](https://asciinema.org/a/hBGSVSEIf7kR2ZlAAuYdaXMMM)
- [brain-prime](https://asciinema.org/a/HLoB63hxgHsPOuVRdjnd4mS9n)
