# EXENZO API Documentation
EXENZO API provides programmatic access to EXENZO Jobboards.

The API is [REST API](https://en.wikipedia.org/wiki/Representational_state_transfer) and uses [token based authentication](https://github.com/EXENZO/exenzo-api/wiki/1.-Api) for authorization purposes.

See [status.exenzo.com](http://status.exenzo.com/) for API status updates, outages, and scheduled maintenance.

## Checklist
* [Familiarize yourself with API functionality](https://github.com/EXENZO/exenzo-api/wiki)
* Read the EXENZO [API Terms of Use](#)
* [Register your application](#) and get a test token
* [View the full documentation in the wiki](https://github.com/EXENZO/exenzo-api/wiki)
* [Stay informed, Sign up here to receive an e-mail when something changes.](http://exenzo.us7.list-manage2.com/subscribe?u=31dc22e3b5f498cbbf1a5e9b6&id=580439f706)
* Hack away

## Basics
- **[Managing Organisations](https://github.com/EXENZO/exenzo-api/wiki/1.3-Organisation)**
- **[Managing Jobs](https://github.com/EXENZO/exenzo-api/wiki/1.2-Job)**
- **[Managing Job on Networks](https://github.com/EXENZO/exenzo-api/wiki/1.4-Post)**

## Examples
- **[PHP](https://github.com/EXENZO/exenzo-api/tree/master/examples/php)**
- **[Ruby](https://github.com/EXENZO/exenzo-api/tree/master/examples/ruby)**
- **[Python](https://github.com/EXENZO/exenzo-api/tree/master/examples/python)**

## Changes
You are able to signup to our [notification service](http://exenzo.us7.list-manage2.com/subscribe?u=31dc22e3b5f498cbbf1a5e9b6&id=580439f706) if you wish to remain informed of any changes concerning the API. This can range from the publication of new sites, uptill new features in the API.
  
* 2016-02-26 Added networks: Schuttevaer, NativeSpeakerJobs, Gamer.nl, Aviabanen
* 2016-02-19 Improved 404 response when updating a jobposting, it now returns a message instead of no content.
* 2016-02-19 Added 404 response when posting a job to a network when the job or network wern't found.
* 2015-12-22 Clarified some information concerning the validity of JSON input and segment use.
* 2015-12-08 Deployed v1 API of the EXENZO 3.0 platform.
