# Design Bouquet

Проект интернет-магазина/сайта Design Bouquet на Laravel. Локальная разработка запускается в Docker Compose.

## Требования

- Docker Engine с поддержкой Docker Compose;
- Git.

Проверить установку Docker:

```bash
docker --version
docker compose version
```

## Быстрый запуск

Все команды выполняются из корня проекта.

### 1. Подготовить окружение

Файл `.env` необязателен: Compose использует значения по умолчанию из `compose.yaml`. Для собственных настроек скопируйте пример:

```bash
cp .env.example .env
```

Основные переменные Docker Compose:

```dotenv
APP_PORT=8099
VITE_PORT=5175
DB_FORWARD_PORT=3309
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
DB_ROOT_PASSWORD=root
```

Не публикуйте `.env` в репозиторий.

### 2. Собрать образ

```bash
docker compose build
```

При сборке устанавливаются PHP-зависимости Composer, Node-зависимости и собираются frontend-ресурсы через Vite.

### 3. Запустить приложение

```bash
docker compose up -d
```

После запуска:

- приложение: <http://localhost:8099>;
- панель управления Filament: <http://localhost:8099/admin>;
- Vite dev server: <http://localhost:5175>.

Порт приложения можно изменить через `APP_PORT`, порт Vite — через `VITE_PORT`.

### 4. Проверить контейнеры

```bash
docker compose ps
docker compose logs -f app
```

`Ctrl+C` остановит просмотр логов, но не контейнеры.

## Панель управления Filament

В проекте используется Filament `5.9.0`. Панель доступна по адресу `/admin` и работает через стандартную авторизацию Laravel.

### Первый вход

После запуска контейнеров создайте пользователя панели командой:

```bash
docker compose exec app php artisan make:filament-user
```

Команда запросит имя, email и пароль. После этого откройте <http://localhost:8099/admin> и войдите с созданными данными.

### Основные команды Filament

```bash
# Показать установленные пакеты Filament
docker compose exec app php artisan filament:about

# Создать ресурс для управления моделью
docker compose exec app php artisan make:filament-resource ModelName

# Создать страницу панели
docker compose exec app php artisan make:filament-page PageName

# Оптимизировать компоненты и иконки
docker compose exec app php artisan filament:optimize

# Очистить кэш компонентов Filament
docker compose exec app php artisan filament:optimize-clear
```

Провайдер панели находится в `app/Providers/Filament/AdminPanelProvider.php`. Ресурсы, страницы и виджеты размещаются соответственно в `app/Filament/Resources`, `app/Filament/Pages` и `app/Filament/Widgets` и автоматически обнаруживаются панелью.

После изменения PHP-кода или конфигурации при необходимости очистите кэши:

```bash
docker compose exec app php artisan optimize:clear
```

Опубликованные ассеты Filament добавлены в `.gitignore` и генерируются автоматически при сборке образа.

## Основные команды

### Запуск, остановка и пересборка

```bash
# Запустить контейнеры в фоне
docker compose up -d

# Запустить и сразу увидеть логи
docker compose up

# Остановить контейнеры, сохранив данные MySQL и зависимости
docker compose stop

# Остановить и удалить контейнеры, но сохранить именованные тома
docker compose down

# Пересобрать образ без кеша
docker compose build --no-cache

# Пересобрать образ и перезапустить приложение
docker compose up -d --build
```

### Логи

```bash
# Все сервисы
docker compose logs -f

# Только приложение
docker compose logs -f app

# Только MySQL
docker compose logs -f mysql

# Последние 100 строк приложения
docker compose logs --tail=100 app
```

### Artisan и Composer

```bash
# Выполнить Artisan-команду
docker compose exec app php artisan <команда>

# Примеры
docker compose exec app php artisan migrate
docker compose exec app php artisan migrate:status
docker compose exec app php artisan route:list
docker compose exec app php artisan test --compact

# Установить PHP-зависимости
docker compose exec app composer install

# Обновить автозагрузчик
docker compose exec app composer dump-autoload
```

### Frontend

Сервис `vite` запускает dev-сервер с hot reload. Обычно после `docker compose up -d` дополнительных действий не требуется.

```bash
# Установить Node-зависимости в контейнере
docker compose exec app npm install

# Собрать production-ресурсы
docker compose exec app npm run build

# Посмотреть логи Vite
docker compose logs -f vite
```

После изменения `package.json` или `package-lock.json` рекомендуется выполнить:

```bash
docker compose up -d --build
```

### Войти в контейнер

```bash
docker compose exec app sh
```

Внутри контейнера доступны `php`, `artisan`, `composer`, `node`, `npm` и `npx`.

## База данных

В Docker используется MySQL 8.4. При первом запуске контейнер `app` автоматически:

1. дожидается готовности MySQL;
2. выполняет миграции (`RUN_MIGRATIONS=true`);
3. создаёт ссылку `public/storage`;
4. генерирует и сохраняет ключ приложения, если `APP_KEY` не задан.

Проверить миграции:

```bash
docker compose exec app php artisan migrate:status
```

Подключение к MySQL с хоста: `127.0.0.1:3309`, учётные данные — из `.env`. Порт можно изменить через `DB_FORWARD_PORT`.

## Тесты и форматирование

```bash
# Весь набор тестов
docker compose exec app php artisan test --compact

# Один тестовый файл
docker compose exec app php artisan test --compact tests/Feature/ExampleTest.php

# Проверить и исправить форматирование PHP
docker compose exec app vendor/bin/pint --dirty --format agent
```

## Обновление проекта

Типовой порядок после получения изменений:

```bash
git pull
docker compose up -d --build
docker compose exec app php artisan migrate --force
docker compose exec app npm run build
```

Если менялись только PHP-файлы или шаблоны, обычно достаточно:

```bash
docker compose up -d
```

## Полный сброс локального окружения

Команда ниже удаляет контейнеры и именованные тома, включая локальную базу MySQL, `vendor`, `node_modules` и данные Laravel. Используйте её только для запуска с чистого состояния:

```bash
docker compose down -v
docker compose up -d --build
```

## Полезные сведения

- PHP и Node устанавливаются внутри образа, поэтому ставить их на хосте не требуется.
- Исходный код монтируется в контейнер `/var/www/html`.
- Приложение использует порт `8099` по умолчанию.
- MySQL хранит данные в Docker-томе `mysql_data`.
- `vendor`, `node_modules` и `storage` также вынесены в Docker-тома.

## Структура Docker-конфигурации

- `Dockerfile` — образ PHP, Composer и Node;
- `compose.yaml` — сервисы приложения, Vite и MySQL;
- `docker/entrypoint.sh` — подготовка каталогов, ключа, базы и storage;
- `docker/php.ini` — настройки PHP;
- `.env.example` — пример переменных окружения.
