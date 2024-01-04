# MiltonBank

A fake online banking service website.

Responsive website containing the following pages: Home, About, Services, Learn (articles) and Dashboard.  
The user can browse financial articles and perform banking operations when authenticated.   

![Milton Bank Website](https://github.com/brandonlr09/MiltonBank/blob/main/miltonbank_logged_in.png)

## Features

- User accounts:
    - User login and authentication (can create new users, existing users can login).  
    - If the user enters the wrong password three times, their account is blocked for 10 mins.  
    - Passwords are encrypted in the database.  

- User dashboard:
    - Transactions (Can view transactions and current account balance)
    - Add Contact (Can add contacts using their email)
    - Send Money (Money sent to contacts can be canceled within 2 hours of the transaction time)
    - Deposit (Deposit money to account)
    - Withdraw (Withdraw money from account)
    - Learning Center (Diplays different articles that can be clicked for more details)
    - Change Info (Can update personal information)

- Search bar (Search for articles using key words)

![Milton Bank Transactions](https://github.com/brandonlr09/MiltonBank/blob/main/miltonbank_transactions.png)

## Technologies used

- PHP
- Laravel
- MySQL

## Development

Run Development Server:
```bash
php artisan serve
```
and open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

### Requirements

- [https://getcomposer.org/](Composer)
- `MiltonBank.sql` is provided to create the database, simply update line 16 of `.env` with your own DB_PASSWORD.
