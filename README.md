Dcycle Drupal Starterkit
=====

[![CircleCI](https://circleci.com/gh/dcycle/starterkit-drupalsite/tree/master.svg?style=svg)](https://circleci.com/gh/dcycle/starterkit-drupalsite/tree/master)

Contents
-----

* About

About
-----

Based on [Dcycle Drupal Starterkit](https://github.com/dcycle/starterkit-drupalsite).

Setting up the Google API key.
-----

Go to https://console.cloud.google.com/apis/credentials, make sure you have an account with Google, and create credentials,

* One restricted by web addresses for the frontend
* One restricted by IP address for the backend

    cp ./drupal/settings/local-settings/unversioned.example.php \
      ./drupal/settings/local-settings/unversioned.php

Then modify to put your keys there.

Resources
-----

* [Random address generator tool](https://codebeautify.org/random-address-generator)
