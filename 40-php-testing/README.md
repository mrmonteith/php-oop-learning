
# PHP Testing Examples

This section demonstrates PHPUnit testing in three progressive scenarios:

- `01-basic-tests/` — simple unit tests for a Calculator class
- `02-mocking/` — mocking dependencies with PHPUnit
- `03-controller-tests/` — testing controller methods

Each folder includes:

- Source files with signature header style
- PHPUnit test classes
- README.md explanations

---

## ▶️ Running Tests

### 1. Install PHPUnit
From the **repo root** (`/var/www/php-oop-learning`):

```bash
composer require --dev phpunit/phpunit
```

This installs PHPUnit into `vendor/bin/phpunit`.

---

### 2. Run tests in each folder

Change into the folder you want to test, then run PHPUnit against the test file(s).

#### Basic Tests
```bash
cd 40-php-testing/01-basic-tests
../../vendor/bin/phpunit CalculatorTest.php
```

#### Mocking
```bash
cd 40-php-testing/02-mocking
../../vendor/bin/phpunit UserServiceTest.php
```

*(replace `DependencyMockTest.php` with the actual test filename in that folder)*

#### Controller Tests
```bash
cd 40-php-testing/03-controller-tests
../../vendor/bin/phpunit ControllerTest.php
```

---

### 3. Run all tests at once
From the **repo root**:

```bash
vendor/bin/phpunit 40-php-testing
```

This will discover and run all test classes under the `40-php-testing/` directory.

---

## ✅ Expected Output
You’ll see PHPUnit’s summary, e.g.:

```
PHPUnit x.y.z by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 00:00, Memory: 4.00 MB

OK (2 tests, 2 assertions)
```

---

## 🔑 Notes
- Always `cd` into the specific test folder if you want to run just that set.  
- Use `vendor/bin/phpunit` from the repo root to run everything.  
- Each test file is self‑contained and runnable on its own.
```

---

👉 This cleaned‑up README makes it obvious: install PHPUnit at the repo root, then run tests either per folder or all at once.  

Would you like me to also scaffold a `phpunit.xml` config file at the repo root so you can just type `vendor/bin/phpunit` without passing folder paths? That’s the usual convention recruiters expect.
