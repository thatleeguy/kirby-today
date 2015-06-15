# Today tag for Kirby 2

A simple tag for Kirby CMS which lets you output the current day. It's multi-language ready and it has some options.

## Installation

### Download
[Download the files](https://github.com/roylodder/kirby-today/archive/master.zip) and put them inside the `site/tags` folder. If the tags folder doesn't exist, create it.

### With Git
If you are familiar with Git, you can clone this repository from Github inside the `/site/tags` folder.

    git clone https://github.com/roylodder/kirby-today.git

Or you can use it as a Git Submodule.

    git submodule add https://github.com/roylodder/kirby-today.git site/tags

### Language

If you want this to work you'll need an multi-language instalation. You can use the [Langkit](https://github.com/getkirby/langkit) of Kirby to get started. Add the following translations to your files inside the `site/language` folder.

    l::set('monday', 'Monday');
    l::set('tuesday', 'Tuesday');
    l::set('wednesday', 'Wednesday');
    l::set('thursday', 'Thursday');
    l::set('friday', 'Friday');
    l::set('saterday', 'Saterday');
    l::set('sunday', 'Sunday');

## How to use it

In your [text file](http://getkirby.com/docs/content/adding-content#text-files) you can use it as follows:

    Enjoy the rest of your (today:)!

if it's a Monday, then the result is:

    Enjoy the rest of your Monday!

## Options

You can transform the text to [UPPERCASE](http://getkirby.com/docs/toolkit/api/str/upper) or [lowercase](http://getkirby.com/docs/toolkit/api/str/lower) by using the options. The default option will use the exact format of the translation.

Uppercase: `(today: upper)`
Lowercase: `(today: lower)`
Default: `(today:)`

## Authors

Author: Roy Lodder <http://roylodder.com>