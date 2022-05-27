
Описание как развернуть проект в docker
-
#### Прежде чем начать, убедитесь, что в вашей системе установлен docker-compose, git.

**1**. Выполните клонирование данного репозитория.

```shell script
git clone https://github.com/VadymTarasov/lessons-php.git
```

**2**. В терминале откройте папку с проектом и  введите следующие команды:

```shell script
docker compose up -d
```
```shell script
composer update
```
```shell script
composer dump-autoload
```