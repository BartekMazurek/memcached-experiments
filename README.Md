# Memcached experiments

## How to run
Type **docker-compose up -d** in main directory

## Connect into Memcached server by telnet protocol:
> telnet memcached 11211

## Get Memcached server stats by Linux console tool:
> memcstat --servers memcached

## Other cli commands:

#### Dump data stored in memory:
> memcdump --servers memcached

#### Display data for specified key:
> memccat --servers memcached [KEY_NAME]

#### Remove data for specified key:
> memcrm --servers memcached [KEY_NAME]

#### Copy files into memory
> memccp --servers memcached [FILE_NAME]

