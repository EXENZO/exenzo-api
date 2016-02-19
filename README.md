# EXENZO API Documentation
EXENZO API provides programmatic access to EXENZO Jobboards.

The API is [REST API](https://en.wikipedia.org/wiki/Representational_state_transfer) and uses [token based authentication](https://github.com/EXENZO/exenzo-api/wiki/1.-Api) for authorization purposes.

See [status.exenzo.com](http://status.exenzo.com/) for API status updates, outages, and scheduled maintenance.

## Checklist
* [Familiarize yourself with API functionality](https://github.com/EXENZO/exenzo-api/wiki)
* Read the EXENZO [API Terms of Use](#)
* [Register your application](#) and get a test token
* [View the full documentation in the wiki](https://github.com/EXENZO/exenzo-api/wiki)
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
* 2016-02-19 Improved 404 response when updating a jobposting, it now returns a message instead of no content.
* 2016-02-19 Added 404 response when posting a job to a network when the job or network wern't found.
* 2015-12-22 Clarified some information concerning the validity of JSON input and segment use.
* 2015-12-08 Deployed v1 API of the EXENZO 3.0 platform.
