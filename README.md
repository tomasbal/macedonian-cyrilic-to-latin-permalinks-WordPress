# Fix WordPress permalinks on Macedonian.

This plugin will fix the permalinks when post is published so they don't look like this:
"%rwe%3432%rwrrw".

That is happening because WordPress is trying to encode the URL, but that is not very human readable.

What this plugin does is, changing the Title (if its on Macedonian - Cyrilic) and retype it on Latin.

So if you have something like : "Наслов за новата објава" it will be translated to this: "Naslov za novata objava";
