## Bait test

A lab environment for studying authentication data capture mechanisms and implementing logging systems in PHP.

## 📋 Overview
The `bait_test` project was designed as a controlled environment to practice web development and defensive cybersecurity skills. It allows you to understand how to structure a lightweight PHP application, manage web routing, and implement effective logging of login attempts.

## 🚀 Features
* **Simplified MVC Architecture**: Clear separation between logic (Controller), view (View), and data processing.

* **Secure Configuration**: Support for `.env` files for managing environment variables.

* **Custom Routing**: Use of `.htaccess` for clean routing without exposing the folder structure.

* **Centralized Logger**: Structured data capture system for analyzing requests (IP, User-Agent, etc.).

## 🛠 Installation

1. Clone the repository:

```bash
git clone https://github.com/Jovialngandu/bait_test.git
cd bait_test
```

2. Configure environment variables:

Copy the .env.example file to .env and adjust the necessary settings:

```bash
cp .env.example .env
```
3. Start the local server:

```bash
php -S localhost:8001
```
## 🔒 Security Warning
This project is strictly intended for educational and cybersecurity research purposes. The author accepts no responsibility for any misuse of this code.

The user is solely responsible for their actions. It is forbidden to use this lab for malicious or unauthorized activities, or to target third-party systems without explicit consent.

## 🤝 Contribution
Contributions are welcome to improve the project structure or add new logging modules. Please open an "Issue" to discuss your proposals.

---