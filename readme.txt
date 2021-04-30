Hi, my name is Joey Arledge, the previous team lead, and you can reach me at
joeyarledge913@gmail.com if you have any questions about the project. I'll try
to go over everything here, though.

First, I would set up a LAMP stack (Linux, Apache Web Server, MySQL, PHP) in
order to test and serve the web page(s). There are multiple guides on this
online, and it's relatively easy. You can use something like a raspberry pi or
an old laptop; I used a spare desktop. You're probably able to just do it in a VM.

Second, I would make a database in MySQL using the record names referenced in
the insert.php file. Most of them can just be saved as the character data type,
but you'll want to save the dates as date data types, and I'm not sure how to
save the images. You may want to just set the images to save to a folder
somewhere on the server and name them according to which survey response it was
received with. You may need to make a unique identifier within your database
to know what data was received with which response.

Third, you'll need to get an API key for the Google Maps API in order to use it
on the survey page. I didn't get around to making it work.

Fourth, you'll need to move the usaceauthentication folder somewhere on your machine
outside of the web page root directory, and then you'll need to change the
reference within the .htaccess file in the results folder to reference the
new file location on your machine.

Last, USACE shared a few suggestions for the page I'll include below. These are
just what we didn't get done and should be your first priority at the start of
the class:

1. When you access the database to review answers it would be helpful to have
the actual questions carryover like they would in a table format for Excel.
Right now you only get Question 1, Question 2, Question 3, etc. with the rating,
but no reference to what the question was asking.
2. We noticed that if you submitted a photo in the survey it wasn’t showing up
in the database.
3. Adding filters to the database would help to find specific survey submissions,
or to look at trends, such as at Park X how many visitors were giving a low
rating to Question 1.
4. If possible, could you add a map where visitor could Pin their location or
the location of the things they would like addressed. I believe there is an
example of this in one of the City Surveys we provided in the PowerPoint that
we sent to your team.
5. Could you make the rating numbers more visible, or possibly even add them
into the trees?
6. Could you make segments/lines across the scales to make it easier to visualize
the ratings across the scale.
7. Also, when we used the mobile version, we noticed the text from “Add Image”
down became very small and difficult to read.

I would also suggest that you focus on making the page look good on mobile devices,
as that's what people will almost exclusively be viewing the page on.
