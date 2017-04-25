                                    Final submission of scheduling system webware of FACS and confocal facility:
                                                                                                                - By T.S.R.Vineel, C.Dhruv, K.Piyush, M. Priyanka.
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Contents:
         1. Files included in htdocs (which contains the main project code folder final)
         2. How to test
         3. All working functionalities
         4. GUI and its details
         5. Present limitations
         6. Documentation

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Descrition:

1. Files included :
                    htdocs/final    = book, check, checkout, urn, payment, first, sql, checkthebooked, index, find, mail       - .php files
                                    = header, icon, logo                                                                       - .png files
                                    = dcalender.picker, css                                                                    - .css files
                                    = project                                                                                  - .sql files
                                    = dcalender.picker                                                                         - other files
                                    = img(11), js(4), mailer(108), scripts(1), styles(6)                                       - folders


2. How to test :
                 Note that a PC with atleast windows 7 is needed for testing.
                 a. Install XAMPP which is included along with htdocs folder.
                 b. Copy htdocs folder into installed XAMPP folder and merge them.
                 c. Open XAMPP control panel and start apache and mysql.
                 d. Click on admin beside to start phpmyadmin(MySQL and database manager). Create new database in left panel and name it project and select it.
                 e. Click on import and select the htdocs/final/project.sql file and save. Hence database is ready.
                 f. Open new tab in the browser and enter localhost/final.
                 g. Hence you will be able to testrun the webware. The changes made to database are visible in localhost/phpmyadmin/, in project


3. All working functionalities :
                                           For now the working functionalities are 
                                                                                   a. create a new user account.
                                                                                   b. login using existing account.
                                                                                   c. Select a machine
                                                                                   d. Select date, time that you want.
                                                                                   e. Unless logged in you can only access first.php only.
                                                                                   f. Upon closing the browser or ending the transaction, sessions are destroyed, hence secure usage.
                                                                                   g. Payment page is automated.
                                                                                   h. Basic level security points are maintained.
                                                                                   i. Even if transaction fails, the details will be on server with payment status. Secure payment is provided by IITI payment service.
                                                                                   j. IITI users and other users are charged with separate priveleges automatically.
                                                                                   k. Special restrictions for new user accounts during creation.
                                                                                   l. One can check the booking status.
                                                                                   m. 2 bookings can't be done at same time.
                                                                                   n. Booking can be done for tomorrow and it's following days only.
                                                                                   o. Instructions of booking are mentioned clearly on webware itself.


4. GUI and its details :
                         We are matching our website's GUI with bsbe.iiti.ac.in GUI to make it look edible to be with rest of the site.


5. Present limitations :    
                         There are no more limitations. Note that installation on server requires ffew code changes which are too complex to mention. I will be there during installation on server to make it smoother and simpler installation.


6. Documentation       :
                         There are finalized and updated UMLdiagrams design, test cases analysis ,SRS and this readme file included. Follow instructions as mentioned in them to use it.



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------