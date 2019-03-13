# WIP: Laravel lang

Analyze files and look for unused translations, suggest removal. Can also be used to translate missing translations and show statistics of coverage.

## Commands

### Command line usage
```sh
php artisan language:unused:analyze
php artisan language:unused:remove [--include-pattern=<pattern>] [--includedirs=<dirs>] ( --dry-run | --interactive | --force )
php artisan language:coverage [<language>] [--verbose]
php artisan language -h | --help
php artisan language -v | --version
```

### Options:

-h --help Show this screen.\
-v --version Show version.\
--include-pattern=<pattern> Additional regexp pattern to search for [default: `Lang::get()...`].\
--include-dirs=<dirs> Directories to include in search [default: `resources/views`].\
--verbose Show more detailed information.