# PHPUnit Kata - Email Corrector
Sometimes, people enter a wrong email address like `johndoe@hotmail.co` (forgetting the last `m`), which leads to annoying support questions. Let's fix this with a simple PHP class that automatically corrects these mistakes:

An email address like `johndoe@hotmail.co` could be validated in the following ways:

- Check whether the total of the email address conforms to RFC standards, using a regular expression of some kind (copy-and-paste from web);
- Validate whether the last part `.co` matches with a TLD domain (`.co.uk`, `.com`);
- Validate whether the domain part `@hotmail.co` could be looked up via DNS as a valid MX record;

Correction could occur in the following ways:

- Loop through possible TLDs and match `.co` as closely as possible;
- Use a hard-coded list of commons domains that frequently spelled in a wrong way; 