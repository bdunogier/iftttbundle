# IFTTT Bundle

Symfony 2 bundle that handles IFTTT actions using the Wordpress channel.

## Principle

This bundle uses bdunogier/xmlrpcbundle to handle IFTTT.com actions that use the wordpress channel. This channel
will send an XML-RPC request using the Wordpress API's newPost method. You will be able to create a service
that gets provided with an IFTTT request (https://github.com/bdunogier/iftttbundle/blob/master/IFTTT/Request.php)
that contains the request data.

## Implementation example

An example can be found in bdunogier/eziftttbundle (https://github.com/bdunogier/eziftttbundle), an implementation
of this bundle for eZ Publish 5, the open source CMS.

Check Resources/config/services.yml (https://github.com/bdunogier/eziftttbundle/blob/master/Resources/config/services.yml)
and https://github.com/bdunogier/eziftttbundle/blob/master/IFTTT/Handler.php to get started.
