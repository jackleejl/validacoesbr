# jackleejl/validacoesbr

Implementa validações de CPF, CEP, números de telefone residenciais/comerciais/celulares, entre outras informações pertinentes ao Brasil.

## Install

Via Composer

``` bash
$ composer require jackleejl/validacoesbr
```

## Usage

``` php
$cpfValido = Cpf::valida('238.176.620-09');

if ($cpfValido) {
    echo 'CPF válido.';
} else {
    echo 'CPF inválido.';
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ codecept run unit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email me.jacklee.jl@googlemail.com instead of using the issue tracker.

## Credits

- [Jack Lee]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

