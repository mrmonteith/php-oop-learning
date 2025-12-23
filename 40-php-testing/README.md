
# PHP Testing

## 📘 Overview
This branch demonstrates unit testing in PHP using PHPUnit.

## 📂 Topics
- **01-basic-tests/** — simple unit tests for a Calculator class  
- **02-mocking/** — mocking dependencies with PHPUnit  
- **03-controller-tests/** — testing controller methods  

Each folder includes:
- Source files with your signature header style  
- PHPUnit test classes  
- README.md explanations

## ▶️ Running Tests
Install PHPUnit (via Composer or PHAR) and run:

```
phpunit --bootstrap vendor/autoload.php tests
```

Or run individual test files:

```
phpunit CalculatorTest.php
```
```

