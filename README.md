# Contao Article CSS-ID Optimization Bundle

## About
In older versions of contao, the article-alias was used as the html-id of the article.  
So links could be example.com/page.html#article-id.  
In Contao 4.4+ this changed, so only if you define an id in the expert-settings, there is a readable id in the markup/html.  
This bundle uses the article alias as css-id, if no id is set in the expert settings, so the fallback is the same as in contao <4.

## Installation
Install [composer](https://getcomposer.org) if you haven't already, then enter this command in the main directory of your Contao installation:
```sh
composer require mediamotionag/contao-article-id-optim-bundle
```
## Usage
1. Install and clear cache
2. Enjoy

## Contribution
Bug reports and pull requests are welcome
