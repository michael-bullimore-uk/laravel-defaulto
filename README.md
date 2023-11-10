![Laravel Defaulto](art/logo.svg)

This is WIP, please do not use in production.

## About
A package that overrides the default Laravel configuration with secure defaults, plus some opinionated boilerplate (that can be disabled).

## Features
- Secure config by default
    - Increased bcrypt hashing cost
    - Encrypted session data
    - Expire cookies on browser close
    - Prevent CSR cookies
    - HTTPS only cookies
    - ...
- Eloquent
  - Req. morph map
  - Strict mode
- Immutable dates

## TODO
- Is there a way to enforce install of the Roave Security Advisories package as a dev dependency?
- Tests, tests, tests.

## Documentation
//

###  Installation
//

Please do not blindly use this package in production without thoroughly testing the implementation.

## Security
Please do not report security related issues publicly.

## License

[MIT License](LICENSE.md)
