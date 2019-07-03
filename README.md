# metarush/lang

Language translations / i18n / l10n with replaceable variables.

Sometimes you don't need a full-blown translation package.
If all you want is to read a language translation source (e.g., Yaml file) and optionally replace variables on it on runtime, then this package is for you.

## Install

Install via composer as `metarush/lang`

## Usage

1. Create a language file e.g., `en-US.yaml` and store it in a folder of your choice e.g., `locales/`

2. Put the ff. sample content in `en-US.yaml`:

```yaml
foo: hello world
bar: the {{size}} {{color}} {{animal}} jumped
```

`foo` and `bar` will be the reference keys of each language string

3. Put the ff. in your PHP code:

```php
$lang = (new \MetaRush\Lang\Builder())
            ->setLocalePath('path/to/locales/folder/')
            ->setLocale('en-US')
            ->build();

$foo = $lang->get('foo');

// $foo now contains 'hello world'
```

To replace variables on runtime:

```php
$vars = [
    'size'   => 'big',
    'color'  => 'brown',
    'animal' => 'fox',
];

$bar = $lang->get('bar', $vars);

// $bar now contains 'the big brown fox jumped'
```

## Additional settings

### `->setOpenSyntax(string)`

Change the open syntax of variables e.g., `->setOpenSyntax('%')`

### `->setCloseSyntax(string)`

Change the close syntax of variables e.g., `->setCloseSyntax('%')`