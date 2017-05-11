# Canadian Cyber Defence Challenge
## Web Target

### Information
This project builds a docker container containing a simple Apache + PHP server running a web site full of flags for participants to find.

Difficulty is relatively low, only light outside-of-normal prodding required.

### Flags & Vulerabilities

 - Filesystem flag in a few locations, readable via the reporting page by leveraging the `command` post value
   - Either modify the DOM element from `type="hidden"` to `type="text"` or edit `value` manually
 - Any attempt to use common SQL injection characters from the forecasting update page yields a flag
 - The team page has a comment after Zhora's list item tag with a flag
 - The `/add-employee` page has been disabled but actually still exists and barfs on any attempt to use

 ### Meta

 Scarily enough, some of the things in this project are things I've actually seen on live web projects.

 As someone who has had to defend PHP's reputation in the past, I can also say that you should never be using plain HTML and procedural PHP handlers for any real project.  If you want to avoid the kind of stuff this target showcases, check out <a href="https://laravel.io">laravel</a>!

 This project was created by <a href="http://twitter.com/Omega_">Alexander Trauzzi</a>.
