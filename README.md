About
=====

Apply a custom (or random) user id when a user is created.


Warnings
========

This plugin only works with MySQL(i) setups of Joomla. It will not break other installations but it will also not work (at all).

On heavy load systems with hundreds of new user creations per second this plugin MAY cause unexpected behavior, as it checks for already given IDs only once before the actual user is created with that id.


Install
=======

Install the plugin through the Joomla! extension manager. Afterwards go to the "plugins" page and enable the plugin. Clicking on the plugin name will allow you to set the id generation mode.
