## Install Project

1. Clone the project's repository
2. Install Wamp64/XAMPP on your machine
3. Place the files inside the www/htdocs folder
4. Import the db file from "database/sustainablestardb.sql"
5. Ensure your the .env file contains the following credentials: 

    DB_DATABASE=sustainablestardb
    DB_USERNAME=root
    DB_PASSWORD=
6. Run php artisan serve to run the project on your local server

--Note: don't use php artisan migrate as the migration tables don't implement what they were coded for for some reason (bug)


## About the Project

This is a technical assignment for the Software Developer Position at Sustainable Star. Blow are the functionalities included:

1. Authentication system
2. Timeline for posts
3. User can create a company and become the owner of that company profile
4. Company owner can delegate access to any existing users in the system, even if the other user has their own company
5. Users should receive email notifications
6. Ability to post on behalf of the company or the user's own profile (with an option to choose)
7. Ability to remove access from others, but only if the user is the owner of the company
8. Each user can create only one company as an owner. If they try to create more, a message should be displayed prompting them to upgrade. We need to check how this will be handled in the backend to prevent creation without an upgrade.


## Authentication system

After successfully installing & running the project in your browser, proceed to 'register' & 'login' to test the Authentication functionality. Forgot Password functionality also works.

## Timeline for posts

After creating an account, proceed to Posts->All Posts to check-out the timeline for posts created by all the users & companies(created by users) on the platform. If you want to check and edit your own posts, proceed to Posts->My Posts.

## User can create a company and become the owner of that company profile

With your logged in user, proceed to Companies->Create Company and proceed with creating a company. To check the companies that you are an owner of (not a member of), proceed to Companies->My Companies.

## Company owner can delegate access to any existing users in the system, even if the other user has their own company

While creating the company, if there are other users on the system, you will be able to add them as members. To test this, create a second account, and create a company using the second account. Add the first account to the company created by the second account.

## Users should receive email notifications

Once the second account adds the first account to the company, the first account and the second account will recieve emails for being added to the company.

## Ability to post on behalf of the company or the user's own profile (with an option to choose)

Whether the user is an owner or a member, they will be able to choose a company to post on it's behalf. In the All Posts section, the post will come under the selected company's name had the user chose to post onbehalf of that company.

## Ability to remove access from others, but only if the user is the owner of the company

The user can head to Companies->My Companies and edit their company. They have the ability to add/remove users from their company. If a new user is added while editing the company, the added user will receive an email.

## Each user can create only one company as an owner. If they try to create more, a message should be displayed prompting them to upgrade. We need to check how this will be handled in the backend to prevent creation without an upgrade.

The user has the ability to create only one company. If they proceed to creating another company, the will be prompted with a subscription message and will be redirected to subscribe. Once subscribed, they will be able to create more than one company. 
