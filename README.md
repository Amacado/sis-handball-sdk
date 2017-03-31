# sis-hanball-sdk
unofficial sdk for sis-handball.de xml api <http://www.sis-handball.de/xmlexport/>

## Configuration
The configuration is used to configure the url. This URL is used to call the API.

The configuration is done through the constructor.

### Description

  $b = new xmlRead(string $user, string $password, string $option);

**$user** = The user for the API.

**$password** =  The password for the API.

**$option** = Is the code used to search between associations or Alias. The code of an association or of a League must be provided.


## Use

Process:

- Initialize the class with the configuration parameters.
- Select the type of listing.
- We create the object.

- Already access the data in the list.


