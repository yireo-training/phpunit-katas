# PHPUnit Kata - EU VAT validator
This package contains a kata to play around with the EU VAT validator service. However, instead of dealing with the SOAP service itself, let's use a popular third party package for this instead: [ibericode/vat](https://packagist.org/packages/ibericode/vat). Why? Because of the PIE principle (Proudly Invented Elsewhere).

Create a custom class, that allows calling upon the package to validate a VAT number. However, let's improve it with the following:

- Automatically correct common spelling mistakes (spaces, dashes, underscores);
- Throw exceptions when things are not valid;
- If a VAT number starts with `GR` (Greece), correct it to be `EL`;
- If a UK number, starting with `GB`, is validated after October 31st 2019, give a proper Brexit response; 
