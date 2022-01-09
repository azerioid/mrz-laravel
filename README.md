# mrz-laravel


#forked from 
https://github.com/bbeycanov/mrz-parser

``` composer require ramil/mrz ```

# call library
```use ramil\mrz\MRZParser;```


#example

``` $array = MRZParser::parse('IAAZEAA1********************<<<<<<<<9606195M3010068AZE<<<<<<<<<<<8*******<<********<<<<<<<<<<<<<<');```


#response

```
{
  "documentCode": "I",
  "documentType": "ID-1",
  "issuerOrg": {
    "abbr": "AZE",
    "full": "Azerbaijan"
  },
  "names": {
    "lastName": "*******",
    "firstName": "********"
  },
  "documentNumber": "*******",
  "optionalData": "********",
  "optionalData2": "",
  "nationality": {
    "abbr": "AZE",
    "full": "Azerbaijan"
  },
  "dob": "**/**/****",
  "sex": {
    "abbr": "M",
    "full": "Male"
  },
  "expiry": "**/**/****",
  "checkDigit": {
    "documentNumber": {
      "checkDigit1": "0",
      "checkDigitVerify1": false
    },
    "dob": {
      "checkDigit2": "5",
      "checkDigitVerify2": false
    },
    "expiry": {
      "checkDigit3": "8",
      "checkDigitVerify3": false
    },
    "finalCheck": {
      "checkDigit4": "8",
      "checkDigitVerify4": false
    }
  },
  "mrzisvalid": false
}
```