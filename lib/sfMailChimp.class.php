<?php


/**
 * A Symfony 1.4 plugin wrapper for the MailChimp API library.
 *
 * @author Robin Corps <robin@wirehive.net>
 * @version 0.1
 * @package sfMailChimpPlugin
 */
class sfMailChimp extends Mailchimp
{
  public function __construct($apiKey = null, $options = array())
  {
    if ($apiKey === null)
    {
      $apiKey = sfConfig::get('app_sf_mailchimp_plugin_apiKey');
    }

    $options = array_merge(sfConfig::get('app_sf_mailchimp_plugin_options', array()), $options);

    parent::__construct($apiKey, $options);
  }
}