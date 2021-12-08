<p align="center">
  <a href="https://github.com/thiiagoms/dumper">
    <img src="assets/dumper.png" alt="Logo" width="80" height="80">
  </a>
     <h3 align="center">Dumper - Backup MySQL tables :truck:</h3>
</p>

- [Dependencies](#Dependencies)
- [Install](#Install)
- [Run](#Run)


### Dependencies
 - PHP: >=7.4
 - Composer
### Install

* Clone the repository:
```bash
$ git clone https://github.com/thiiagoms/dumper
``` 

* Generate autoload:
```
$ cd dumper
$ composer install
```

* Addd you MySQL credentials to `.env.example` them copy it to `.env`:
```bash
$ cp .env.example .env
```
### Run

* Run `./dumper` and it will be generate `.sql` file in root directory:
```bash
$ ./dumper
```

Thank you so much for your time :purple_heart: