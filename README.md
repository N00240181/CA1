<h1>CA2</h1>

<p align center>This is the second part of my CRUD project, the main difference between it and the first part is that there are two new models, song and artist. Album has a one to many relatonship with song because an album has many songs. Album has a many to many relationship with artist because many artists can be part of many albums.</p>

For creating and editing songs you will have to go to the album first. I made it this way because it would be easier to edit the songs you want instead of seeing all of them on one page. On the other hand, creating artists is just like creating albums; they have a different page entirely for editing and viewing them. They also link back to the album so you can easily learn about the artist if you're on their album.

<strong>Timeline:</strong>

<ul>During the first week I was looking over the entity relationship diagram a final time before commiting to it, as I couldn't change anything mid project otherwise it would definitely screw something up. I also created the user and admin roles, users can view the data and admins and create, update and delete. I used some time to plan out how things will go, so for example do I want songs to have a seperate page entirely or be linked to their albums. I was a bit ahead of the schedule this week, so I also created the song model, its routes, and the song seeder. Now I could create songs and have them be linked to their album.</ul>

<ul>The second week was spent fixing the song seeder as I realised it'd make sense to have a track number so I had to go through all of the songs and add their numbers. After that I created the album-artist pivot table and the artist model. The pivot table would be used to link album and artist together, so I could click on an album and then click on the artist which would bring you to their page. I created the artist details page too however I did not link it to the album until the following week.</ul>

<ul>During the third week I made it so you can link artists to albums when creating an artist. I could then click on an artist, and there'd be a link to their album and vice versa. I realised that I had messed up the search function for artists, and it was looking for albums instead so I fixed that. I changed the icon for the site with one I found from font awesome, now it looks more personal.</ul>

<ul>Finally during the fourth week I made a few quality of life fixes, like when you try and edit an album it automatically has its artist checked. Now I'm using this time to continue polishing the project and checking if there are any bugs left. I will start recording the project on Thursday or Friday and then I should be finished.</ul>

<p align center>I believe that CA2 has been much easier than CA1, I mean it makes sense considering I already had one third of it done already. There were fewer errors during this than CA1, and I had to ask for help less as well. Also I've been trying to make sure that I'm understanding the code I've been writing and I hope that my video reflects that. I'm going to have one last look at this tomorrow and then get started with making the video afterwards.</p>