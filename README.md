# PHPDown

## Why? (optional)

I know, it's a little bit funky to represent Markdown elements as PHP classes but let me show you the reason behind it.

Currently, I'm still actively maintaining my package [Larecipe](https://larecipe.binarytorch.com.my) which its main purpose is writing software documentation in a very elegant and beautiful looking. However, during my daily work as software team leader, I'm required to write a lot of docs for our projects and APIs where now I feel I have to automate this process and save some time on other important things. 

Therefore, I've decided to develop a new open-source tool (will be available soon) for Larecipe where you can generate docs on the fly from your tests suites without warring on updating the docs every time you add new field or remove one and this idea requires to have Markdown generated output and yeah! you can guess the rest of the story 😆 but I really think this is helpful for other cases that's why I separated as a new package for PHP.

## Installation

You can install the package via composer:

```bash
composer require binarytorch/phpdown
```

## Usage & Supported Elements

- [x] Heading
- [x] Breaks
- [x] Blockquote
- [x] Link
- [x] Image
- [x] Todo List
- [x] Mutations: [Strikethrough, Bold, Inline Code, Marked]
- [x] Code
- [x] Table
- [x] Markdown Document

See full [documentation](https://phpdown.binarytorch.com.my/)

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email saleem@binarytorch.com.my instead of using the issue tracker.

## Credits

- [Saleem Hadad](https://github.com/saleem-hadad)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.