# just-chat-things
Multi-user chat system running on raspberry pi as the server.

############################
READ ME
############################


Made by @i-tired on github - all rights reserved


This is just a relativly simple php script for a multi-user based chat system.
It was origionally made for a project with the Rasperry Pi where the RPi would create a local wifi network and the website would be hosted on it, and people could "chat" over the website.
(Website hosting similar to: https://www.instructables.com/id/My-Physical-Web-Space/)

!!! IMPORTANT !!!
Make sure you can run php otherwise this won't work

There are quite a few problems with the code including:
 - having to hit the submit button first and then the next page button, so that the cookie is registered and can be used on the actual chat interface
 - saving all the comments in just a random html file without any real structure (couldnt be bothered to implemet MySQL)
 - the chat page needs to reload just to get a new comment from someone else
 - An empty comment everytime the chat page is reloaded when its only supposed to update
 - Always having to scroll down the entire page until you can also add a comment
 - Just generally terrible structure

I'm planning on having a better system for saving the comments and having a live feedback so that the page wouldn't have to be refreshed everytime.
