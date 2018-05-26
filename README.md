# new_cms
## Rewriting the cms project better

### The story:
The reasons for the change was that the old cms was quite a bit of work, it was all over the place, but considering that I wrote that before and during the process of learning php, formally in school, and real life practice.
The code was also written over a year ago and comments were non existant - I vow that it will be better from here on out.

### SCSS vrs many CSS:
I am utilizing sass code to compile css to make the project more mainatnable vs many smaller files. I have included the base bootstrap framework in includes/scripts/scss/scss_includes/_bootstrap.scssthis will make implementing bootstrap 4.1.1 updatable to later versions, while still keeping the single css file.
I am also including FontAwesome 5 Free in the css, just make sure to mot move the webfonts folder.

### JS / JQUERY:
jquery-3.2.1.min.js will be the crux of the js files. The actiions on the website will be done much smoother using ajax to load and refresh pages. This will reduce jerky actions.

### Database:
The previous version was a hardcoded database setup. This will likely be simular but will have more modification available to the users during installation. meaning use of a prefix, setting the name of the database they wish to use, (creating the database) or using one that already exists. 
The primary goal though will be to clean up the code.
