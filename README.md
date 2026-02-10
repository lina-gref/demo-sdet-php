[![GitHub Workflow Status](https://github.com/lina-gref/demo-sdet-php/actions/workflows/tests.yml/badge.svg)](https://github.com/lina-gref/demo-sdet-php/actions/workflows/tests.yml)
# PHP SDET Test Automation Framework

A professional test automation boilerplate for demonstrating modern SDET practices. This project includes API and UI testing capabilities built within a containerized Docker environment.

---

### Current Status

**Under Active Development.** The current focus is on building out the core API testing framework.

*   [x] Dockerized PHP 8.2 environment setup.
*   [x] Composer dependency management configured.
*   [x] PHPUnit test runner integrated.
*   [ ] Build out API test suite for public APIs.
*   [ ] Integrate with GitHub Actions for CI/CD.

---

### Tech Stack

*   **Language:** PHP 8.2
*   **Testing Framework:** PHPUnit
*   **HTTP Client:** Guzzle
*   **Environment:** Docker & Docker Compose

---

### How to Run Tests Locally

1.  Ensure you have Docker Desktop installed and running.
2.  Clone the repository.
3.  Build and start the container:
    ```bash
    docker-compose up -d --build
    ```
4.  Install Composer dependencies:
    ```bash
    docker-compose exec php composer install
    ```
5.  Run the test suite:
    ```bash
    docker-compose exec php ./vendor/bin/phpunit

    ```
