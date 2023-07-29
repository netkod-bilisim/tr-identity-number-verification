# Tr Identity Number Verification

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-verification" rel="nofollow">
    <img src="https://img.shields.io/packagist/v/netkod-bilisim/tr-identity-number-verification" alt="Latest Stable Version">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-verification" rel="nofollow">
    <img src="https://img.shields.io/packagist/dt/netkod-bilisim/tr-identity-number-verification" alt="Total Downloads">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-verification" rel="nofollow">
    <img src="https://poser.pugx.org/netkod-bilisim/tr-identity-number-verification/dependents.svg" alt="Dependents">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-verification" rel="nofollow">
    <img src="https://img.shields.io/packagist/l/netkod-bilisim/tr-identity-number-verification" alt="License">
</a>
</div>

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-identity-number-verification" rel="nofollow">
    <img src="http://poser.pugx.org/netkod-bilisim/tr-identity-number-verification/require/php" alt="License">
</a>
<a href="https://scrutinizer-ci.com/g/netkod-bilisim/tr-identity-number-verification/badges/quality-score.png?b=master" rel="nofollow">
    <img src="https://scrutinizer-ci.com/g/netkod-bilisim/tr-identity-number-verification/badges/quality-score.png?b=master" alt="Scrutinizer">
</a>
<a href="https://github.styleci.io/repos/671831827?branch=master">
    <img src="https://github.styleci.io/repos/671831827/shield?branch=master" alt="StyleCI">
</a>

</div>

## <img src="public/assets/images/presentation.png" width="25" height="25"> Introduction

It checks the TR Identity Number.

## <img src="public/assets/images/requirement.png" width="25" height="25"> Requirements

- PHP >= 7.4
- PHP soap extension

## <img src="public/assets/images/inbox.png" width="25" height="25"> Install

```bash
composer require netkod-bilisim/tr-identity-number-verification:"^1"
```

## <img src="public/assets/images/web-coding.png" width="25" height="25"> Usage

```php

use NetkodBilisim\TrIdentityNumberVerification;

$result = TrIdentityNumberVerification::verify(12345678901, 1990, 'Alparslan', 'YILMAZ');
var_dump($result);    # Result: bool(false)
```

## <img src="public/assets/images/licensing.png" width="25" height="25"> License

This package is open source software licensed under
the [MIT License](https://opensource.org/license/mit/).
