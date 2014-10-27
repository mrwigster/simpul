# Simpul Framework

## By @MrWigster (alex-wigmore.co.uk) / @trulycode

A pretty simple and very effective combitination of a boilerplate and framework. It's by default got the header/footer/menu includes that 99% of most websites will utilise as well as some basic styling.

Grid system is based upon the @GetSkeleton layout, adapted into a SASS framework.

See my video tutorial series to get a quick overview of how quick it is to use:
[A complete web workflow using Simpul Framework](http://trulycode.com/videos/complete-web-workflow/)

**Important** things to change when you start:
* sass/_vars.scss : Change the variables here to suit your needs. Eg, update the font-families, $brand colour and $dark colour.
* Add Google Analytics ID into the inc/header.php section.
* Edit 275 - 296 of the .htaccess file to make it relevant to your project. I.e Either force "www." or remove them.