## Setup

1. ```composer install```
2. ```./vendor/bin/sail up```
3. ```./vendor/bin/sail artisan migrate```

## Available statuses
1. ```alive```
2. ```dead```
3. ```unknown```

## API

### Get all characters

```http://0.0.0.0/api/all-characters?page={page}```

### Get specific character

```http://0.0.0.0/api/character/{id}```

### Get characters by name and/or status

```http://0.0.0.0/api/find-characters?name={name}&status={status}```
