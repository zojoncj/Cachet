# Contribution Guidelines

## Creating issues

We track feature requests and bug reports on the [issue tracker](https://github.com/cachethq/Cachet/issues). Please send support requests to our support email; [support@alt-three.com](mailto:support@alt-three.com?subject=Cachet Support).

**Always be respectful.** Organisation members reserve the right to lock topics if they feel necessary.

## Languages

Please submit non-English translations to the [Cachet CrowdIn](https://translate.cachethq.io) project. This makes syncing translations much easier.

## Coding Standards

Please try to follow existing coding standards. [StyleCI](https://styleci.io) will analyse and fix any discrepancies in coding standards.

## Introduction into Git and GitHub

If you are new to Git, GitHub and the whole open source software community, welcome! Here are some resources for getting started and understanding what it's all about.

- [Try Git](https://try.github.io/levels/1/challenges/1) by Code School
- [GitHub Help](https://help.github.com)

If you're not fond of the command line, you can get one of GitHub's free GUI desktop apps:

- [GitHub for Mac](https://github.com/blog/1510-installing-git-from-github-for-mac)
- [GitHub for Windows](https://github.com/blog/1127-github-for-windows)

If you're feeling adventurous, you can become a Git & GitHub master with the [Git Path on Code School](https://www.codeschool.com/paths/git).

## .editorconfig

You should also make use of the [.editorconfig](/.editorconfig) file found within the root of the repository. It'll make sure that your editor is setup with the same file settings.

---

## Contributing as a non-developer/non-designer

We're always looking for new [translations](#translations).

Of course bug reports, feature requests and [documentation](https://docs.cachethq.io) are always appreciated.

## Contributing as a designer

As Cachet gains new features, the design and ideas that were once a perfect fit need updating and in some cases designing from scratch. This is where you come in! Fancy giving Cachet a lick of paint? Sweet!

You'll need to install Node.js, Bower and Gulp.

To get started you can do the following:

1. Install Node.js and our dev dependencies.
2. Run `npm run dev`
3. Make your changes to the SCSS files in `./resources/assets/sass/`

If you're making a lot of changes, you'll find that running `npm run watch` will make life easier for you!

When you're happy with your changes, please run `npm run prod` to minify the assets.

## Contributing as a developer

Built using [Laravel](https://laravel.com).

We use these extra dependencies to develop Cachet:

- Node.js
- Gulp
- Git

Once cloned to your local machine, you'll need some demo data! Run `php artisan cachet:seed` to get the demo installation ready for action.
