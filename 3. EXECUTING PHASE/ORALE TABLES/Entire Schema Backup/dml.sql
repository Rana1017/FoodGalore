------TRADERS

INSERT INTO USERS (USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE, PERMISSIONS)
VALUES ('Trader One', 'trader1@gmail.com', 'Female', '09/09/2002', 'Thulobharang', '9869828910', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Trader', '');

INSERT INTO USERS (USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE,  PERMISSIONS)
VALUES ('Trader Two', 'trader2@gmail.com', 'Male', '09/09/1996', 'Nuwakot', '9863594210', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Trader', '');

INSERT INTO USERS ( USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE,  PERMISSIONS)
VALUES ('Trader Three', 'trader3@gmail.com', 'Male', '09/07/2002', 'Nagarkot', '9866584230', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Trader', '');

INSERT INTO USERS ( USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE,  PERMISSIONS)
VALUES ( 'Trader Four', 'trader4@gmail.com', 'Male', '09/09/2007', 'Newroad', '9869588936', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Trader','');

INSERT INTO USERS ( USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE,  PERMISSIONS)
VALUES ( 'Trader Five', 'trader5@gmail.com', 'Female', '03/03/2010', 'Kathmandu', '9866588910', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Trader','');


-----ADMINS

INSERT INTO USERS ( USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE, PERMISSIONS)
VALUES ('Admin', 'admin@gmail.com', 'Male', '07/04/1968', 'Lagankhel', '9854762251', 'admin', '0', 'verified', 'Admin', '');





------CUSTOMER
INSERT INTO USERS ( USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE, PERMISSIONS)
VALUES ('Customer One', 'customer1@gmail.com', 'Female', '09/03/1940', 'Sanepa', '9869871210', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Customer','');

INSERT INTO USERS (USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE, PERMISSIONS) 
VALUES ('Customer Two', 'customer2@gmail.com', 'Male', '09/06/1992', 'Koteshwor', '9863264580', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Customer','');

INSERT INTO USERS (USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE, PERMISSIONS) 
VALUES ('Customer Three', 'customer3@gmail.com', 'Female', '09/03/1949', 'Baneshwor', '9869876510', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Customer','');

INSERT INTO USERS ( USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE, PERMISSIONS) 
VALUES ('Customer Four', 'customer4@gmail.com', 'Male', '09/07/1990', 'Gwarko', '9865736590', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Customer','');

INSERT INTO USERS ( USER_NAME, USER_EMAIL, USER_GENDER, DOB, USER_ADDRESS, USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS, USER_TYPE, PERMISSIONS) 
VALUES ('Customer Five', 'customer5@gmail.com', 'Male', '07/07/1998', 'Kokhana', '9867736090', 'a4d4cc4e2d760d9f78862d282f5dcf1b', '0', 'verified', 'Customer','');








------SHOP

INSERT INTO SHOP (SHOP_NAME , USER_ID , SHOP_IMAGE) VALUES ('BUTCHER','1','https://images.pexels.com/photos/2167025/pexels-photo-2167025.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
INSERT INTO SHOP (SHOP_NAME , USER_ID , SHOP_IMAGE) VALUES ('GREENGROCER','2','https://images.pexels.com/photos/1300972/pexels-photo-1300972.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
INSERT INTO SHOP (SHOP_NAME , USER_ID , SHOP_IMAGE) VALUES ('FISHMONGER','3','https://images.pexels.com/photos/1578445/pexels-photo-1578445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
INSERT INTO SHOP (SHOP_NAME , USER_ID , SHOP_IMAGE) VALUES ('BAKERY','4','https://images.pexels.com/photos/205961/pexels-photo-205961.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
INSERT INTO SHOP (SHOP_NAME , USER_ID, SHOP_IMAGE) VALUES ('DELICATESSEN','5','https://images.pexels.com/photos/264636/pexels-photo-264636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');





------PRODUCTS (Butcher)



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Pork','99','https://images.pexels.com/photos/4751420/pexels-photo-4751420.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','Pork is one of the most popular forms of meat in the world.

Despite some confusion on the issue, pork is classed as red meat. This is because it contains a large amount of myoglobin, a protein responsible for the red color of meat.','1','active','100','1','10','No Allergy');


INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Beef','199','https://images.pexels.com/photos/5468588/pexels-photo-5468588.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','When most people think of red meat, they probably imagine beef.

There are many different beef products and cuts of beef, ranging from hamburgers to ribeye steaks.','1','active','100','1','10','No Allergy');





INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Chicken','699','https://images.pexels.com/photos/8061829/pexels-photo-8061829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500%27,',' Alongside beef and pork, chicken is one of the ‘big three’ popularity-wise.

However, chicken is a different classification of meat and comes under the poultry category.

People commonly refer to poultry as ‘white meat’.

As one of the most popular foods in the world, there are all sorts of chicken-based foods. These range from fried and roasted chicken to chicken soup and even chicken popcorn.','1',	'active',	'100 ',	'1','10 ',	'No Allergy');





INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Lamb and Mutton','99','https://images.pexels.com/photos/8432736/pexels-photo-8432736.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',' Both lamb and mutton are very similar types of meat, with one fundamental difference,
Lamb is from a sheep less than one-year-old. Mutton is the meat of an adult sheep Just like beef and pork, there are a variety of popular lamb cuts — perhaps lamb chops are the most popular.','1','active', '100 ','1','10 ',	'No Allergy');



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Turkey','149','https://images.pexels.com/photos/4455010/pexels-photo-4455010.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',' Turkey is another type of white meat, probably best known for its appearance at the Christmas table.
It has both a deeper yet drier taste than chicken and is a less prevalent form of poultry. As mentioned above, the most popular kind is probably roast turkey, but you can find a variety of processed and unprocessed turkey products.','1',	'active',	'100 ',	'1','10 ',	'No Allergy');





------PRODUCTS (GREENGROCER)



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Spinach','25','https://images.pexels.com/photos/6083893/pexels-photo-6083893.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',' Some of the best vegetables to incorporate into your everyday diet are leafy greens. Spinach is full of antioxidants, which reduce the risk of chronic diseases. It also contains vitamins A and K, and one cup of raw spinach contains 7 calories.','2',	'active',	'1500',	'1','10',	'No Allergy');






INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Carrots','225','https://images.pexels.com/photos/4929720/pexels-photo-4929720.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',' Carrots are known to help with eyesight since they contain about 4 times the daily recommended amount of vitamin A. They also contain beta-carotene, an antioxidant that can prevent cancer.','2',	'active',	'1500',	'1','10',	'No Allergy');



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Broccoli','75','https://images.pexels.com/photos/1346347/pexels-photo-1346347.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',' Broccoli is part of the cruciferous vegetable family. These vegetables contain sulforaphane, which can reduce the risk of cancer. It contains vitamins K and C, as well as folate, manganese, and potassium.','2',	'active',	'1500',	'1','10',	'No Allergy');



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Brussel Sprouts','135','https://images.pexels.com/photos/4965038/pexels-photo-4965038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','Brussel sprouts are also part of the cruciferous vegetable family. They contain the same vitamins and minerals as broccoli. Brussel sprouts also have kaempferol, a compound that reduces the risk of damage to cells.','2',	'active',	'100',	'1','10',	'No Allergy');

INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Sweet Potatoes','185','https://images.pexels.com/photos/7368044/pexels-photo-7368044.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','Like carrots, sweet potatoes contain beta-carotene, a type of vitamin A, to fight against cancer and improve eye health. Sweet potatoes are good for diabetics since they are low on the glycemic index scale and high in fiber.','2',	'active',	'180',	'1','10',	'No Allergy');


INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Mushrooms','65','https://images.pexels.com/photos/5802291/pexels-photo-5802291.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','Mushrooms contribute to helping with cognition, heart health, and disease prevention. They’re a great meat alternative because they contain protein and fiber. Mushrooms also have vitamins B and D.','2',	'active',	'130',	'1','10',	'No Allergy');








----------FISH



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Alaskan salmon','145','https://images.pexels.com/photos/6046747/pexels-photo-6046747.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','There’s a debate about whether wild salmon or farmed salmon is the better option.

Farmed salmon is significantly cheaper, but it may contain less omega-3s and fewer vitamins and minerals, depending on whether it’s fortified or not.

Salmon is a great option for your diet overall, but if your budget allows, opt for the wild variety. Try this grilled salmon recipe with a sweet-tangy glaze for an entrée that’s easy to prepare.','3',	'active',	'180',	'1','10',	'No Allergy');




INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Herring','95','https://images.pexels.com/photos/6046671/pexels-photo-6046671.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','A fatty fish similar to sardines, herring is especially good smoked. Smoked fish is packed with sodium though, so consume it in moderation.

Jamie Oliver’s Mediterranean-style herring linguine uses the fresh version in this recipe.','3',	'active',	'160',	'1','10',	'No Allergy');



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Mahi-mahi','155','https://images.pexels.com/photos/6046747/pexels-photo-6046747.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','A tropical firm fish, mahi-mahi can hold up to almost any preparation. Because it’s also called dolphinfish, it’s sometimes confused with the mammal dolphin. But don’t worry, they’re completely different. Try some blackened mahi-mahi tacos with a chipotle mayo for dinner.','3', 'active', '160', '1','10', 'No Allergy');






INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Mackerel','125','https://images.pexels.com/photos/8065512/pexels-photo-8065512.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','As opposed to leaner white fish, mackerel is an oily fish, rich in healthy fats. King mackerel is a high-mercury fish, so opt for the lower mercury Atlantic or smaller mackerel choices.','3', 'active', '150', '1','10', 'No Allergy');



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY)
 VALUES ('Perch','105','https://images.pexels.com/photos/7627414/pexels-photo-7627414.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','Another white fish, perch has a medium texture and can come from the ocean or fresh water. Because of its mild taste, a flavorful panko breading goes well with it, like in this recipe.','3', 'active', '150', '1','10', 'No Allergy');


-------------------Bakery


INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Miniature cheesecake','65','https://images.pexels.com/photos/1055272/pexels-photo-1055272.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260','You can make cheesecakes that are the size of a muffin or a cupcake. They are about as popular as cookie sandwiches because everyone loves cheesecake and these are just the right size. They come in a variety of flavors but the most popular seems to be the original cheesecake and the strawberry.','4', 'active', '100', '1','10', 'No Allergy');




INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY)
 VALUES ('Pies','55','https://images.pexels.com/photos/2955816/pexels-photo-2955816.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','Everyone loves pie, but pie slices are sometimes just not enough to hit the spot and fill up your sweet tooth. Personal pies are about 4 inches in diameter so they are a little larger than a slice, but not too big! They can come in every pie flavor from chocolate to cherry or apple and satisfy all of your pie cravings without leaving you feeling overly stuffed. ','4', 'active', '100', '1','10', 'No Allergy');



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Cookies','90','https://images.pexels.com/photos/6731/food-light-art-flour.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500','Everyone loves pie, but pie slices are sometimes just not enough to hit the spot and fill up your sweet tooth. Personal pies are about 4 inches in diameter so they are a little larger than a slice, but not too big! They can come in every pie flavor from chocolate to cherry or apple and satisfy all of your pie cravings without leaving you feeling overly stuffed. ','4', 'active', '100', '1','10', 'No Allergy');





INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Cannolis','150','https://images.pexels.com/photos/2955816/pexels-photo-2955816.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940','Cannolis are one of those pastries that everyone loves because they are sweet and savory but also so simple and remind us of happy days and good memories. Cannolis can be the original long size that are great for a filling snack and large enough to split with someone else while the miniature size is a great way to satisfy your sweet tooth without getting too filled up on a snack.  ','4', 'active', '100', '1','10', 'No Allergy');





INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Homemade bread ','450','https://images.pexels.com/photos/1359321/pexels-photo-1359321.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500','There is nothing like baking up a loaf of bread to make you feel warm inside. Fresh bread coming out of the oven makes you feel warm and comfortable inside and it can be eaten at any time of the day!','4', 'active', '100', '1','10', 'No Allergy');






-----DELICATESSEN




INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Dark Chocolate','329','https://images.pexels.com/photos/8482368/pexels-photo-8482368.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',' Dark chocolate is one of the most popular junk foods that are also healthy. These tasty treats usually have a low amount of sugar. Furthermore, these bitter chocolates are packed with protein and fiber.

Not to mention, their taste is so intense that you can’t overeat them. So, pick the chocolate bars made from 70% cocoa on your next trip to the market.','5', 'active', '60', '1','10', 'No Allergy');






INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Popcorn','450','https://images.pexels.com/photos/8508519/pexels-photo-8508519.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',' These movie night snacks are made from whole grain. Not only these are healthy, but they also make you feel that you have eaten more than you want.

Bring popcorn kernels and make them by yourself. This way, you can decide how much oil or butter you want. The interesting part is, you can experiment with several seasonings to choose your favorite one. Some wonderful toppings are chili powder, cinnamon sugar, and parmesan cheese.','5', 'active', '60', '1','10', 'No Allergy');




INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Pretzels','60','https://images.pexels.com/photos/4809147/pexels-photo-4809147.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',' Pretzels are another healthy mouthwatering junk food; they are salty snacks with low-fat. You have a variety of flavors to choose from, such as spicy buffalo wings or honey mustard. The calories can slightly differ from flavor to flavor.','5', 'active', '800', '1','10', 'No Allergy');


INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Ice Cream','160','https://images.pexels.com/photos/3185509/pexels-photo-3185509.png?auto=compress&cs=tinysrgb&dpr=1&w=500',' Pretzels are another healthy mouthwatering junk food; they are salty snacks with low-fat. You have a variety of flavors to choose from, such as spicy buffalo wings or honey mustard. The calories can slightly differ from flavor to flavor.','5', 'active', '800', '1','10', 'No Allergy');



INSERT INTO PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,STATUS,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY) 
VALUES ('Potato Chips','69','https://images.pexels.com/photos/6485538/pexels-photo-6485538.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',' I know, I know. You might be wondering how potato chips can be healthy junk food. Won’t you gain extra fat? That is also true to some extent.

But some potato chips can be healthy for you. The best potato chips that don’t affect your body are free from MSG. This is a common additive that some food brands use. The MSG can cause you allergic reactions, obesity, and headaches.','5', 'active', '600', '1','10', 'No Allergy');



INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(7,'07/07/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (1,1,6);

INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(8,'07/07/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (2,2,3);

INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(9,'07/07/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (3,3,5);


INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(10,'06/01/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (4,5,7);


INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(10,'06/01/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (5,5,7);


INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(11,'07/01/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (6,6,3);


INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(11,'03/01/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (7,26,3);


INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(7,'07/02/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (8,24,7);


INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(7,'07/02/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (9,23,7);


INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(8,'07/02/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (10,5,7);



INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(9,'07/02/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (11,8,7);




INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(10,'07/02/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (12,7,7);




INSERT INTO ORDERS(USER_ID,ORDER_DATE,ADMIN) VALUES(11,'07/02/2021','amanshrestha');
INSERT INTO ORDER_DETAILS(ORDER_ID,PRODUCT_ID,QUANTITY) VALUES (13,15,7);





INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(7,300,1,'07/07/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(7,300,8,'07/02/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(7,300,9,'07/02/2021');


INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(8,300,2,'07/07/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(8,300,10,'07/02/2021');



INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(9,300,3,'07/07/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(9,300,11,'07/02/2021');


INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(10,300,4,'06/01/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(10,300,5,'06/01/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(10,300,12,'07/02/2021');



INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(11,300,6,'07/01/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(11,300,7,'03/01/2021');
INSERT INTO PAYMENT (USER_ID,TOTAL_AMOUNT,ORDER_ID,PAYMENT_DATE) VALUES(11,300,13,'07/02/2021');



INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (1,7,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (2,8,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (3,9,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (4,10,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (5,11,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (6,11,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (7,7,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (8,8,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (9,8,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (10,9,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (11,10,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (12,11,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (13,8,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (14,7,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (15,8,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (16,9,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (17,11,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (18,10,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (19,10,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (20,8,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (21,9,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (22,10,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (23,11,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (24,10,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (25,7,'Very Good Product',5);
INSERT INTO REVIEW (PRODUCT_ID,USER_ID,REVIEW,RATING) VALUES (26,8,'Very Good Product',5);




INSERT INTO COLLECTIONSLOT (COLLECTION_DAY,COLLECTION_SLOT,USER_ID) VALUES('Wednesday-07-14-2021' , '10-13',7);
    
INSERT INTO COLLECTIONSLOT (COLLECTION_DAY,COLLECTION_SLOT,USER_ID) VALUES('Thursday-07-15-2021' , '13-16',8);
        
        
INSERT INTO COLLECTIONSLOT (COLLECTION_DAY,COLLECTION_SLOT,USER_ID) VALUES('Friday-07-16-2021' , '13-16',9);
            
INSERT INTO COLLECTIONSLOT (COLLECTION_DAY,COLLECTION_SLOT,USER_ID) VALUES('Wednesday-07-14-2021' , '16-19',10);
                
INSERT INTO COLLECTIONSLOT (COLLECTION_DAY,COLLECTION_SLOT,USER_ID) VALUES('Thursday-07-15-2021' , '10-13',11);
                    
INSERT INTO COLLECTIONSLOT (COLLECTION_DAY,COLLECTION_SLOT,USER_ID) VALUES('Friday-07-16-2021' , '13-16',9);
                        
INSERT INTO COLLECTIONSLOT (COLLECTION_DAY,COLLECTION_SLOT,USER_ID) VALUES('Wednesday-07-14-2021' , '10-13',10);
                            

INSERT INTO DISCOUNT (DISCOUNT) VALUES (10);
