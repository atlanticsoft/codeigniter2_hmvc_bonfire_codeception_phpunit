-This files help integrate codeception or phpunit with codeigniter (v2) and bonfire.
-It specifically is able to work with the bonfire hmvc
-only 1 core file is modified because the overwrite didn't work for it
-further integration is pending to handle the errors better
-configuration files are set to use saucelabs for acceptance tests
- run_tests.php runs codeception through the browser
- tests/dev are support files to make it easier to develop the tests
- sample tests and dev have been modified to exclude private data, but still show how you use the modules and models, is possible they have
a php error as I did not run them after changes.
- Code and ideas were taken from many places to make this work such as:
http://taiar.github.io/php/2013/11/08/testing-codeigniter-applications-with-phpunit.html
https://github.com/fmalk/codeigniter-phpunit/tree/2.x
and other 
- Sauce labs host is configured as 
user:key@ondemand.saucelabs.com 
and you can subscribe for a trial to see it in action
-There are probably some extra files and codes that are not needed to work, but this is the setup that is working for me
- You probably need phantomjs installed and running on the server for selenium tests to work
- If you don't need selenium tests then open acceptance.suite.yml and remove the web driver configuration or as per codeception documentation change it to phpbrowser


