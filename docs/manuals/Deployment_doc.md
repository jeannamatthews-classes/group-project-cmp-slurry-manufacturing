Deployment docs - How to go from what is in github to working version of the system.

How the user would implement the site on their device
1) download XAMPP
2) Find the drive you installed XAMPP and inside that folder the htdocs fodler. example path:'C:\xampp\htdocs'
3) Create a folder for the site. This will be how it appears in the search bar EX folder: "CMP SLURRY" ; Search bar: 'http://localhost/CMP%SLURRY/'
4) Copy files from 'Slurry-Site/CurrentWorkingVersion' into this folder
5) To get the SQL database working open http://localhost/dashboard/ -> phpMyAdmin to enter phpAdmin dashboard
   a)Create database cmps (needs to match or won't work) in database tab
   b)using the sql in 'Slurry-Site/CurrentWorkingVersion/cmps sql' import with admin import agent

**If a different hosting vedor is used, server and host names would have to be changed but database names could stay the same**

To get what we have from Github to a working version of the system there are three parts which will be needed.

1) We still need to finish up some of the tabs which includes the data from the Excel.

2) We need to work on the JavaScript part of it too. That way it system would be able to calculate values from the user and use that information to compare against other processes. Then using that, the user will be able to see which process is better for the environment and cost-effective.

3) Have a domain that way the website will be able to be viewed by the public. This could be done easily and it is easy to maintain. It will be about ~$20 per year (maybe less) to maintain it.
