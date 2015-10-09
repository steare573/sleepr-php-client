# sleepr-php-client
Configuration based rest client that makes hitting your common endpoints simple and easy.  Once you have your endpoints and data metadata configured, you should only need to fire up the client and shoot off your request with no intimate knowledge of your request logic.

##Features

####Multiple configuration methods for wiring up commonly used rest endpoints (array, json, yaml, config file)

JSON example:
````
{
  "entity": {
    "create": {
      "url": "{environment}myendpoint.com/entity.json",
      "method": "POST",
      "meta": {
        "fields": {
          "environment": {
            "location": ["url"]
          },
          "apiKey": {
            "location": ["queryString", "body"]
          }
        },
        "validators": [
          {
            "type": "required",
            "fields": ['name', 'description', 'apiKey'],
          },
          {
            "type": "custom"
            "fields": ['name'],
            "class": "MyApp\\Validator\\CustomValidator"
          }
        ]
      }
    },
    "get": {
      "url": "{environment}myendpoint.com/entity/{id}.json",
      "method": "POST",
      "meta": {
        "fields": {
          "environment": {
            "location": ["url"]
          },
          "id": {
            "location": ["url"]
          }
        }
      },
      "formatters": {
        "request": "json"
      }
    }
  }
}
````

####Custom Validators
Suite of common validators as well as a method to inject your own validator objects or closures

####Custom request and response formatters
Use a suite of commonly used formatters (to and from xml, json, array) or configure your own formatter objects or formatting closures

####Hooks
Inject your own custom hooks as either hook objects or closures to manipulate data, log requests/responses, handle errors, or do whatever you want.  There will be a variety of hooks including pre-formatting request, post formatting request, pre-send, post-receipt, pre formatting response, post formatting response.

####Customize basically anything
From the validators, formatters and hooks described above, to url parsers, http drivers, and more.  Flexibility is my ultimate goal

