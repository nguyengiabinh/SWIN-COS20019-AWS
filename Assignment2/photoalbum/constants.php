<?php
/**
* 	All constants defined here
*
*	@author Swinburne University of Technology
*
*	============ READ ME !!! ============ 
* 	============ READ ME !!! ============ 
* 	============ READ ME !!! ============ 
*	This project requires AWS SDK for PHP. 
*	SSH into your EC2 and execute the following two commands to install the SDK:
*	1. Download the zip file that contains AWS SDK PHP onto /var/www/html directory
*	wget -P /var/www/html http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.zip
*	2. Unzip the downloaded file onto a new directory called "aws", which sits in /var/www/html directory
*	unzip /var/www/html/aws.zip -d /var/www/html/aws
*
*	Make sure the directory structure is correct so that the AWS SDK can be invoked.
*	var
*	â””â”€â”€â”€www
*		â””â”€â”€â”€html
*			â””â”€â”€â”€aws (created above in Command 2. This directory contains AWS SDK for PHP)
*	    		â”‚   AWS
*	    		â”‚   aws-autoloader.php
*	   			â”‚   ... 
*	   			â”‚
*			â””â”€â”€â”€photoalbum (this directory contains source files of the PhotoAlbum website)
*	    		â”‚   uploads (this directory stores images before they are uploaded to S3, for more deets see photouploader.php)
*	   			â”‚   album.php 					(executable) display all images in DB
*	   			â”‚   constants.php 				Constants defined here
*	   			â”‚   defaultstyle.css			CSS style for the website
*	   			â”‚   mydb.php					Interact with RDS DB
*	   			â”‚   photo.php					Photo object class
*	   			â”‚   photouploader.php			(executable) upload image to S3 and RDS
*	   			â”‚   photouploadtemplate.html	HTML template for the photo uploading function
*	   			â”‚   utils.php					some supporting methods
*	   			â”‚
*
*	The values of the constant variables with "[ACTION REQUIRED]" in the comment must be updated. The current values are just examples.
*	You need to replace the values of those constant variables with values specific to your setup.
*
* 	============ READ THE ABOVE !!! ============ 
* 	============ READ THE ABOVE !!! ============ 
* 	============ READ THE ABOVE !!! ============ 
*/

// [ACTION REQUIRED] your full name
define('STUDENT_NAME', 'Nguyen Gia Binh');
// [ACTION REQUIRED] your Student ID
define('STUDENT_ID', '104219428');
// [ACTION REQUIRED] your tutorial session
define('TUTORIAL_SESSION', 'Saturday 12;00AM');

// [ACTION REQUIRED] name of the S3 bucket that stores images
define('BUCKET_NAME', 'asm1bphoto');
// [ACTION REQUIRED] region of the above bucket
define('REGION', 'us-east-1');
// no need to update this const
define('S3_BASE_URL','https://'.BUCKET_NAME.'.s3.amazonaws.com/');

// [ACTION REQUIRED] name of the database that stores photo meta-data (note that this is not the DB identifier of the RDS instance)
define('DB_NAME', 'photo');
// [ACTION REQUIRED] endpoint of RDS instance
define('DB_ENDPOINT', 'database-asm2.corquhibe1ng.us-east-1.rds.amazonaws.com');
// [ACTION REQUIRED] username of your RDS instance 
define('DB_USERNAME', 'admin');
// [ACTION REQUIRED] password of your RDS instance
define('DB_PWD', 'lickmya707');

// [ACTION REQUIRED] name of the DB table that stores photo's meta-data
define('DB_PHOTO_TABLE_NAME', 'photo');
// The table above has 5 columns:
// [ACTION REQUIRED] name of the column in the above table that stores photo's titles
define('DB_PHOTO_TITLE_COL_NAME', 'title');
// [ACTION REQUIRED] name of the column in the above table that stores photo's descriptions
define('DB_PHOTO_DESCRIPTION_COL_NAME', 'description');
// [ACTION REQUIRED] name of the column in the above table that stores photo's creation dates
define('DB_PHOTO_CREATIONDATE_COL_NAME', 'date');
// [ACTION REQUIRED] name of the column in the above table that stores photo's keywords
define('DB_PHOTO_KEYWORDS_COL_NAME', 'keywords');
// [ACTION REQUIRED] name of the column in the above table that stores photo's links in S3 
define('DB_PHOTO_S3REFERENCE_COL_NAME', 'refference');
// [ACTION REQUIRED] name (ARN can also be used) of the Lambda function that is used to create thumbnails
define('LAMBDA_FUNC_THUMBNAILS_NAME', 'CreateThumbnail');
?>