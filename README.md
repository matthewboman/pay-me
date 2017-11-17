# Frick you, pay me
An in-brower cryptocurrency miner using Coinhive and Monero. This is intended for personal use only--don't be a dick.

## Getting started
* Sign up for a monero account at [https://mymonero.com/](https://mymonero.com/)
* Get an API key from [https://coinhive.com](https://coinhive.com)
* Set your [mymonero](https://mymonero.com/) payment address to your [coinhive](https://coinhive.com/settings/payments) payment address
* `git clone https://github.com/crashspringfield/pay-me.git && cd pay-me`

## Running the miner
monero.php documents the variables. You probably want to use your [Public Key](https://coinhive.com/settings/sites) from Coinhive, but feel free to just use mine.

If you have php installed, run `php -S localhost:3000 monero.php` or you could probably just open the file in your browser.
