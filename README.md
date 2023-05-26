# MiltonBank
A fake online banking service website.


Responsive website containing the following pages: Home, About, Services, Learn (articles) and Dashboard.  
The user can browse financial articles and perform banking operations when authenticated.   


User login and authentication (can create new users, existing users can login).  
If the user enters the wrong password three times, their account is blocked for 10 mins.  
Passwords are encrypted in the database.  

User dashboard (Transactions, Add Contact, Send Money, Deposit, Withdraw, Learning Center, Change Info).  
Can view transactions and current account balance.  
Can add contacts.  
Can deposit, withdraw, and send money to contacts.  
Money sent to contacts can be canceled within 2 hours of the transaction time.  
The learning centar diplays different articles that can be clicked for more details.  
The user has the option to update their personal information.  


Technologies used
---------------------
- PHP
- Laravel
- MySQL


*Requires MiltonBank.sql to create database (update line 16 of .env with your own db password).

