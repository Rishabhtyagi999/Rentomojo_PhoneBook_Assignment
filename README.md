# Rentomojo_PhoneBook_Assignment
Name : Rishabh Tyagi

College : Lovely Professional University

Registration No: 11713479

Description About Assignment:
  Here I try to fulfill all the requirement of my PhoneBook Assignment given by Rentomojo.
  
  Please Not that my interface for PhoneBook web application is a little-bit differ from given sample but the features offer by my applications will be same as expected.
  
1. In starting I have created  a login validation page which have two option either a user is already have an account or not. so  user can login/register accordingly with full authentication and validation checking .
Once the user have create  a login account his/her data as user will get store in database so that user should not face any security issue and it will allow the user to get login with registered account only.

2. After login, user will get an access of its home page("Contact")where user  can perform the following operations:

  Operations User can do 
 - Add a contact
 - Remove a contact
 - Update a contact
 - Search contact
 - By name (partial name can also be searched) 
 - By phone number 
 - By email 
 - Add pagination with default 4 results per page
 - Search results should be sorted alphabetically (by name). 

   Contact :
   will have Name(required).
   will have Phone numbers(should have at least 1 phone number).
   email will be stored at the registration time of user only.
   Date Created the contact.
   Notes.
   Actions(remove a contact or update a contact).
   
  3. After Performing the operation user can logout with the help of logout button provide on the top corner of home page.
  
  
   Constraints:
   
  - Two contacts ​cannot​ have same phone numbers 
  - Two contacts ​can​ have the same emails. 
   

  Note:

  1.Use ​Node.js(prefered)​/ PHP
  2.You can use database of your choice 
  3. Using Git with proper commit and README file is a plus. 
  4. Preferably, deploy your app​ somewhere so that we can open your webapp and test it. 
     Some eg. places you can deploy is:
                 a. Digitalocean
                 b. 000webhost (for php)
                 c. Heroku 
                 d. Gcp 
                 e. Aws 
                 f. Or as per your convenience.
  5. A sample design is given below. 
  Try to make it according to that or better.
  6. If you want to add something more in design you are free to do it. 
 Just mention your additions in the README file of your git repository.
  7. Focus on completing the basic assignment, then deployment. 
 
 
    


Follow these Instruction Please:


I have deploy my PhoneBook Application on http://provisdemo.com/phonebook/ , please  try it out there to understand the basic functionalities offered by the my application. 


#  If you want to Install and Run this web application on your localmachine. 

Please follow these instructions:

 
1.Please download the code and find the phonebook_db.sql , create a mysql database and import the given sql. 

2. Place the phonebook directory on your Web Server root directory and update the database details in following file as follows 

   /your-server-root/phonebook/.env

   you need to update following code 
   
  DB_HOST=localhost
  DB_DATABASE=“your database name”
  DB_USERNAME=“your database user”
  DB_PASSWORD=“your database password”


3. please update permission /your-server-root/phonebook/storage directory requires at least 0755. ( please check / change ownership of the phonebook directory to the user running Web Server. otherwise 0777 permission is required for storage directory )  

5. All set , you can check the application on following URL 

http://your-server-hostname/phonebook/public

Hope it is working fine in your machine as well.

Thanks and Regards
Rishabh Tyagi
