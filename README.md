# U Park Web Application
## What is U Park?
### Our Objective 
#### To offer the University of Utah parking lot users to find and park their vechiles in parking spaces more efficiently. We aim to keep parking spaces only to be occupied to people with the parking permits.

### It helps...
#### reduce time consuming on finding a parking spot.

### How does it work?
#### Users can login and find the number of availability on each parking lot on the website.
#### Aid Commuter Service Department to manage violation through monitoring and tracking the parking stalls with the pass.

# What is the motivation behind U Park?
#### Our motivation for this project stems from personal experience. A lot of people who have parking permits struggles with parking on campus, especially right before the class starts. Even if you have a parking permit, sometimes you cannot park anywhere on campus because of the type of permits and lack of parking spots. Therefore, we want to let users know the availability ahead of time so that they do not have to waste their time waiting for someone to empty the parking spot.

# What can U Park do?
#### U Park offers convenience to customers who is finding a parking space.
#### U Park provides the availability of the parking spots according to the permit type.

# Logging In
#### The login system work based on the database we have in our system. We keep record of each users' ID, type, name, phone, email, password, and role. For instance, (1000, 'Student', 'Fina', 'Langhorne', '6 Di Loreto Street', '(582)223-0871', 'flanghorne0@salon.com', '2vklvjlk3', 'user').
#### In order to keep our data secure from possible cyber attacks, we used hash function and added salting to the password to make it impossible to decipher, using the following code:
$token=has('ripemd128', $salt1.$defaultpass.$salt2);
