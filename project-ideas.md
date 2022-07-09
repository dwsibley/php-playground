Thoughts on small use cases and projects to learn PHP.

Create login page
* Verify username and password with database
* Don't worry too much about security
* Launch secondary page after successful login
* Show appropriate error message if login fails
* Create session so that login isn't permanent and incorporate appropriate redirects if not logged in
* logout button to end session
* Consider navbar login
* secure password storage - salt and hash or some other mechanism
* Advanced
  * Add remember me functionality
  * salt and hash password

Video upload and playback
* Upload a video and store it on a backend file system from upload page
* Transcode video to standard format
* Create video thumbnail for uploaded video
* Serve video on webserver
* Show uploaded videos on videos page by thumbnails
* Allow playback of videos (need a player)
* Advanced
  * Auto-generate thumbnails and allow user to select
  * Auto-generate captions for video

Movie Database Viewer
* Use Movie library from OMDB and IMDB in sqlite database
* Develop REST API to browse, search, pull movies
* Develop page to show various movie carousels
* "Advanced" features
  * Advanced add caching when rest of functionality is there (since working on XAMPP for now and not Docker)