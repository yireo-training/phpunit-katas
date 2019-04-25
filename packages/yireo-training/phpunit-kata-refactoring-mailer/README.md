# PHPUnit Kata - Refactoring mailer
The PHP file `includes/mailer.php` contains legacy code. There are numerous things wrong with it, but besides the outdatedness, there are also a couple of requirements that need to be fullfilled:

- Allow HTML to be mailed;
- Easily modify headers, like recipients and `From`;

Other refactoring ideas:
- The original API needs to remain intact (`Mailer::sendMessage()`);
- Implement namespaces and move everything to composer;
- Add `declare(strict_types)`;
- Create enough setter-methods to modify things;
- Implement the `phpunit-kata-email-corrector`;

## Install
Install the composer package via the following command:

    composer require yireo-training/phpunit-kata-refactoring-mailer:@dev

